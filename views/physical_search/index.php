<link rel="stylesheet" href="theme/assets/vendors/iconfonts/font-awesome/font-awesome.min.css">
<style>
  .card-body h5 {
    margin-bottom: 0;
    color:#ff0017;
    font-size: 1.2rem;
    font-weight: 600;
  } 
  .card.item {
   border: 1px solid #ff0017;

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
.accordion .card .card-header a
{
  font-size: 1.2rem;
  color:#ff0017;
}
.accordion.basic-accordion .card .card-header a[aria-expanded="true"] ,
.accordion.basic-accordion .card .card-header a[aria-expanded="false"] 
{
  background: none;
}
.accordion .card .card-header a:before {
  color: #ff0017;
}
.accordion .card .card-header
{
  border-bottom: 1px solid #ff0017;
}
.form-control
{
  font-size: 0.875rem;
  margin-bottom:10px;
  border-color:#8ba2b5; 
}
.form-control.search
{
  border-color:#ff0017; 
}
@media only screen and (max-width: 1920px) {
  .btn1
  {   

    position: fixed;
    top: 78%;
    right: -10px;    
    margin:auto;
    z-index: 1;
    text-align: center;
  }
  .btn2
  {   
    position: fixed;
    top: 85%;
    right: -10px;    
    margin:auto;
    z-index: 1;   
    text-align: center;
  }
}
@media only screen and (max-width: 1366px) {
  .btn1
  {   

    position: fixed;
    top: 78%;
    right: -10px;    
    margin:auto;
    z-index: 1;
    text-align: center;
  }
  .btn2
  {   
    position: fixed;
    top: 85%;
    right: -10px;    
    margin:auto;
    z-index: 1;   
    text-align: center;
  }
}
@media only screen and (max-width: 1024px) {
  .btn1
  {   
    position: fixed;
    top: 78%;
    right: -10px;    
    margin:auto;
    z-index: 1;
    text-align: center;
  }
  .btn2
  {   
    position: fixed;
    top: 85%;
    right: -10px;    
    margin:auto;
    z-index: 1;   
    text-align: center;
  }
}


@media only screen and (max-width: 768px) {
  .btn1
  {   

    position: fixed;
    top: 78%;
    right: -10px;    
    margin:auto;
    z-index: 1;
    text-align: center;
  }
  .btn2
  {   
    position: fixed;
    top: 85%;
    right: -10px;    
    margin:auto;
    z-index: 1;   
    text-align: center;
  }
}
@media only screen and (max-width: 420px) {
  .btn1
  {   

    position: fixed;
    top: 78%;
    right: -10px;    
    margin:auto;
    z-index: 1;
    text-align: center;
  }
  .btn2
  {   
    position: fixed;
    top: 85%;
    right: -10px;    
    margin:auto;
    z-index: 1;   
    text-align: center;
  }
}

.btn-fix
{
  background: none;   
  max-width: 180px;
  max-height:6.5%;
  width:40%;
  height:20%;   
  cursor: pointer;  
  font-size: 23px; 
  border-radius: 500px 0 0 500px;
  opacity: 0.9;
}
.btn-search {
  color: #2196f3;
  background-color: #fff;
  border-color: #2196f3;

}
.btn-clear{
  color:   #8ba2b5;
  background-color: #fff;
  border-color: #8ba2b5;

}
.btn-search:hover
{
  opacity: 0.9;
  color: #fff;
  background-color: #0c83e2;
  border-color: #0c7cd5;
}
.btn-clear:hover
{
  opacity: 1;
  color: #fff;
  background-color: #8ba2b5;
  border-color: #8ba2b5;
}
.static
{
  padding-left:10px;
  color: #2196f3;
}

.text-right
{
  text-align:right;
}
.modal-dialog
{
  width:60%;
  height:30%;

}
label
{
  padding-right:1.75rem;
}
.pt
{
  padding-top:0.1rem;
  padding-bottom:0.2rem;
}
.mt-5, .my-5 {
  margin-top: 2rem !important;
}
.card-title{
  color:#ff0017;
  font-size: 1.3rem;
}
.row:hover{
  border-radius: 5px;
  background-color: rgb(33,150,243,0.15);
}
.hidden{
  display: none;
}
#myChart2{
  position: absolute;
  left: -20%;
  margin-top: 40px;
}
#myChart3{
  right: -20%;
  position: relative;
  margin-top: 40px;
}
#table-data{
  margin-top: 10px;
}
.showmore{
  float: right;
  width: 200px;
  margin:0;
}
#icon-AS{
  margin-right: 10px;
}
#click-showmore{
  color: #2196f3;
  cursor: pointer;
}
</style>

<?php $accession_number = $this->accession_number; ?>

