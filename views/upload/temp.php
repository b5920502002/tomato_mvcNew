<head>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.17/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedcolumns/3.2.5/css/fixedColumns.dataTables.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/fixedcolumns/3.2.1/js/dataTables.fixedColumns.min.js"></script>
</head>
<style>
    table.dataTable {
        margin-top: 0px !important;
        margin-bottom: 0px !important;
    }

    .dataTables_filter {
        display: none;
    }

    #data_info {
        display: none;
    }

    .DTFC_LeftBodyLiner {
        overflow-y: hidden !important;
    }

    .dataTables_wrapper .dataTable .btn {
        padding: 0.5rem 0.81rem;

    }

    .table-bordered th,
    .table-bordered td {
        border: 0px;
    }

    table.dataTable thead th,
    table.dataTable tfoot th {
        font-weight: normal;
        padding: 10px 10px 20px 10px;
    }

    table.dataTable thead th,
    table.dataTable thead td {
        border-bottom: 0px;
    }

    .new {
        color: blue;
    }

    .button-left {
        text-align: right;
    }

    .button-left .btn {
        margin-top: 10px;
    }
    /* loader */
    .loader {
        border: 16px solid #f3f3f3;
        border-radius: 50%;
        border-top: 16px solid #3498db;
        width: 120px;
        height: 120px;
        -webkit-animation: spin 2s linear infinite; /* Safari */
        animation: spin 2s linear infinite;
    }

    /* Safari */
    @-webkit-keyframes spin {
        0% { -webkit-transform: rotate(0deg); }
        100% { -webkit-transform: rotate(360deg); }
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
    .center {
        margin: auto;
        margin-top: 10px;
        /* width: 50%;
        border: 3px solid green; */
        padding: 10px;
    }
    /* loader */
</style>

<!-- หน้าเว็บ -->
<div class="card">
    <div class="loader center"></div>
    <div class="card-body">
    
        <form id="form_upload" method="POST" action="<?php echo URL ?>upload/upload_genome">
            <table id="data" class="table table-bordered dataTable no-footer DTFC_Cloned" style="width:100%" >
                <thead id="thead" hidden>
                </thead>
                <tbody id="tbody" hidden>
                </tbody>
            </table>
            <div class="button-left">
                <button type="button" id="btn-sub" class="btn btn-success btn-sub">Upload</button>
                <input type="button" class="btn btn-default" onclick="location.href='<?php echo URL ?>upload';" value="Cancel" />
            </div>
    </div>
</div>
<!-- ASREE ADD -->
<?php include("libs/PHPExcel-1.8/Classes/PHPExcel.php") ?>
<?php include("views/upload/helper_genome.php") ?>
<script>
    var base_url = "<?php echo URL; ?>";

    function prepare_data(data) {

        if (data)
            return data;
        else
            return "";

    }

    function search_id(item, list) {
        var chk = false;
        console.log(item);
        for (var i = 0; i < list.length; i++) {
            if (list[i]['accession_number'] == item) {
                chk = true;
                break;
            }

        }
        return chk;

    }

    function searchdata(item) {
        var item_data;
        $.ajax({
            url: base_url + "/upload/check_accession_genome",
            method: "POST",
            async: false,
            data: {
                accession_number: item
            },
            success: function(data) {
                item_data = data;
                //console.log(item_data);
            },
            error: function(data) {
                //console.log("error");
                //console.log(data);                        
            }
        });
        
        return item_data;
    }

    function toFixed(num, pre) {
        num *= Math.pow(10, pre);
        num = (Math.round(num, pre) + (((num - Math.round(num, pre)) >= 0.5) ? 1 : 0)) / Math.pow(10, pre);
        return num.toFixed(pre);
    }


   
    $("#data").on("click", "td.table-danger", function() {
        // console.log($(this).find('input[type="checkbox"]').val());
        var str = $(this).find('input[type="checkbox"]').val();
        var res = str.split("@");
        //console.log(res[0]);
        var id = $(this)[0].id;
        $("#title_edit").empty();
        $(".select-form").empty();
        $("#title_edit").append(res[0].replace(/_/g, " "));
        $("#title_edit").attr("data-target-value", id)
        $(".select-form").append(`<select class="form-control select-modal">`);
        for (var x in table_value[res[0]]) {
            if (table_value[res[0]][x] == res[1]) {
                $(".select-modal").append(`<option selected value="` + res[0] + `-` + table_value[res[0]][x] + `"> ` + table_value[res[0]][x] + `</option>`);
            } else
                $(".select-modal").append(`<option value="` + res[0] + `-` + table_value[res[0]][x] + `"> ` + table_value[res[0]][x] + `</option>`);
        }
        $(".select-form").append("</select>");
        $("#edit-modal").modal();
    });
    $("#edit-modal").on("click", ".btn-success", function() {
        var value = $(".select-modal").val();
        var target = $("#title_edit").attr("data-target-value");
        var res = value.split("-");
        $("#" + target).find('lable[class="new"]').html(res[1]);
        $("#" + target).find('input[type="checkbox"]').val(res[0] + "@" + res[1]);

        $("#" + target).find('div').find('span[class="new"]').html(res[1]);
        $("#edit-modal").modal('hide');
    });
    //ex_list.length
    var ex_list = <?php echo json_encode($data_arr); ?>;
    var acc = [];
    var id = [];
    var check_add = 0;
    var chkLength = 0;
    var check_not_found = [];
    console.log(ex_list);
    //console.log(ex_list[10][0]); [13000],[2] 
    for (var i = 0; i < ex_list.length; i++) {
        if (i == 0) {
            $("thead").append("<tr id='col_" + i + "'>");
            for (var j = 0; j < ex_list[0].length; j++) {
                ex_list[i][j] = prepare_data(ex_list[i][j]);
                var temp = searchdata(ex_list[i][j]);
                
                acc.push(temp);
                if (j == 0) {
                    $("#col_" + i).append("<th>" + ex_list[i][j] + "</th>");

                } else if (temp != false) {  
                    $("#col_" + i).append(`<th>` + ex_list[i][j] + `<lable style="font-weight:normal">  Replace All</lable> 
                    <input data-colum="NO` + j + `"class="NO_All NO_All` + j + `_check" type="checkbox" checked/>
                    <input type='hidden' name="data_genome[]" value="` + temp['dna_accession'] + `">
                    </th>`);
                } else  {

                    let test = ex_list.map((data,index) => {    
                            return data[j];
                        });
                    
                    $("#col_" + i).append(`<th>` + ex_list[i][j] + `<lable style="font-weight:normal">  Add </lable> <input data-colum="NO` + j + `" class="NO` + j + `_INSERT NO_All` + j + `_check" type="checkbox" checked/>
                    <input type='hidden' name="INSERT_GENOME" value="` + test +`">
                    <input type='hidden' name="INSERT_ACC" value="` + ex_list[i][j] +`">
                    </th>`);
                } 
            }
        } else {
            $("tbody").append("<tr id='col_" + i + "'>");
            for (var j = 0; j < ex_list[0].length; j++) {
                ex_list[i][j] = prepare_data(ex_list[i][j]);
                if(){
                    
                }
                if (j == 0) {
                    $("#col_" + i).append("<td>" + ex_list[i][j] + "</td>");
                } 
                else if (acc[j] != false) {
                    //console.log('ex : '+ex_list[i][j]);
                    console.log(acc[j]);
                    let cha_js = String(acc[j]['dna_accession']);
                    let id_acc = acc[j]['id_accession_number'];
                    var head = ex_list[0][j];

                    //console.log('db : '+cha_js[j-1]);
                    var data1 = cha_js[i-1];
                    var data2 = ex_list[i][j];
                    //console.log('data1: DB=> '+data1);
                    //console.log('data2: EX=> '+data2);
                    if (data1 !== data2 && data1 != null && data2 != null) {
                      
                        $("#col_" + i).append(`<td class='table-danger ' id='` + ex_list[i][j] + `-` + head + `'>                       
                            
                            <input type='hidden' name="ID_ACC" value="` + id_acc + `">
                            <input type='hidden' name="NO` + i + `[]" value="` + data2 + `">                           
                            <input type='checkbox' name="NO` + i + `[]" value="` + data2 + `" checked><lable style="font-weight:normal" class='new'>` + data2 + `</lable>
                            <div>` + data1 + `,<span class='new'>` + data2 + `</span>
                            </div></td>`);
                        if (chkLength == 0) {
                            chkLength++;
                            $("#col_" + i).append(`<input type='hidden' name='length' value='` + (ex_list.length) + `'>`);
                        }
                    } else if (data1 == null && data2 == '') {
                        $("#col_" + i).append(`<td></td>`);
                    } else if (data1 == null && data2 != '') {
                        $("#col_" + i).append(`<td class='table-danger' id='` + ex_list[i][j] + `-` + head + `'>                       
                           
                            <input type='hidden' name="ID_ACC" value="` + id_acc + `">  

                            <input type='hidden' name="NO` + i + `[]" value="` +  data2  + `">                           
                            <input type='checkbox' name="NO` + i + `[]" value="` + data2 + `" checked><lable style="font-weight:normal" class='new'>` + data2 + `</lable>
                            <div> ,<span class='new'>` + data2 + `</span>
                            </div></td>`);
                        if (chkLength == 0) {
                            chkLength++;
                            $("#col_" + i).append(`<input type='hidden' name='length' value='` + (ex_list.length) + `'>`);
                        }
                    } else {
                        $("#col_" + i).append(`<td>` + data1 + `</td>`);
                    }
                } 
                 else {
                        $("#col_" + i).append("<td class='table-primary'>" + ex_list[i][j] + "</td>");        
                }
            }
        }
    }
   
</script>
<script>
    $(document).ready(function() {
        $('#data').DataTable({
            "initComplete":function(){
                $('.loader').hide();
                $('#thead').removeAttr('hidden');
                $('#tbody').removeAttr('hidden');
                // call your function here
            },
            fixedColumns: {
                leftColumns: 1
            },
            scrollY: "400px",
            scrollX: true,
            scrollCollapse: true,
            paging: false,
            ordering: false,
            columnDefs: [{
                searchable: false,
                targets: 0
            }],
            
        });
        $(".NO_All").click(function() {
            var s = $(this).attr("data-colum");
            var x = $(this).prop("checked");
            if (x) {
                $("input[name='" + s + "[]']").prop("checked", true);
            } else {
                $("input[name='" + s + "[]']").prop("checked", false);
            }
        });
    });

    $("#form_upload").on("click", ".btn-sub", function() {
        var num=0;
        var num2 =0;
        for (var j = 0; j < ex_list.length; j++) {
            var x = $(".NO_All" + j + "_check").prop("checked");
            if (x == false) {
                $("input[name*=NO" + j + "]").remove();
                num++;
                num2++;
            }
            else if(x){
                num2++;
            }
        }
        if(num == num2)
        {
            $("input[name='length']").remove();
        }
        $("#form_upload").submit();
    });
</script>