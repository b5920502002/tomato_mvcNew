<head>
    <link rel="stylesheet" href="theme\assets\css\shared\shared\components\loaders\_bar-loaders.scss">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedcolumns/3.2.6/css/fixedColumns.dataTables.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/fixedcolumns/3.2.6/js/dataTables.fixedColumns.min.js"></script>

     <!-- Start:  include export By Asree -->
        <link rel="stylesheet" href= "https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href=  "https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
         <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>-->
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script> -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
        <!-- <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>  -->
    <!-- End: include export By Asree -->
</head>
   
<script>
    $(document).ready(function () {
        var table = $('#data').DataTable({
            scrollY: "500px",
            scrollX: true,
            scrollCollapse: true,
            paging: true,
            ordering: true,
            "order": [[ 3, "asc" ]],
            fixedColumns: {
                leftColumns: 5
            },
            // Start: Funtion Export data  By Asree
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel'
            ],
             // End: Funtion Export data  By Asree
            "initComplete":function(){
            $('#loader').hide();
            $('#thead').removeAttr('hidden');
            $('#tbody').removeAttr('hidden');
        }
        });       
    });
</script>

<style>
.accordion .card .card-header a:before {
    color: #ff0017;
  }
  .accordion .card .card-header
  {
    border-bottom: 1px solid #ff0017;
  }
  .accordion .card .card-header a
  {
    font-size: 1.2rem;
    color:#ff0017;
  }
    .accordion .card:first-of-type,
  .accordion .card:not(:first-of-type):not(:last-of-type)
  {
    border-bottom: 1px solid #ff0017 ;
    border-bottom-right-radius: 4px ;
    border-bottom-left-radius: 4px ;
    border-top-right-radius:4px;
    border-top-left-radius:4px;
  }
  .card.item {
     border: 1px solid #ff0017;
    
  }
  .accordion.basic-accordion .card .card-header a[aria-expanded="true"] ,
  .accordion.basic-accordion .card .card-header a[aria-expanded="false"] 
  {
    background: none;

  }
    .tab-simple-styled .nav-item .nav-link.active {
        color: #ff0017;  
    }
    .nav-tabs .nav-item .nav-link {
        font-size: 1rem;
        line-height: 2;
    }

    table.dataTable {
        margin-top: 0px !important;
        margin-bottom: 0px !important;
    }

    .dataTables_filter {
        display: none;
    }
    #data_info
    {
        display: none;
    }
    .DTFC_LeftBodyLiner {
        /* height: 36px !important; */
        overflow-y: visible ;
    }

    .dataTables_wrapper .dataTable .btn {
        padding: 0.5rem 0.81rem;

    }

    table.dataTable thead th,
    table.dataTable tfoot th {
        font-weight: normal;
    }

    table.dataTable thead th,
    table.dataTable thead td {
        border-bottom: 0px;
    }

    img {
        max-height: 200px; 
    }
    
    .image
    {
        max-height:160px;
        max-width:160px;
        width:100%;
        height:100%;
    }
    .margin0
    {
        margin-bottom: 0;
    }
    .card .card-body.unpad
    {
        padding: 0px;
    }
    hr {
    margin-top: 1rem;
    margin-bottom: 0px;
    border: 0;
    border-top: 1px solid rgba(0, 0, 0, 0.1);
    background: #ff6258;
}
.tab-simple-styled .nav-item .nav-link.active{
    
    border-top: 1px solid #f12222;
    border-right: 1px solid #f12222;
    border-left: 1px solid #f12222;
    border-bottom : none ;
    color:red;
}
.tab-simple-styled .nav-item .nav-link ,
 .tab-simple-styled .nav-item .nav-link.active {
    color: #f12222;
    padding: 10px;
    
}
.tab-simple-styled {
    border-bottom: none;
    margin-bottom: -15px;
}
.tab-simple-styled .nav-item {
    margin-right: 5px;
}
a,a:hover{
    text-decoration: none;
    color: #f12222;
}
.red
{
    color:#f12222;
}
.breadcrumb
{
    margin-bottom: 0rem;
}
.card .card-body.top
{
    padding: 0rem;
}
.right
{
    text-align: right;
}
table tr td
{
    height: 40px !important;
    border: 0px !important;
}
table.dataTable tbody td {
    padding: 5px 5px 5px 10px;
}

