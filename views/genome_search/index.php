<style>
  .card-title {
    color: #ff0017;
    font-size: 1.3rem;
  }

  .card .card-body {
    padding-bottom: 0;
    margin-bottom: 0;
  }

  .tab-solid {
    margin-bottom: 0;
  }

  .tab-content-solid {
    border-style: solid;
    border-color: #ff6258;
    border-radius: 8px;
    padding: 50px;
    margin-bottom: 50px;
    margin-top: -3px;
    border-top-width: 5px;
  }

  .tab-solid .nav-item .nav-link {
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }

  .pt-5,
  .py-5 {
    margin-top: 0;
  }

  .form-group label,
  .col-form-label {
    font-size: 16px;
  }

  .card .col-sm-2 .jump {
    width: 500px;
  }

  .form-control,
  .asColorPicker-input,
  .dataTables_wrapper select,
  .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text],
  .jsgrid .jsgrid-table .jsgrid-filter-row select,
  .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number],
  .select2-container--default .select2-selection--single,
  .select2-container--default .select2-selection--single .select2-search__field,
  .tt-hint,
  .tt-query,
  .typeahead {
    border: 1px solid #ccc;
  }

  table.dataTable thead .sorting:after,
  table.dataTable thead .sorting:before,
  table.dataTable thead .sorting_asc:after,
  table.dataTable thead .sorting_asc:before,
  table.dataTable thead .sorting_asc_disabled:after,
  table.dataTable thead .sorting_asc_disabled:before,
  table.dataTable thead .sorting_desc:after,
  table.dataTable thead .sorting_desc:before,
  table.dataTable thead .sorting_desc_disabled:after,
  table.dataTable thead .sorting_desc_disabled:before {
    bottom: .5em;
  }

  .hidden {
    display: none;
  }

  /* The container */

  .container {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }

  /* Hide the browser's default checkbox */

  .container input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
    height: 0;
    width: 0;
  }

  /* Create a custom checkbox */

  .checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
    /* border-radius: 50%; */
  }

  /* On mouse-over, add a grey background color */

  .container:hover input~.checkmark {
    background-color: #ccc;
  }

  /* When the checkbox is checked, add a blue background */

  .container input:checked~.checkmark {
    background-color: #2196F3;
  }

  /* Create the checkmark/indicator (hidden when not checked) */

  .checkmark:after {
    content: "";
    position: absolute;
    display: none;
  }

  /* Show the checkmark when checked */

  .container input:checked~.checkmark:after {
    display: block;
  }

  /* Style the checkmark/indicator */

  .container .checkmark:after {
    left: 9px;
    top: 5px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
  }

  .checkmark2 {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
    border-radius: 50%;
  }

  /* On mouse-over, add a grey background color */

  .container:hover input~.checkmark2 {
    background-color: #ccc;
  }

  /* When the checkbox is checked, add a blue background */

  .container input:checked~.checkmark2 {
    background-color: #2196F3;
  }

  /* Create the checkmark/indicator (hidden when not checked) */

  .checkmark2:after {
    content: "";
    position: absolute;
    display: none;
  }

  /* Show the checkmark when checked */

  .container input:checked~.checkmark2:after {
    display: block;
  }

  /* Style the checkmark/indicator */

  .container .checkmark2:after {
    left: 9px;
    top: 5px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
  }

  .col-md-2 {
    max-width: 10.66667%;
  }
  #Advenced_search{
    color: #2196f3;
    cursor: pointer;
    margin:15px 0 0 15px;
  }
  #icon-AS{
    margin-right: 5px;
  }
  .AS{
    width: 100%;
  }
  .col-jump{
    margin: 0 10px 0 10px;
  }
  input.select2-search__field{
    width: 100% !important;
  }

</style>

<?php
$g_chrom = $this->genom_chrom;?>


<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card" style="padding: 50px;">
      <h4 class="card-title">Genome Search</h4>
      <div class="card-body">
        <ul class="nav nav-tabs tab-solid tab-solid-danger" role="tablist">
    
          <li class="nav-item">
            <a class="nav-link active" id="tab-2" data-toggle="tab" href="#genome-2" role="tab" aria-controls="genome-2" aria-selected="true">Genome</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="tab-1" data-toggle="tab" href="#genome-1" role="tab" aria-controls="genome-1" aria-selected="true">Snp</a>
          </li>

        </ul>
        <div class="tab-content tab-content-solid">

          <!--########################################################## START Tab 2 ####################################################### -->

          <div class="tab-pane fade active show" id="genome-2" role="tabpanel" aria-labelledby="tab-2">

            <?php include('genome_tab2.php'); ?>

          </div> <!-- END Card body -->


          <div class="tab-pane fade" id="genome-1" role="tabpanel" aria-labelledby="tab-1">
            <form method="post" action="<?php echo URL; ?>genome_search/search">
            <!-- <br><br><br>
              <div class="form-group row">
                <div class="col-md-6">
                  <div class="row">
                    <label class="col-md-3 col-form-label">chromosome :</label>
                    <div class="col-md-9">
                      <div id="chrom-slider-1" class="ul-slider slider-danger noUi-target noUi-ltr noUi-horizontal"></div>
                      <div class="d-flex justify-content-between">
                        <input type="hidden" id="skip-value-lower-4"></input>
                        <input type="hidden" id="skip-value-upper-4"></input>
                        <input type="hidden" id="slidechrom" name="chrom">
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->

              <!-- <div class="form-group row">
                <div class="col-md-6">
                  <div class="row">
                    <label class="col-md-3 col-form-label">Strand :</label>
                    <?php
                    echo "<label class='container col-md-3 col-form-label'>+
                    <input type='radio' name='strand' value='+'><span class='checkmark2'></span>
                    </label>";

                    echo "<label class='container col-md-3 col-form-label'>-
                    <input type='radio' name='strand' value='-'><span class='checkmark2'></span>
                    </label>";

                    echo "<label class='container col-md-3 col-form-label'>+/-
                    <input type='radio' name='strand' value='+/-'><span class='checkmark2'></span>
                    </label>";
                    ?>
                  </div>
                </div>
              </div> -->



              <div class="form-group row">
                <label class="col-md-2 col-form-label">Chromosome<label style="color:red;">*</label> :</label>
                <div class="col-md-10">
                  <div class="form-group row">
                    <?php
                    foreach ($g_chrom as $element) {
                      echo  "<label class='container col-md-3 col-form-label'>" . $element['chrom'] . "
                                                      <input type='checkbox' name='chrom[]' value=" . $element['chrom'] . ">
                                                      <span class='checkmark'></span>
                                                      </label>";
                    }
                    ?>
                  </div>
                </div>
              </div>