<div class="">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="row">

      </div>
      <h4 class="card-title mt-5" style="margin: 30px; position: absolute;">Physical Search</h4>

      <form action="search_results" method="post">

        <div class="col-lg-4 pull-right mt-5 mr-4">
          <div class="input-group ">
            <input type="text" name="accession_number" id="as_search" class="form-control search" placeholder="Accession number">                   
            <div class="input-group-append text-white">
              <button type="submit" class="btn  btn-danger btn-search-submit" ><i class="text-white fa fa-search"></i></button>
            </div>
          </div>
        </div>

      </form>

      <div class="card-body">

        <br>

        <form action="search_results" id="physical_search" method="post">

          <!-- Fruit -->
          <input type="hidden" id="fruit_weight_g_start" name="fruit_weight_g_start" value="" >
          <input type="hidden" id="fruit_weight_g_end" name="fruit_weight_g_end"  value="" >

          <input type="hidden" id="fruit_length_mm_start" name="fruit_length_mm_start" value="" >
          <input type="hidden" id="fruit_length_mm_end" name="fruit_length_mm_end"  value="" >

          <input type="hidden" id="fruit_width_mm_start" name="fruit_width_mm_start" value="" >
          <input type="hidden" id="fruit_width_mm_end" name="fruit_width_mm_end"  value="" >

          <input type="hidden" id="pedicel_length_mm_start" name="pedicel_length_mm_start" value="" >
          <input type="hidden" id="pedicel_length_mm_end" name="pedicel_length_mm_end"  value="" >

          <input type="hidden" id="pedicel_length_from_abscission_layer_start" name="pedicel_length_from_abscission_layer_start" value="" >
          <input type="hidden" id="pedicel_length_from_abscission_layer_end" name="pedicel_length_from_abscission_layer_end"  value="" >

          <input type="hidden" id="width_of_pedicel_scar_mm_start" name="width_of_pedicel_scar_mm_start" value="" >
          <input type="hidden" id="width_of_pedicel_scar_mm_end" name="width_of_pedicel_scar_mm_end"  value="" >

          <input type="hidden" id="size_of_corky_area_around_pedicel_scar_cm_start" name="size_of_corky_area_around_pedicel_scar_cm_start" value="" >
          <input type="hidden" id="size_of_corky_area_around_pedicel_scar_cm_end" name="size_of_corky_area_around_pedicel_scar_cm_end"  value="" >

          <input type="hidden" id="thickness_of_fruit_wall_skin_mm_start" name="thickness_of_fruit_wall_skin_mm_start" value="" >
          <input type="hidden" id="thickness_of_fruit_wall_skin_mm_end" name="thickness_of_fruit_wall_skin_mm_end"  value="" >

          <input type="hidden" id="thickness_of_pericarp_mm_start" name="thickness_of_pericarp_mm_start" value="" >
          <input type="hidden" id="thickness_of_pericarp_mm_end" name="thickness_of_pericarp_mm_end"  value="" >

          <input type="hidden" id="size_of_score_mm_start" name="size_of_score_mm_start" value="" >
          <input type="hidden" id="size_of_score_mm_end" name="size_of_score_mm_end"  value="" >

          <input type="hidden" id="number_of_locules_start" name="number_of_locules_start" value="" >
          <input type="hidden" id="number_of_locules_end" name="number_of_locules_end"  value="" >

          <!-- Plant -->
          <input type="hidden" id="vine_length_cm_start" name="vine_length_cm_start" value="" >
          <input type="hidden" id="vine_length_cm_end" name="vine_length_cm_end"  value="" >

          <!-- Seedling -->
          <input type="hidden" id="primary_leaf_length_mm_start" name="primary_leaf_length_mm_start" value="" >
          <input type="hidden" id="primary_leaf_length_mm_end" name="primary_leaf_length_mm_end"  value="" >
          <input type="hidden" id="primary_leaf_width_mm_start" name="primary_leaf_width_mm_start" value="" >
          <input type="hidden" id="primary_leaf_width_mm_end" name="primary_leaf_width_mm_end"  value="" >

          <!-- Flower -->
          <input type="hidden" id="petal_length_cm_start" name="petal_length_cm_start" value="" >
          <input type="hidden" id="petal_length_cm_end" name="petal_length_cm_end"  value="" >
          <input type="hidden" id="sepal_length_cm_start" name="sepal_length_cm_start" value="" >
          <input type="hidden" id="sepal_length_cm_end" name="sepal_length_cm_end"  value="" >
          <input type="hidden" id="stamen_length_cm_start" name="stamen_length_cm_start" value="" >
          <input type="hidden" id="stamen_length_cm_end" name="stamen_length_cm_end"  value="" >

          <!-- Seed -->
          <input type="hidden" id="1000_seed_weight_g_start" name="1000_seed_weight_g_start" value="" >
          <input type="hidden" id="1000_seed_weight_g_end" name="1000_seed_weight_g_end"  value="" >


          <div class="accordion basic-accordion" id="accordion" role="tablist">
            <div class="card item">
              <div class="card-header" role="tab" id="headingSix">
                <h6 class="mb-0">
                  <a class="collapsed" data-toggle="collapse" href="#collapseSix" aria-expanded="false" aria-controls="headingSix">
                    <i class="card-icon mdi mdi-food-apple"></i>Fruit</a>
                  </h6>
                </div>
                <div id="collapseSix" class="collapse" role="tabpanel" aria-labelledby="headingSix">
                  <div class="card-body">

                    <div id="click-showmore">
                      <p class="showmore" id="showmore"><span class="fa fa-sort-down" id="icon-AS"></span>Show more numeric lists.</p>
                    </div>
                    <br>
                    <div class="row pt-3 mt-2 mb-2">
                      <div class="col-md-6 mt-5">
                        <p>Fruit weight (g)
                          <span>
                            <a class='static' id="#fruit_weight_g" href="#fruit_weight_g" data-cha="Fruit weight g" >
                              <i class='fa fa-bar-chart-o'></i>
                            </a>
                          </span>
                        </p>
                      </div>

                      <div class="col-md-6">
                        <div class="mt-5 pr-5 pt w-100 soft-limit-3">
                          <div id="" class="range-200 ul-slider slider-danger mb-5 mt-5 noUi-target noUi-ltr noUi-horizontal">

                          </div>
                        </div>                     
                      </div>
                    </div>

                    <div class="" id="numeric">

                      <div class="row pt-3 mt-2 mb-2">
                        <div class="col-md-6">
                          <p>Fruit length (mm)
                            <span>
                              <a class='static' id="#fruit_length_mm" href="#fruit_length_mm" data-cha="Fruit length mm" >
                                <i class='fa fa-bar-chart-o'></i>
                              </a>
                            </span>
                          </p>
                        </div>
                        <div class="col-md-6">
                          <div class="mt-5 pr-5 pt w-100 soft-limit-3">
                            <div id="" class="range-50 ul-slider slider-danger mb-5 mt-5 noUi-target noUi-ltr noUi-horizontal"></div>
                          </div>                     
                        </div>
                      </div>

                      <div class="row pt-3 mt-2 mb-2">
                        <div class="col-md-6">
                          <p>Fruit width (mm)
                            <span>
                              <a class='static' id="#fruit_width_mm" href="#fruit_width_mm" data-cha="Fruit width mm" >
                                <i class='fa fa-bar-chart-o'></i>
                              </a>
                            </span>
                          </p>
                        </div>
                        <div class="col-md-6">
                          <div class="mt-5 pr-5 pt w-100 soft-limit-3">
                            <div id="" class="range-50 fruit-width-mm ul-slider slider-danger mb-5 mt-5 noUi-target noUi-ltr noUi-horizontal"></div>
                          </div>                     
                        </div>
                      </div>

                      <div class="row pt-3 mt-2 mb-2">
                        <div class="col-md-6">
                          <p>Pedicel length (mm)
                            <span>
                              <a class='static' id="#pedicel_length_mm" href="#pedicel_length_mm" data-cha="Pedicel length mm" >
                                <i class='fa fa-bar-chart-o'></i>
                              </a>
                            </span>
                          </p>
                        </div>
                        <div class="col-md-6">
                          <div class="mt-5 pr-5 pt w-100 soft-limit-3">
                            <div id="" class="range-10 ul-slider slider-danger mb-5 mt-5 noUi-target noUi-ltr noUi-horizontal"></div>
                          </div>                     
                        </div>
                      </div>

                      <div class="row pt-3 mt-2 mb-2">
                        <div class="col-md-6">
                          <p>Pedicel length from abscission layer
                            <span>
                              <a class='static' id="#pedicel_length_from_abscission_layer" href="#pedicel_length_from_abscission_layer" data-cha="Pedicel length from abscission layer" >
                                <i class='fa fa-bar-chart-o'></i>
                              </a>
                            </span>
                          </p>
                        </div>
                        <div class="col-md-6">
                          <div class="mt-5 pr-5 pt w-100 soft-limit-3">
                            <div id="" class="range-20 ul-slider slider-danger mb-5 mt-5 noUi-target noUi-ltr noUi-horizontal"></div>
                          </div>                     
                        </div>
                      </div>

                      <div class="row pt-3 mt-2 mb-2">
                        <div class="col-md-6">
                          <p>Width of pedicel scar (mm)
                            <span>
                              <a class='static' id="#width_of_pedicel_scar_mm" href="#width_of_pedicel_scar_mm" 
                              data-cha="Width of pedicel scar mm" >
                              <i class='fa fa-bar-chart-o'></i>
                            </a>
                          </span>
                        </p>
                      </div>
                      <div class="col-md-6">
                        <div class="mt-5 pr-5 pt w-100 soft-limit-3">
                          <div id="" class="range-1 ul-slider slider-danger mb-5 mt-5 noUi-target noUi-ltr noUi-horizontal"></div>
                        </div>                     
                      </div>
                    </div>

                    <div class="row pt-3 mt-2 mb-2">
                      <div class="col-md-6">
                        <p>Size of corky area around pedicel scar (cm)
                          <span>
                            <a class='static' id="#size_of_corky_area_around_pedicel_scar_cm" href="#size_of_corky_area_around_pedicel_scar_cm" 
                            data-cha="Size of corky area around pedicel scar cm" >
                            <i class='fa fa-bar-chart-o'></i>
                          </a>
                        </span>
                      </p>
                    </div>
                    <div class="col-md-6">
                      <div class="mt-5 pr-5 pt w-100 soft-limit-3">
                        <div id="" class="range-2 ul-slider slider-danger mb-5 mt-5 noUi-target noUi-ltr noUi-horizontal"></div>
                      </div>                     
                    </div>
                  </div>

                  <div class="row pt-3 mt-2 mb-2">
                    <div class="col-md-6">
                      <p>Thickness of fruit wall skin (mm)
                        <span>
                          <a class='static' id="#thickness_of_fruit_wall_skin_mm" href="#thickness_of_fruit_wall_skin_mm" 
                          data-cha="Thickness of fruit wall skin mm" >
                          <i class='fa fa-bar-chart-o'></i>
                        </a>
                      </span>
                    </p>
                  </div>
                  <div class="col-md-6">
                    <div class="mt-5 pr-5 pt w-100 soft-limit-3">
                      <div id="" class="range-10 ul-slider slider-danger mb-5 mt-5 noUi-target noUi-ltr noUi-horizontal"></div>
                    </div>                     
                  </div>
                </div>

                <div class="row pt-3 mt-2 mb-2">
                  <div class="col-md-6">
                    <p>Thickness of pericarp (mm)
                      <span>
                        <a class='static' id="#thickness_of_pericarp_mm" href="#thickness_of_pericarp_mm" 
                        data-cha="Thickness of pericarp mm" >
                        <i class='fa fa-bar-chart-o'></i>
                      </a>
                    </span>
                  </p>
                </div>
                <div class="col-md-6">
                  <div class="mt-5 pr-5 pt w-100 soft-limit-3">
                    <div id="" class="range-20 ul-slider slider-danger mb-5 mt-5 noUi-target noUi-ltr noUi-horizontal"></div>
                  </div>                     
                </div>
              </div>

              <div class="row pt-3 mt-2 mb-2">
                <div class="col-md-6">
                  <p>Size of score (mm)
                    <span>
                      <a class='static' id="#size_of_score_mm" href="#size_of_score_mm" 
                      data-cha="Size of score mm" >
                      <i class='fa fa-bar-chart-o'></i>
                    </a>
                  </span>
                </p>
              </div>
              <div class="col-md-6">
                <div class="mt-5 pr-5 pt w-100 soft-limit-3">
                  <div id="" class="range-5 ul-slider slider-danger mb-5 mt-5 noUi-target noUi-ltr noUi-horizontal"></div>
                </div>                     
              </div>
            </div>

            <div class="row pt-3 mt-2 mb-2">
              <div class="col-md-6">
                <p>Number of locules
                  <span>
                    <a class='static' id="#number_of_locules" href="#number_of_locules" 
                    data-cha="Number of locules" >
                    <i class='fa fa-bar-chart-o'></i>
                  </a>
                </span>
              </p>
            </div>
            <div class="col-md-6">
              <div class="mt-5 pr-5 pt w-100 soft-limit-3">
                <div id="" class="range-20 ul-slider slider-danger mb-5 mt-5 noUi-target noUi-ltr noUi-horizontal"></div>
              </div>                     
            </div>
          </div>
        </div>

        <!-- Start Fruit size --> <?php //str_replace($search,$replace,$string) ?>
        <div class="row pt-3">
          <div class="col-md-6">
            <p>Fruit size
              <span>
                <a class='static' id="#fruit_size" href="#fruit_size" data-cha="Fruit size" >
                  <i class='fa fa-bar-chart-o'></i>
                </a>
              </span>
            </p>
          </div>

          <div class="col-md-6">
            <?php
            $fruit_size = $this->fruit_size;
            if($fruit_size){
              foreach ($fruit_size as $key => $value) {

                echo "<input type='checkbox' class='form-check-inline' name='fruit_size[]' value='" .$value['fruit_size']."'"." > <label>".$value['fruit_size']."</label> " ;

              }
            }
            ?>
          </div>
        </div>
        <!-- End Fruit size -->
        <div class="row pt-3">
          <div class="col-md-6">
            <p>Exterior color of mature fruit <span><a class='static' id="#exterior_colour_of_mature_fruit" href="#exterior_colour_of_mature_fruit" data-cha="Exterior colour of mature fruit" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
          </div>
          <div class="col-md-6">
            <?php
            $exterior_colour_of_mature_fruit = $this->exterior_colour_of_mature_fruit;
            if($exterior_colour_of_mature_fruit){
              foreach ($exterior_colour_of_mature_fruit as $key => $value) {

                echo "<input type='checkbox' class='form-check-inline' name='exterior_colour_of_mature_fruit[]' value='" .$value['exterior_colour_of_mature_fruit']."'"." > <label>".$value['exterior_colour_of_mature_fruit']."</label> " ;

              }
            }
            ?>                            
          </div>
        </div>
        <div class="row pt-3">
          <div class="col-md-6">
            <p>Predominant fruit shape <span><a class='static' id="#predominant_fruit_shape" href="#predominant_fruit_shape" data-cha="Predominant fruit shape" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <select name='predominant_fruit_shape[]' class="js-example-basic-multiple select2-hidden-accessible" multiple="" style="width:100%;" tabindex="-1" aria-hidden="true">
                <?php
                $predominant_fruit_shape = $this->predominant_fruit_shape;
                if($predominant_fruit_shape){
                  foreach ($predominant_fruit_shape as $key => $value) {

                    echo "<option value='".$value['predominant_fruit_shape']."'".">".$value['predominant_fruit_shape']."</option>" ;

                  }
                }
                ?>
              </select>
            </div>

          </div>
        </div><br/>
        <div class="row pt-3">
          <div class="col-md-6">
            <p>Intensity of greenback <span><a class='static' id="#intensity_of_greenback" href="#intensity_of_greenback" data-cha="Intensity of greenback" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
          </div>

          <div class="col-md-6">
            <?php
            $intensity_of_greenback = $this->intensity_of_greenback;
            if($intensity_of_greenback){
              foreach ($intensity_of_greenback as $key => $value) {

                echo "<input type='checkbox' class='form-check-inline' name='intensity_of_greenback[]' value='" .$value['intensity_of_greenback']."'"." > <label>".$value['intensity_of_greenback']."</label> " ;

              }
            }
            ?>     
          </div>

        </div>
        <div class="row pt-3">
          <div class="col-md-6">
            <p>Fruit shoulder shape <span><a class='static' id="#fruit_shoulder_shape" href="#fruit_shoulder_shape" data-cha="Fruit shoulder shape" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <select name='fruit_shoulder_shape[]' class="js-example-basic-multiple select2-hidden-accessible" multiple="" style="width:100%;" tabindex="-1" aria-hidden="true" placeholders>
                <?php
                $fruit_shoulder_shape = $this->fruit_shoulder_shape;
                if($fruit_shoulder_shape){
                  foreach ($fruit_shoulder_shape as $key => $value) {
                    echo "<option value='".$value['fruit_shoulder_shape']."'".">".$value['fruit_shoulder_shape']."</option>" ;

                  }
                }
                ?>
              </select>
            </div>                    
          </div>
        </div>
        <div class="row pt-3">
          <div class="col-md-6">
            <p>Easiness of fruit to detach from the pedicel <span><a class='static' id="easiness_of_fruit_to_detach_from_pedicel" href="#easiness_of_fruit_to_detach_from_pedicel" data-cha="Easiness of fruit to detach from pedicel" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
          </div>
          <div class="col-md-6">
            <?php
            $easiness_of_fruit_to_detach_from_pedicel = $this->easiness_of_fruit_to_detach_from_pedicel;
            if($easiness_of_fruit_to_detach_from_pedicel){
              foreach ($easiness_of_fruit_to_detach_from_pedicel as $key => $value) {

                echo "<input type='checkbox' class='form-check-inline' name='easiness_of_fruit_to_detach_from_pedicel[]' value='" .$value['easiness_of_fruit_to_detach_from_pedicel']."'"." > <label>".$value['easiness_of_fruit_to_detach_from_pedicel']."</label> " ;

              }
            }
            ?>     
          </div>
        </div>
        <div class="row pt-3">
          <div class="col-md-6">
            <p>Easiness of fruit wall skin to be peeled <span><a class='static' id="#easiness_of_fruit_wall_skin_to_be_peeled" href="#easiness_of_fruit_wall_skin_to_be_peeled" data-cha="Easiness of fruit wall skin to be peeled" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
          </div>
          <div class="col-md-6">
            <?php
            $easiness_of_fruit_wall_skin_to_be_peeled = $this->easiness_of_fruit_wall_skin_to_be_peeled;
            if($easiness_of_fruit_wall_skin_to_be_peeled){
              foreach ($easiness_of_fruit_wall_skin_to_be_peeled as $key => $value) {

                echo "<input type='checkbox' class='form-check-inline' name='easiness_of_fruit_wall_skin_to_be_peeled[]' value='" .$value['easiness_of_fruit_wall_skin_to_be_peeled']."'"." > <label>".$value['easiness_of_fruit_wall_skin_to_be_peeled']."</label> " ;

              }
            }
            ?>     
          </div>
        </div>
        <div class="row pt-3">
          <div class="col-md-6">
            <p>Fruit blossom end shape <span><a class='static' id="#fruit_blossom_end_shape" href="#fruit_blossom_end_shape" data-cha="Fruit blossom end shape" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
          </div>
          <div class="col-md-6">
            <?php
            $fruit_blossom_end_shape = $this->fruit_blossom_end_shape;
            if($fruit_blossom_end_shape){
              foreach ($fruit_blossom_end_shape as $key => $value) {

                echo "<input type='checkbox' class='form-check-inline' name='fruit_blossom_end_shape[]' value='" .$value['fruit_blossom_end_shape']."'"." > <label>".$value['fruit_blossom_end_shape']."</label> " ;

              }
            }
            ?>     
          </div>
        </div>
        <div class="row pt-3">
          <div class="col-md-6">
            <p>Shape of pistil scar <span><a class='static' id="#shape_of_pistil_scar" href="#shape_of_pistil_scar" data-cha="Shape of pistil scar" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
          </div>
          <div class="col-md-6">
            <?php
            $shape_of_pistil_scar = $this->shape_of_pistil_scar;
            if($shape_of_pistil_scar){
              foreach ($shape_of_pistil_scar as $key => $value) {

                echo "<input type='checkbox' class='form-check-inline' name='shape_of_pistil_scar[]' value='" .$value['shape_of_pistil_scar']."'"." > <label>".$value['shape_of_pistil_scar']."</label> " ;

              }
            }
            ?>     
          </div>
        </div>

        <div class="row pt-3">
          <div class="col-md-6">
            <p>Presence of green shoulder trips on the fruit<span><a class='static' id="#presence_of_green_shoulder_trips_on_the_fruit" href="#presence_of_green_shoulder_trips_on_the_fruit" 
              data-cha="Presence of green shoulder trips on the fruit" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
            </div>
            <div class="col-md-6">
              <?php
              $presence_of_green_shoulder_trips_on_the_fruit = $this->presence_of_green_shoulder_trips_on_the_fruit;
              if($presence_of_green_shoulder_trips_on_the_fruit){
                foreach ($presence_of_green_shoulder_trips_on_the_fruit as $key => $value) {

                  echo "<input type='checkbox' class='form-check-inline' name='presence_of_green_shoulder_trips_on_the_fruit[]' value='" .$value['presence_of_green_shoulder_trips_on_the_fruit']."'"." > <label>".$value['presence_of_green_shoulder_trips_on_the_fruit']."</label> " ;

                }
              }
              ?>     
            </div>
          </div>

          <div class="row pt-3">
            <div class="col-md-6">
              <p>Fruit pubescence <span><a class='static' id="#fruit_pubescence" href="#fruit_pubescence" data-cha="Fruit pubescence" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
            </div>

            <div class="col-md-6">
              <?php
              $fruit_pubescence = $this->fruit_pubescence;
              if($fruit_pubescence){
                foreach ($fruit_pubescence as $key => $value) {

                  echo "<input type='checkbox' class='form-check-inline' name='fruit_pubescence[]' value='" .$value['fruit_pubescence']."'"." > <label>".$value['fruit_pubescence']."</label> " ;

                }
              }
              ?>
            </div>
          </div>

          <div class="row pt-3">
            <div class="col-md-6">
              <p>Fruit size homogeneity<span><a class='static' id="#fruit_size_homogeneity" href="#fruit_size_homogeneity" data-cha="Fruit size homogeneity" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
            </div>

            <div class="col-md-6">
              <?php
              $fruit_size_homogeneity = $this->fruit_size_homogeneity;
              if($fruit_size_homogeneity){
                foreach ($fruit_size_homogeneity as $key => $value) {

                  echo "<input type='checkbox' class='form-check-inline' name='fruit_size_homogeneity[]' value='" .$value['fruit_size_homogeneity']."'"." > <label>".$value['fruit_size_homogeneity']."</label> " ;

                }
              }
              ?>
            </div>
          </div>

          <div class="row pt-3">
            <div class="col-md-6">
              <p>Intensity of exterior colour<span><a class='static' id="#intensity_of_exterior_colour" href="#intensity_of_exterior_colour" data-cha="Intensity of exterior colour" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
            </div>

            <div class="col-md-6">
              <?php
              $intensity_of_exterior_colour = $this->intensity_of_exterior_colour;
              if($intensity_of_exterior_colour){
                foreach ($intensity_of_exterior_colour as $key => $value) {

                  echo "<input type='checkbox' class='form-check-inline' name='intensity_of_exterior_colour[]' value='" .$value['intensity_of_exterior_colour']."'"." > <label>".$value['intensity_of_exterior_colour']."</label> " ;

                }
              }
              ?>
            </div>
          </div>

          <div class="row pt-3">
            <div class="col-md-6">
              <p>Ribbing at calyx end<span><a class='static' id="#ribbing_at_calyx_end" href="#ribbing_at_calyx_end" data-cha="Ribbing at calyx end" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
            </div>

            <div class="col-md-6">
              <?php
              $ribbing_at_calyx_end = $this->ribbing_at_calyx_end;
              if($ribbing_at_calyx_end){
                foreach ($ribbing_at_calyx_end as $key => $value) {

                  echo "<input type='checkbox' class='form-check-inline' name='ribbing_at_calyx_end[]' value='" .$value['ribbing_at_calyx_end']."'"." > <label>".$value['ribbing_at_calyx_end']."</label> " ;

                }
              }
              ?>
            </div>
          </div>

          <div class="row pt-3">
            <div class="col-md-6">
              <p>Presence absence of jiontless pedicel<span><a class='static' id="#presence_absence_of_jiontless_pedicel" href="#presence_absence_of_jiontless_pedicel" data-cha="Presence absence of jiontless pedicel" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
            </div>

            <div class="col-md-6">
              <?php
              $presence_absence_of_jiontless_pedicel = $this->presence_absence_of_jiontless_pedicel;
              if($presence_absence_of_jiontless_pedicel){
                foreach ($presence_absence_of_jiontless_pedicel as $key => $value) {

                  echo "<input type='checkbox' class='form-check-inline' name='presence_absence_of_jiontless_pedicel[]' value='" .$value['presence_absence_of_jiontless_pedicel']."'"." > <label>".$value['presence_absence_of_jiontless_pedicel']."</label> " ;

                }
              }
              ?>
            </div>
          </div>

          <div class="row pt-3">
            <div class="col-md-6">
              <p>Skin colour of ripe fruit<span><a class='static' id="#skin_colour_of_ripe_fruit" href="#skin_colour_of_ripe_fruit" data-cha="Skin colour of ripe fruit" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <select name='skin_colour_of_ripe_fruit[]' class="js-example-basic-multiple select2-hidden-accessible" multiple="" style="width:100%;" tabindex="-1" aria-hidden="true" placeholders>
                  <?php
                  $skin_colour_of_ripe_fruit = $this->skin_colour_of_ripe_fruit;
                  if($skin_colour_of_ripe_fruit){
                    foreach ($skin_colour_of_ripe_fruit as $key => $value) {
                      echo "<option value='".$value['skin_colour_of_ripe_fruit']."'".">".$value['skin_colour_of_ripe_fruit']."</option>" ;

                    }
                  }
                  ?>
                </select>
              </div>                    
            </div>
          </div>

          <div class="row pt-3">
            <div class="col-md-6">
              <p>Flesh colour of peiricarp interior<span><a class='static' id="#flesh_colour_of_peiricarp_interior" href="#flesh_colour_of_peiricarp_interior" data-cha="Flesh colour of peiricarp interior" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
            </div>

            <div class="col-md-6">
              <?php
              $flesh_colour_of_peiricarp_interior = $this->flesh_colour_of_peiricarp_interior;
              if($flesh_colour_of_peiricarp_interior){
                foreach ($flesh_colour_of_peiricarp_interior as $key => $value) {

                  echo "<input type='checkbox' class='form-check-inline' name='flesh_colour_of_peiricarp_interior[]' value='" .$value['flesh_colour_of_peiricarp_interior']."'"." > <label>".$value['flesh_colour_of_peiricarp_interior']."</label> " ;

                }
              }
              ?>
            </div>
          </div>

          <div class="row pt-3">
            <div class="col-md-6">
              <p>Flesh colour intensity<span><a class='static' id="#flesh_colour_intensity" href="#flesh_colour_intensity" data-cha="Flesh colour intensity" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
            </div>

            <div class="col-md-6">
              <?php
              $flesh_colour_intensity = $this->flesh_colour_intensity;
              if($flesh_colour_intensity){
                foreach ($flesh_colour_intensity as $key => $value) {

                  echo "<input type='checkbox' class='form-check-inline' name='flesh_colour_intensity[]' value='" .$value['flesh_colour_intensity']."'"." > <label>".$value['flesh_colour_intensity']."</label> " ;

                }
              }
              ?>
            </div>
          </div>

          <div class="row pt-3">
            <div class="col-md-6">
              <p>Colour intensity of core<span><a class='static' id="#colour_intensity_of_core" href="#colour_intensity_of_core" data-cha="Colour intensity of core" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
            </div>

            <div class="col-md-6">
              <?php
              $colour_intensity_of_core = $this->colour_intensity_of_core;
              if($colour_intensity_of_core){
                foreach ($colour_intensity_of_core as $key => $value) {

                  echo "<input type='checkbox' class='form-check-inline' name='colour_intensity_of_core[]' value='" .$value['colour_intensity_of_core']."'"." > <label>".$value['colour_intensity_of_core']."</label> " ;

                }
              }
              ?>
            </div>
          </div>

          <div class="row pt-3">
            <div class="col-md-6">
              <p>Fruit cross sectional shape<span><a class='static' id="#fruit_cross_sectional_shape" href="#fruit_cross_sectional_shape" data-cha="Fruit cross sectional shape" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
            </div>

            <div class="col-md-6">
              <?php
              $fruit_cross_sectional_shape = $this->fruit_cross_sectional_shape;
              if($fruit_cross_sectional_shape){
                foreach ($fruit_cross_sectional_shape as $key => $value) {

                  echo "<input type='checkbox' class='form-check-inline' name='fruit_cross_sectional_shape[]' value='" .$value['fruit_cross_sectional_shape']."'"." > <label>".$value['fruit_cross_sectional_shape']."</label> " ;

                }
              }
              ?>
            </div>
          </div>

          <div class="row pt-3">
            <div class="col-md-6">
              <p>Blossom end scar condition<span><a class='static' id="#blossom_end_scar_condition" href="#blossom_end_scar_condition" data-cha="Blossom end scar condition" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
            </div>

            <div class="col-md-6">
              <?php
              $blossom_end_scar_condition = $this->blossom_end_scar_condition;
              if($blossom_end_scar_condition){
                foreach ($blossom_end_scar_condition as $key => $value) {

                  echo "<input type='checkbox' class='form-check-inline' name='blossom_end_scar_condition[]' value='" .$value['blossom_end_scar_condition']."'"." > <label>".$value['blossom_end_scar_condition']."</label> " ;

                }
              }
              ?>
            </div>
          </div>

          <div class="row pt-3">
            <div class="col-md-6">
              <p>Fruit firmness after storage<span><a class='static' id="#fruit_firmness_after_storage" href="#fruit_firmness_after_storage" data-cha="Fruit firmness after storage" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
            </div>

            <div class="col-md-6">
              <?php
              $fruit_firmness_after_storage = $this->fruit_firmness_after_storage;
              if($fruit_firmness_after_storage){
                foreach ($fruit_firmness_after_storage as $key => $value) {

                  echo "<input type='checkbox' class='form-check-inline' name='fruit_firmness_after_storage[]' value='" .$value['fruit_firmness_after_storage']."'"." > <label>".$value['fruit_firmness_after_storage']."</label> " ;

                }
              }
              ?>
            </div>
          </div>






        </div>
      </div>
    </div>                                                   
    <div class="card item">
      <div class="card-header" role="tab" id="headingThree">
        <h6 class="mb-0">
          <a class="collapsed  " data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            <i class="card-icon mdi mdi-tree"></i>Plant</a>
          </h6>
        </div>
        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
          <div class="card-body">

            <?php $plant = $this->plant ;?>

            <div class="row pt-3 mt-2 mb-2">
              <div class="col-md-6">
                <p>Vine length (cm)
                  <span>
                    <a class='static' id="#vine_length_cm" href="#vine_length_cm" data-cha="Vine length cm" >
                      <i class='fa fa-bar-chart-o'></i>
                    </a>
                  </span>
                </p>
              </div>

              <div class="col-md-6">
                <div class="mt-5 pr-5 pt w-100 soft-limit-3">
                  <div id="" class="range-200 ul-slider slider-danger mb-5 mt-5 noUi-target noUi-ltr noUi-horizontal">

                  </div>
                </div>                     
              </div>
            </div>


            <div class="row pt-3">
              <div class="col-md-6">
                <p>Plant size<span><a class='static' id="plant_size" href="#plant_size" data-cha="Plant size" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
              </div>

              <div class="col-md-6">
                <?php
                if($plant){
                  foreach ($plant as $i => $values) {
                    foreach ($values as $key => $value) {
                      if($value['plant_size']){
                        echo "<input type='checkbox' class='form-check-inline' name='plant_size[]' value='" .$value['plant_size']."'"." > <label>".$value['plant_size']."</label> " ;
                      }
                    }
                  }
                }
                ?>
              </div>
            </div>

            <div class="row pt-3">
              <div class="col-md-6">
                <p>Plant grow pt-3th type<span><a class='static' id="plant_grow pt-3th_type" href="#plant_grow pt-3th_type" data-cha="Plant grow pt-3th type" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
              </div>

              <div class="col-md-6">
                <?php
                if($plant){
                  foreach ($plant as $i => $values) {
                    foreach ($values as $key => $value) {
                      if($value['plant_grow pt-3th_type']){
                        echo "<input type='checkbox' class='form-check-inline' name='plant_grow pt-3th_type[]' value='" .$value['plant_grow pt-3th_type']."'"." > <label>".$value['plant_grow pt-3th_type']."</label> " ;
                      }
                    }
                  }
                }
                ?>
              </div>
            </div>

            <div class="row pt-3">
              <div class="col-md-6">
                <p>Stem pubescence density<span><a class='static' id="stem_pubescence_density" href="#stem_pubescence_density" data-cha="Stem pubescence density" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
              </div>

              <div class="col-md-6">
                <?php
                if($plant){
                  foreach ($plant as $i => $values) {
                    foreach ($values as $key => $value) {
                      if($value['stem_pubescence_density']){
                        echo "<input type='checkbox' class='form-check-inline' name='stem_pubescence_density[]' value='" .$value['stem_pubescence_density']."'"." > <label>".$value['stem_pubescence_density']."</label> " ;
                      }
                    }
                  }
                }
                ?>
              </div>
            </div>     

            <div class="row pt-3">
              <div class="col-md-6">
                <p>Stem internode length<span><a class='static' id="stem_internode_length" href="#stem_internode_length" data-cha="Stem internode length" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
              </div>

              <div class="col-md-6">
                <?php
                if($plant){
                  foreach ($plant as $i => $values) {
                    foreach ($values as $key => $value) {
                      if($value['stem_internode_length']){
                        echo "<input type='checkbox' class='form-check-inline' name='stem_internode_length[]' value='" .$value['stem_internode_length']."'"." > <label>".$value['stem_internode_length']."</label> " ;
                      }
                    }
                  }
                }
                ?>
              </div>
            </div>

            <div class="row pt-3">
              <div class="col-md-6">
                <p>Foliage density<span><a class='static' id="foliage_density" href="#foliage_density" data-cha="Foliage density" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
              </div>

              <div class="col-md-6">
                <?php
                if($plant){
                  foreach ($plant as $i => $values) {
                    foreach ($values as $key => $value) {
                      if($value['foliage_density']){
                        echo "<input type='checkbox' class='form-check-inline' name='foliage_density[]' value='" .$value['foliage_density']."'"." > <label>".$value['foliage_density']."</label> " ;
                      }
                    }
                  }
                }
                ?>
              </div>
            </div>

            <div class="row pt-3">
              <div class="col-md-6">
                <p>Number of leaves under 1st inflorescence<span><a class='static' id="number_of_leaves_under_1st_inflorescence" href="#number_of_leaves_under_1st_inflorescence" data-cha="Number of leaves under 1st inflorescence" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
              </div>

              <div class="col-md-6">
                <?php
                if($plant){
                  foreach ($plant as $i => $values) {
                    foreach ($values as $key => $value) {
                      if($value['number_of_leaves_under_1st_inflorescence']){
                        echo "<input type='checkbox' class='form-check-inline' name='number_of_leaves_under_1st_inflorescence[]' value='" .$value['number_of_leaves_under_1st_inflorescence']."'"." > <label>".$value['number_of_leaves_under_1st_inflorescence']."</label> " ;
                      }
                    }
                  }
                }
                ?>
              </div>
            </div>

            <div class="row pt-3">
              <div class="col-md-6">
                <p>Leaf attitude<span><a class='static' id="leaf_attitude" href="#leaf_attitude" data-cha="Leaf attitudee" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
              </div>

              <div class="col-md-6">
                <?php
                if($plant){
                  foreach ($plant as $i => $values) {
                    foreach ($values as $key => $value) {
                      if($value['leaf_attitude']){
                        echo "<input type='checkbox' class='form-check-inline' name='leaf_attitude[]' value='" .$value['leaf_attitude']."'"." > <label>".$value['leaf_attitude']."</label> " ;
                      }
                    }
                  }
                }
                ?>
              </div>
            </div>

            <div class="row pt-3">
              <div class="col-md-6">
                <p>Leaf type<span><a class='static' id="leaf_type" href="#leaf_type" data-cha="Leaf type" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
              </div>

              <div class="col-md-6">
                <?php
                if($plant){
                  foreach ($plant as $i => $values) {
                    foreach ($values as $key => $value) {
                      if($value['leaf_type']){
                        echo "<input type='checkbox' class='form-check-inline' name='leaf_type[]' value='" .$value['leaf_type']."'"." > <label>".$value['leaf_type']."</label> " ;
                      }
                    }
                  }
                }
                ?>
              </div>
            </div>

            <div class="row pt-3">
              <div class="col-md-6">
                <p>Degree of leaf dissection<span><a class='static' id="degree_of_leaf_dissection" href="#degree_of_leaf_dissection" data-cha="Degree of leaf dissection" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
              </div>

              <div class="col-md-6">
                <?php
                if($plant){
                  foreach ($plant as $i => $values) {
                    foreach ($values as $key => $value) {
                      if($value['degree_of_leaf_dissection']){
                        echo "<input type='checkbox' class='form-check-inline' name='degree_of_leaf_dissection[]' value='" .$value['degree_of_leaf_dissection']."'"." > <label>".$value['degree_of_leaf_dissection']."</label> " ;
                      }
                    }
                  }
                }
                ?>
              </div>
            </div>

            <div class="row pt-3">
              <div class="col-md-6">
                <p>Anthocyanin colouration of leaf veins<span><a class='static' id="anthocyanin_colouration_of_leaf_veins" href="#anthocyanin_colouration_of_leaf_veins" data-cha="Anthocyanin colouration of leaf veins" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
              </div>

              <div class="col-md-6">
                <?php
                if($plant){
                  foreach ($plant as $i => $values) {
                    foreach ($values as $key => $value) {
                      if($value['anthocyanin_colouration_of_leaf_veins']){
                        echo "<input type='checkbox' class='form-check-inline' name='anthocyanin_colouration_of_leaf_veins[]' value='" .$value['anthocyanin_colouration_of_leaf_veins']."'"." > <label>".$value['anthocyanin_colouration_of_leaf_veins']."</label> " ;
                      }
                    }
                  }
                }
                ?>
              </div>
            </div>


          </div>
        </div>
      </div>

      <?php $seedling = $this->seedling; ?>
      <div class="card item">
        <div class="card-header" role="tab" id="headingFour">
          <h6 class="mb-0">
            <a class="collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="headingFour">
              <i class="card-icon mdi mdi-leaf"></i>Seedling</a>
            </h6>
          </div>
          <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour">
            <div class="card-body">

              <div class="row pt-3 mt-2 mb-2">
                <div class="col-md-6">
                  <p>Primary leaf length (mm)
                    <span>
                      <a class='static' id="#primary_leaf_length_mm" href="#primary_leaf_length_mm" 
                      data-cha="Primary leaf length mm" >
                      <i class='fa fa-bar-chart-o'></i>
                    </a>
                  </span>
                </p>
              </div>

              <div class="col-md-6">
                <div class="mt-5 pr-5 pt w-100 soft-limit-3">
                  <div id="" class="range-100 ul-slider slider-danger mb-5 mt-5 noUi-target noUi-ltr noUi-horizontal">

                  </div>
                </div>                     
              </div>

            </div>

            <div class="row pt-3 mt-2 mb-2">
              <div class="col-md-6">
                <p>Primary leaf width (mm)
                  <span>
                    <a class='static' id="#primary_leaf_width_mm" href="#primary_leaf_width_mm" 
                    data-cha="Primary leaf width mm" >
                    <i class='fa fa-bar-chart-o'></i>
                  </a>
                </span>
              </p>
            </div>

            <div class="col-md-6">
              <div class="mt-5 pr-5 pt w-100 soft-limit-3">
                <div id="" class="range-50 ul-slider slider-danger mb-5 mt-5 noUi-target noUi-ltr noUi-horizontal">

                </div>
              </div>                     
            </div>

          </div>

          <div class="row pt-3">
            <div class="col-md-6">
              <p>Hypocotyl colour<span><a class='static' id="hypocotyl_colour" href="#hypocotyl_colour" data-cha="Hypocotyl colours" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
            </div>

            <div class="col-md-6">
              <?php
              if($seedling){
                foreach ($seedling as $i => $values) {
                  foreach ($values as $key => $value) {
                    if($value['hypocotyl_colour']){
                      echo "<input type='checkbox' class='form-check-inline' name='hypocotyl_colour[]' value='" .$value['hypocotyl_colour']."'"." > <label>".$value['hypocotyl_colour']."</label> " ;
                    }
                  }
                }
              }
              ?>
            </div>
          </div>

          <div class="row pt-3">
            <div class="col-md-6">
              <p>Hypocotyl colour intensity<span><a class='static' id="hypocotyl_colour_intensity" href="#hypocotyl_colour_intensity" data-cha="Hypocotyl colour intensity" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
            </div>

            <div class="col-md-6">
              <?php
              if($seedling){
                foreach ($seedling as $i => $values) {
                  foreach ($values as $key => $value) {
                    if($value['hypocotyl_colour_intensity']){
                      echo "<input type='checkbox' class='form-check-inline' name='hypocotyl_colour_intensity[]' value='" .$value['hypocotyl_colour_intensity']."'"." > <label>".$value['hypocotyl_colour_intensity']."</label> " ;
                    }
                  }
                }
              }
              ?>
            </div>
          </div>

          <div class="row pt-3">
            <div class="col-md-6">
              <p>Hypocotyl pubescence<span><a class='static' id="hypocotyl_pubescence" href="#hypocotyl_pubescence" data-cha="Hypocotyl pubescence" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
            </div>

            <div class="col-md-6">
              <?php
              if($seedling){
                foreach ($seedling as $i => $values) {
                  foreach ($values as $key => $value) {
                    if($value['hypocotyl_pubescence']){
                      echo "<input type='checkbox' class='form-check-inline' name='hypocotyl_pubescence[]' value='" .$value['hypocotyl_pubescence']."'"." > <label>".$value['hypocotyl_pubescence']."</label> " ;
                    }
                  }
                }
              }
              ?>
            </div>
          </div>





        </div>
      </div>
    </div>

    <?php $flower = $this->flower; ?>
    <div class="card item">
      <div class="card-header" role="tab" id="headingFive">
        <h6 class="mb-0">
          <a class="collapsed" data-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="headingFive">
            <i class="card-icon mdi mdi-flower"></i>Flower</a>
          </h6>
        </div>
        <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive">
          <div class="card-body">

            <div class="row pt-3 mt-2 mb-2">
              <div class="col-md-6">
                <p>Petal length (cm)
                  <span>
                    <a class='static' id="#petal_length_cm" href="#petal_length_cm" data-cha="Petal length cm" >
                      <i class='fa fa-bar-chart-o'></i>
                    </a>
                  </span>
                </p>
              </div>

              <div class="col-md-6">
                <div class="mt-5 pr-5 pt w-100 soft-limit-3">
                  <div id="" class="range-2 ul-slider slider-danger mb-5 mt-5 noUi-target noUi-ltr noUi-horizontal">

                  </div>
                </div>                     
              </div>
            </div>
            <div class="row pt-3 mt-2 mb-2">
              <div class="col-md-6">
                <p>Sepal length (cm)
                  <span>
                    <a class='static' id="#sepal_length_cm" href="#sepal_length_cm" data-cha="Sepal length cm" >
                      <i class='fa fa-bar-chart-o'></i>
                    </a>
                  </span>
                </p>
              </div>

              <div class="col-md-6">
                <div class="mt-5 pr-5 pt w-100 soft-limit-3">
                  <div id="" class="range-2 ul-slider slider-danger mb-5 mt-5 noUi-target noUi-ltr noUi-horizontal">

                  </div>
                </div>                     
              </div>
            </div>
            <div class="row pt-3 mt-2 mb-2">
              <div class="col-md-6">
                <p>Stamen length (cm)
                  <span>
                    <a class='static' id="#stamen_length_cm" href="#stamen_length_cm" data-cha="Stamen length cm" >
                      <i class='fa fa-bar-chart-o'></i>
                    </a>
                  </span>
                </p>
              </div>

              <div class="col-md-6">
                <div class="mt-5 pr-5 pt w-100 soft-limit-3">
                  <div id="" class="range-2 ul-slider slider-danger mb-5 mt-5 noUi-target noUi-ltr noUi-horizontal">

                  </div>
                </div>                     
              </div>
            </div>


            <div class="row pt-3">
              <div class="col-md-6">
                <p>Inflorescence type<span><a class='static' id="inflorescence_type" href="#inflorescence_type" data-cha="Inflorescence type" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
              </div>

              <div class="col-md-6">
                <?php
                if($flower){
                  foreach ($flower as $i => $values) {
                    foreach ($values as $key => $value) {
                      if($value['inflorescence_type']){
                        echo "<input type='checkbox' class='form-check-inline' name='inflorescence_type[]' value='" .$value['inflorescence_type']."'"." > <label>".$value['inflorescence_type']."</label> " ;
                      }
                    }
                  }
                }
                ?>
              </div>
            </div>

            <div class="row pt-3">
              <div class="col-md-6">
                <p>Corolla colour<span><a class='static' id="corolla_colour" href="#corolla_colour" data-cha="Corolla colour" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
              </div>

              <div class="col-md-6">
                <?php
                if($flower){
                  foreach ($flower as $i => $values) {
                    foreach ($values as $key => $value) {
                      if($value['corolla_colour']){
                        echo "<input type='checkbox' class='form-check-inline' name='corolla_colour[]' value='" .$value['corolla_colour']."'"." > <label>".$value['corolla_colour']."</label> " ;
                      }
                    }
                  }
                }
                ?>
              </div>
            </div>

            <div class="row pt-3">
              <div class="col-md-6">
                <p>Corolla blossom type<span><a class='static' id="corolla_blossom_type" href="#corolla_blossom_type" data-cha="Corolla blossom type" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
              </div>

              <div class="col-md-6">
                <?php
                if($flower){
                  foreach ($flower as $i => $values) {
                    foreach ($values as $key => $value) {
                      if($value['corolla_blossom_type']){
                        echo "<input type='checkbox' class='form-check-inline' name='corolla_blossom_type[]' value='" .$value['corolla_blossom_type']."'"." > <label>".$value['corolla_blossom_type']."</label> " ;
                      }
                    }
                  }
                }
                ?>
              </div>
            </div>

            <div class="row pt-3">
              <div class="col-md-6">
                <p>Flower sterility type<span><a class='static' id="flower_sterility_type" href="#flower_sterility_type" data-cha="Flower sterility type" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
              </div>

              <div class="col-md-6">
                <?php
                if($flower){
                  foreach ($flower as $i => $values) {
                    foreach ($values as $key => $value) {
                      if($value['flower_sterility_type']){
                        echo "<input type='checkbox' class='form-check-inline' name='flower_sterility_type[]' value='" .$value['flower_sterility_type']."'"." > <label>".$value['flower_sterility_type']."</label> " ;
                      }
                    }
                  }
                }
                ?>
              </div>
            </div>

            <div class="row pt-3">
              <div class="col-md-6">
                <p>Style position<span><a class='static' id="style_position" href="#style_position" data-cha="Style position" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
              </div>

              <div class="col-md-6">
                <?php
                if($flower){
                  foreach ($flower as $i => $values) {
                    foreach ($values as $key => $value) {
                      if($value['style_position']){
                        echo "<input type='checkbox' class='form-check-inline' name='style_position[]' value='" .$value['style_position']."'"." > <label>".$value['style_position']."</label> " ;
                      }
                    }
                  }
                }
                ?>
              </div>
            </div>

            <div class="row pt-3">
              <div class="col-md-6">
                <p>Style shape<span><a class='static' id="style_shape" href="#style_shape" data-cha="Style shape" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
              </div>

              <div class="col-md-6">
                <?php
                if($flower){
                  foreach ($flower as $i => $values) {
                    foreach ($values as $key => $value) {
                      if($value['style_shape']){
                        echo "<input type='checkbox' class='form-check-inline' name='style_shape[]' value='" .$value['style_shape']."'"." > <label>".$value['style_shape']."</label> " ;
                      }
                    }
                  }
                }
                ?>
              </div>
            </div>

            <div class="row pt-3">
              <div class="col-md-6">
                <p>Style hairiness<span><a class='static' id="style_hairiness" href="#style_hairiness" data-cha="Style hairiness" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
              </div>

              <div class="col-md-6">
                <?php
                if($flower){
                  foreach ($flower as $i => $values) {
                    foreach ($values as $key => $value) {
                      if($value['style_hairiness']){
                        echo "<input type='checkbox' class='form-check-inline' name='style_hairiness[]' value='" .$value['style_hairiness']."'"." > <label>".$value['style_hairiness']."</label> " ;
                      }
                    }
                  }
                }
                ?>
              </div>
            </div>

            <div class="row pt-3">
              <div class="col-md-6">
                <p>Dehiscence<span><a class='static' id="dehiscence" href="#dehiscence" data-cha="Dehiscence" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
              </div>

              <div class="col-md-6">
                <?php
                if($flower){
                  foreach ($flower as $i => $values) {
                    foreach ($values as $key => $value) {
                      if($value['dehiscence']){
                        echo "<input type='checkbox' class='form-check-inline' name='dehiscence[]' value='" .$value['dehiscence']."'"." > <label>".$value['dehiscence']."</label> " ;
                      }
                    }
                  }
                }
                ?>
              </div>
            </div>



          </div>
        </div>
      </div>

      <?php $seed = $this->seed; ?>
      <div class="card item">
        <div class="card-header" role="tab" id="headingSeven">
          <h6 class="mb-0">
            <a class="collapsed" data-toggle="collapse" href="#collapseSeven" aria-expanded="false" aria-controls="headingSeven">
              <i class="card-icon mdi mdi-google-circles-communities"></i>Seed</a>
            </h6>
          </div>
          <div id="collapseSeven" class="collapse" role="tabpanel" aria-labelledby="headingSeven">
            <div class="card-body">

              <div class="row pt-3 mt-2 mb-2">
                <div class="col-md-6">
                  <p>1000 seeds weight (g)
                    <span>
                      <a class='static' id="#1000_seed_weight_g" href="#1000_seed_weight_g" data-cha="1000 seed weight g" >
                        <i class='fa fa-bar-chart-o'></i>
                      </a>
                    </span>
                  </p>
                </div>
                <div class="col-md-6">
                  <div class="mt-5 pr-5 pt w-100 soft-limit-3">
                    <div id="" class="range-20 fruit-width-mm ul-slider slider-danger mb-5 mt-5 noUi-target noUi-ltr noUi-horizontal"></div>
                  </div>                     
                </div>
              </div>

              <div class="row pt-3">
                <div class="col-md-6">
                  <p>Seed shape<span><a class='static' id="seed_shape" href="#seed_shape" data-cha="Seed shape" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
                </div>

                <div class="col-md-6">
                  <?php
                  if($seed){
                    foreach ($seed as $i => $values) {
                      foreach ($values as $key => $value) {
                        if($value['seed_shape']){
                          echo "<input type='checkbox' class='form-check-inline' name='seed_shape[]' value='" .$value['seed_shape']."'"." > <label>".$value['seed_shape']."</label> " ;
                        }
                      }
                    }
                  }
                  ?>
                </div>
              </div>

              <div class="row pt-3">
                <div class="col-md-6">
                  <p>Seed colour<span><a class='static' id="seed_colour" href="#seed_colour" data-cha="Seed colour" ><i  class='fa fa-bar-chart-o'></i></a></span></p>
                </div>

                <div class="col-md-6">
                  <?php
                  if($seed){
                    foreach ($seed as $i => $values) {
                      foreach ($values as $key => $value) {
                        if($value['seed_colour']){
                          echo "<input type='checkbox' class='form-check-inline' name='seed_colour[]' value='" .$value['seed_colour']."'"." > <label>".$value['seed_colour']."</label> " ;
                        }
                      }
                    }
                  }
                  ?>
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
<button type="submit" id="sent_data" class="btn-fix btn1 btn-round btn-search btn-search-submit">Search</button>
<button type="reset" id="reset_data" class="btn-fix btn2 btn-round btn-clear">Clear</button>
</form>
</div>
<div id="static_modal" class="modal fade">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-body">
        <div class="row pt-3">
          <div class="col-lg-9">
            <h4 id="head"></h4>
          </div>
          <div class="col-lg-3">
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>
        </div>
        <div class="chart-data"> 
          <canvas id="myChart1"></canvas>
          <br>

          <canvas id="myChart2"></canvas>
          
          <canvas id="myChart3"></canvas>

          <br>
          <div id="table-data">
          </div>
        </div>


      </div>
    </div>
  </div>

  <script>
    $(document).ready(function(){
      $("#sent_data").click(function(){
        var text = [];
        var x = document.getElementsByClassName("noUi-tooltip");

        for (var i = 0; i < x.length; i++) {
          text[i] = x[i].innerHTML;
        }

        $("#fruit_weight_g_start").val(text[0]);
        $("#fruit_weight_g_end").val(text[1]);

        $("#fruit_length_mm_start").val(text[2]);
        $("#fruit_length_mm_end").val(text[3]);

        $("#fruit_width_mm_start").val(text[4]);
        $("#fruit_width_mm_end").val(text[5]);

        $("#pedicel_length_mm_start").val(text[6]);
        $("#pedicel_length_mm_end").val(text[7]);

        $("#pedicel_length_from_abscission_layer_start").val(text[8]);
        $("#pedicel_length_from_abscission_layer_end").val(text[9]);

        $("#width_of_pedicel_scar_mm_start").val(text[10]);
        $("#width_of_pedicel_scar_mm_end").val(text[11]);

        $("#size_of_corky_area_around_pedicel_scar_cm_start").val(text[12]);
        $("#size_of_corky_area_around_pedicel_scar_cm_end").val(text[13]);

        $("#thickness_of_fruit_wall_skin_mm_start").val(text[14]);
        $("#thickness_of_fruit_wall_skin_mm_end").val(text[15]);

        $("#thickness_of_pericarp_mm_start").val(text[16]);
        $("#thickness_of_pericarp_mm_end").val(text[17]);

        $("#size_of_score_mm_start").val(text[18]);
        $("#size_of_score_mm_end").val(text[19]);

        $("#number_of_locules_start").val(text[20]);
        $("#number_of_locules_end").val(text[21]);


        $("#vine_length_cm_start").val(text[22]);
        $("#vine_length_cm_end").val(text[23]);

        $("#primary_leaf_length_mm_start").val(text[24]);
        $("#primary_leaf_length_mm_end").val(text[25]);
        $("#primary_leaf_width_mm_start").val(text[26]);
        $("#primary_leaf_width_mm_end").val(text[27]);

        $("#petal_length_cm_start").val(text[28]);
        $("#petal_length_cm_end").val(text[29]);
        $("#sepal_length_cm_start").val(text[30]);
        $("#sepal_length_cm_end").val(text[31]);
        $("#stamen_length_cm_start").val(text[32]);
        $("#stamen_length_cm_end").val(text[33]);


      });


      //var tag = document.getElementsByClassName("noUi-tooltip");
      var tagL = [] , tagR = [] , j = 0 ;

      for (var i = 0; i < $(".noUi-tooltip").length; i++) {
        tagL[i] = $(".noUi-tooltip").eq(j).text();
        tagR[i] = $(".noUi-tooltip").eq(++j).text();
        j++;
      }

      $("#reset_data").click(function(){
        var point = document.getElementsByClassName("noUi-origin");
        var line = document.getElementsByClassName("noUi-connect");
        var dropdown = document.getElementsByClassName("select2-selection__choice");
        var j = 0;
        for (var i = 0; i < point.length; i++) {
          $(".noUi-tooltip").eq(i).text(tagL[j]) ;
          point[i].style.left = "0%";
          point[++i].style.left = "100%";
          $(".noUi-tooltip").eq(i).text(tagR[j]) ;
          j++ ;
        }
        for (var i = 0; i < line.length; i++) {
          line[i].style.left = "0%";
          line[i].style.right = "0%";
        }

        $("div.noUi-handle.noUi-handle-lower").attr("aria-valuetext","0.00");
        $("div.noUi-handle.noUi-handle-lower").attr("aria-valuenow","0.0");

        $("div.noUi-handle.noUi-handle-upper").attr("aria-valuetext","200.00");
        $("div.noUi-handle.noUi-handle-upper").attr("aria-valuenow","100.0");

        $("div.noUi-handle").attr("aria-valuemin","0.0");
        $("div.noUi-handle").attr("aria-valuemax","100.0");

        $(".select2-selection__choice").remove();

      });

      $(".static").click(function() {
        $("#myChart1").remove();
        $("#myChart2").remove();
        $("#myChart3").remove();
        $("#head").empty();
        $('.chart-data').append('<canvas id="myChart1"><canvas>');
        $('#myChart1').after('<canvas id="myChart2"><canvas>');
        $('#myChart2').after('<canvas id="myChart3"><canvas>');
        var input_cha = $(this).attr('data-cha'); 
                  //alert(input_cha);
                  $("#head").append(input_cha);
                  if (input_cha != '') {
                    $.ajax({
                      url: "physical_search/ajaxChart",
                      method: "GET",
                      data: { cha: input_cha },
                      success: function(data) {
                        console.log(data);
                        //document.getElementById('title').innerHTML = 
                        var name = [];
                        var count = [];
                        var coloR = [];
                        var dynamicColors = function() {
                          var r = Math.floor(Math.random() * 255);
                          var g = Math.floor(Math.random() * 255);
                          var b = Math.floor(Math.random() * 255);
                          return "rgb(" + r + "," + g + "," + b + ")";
                        };
                        //alert(data.length)
                        for (var i in data) {
                          name.push(data[i].cha);
                          count.push(data[i].count_sum);
                          coloR.push(dynamicColors());
                        }
                        var chartdata = {
                          labels: name,
                          datasets: [{
                            label: 'จำนวนสายพันธุ์',
                            backgroundColor: 'rgba(247,100,88)',
                            borderColor: 'rgba(247,100,88)',
                            hoverBackgroundColor: 'rgba(255,98,88)',
                            hoverBorderColor: 'rgba(255,98,88)',
                            data: count
                          }]
                        };
                        var ctx = document.getElementById("myChart1");
                        ctx.height = 80;
                        var barGraph = new Chart(ctx, {
                          type: 'bar',
                          data: chartdata,
                          options: {
                            scales: {
                              xAxes: [{
                                barPercentage: 1,
                                categoryPercentage: 0.3 / 10 * chartdata.datasets[0].data.length
                              }],
                              yAxes: [{
                                ticks: {
                                  beginAtZero: true,
                                  min: 0,

                                }
                              }]
                            }
                            
                          }
                        });

                        var chartdata = {
                          labels: name,
                          datasets: [{
                            label: 'จำนวนสายพันธุ์',
                            backgroundColor:[
                            'rgba(30,136,229)',
                            'rgba(67,160,71)',
                            'rgba(253,216,53)',
                            'rgba(244,81,30)',
                            'rgba(109,76,65)',
                            'rgba(229,57,53)',
                            'rgba(94,53,177)',
                            'rgba(57,73,171)',
                            'rgba(142,36,170)',
                            'rgba(3,155,229)',
                            'rgba(0,137,123)',
                            'rgba(124,179,66)',
                            'rgba(192,202,51)',
                            'rgba(41,98,255)',

                            ],
                            data: count
                          }]
                        };
                        var ctx2 = document.getElementById("myChart2");
                        ctx2.height = 80;
                        var barGraph = new Chart(ctx2, {
                          type: 'pie',
                          data: chartdata
                        });
                        var chartdata = {
                          labels: name,
                          datasets: [{
                            label: 'จำนวนสายพันธุ์',
                            backgroundColor: 'rgba(247,100,88,0.5)',
                            borderColor: 'rgba(247,100,88)',
                            pointBorderColor: "rgba(247,100,88,1)",
                            pointBackgroundColor: "rgba(247,100,88,1)",
                            data: count
                          }]
                        };
                        var ctx3 = document.getElementById("myChart3");
                        ctx3.height = 100;
                        var barGraph = new Chart(ctx3, {
                          type: 'radar',
                          data: chartdata
                        });
                        var tabledetail=$("#table-data");
                        tabledetail.remove();
                        $(".chart-data").append(' <br/><div id="table-data"></div>');
                        var tabledetail=$("#table-data");
                        tabledetail.append('<table class="table table-bordered" id="table-chart"><tr><th>'+input_cha+'</th><th class="text-right">Amount</th><th class="text-right">Percent</th></tr>');
                        var sum =0;
                        for(i=0;i<data.length;i++)
                        {
                          sum=parseInt(sum)+parseInt(data[i].count_sum);

                        }
                        for(i=0;i<data.length;i++)
                        {
                          console.log("test : "+i);
                          var x =(data[i].count_sum/sum)*100;
                          $("#table-chart").append('<tr><td>'+data[i].cha+'</td><td class="text-right">'+data[i].count_sum+'</td><td class="text-right">'+x.toFixed(2)+'%</td></tr>');
                        }
                        tabledetail.append('</table>');
                        console.log(data);
                        console.log("sum"+sum);
                        $("#static_modal").modal('show');

                      },

                      error: function(data) {
                        console.log("error");
                        console.log(data);
                      }
                    });
}
});
$("#numeric").hide();
$("#click-showmore").click(function(){
  if($("#icon-AS").hasClass("fa-sort-down")){
    $("#numeric").slideDown();
    $("#icon-AS").removeClass("fa-sort-down");
    $("#icon-AS").addClass("fa-sort-up");
  }
  else{
    $("#numeric").slideUp();
    $("#icon-AS").removeClass("fa-sort-up");
    $("#icon-AS").addClass("fa-sort-down");
  }

});

});

</script>

<script src="<?php echo URL; ?>theme/assets/js/shared/iCheck.js"></script>
<script src="<?php echo URL; ?>theme/assets/js/select-2-jump.js"></script>
<script src="<?php echo URL; ?>theme/assets/js/shared/no-ui-slider.js"></script>
<script src="<?php echo URL; ?>theme/assets/js/no-ui-slider-jump.js"></script>