@media (min-width: 992px){
.sidebar-icon-only .main-panel {
    width: calc(100% - 75px) ;
}
}
.text-result
{
    padding: 0 1.81rem 1rem 0;
    font-size: 0.875rem;
    color: #495057;
    text-align:right;
}
.card .card-body.card-unpad-bottom
{
    padding: 1.88rem 1.81rem 0 1.81rem;
}
.dataTables_scrollHead{
    box-shadow: 0 5px 3px -2px gray;
}
.inner{
    display: none;
}

</style>
<body class="sidebar-icon-only" >
<?php 
    $genomtmt = $this->genom_search;
    
?>



<div class="container-scroller">
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body top">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="<?php echo URL ?>general_infomation">Home</a>
                            </li>        
                            <li class="breadcrumb-item">
                                <a href="<?php echo URL ?>genome_search">Genome Search</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Search Result</li>
                            </ol>
                        </nav>
                      </div>
                    </div>
                </div>
            </div>
  
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body card-unpad-bottom">
                            <div class="accordion basic-accordion" id="accordion" role="tablist">                                          
                                <div class="card item">
                                    <div class="card-header" role="tab" id="headingThree">
                                        <h6 class="mb-0">
                                            <a class="collapsed  " data-toggle="collapse" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                            <i class="card-icon mdi mdi-magnify"></i>Search</a>
                                        </h6>
                                    </div>
                                
                                    <div id="collapseThree" class="collapse show" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="card-body" style="padding: 12px 20px 10px;">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p id="search_by" style="margin: 5px 0 7px 0; "></p>
                                                    <h6><?php
                                                    //print_r($_POST);
                                                    //echo'<br>';
                                                    $postM  = '';
                                                    //$chromM = '';
                                                    $strandM ='';
                                                    $atcgM = '';
                                                    //$qualityM = '';
                                                    //$depthM = '';
                                                    foreach ($_POST as $key => $value)
                                                    {
                                                        if(is_array ($value)) //เช็คว่าค่าที่รับมาเป็นอาเรย์หรือไม่
                                                        {
                                                            // print('<B>chromosome : </B>');
                                                            // foreach ($value as $key2 => $value2) 
                                                            // {
                                                            //     $chromM = $value2;
                                                            //     print($chromM.' , ');
                                                            // }
                                                            if($value != '')
                                                            {
                                                                if($key == 'chrom')
                                                                {
                                                                    $i = 0;
                                                                    $count = count($value);
                                                                    print ('<B>chromosome : </B>');
                                                                    foreach ($value as $key2 => $value2) 
                                                                    {
                                                                            if(++$i === $count) 
                                                                            {
                                                                                print($value2);
                                                                            }
                                                                            else
                                                                            {
                                                                                $chromM = $value2;
                                                                                print($chromM.' , ');
                                                                            }
                                                                    } echo'<br>';
                                                                }
                                                            }
                                                            
                                                        }
                                                        else
                                                        {
                                                            if($value != '' || ($key == 'pos1' || $key=='pos2'))
                                                            {
                                                                // if($key == 'chrom')
                                                                // {
                                                                //     $chromvalue = $value;
                                                                //     print('<B>chromosome : </B>');
                                                                //     print($chromvalue); echo'<br>';
                                                                // }

                                                                // if($key == 'strand')
                                                                // {
                                                                //     $strandM = $value;
                                                                //     print('<B>strand : </B>');
                                                                //     print ($strandM); echo'<br>';
                                                                // }

                                                                // if($key == 'quality')
                                                                // {
                                                                //     print('<B>quality : </B>');
                                                                //     print($genomtmt['quality']); echo'<br>';
                                                                // }

                                                                // if($key == 'depth')
                                                                // {
                                                                //     print('<B>depth : </B>');
                                                                //     print($genomtmt['depth']); echo'<br>';
                                                                // }
                                                               
                                                                if($key == 'pos1' || $key=='pos2')
                                                                {
                                                                   
                                                                    if($key=='pos1')
                                                                    {
                                                                       
                                                                        if( $value == ' ' ){
                                                                            $postM = "<=" ;
                                                                        }
                                                                        else{
                                                                            $postM = number_format($value);
                                                                        }
                                                                    }
                                                                    else if($key=='pos2')
                                                                    {
                                                                        if( $value == ' ' ){
                                                                            if($postM == "<="){
                                                                                $postM = "ALL";
                                                                            }
                                                                            else{
                                                                                $postM = ">=".$postM;  
                                                                            }
                                                                            
                                                                        }
                                                                        else{
                                                                            if($postM == "<="){
                                                                                $postM = $postM.'  '.number_format($value);
                                                                            }
                                                                            else{
                                                                                $postM = $postM.' - '.number_format($value);
                                                                            }
                                                                            
                                                                        }
                                                                        
                                                                        print('<B>position : </B>');
                                                                        print ($postM);
                                                                    }  
                                                                    
                                                                }

                                                            }
                                                        }  
                                                    }
                                                    ?></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                    
                        <p class="text-result">Search results <span class="red"><?php echo sizeof($genomtmt['view_genom']) ?></span> items</p>
                    </div>    
                </div>
            </div>


            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card " >
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-md-12 ">
                                    <form action="<?php echo URL; ?>detail" method="post" >  
                                        <table id="data" class=" table" style="width:100%;">
                                        <thead id="thead" hidden>
                                            <tr bgcolor='#ff6258'  class="text-white text-center" >
                                                <!-- <th >bs</th> -->
                                                <th >allele_rs</th>
                                                <th >allele</th>
                                                <th >chromosome</th>
                                                <th >position</th>
                                                <th >strand</th>
                                                <!-- <th >quality</th>
                                                <th >depth</th> -->
                                                <?php
                                                    foreach($genomtmt['dna'] as $key=>$value)
                                                    {
                                                    //  echo "<th ><button type='submit' name='id_accession_number' data-id='".$value['id_accession_number']."'class='btn btn-danger btn-sm btn-send' 
                                                    //  value='".$value['id_accession_number']."'".">".$value['accession_number']??'-'."</button></th>";
                                                    echo "<th><data-id='".$value['id_accession_number']."'class='btn btn-danger' 
                                                    value='".$value['id_accession_number']."'".">".$value['accession_number']??'-'."</th>";
                                                    }
                                                ?>
                                             </tr>  
                                        </thead >
                                        <tbody id="tbody" hidden>
                                                <?php
                                                //  echo "<br>";
                                                //print_r($genomtmt['test3']);
                                                //print_r($genomtmt['position_1']);
                                                // if($genomtmt['position_1'] >= $genomtmt['position_2'])
                                                // {
                                                //     $message = "เกิดข้อผิดพลาดเนื่องจากค่าของ position1 มากกว่า position2";
                                                //     echo "<script type='text/javascript'>alert('$message');</script>";
                                                // }
                                                // else
                                                // {
                                                    //print_r($this->genom_search['view_genom']);
                                                    // $col =0; 
                                                    //$xx = $genomtmt['view_genom'];
                                                    //print_r($genomtmt['view_genom'][0]['id_genomfact']);
                                                    //$getest = $this->;
                                                    $lenth = sizeof($genomtmt['dna']);
                                                    for($i=0;$i<=sizeof($genomtmt['view_genom'])-1;$i++)
                                                    {
                                                        echo "<tr>";
                                                        foreach($genomtmt['view_genom'][$i] as $key=>$value)
                                                        {
                                                            if(!($key == 'id_genomfact'))
                                                            {
                                                                if($key == 'position')
                                                                {
                                                                    $value = number_format($value);
                                                                    echo "<td class=\"text-center\">".$value."</td>";
                                                                }
                                                                else if($key == "id_bs")
                                                                {
                                                                    //echo "<td class='bg-danger'></td>";
                                                                }
                                                                else
                                                                {
                                                                    echo "<td class=\"text-center\">".$value."</td>";
                                                                }
                                                                //echo "<td class=\"text-center\">".$value."</td>";
                                                            }
                                                            //echo "<td class=\"text-center\">".$value."</td>";
                                                            //if($key == 'position')
                                                            //echo number_format($value).' - ';
                                                        }
                                                        //print_r($genomtmt['view_genom'][$i]['position']);
                                                        for($col=0;$col<=$lenth-1;$col++)
                                                        {   
                                                                // $j = $genomtmt['view_genom'][$i]['id_genomfact'];
                                                                // $test = $genomtmt['dna'][$col]['dna_accession'][$j-1]; 
                                                                // echo "<td class=\"text-center\">".$test."</td>";  

                                                                // TON
                                                                    $j = $genomtmt['view_genom'][$i]['id_genomfact'];
                                                                    $genome_text =explode("@",$genomtmt['dna'][$col]['dna_accession']);
                                                                    $test = $genome_text[$j-1]; 
                                                                    echo "<td class=\"text-center\">".$test."</td>";  
                                                        }
                                                    }
                                                    echo "</tr>";
                                                //}
                                                ?>
                                        </tbody>
                                        </table>
                                    </form>  
                                    <div id="loader" class="bar-loader hidden" style="margin-top: 100px; margin-bottom: 100px;" >
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>          
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
        </div>          
    </div>
</div>

</body>