<!-- 
              <div class="form-group row">
                <div class="col-md-6">
                  <div class="row">
                    <label class="col-md-3 col-form-label">Quality :</label>
                    <div class="col-md-9">
                      <div id="quality-slider-1" class="ul-slider slider-danger noUi-target noUi-ltr noUi-horizontal"></div>
                      <div class="d-flex justify-content-between">
                        <input type="hidden" id="skip-value-lower-5"></input>
                        <input type="hidden" id="skip-value-upper-5"></input>
                        <input type="hidden" id="slidequality" name="quality">
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <br><br>

              <div class="form-group row">
                <div class="col-md-6">
                  <div class="row">
                    <label class="col-md-3 col-form-label">Depth :</label>
                    <div class="col-md-9">
                      <div id="depth-slider-1" class="ul-slider slider-danger noUi-target noUi-ltr noUi-horizontal"></div>
                      <div class="d-flex justify-content-between">
                        <input type="hidden" id="skip-value-lower-6"></input>
                        <input type="hidden" id="skip-value-upper-6"></input>
                        <input type="hidden" id="slidedepth" name="depth">
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->

              <div class="row">
                <label class="col-md-2 col-form-label">Position :</label>
                <div class="col-md-10">
                  <input type="text" id="pos1" name="pos1" value=" ">&nbsp;-
                  <input type="text" id="pos2" name="pos2" value=" ">
                </div>
              </div><br>

              <div style="text-align: center;">
                <button type="submit" class="btn btn-primary ">Search</button>
                <button type="reset" class="btn btn-round btn-clear">Clear</button>
              </div>
            </form>
          </div>




        </div>
      </div>
    </div>
  </div>
</div>
<script src="<?php echo URL; ?>theme/assets/js/shared/no-ui-slider.js"></script>
<script src="<?php echo URL; ?>theme/assets/js/shared/select2.js"></script>

<script>
    $(document).ready(function () {
      $('#dtVerticalScrollExample').DataTable({
        "scrollY": "200px",
        "scrollCollapse": true,
      });
      $('#dtVerticalScrollExample2').DataTable({
        "scrollY": "200px",
        "scrollCollapse": true,
      });
      $('.dataTables_length').addClass('bs-select');

      $("#test_accession_number").select2({
       placeholder: "Select two or more.",
       allowClear: true
     });
      $("#select_chrom").select2({
       placeholder: "Select one or more.",
       allowClear: true
     });

      $("#btnSearch").click(function(){

        if($("#test_accession_number :selected").length >= 2){

          $(".select2-container--default .select2-dropdown, .select2-container--default .select2-selection--multiple, .select2-container--default .select2-selection--single").css("border-color","#2196f3");

          $("#MyForm").submit();

          var myframe = document.getElementById("myframe");
          if(!$("#myframe").hasClass("hidden")){
            $("#myframe").addClass("hidden");
          }

          $("#bar-loader").removeClass("hidden");

          myframe.onload = function(){
            $("#bar-loader").addClass("hidden");
            $("#myframe").removeClass("hidden");

          };
        }
        else{

          var innerBox = $(".select2-container--default .select2-dropdown, .select2-container--default .select2-selection--multiple, .select2-container--default .select2-selection--single");
          innerBox.css("border-color","red");

        }




   });//$("#btnSearch").click(function(){

        $(".advancedSearch").hide();

        $("#Advenced_search").click(function(){
          if($("#icon-AS").hasClass("fa-sort-down")){
            $(".advancedSearch").slideDown();
            $("#icon-AS").removeClass("fa-sort-down");
            $("#icon-AS").addClass("fa-sort-up");
          }
          else{
            $(".advancedSearch").slideUp();
            $("#icon-AS").removeClass("fa-sort-up");
            $("#icon-AS").addClass("fa-sort-down");
          }

        });

        $( "#allele1,#allele2").change(function() {

          if(document.getElementById("allele1").value != ""){

            document.getElementById("allele2").disabled = false ;

            if(document.getElementById("allele2").value != ""){
              document.getElementById("allele3").disabled = false ;
            }
            else{
              document.getElementById("allele3").disabled = true ;
              document.getElementById("allele3").value = "";
            }

          }

          else{
            document.getElementById("allele2").disabled = true ;
            document.getElementById("allele2").value = "";
            document.getElementById("allele3").disabled = true ;
            document.getElementById("allele3").value = "";
          }

        });




  }); //$(document).ready(function ()

</script>