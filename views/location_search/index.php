<style>
    #bodypic1,
    #profile-5-2,
    #AA,
    #bodypic3 {
        margin-top: 20px;
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
        border: 1px solid #f2f2f2;
        font-family: "Poppins", sans-serif;
        font-size: 1rem;
        padding: 0.56rem 0.75rem;
        line-height: 14px;
        font-weight: 300;
    }

    .content-wrapper {
        padding: 0rem 1.7rem;
        width: 100%;
        -webkit-box-flex: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
    }
    #Sp,#gene {
        margin-top: 12px;
        margin-left: 25px;
        margin-bottom: 12px;
    }

    .col-form-label {
        background-color: #ff9933;
    }


    #title {
        align-content: center;
        margin-top: 30px;

        margin-right: 700px;
        margin-left: 120px;
        background-color: lightblue;
    }

    .clearfix img {
        align-content: center;
        max-width: 120px;
        max-height: 120px;
        width: 100%;
        height: 100%;
    }

    hr {
        margin-top: 1rem;
        margin-bottom: 0px;
        border: 0;
        border-top: 1px solid rgba(0, 0, 0, 0.1);
        background: #ff6258;
    }
    hr.hr_map {
        margin-top: 0px;
        margin-bottom: 1px;
        background: #0000002b;
    }

    .tab-basic {
        border-bottom: none;
        margin-bottom: -15px;
    }

    .cc {
        margin-left: 12px;
    }


    input {

        text-align: center;
    }

    h1 {
        font-size: 1.2rem;
        font-weight: 600;
        text-align: left;
        color: tomato;
    }

    .tab-basic .nav-item {
        margin-right: 5px;
    }

    .tab-basic .nav-item .nav-link,
    .tab-basic .nav-item .nav-link.active {
        color: red;
        padding: 10px;

    }

    .tab-basic .nav-item .nav-link.active {

        border-top: 1px solid #f12222;
        border-right: 1px solid #f12222;
        border-left: 1px solid #f12222;
        border-bottom: none;
        color: red;
        z-index: 999;
    }

    .nav-pills .nav-item .nav-link,
    .nav-tabs .nav-item .nav-link {
        line-height: 2;
    }

    .card .card-body {
        padding: 0rem 0rem;
    }
    .navv {
        background: none;

    }
    .mdi {
        font-size: 1.6rem;
    }
    .x {
        padding-top: 14px;

    }
    #lat,#gene,#Sp{
        color: black;
    }
    .img-a {
            vertical-align: middle;
            border-style: none;
            border-radius: 100%;
            max-height: 100px;
            max-width: 100px;
    }
    .sli {
        align-content: center;
        max-width: 120px;
        max-height: 120px;
        width: 100%;
        height: 100%;
    }
    .content_map{ 
        /* font-family: Arial, Helvetica, sans-serif;
        font-size: .9em;
        background: linear-gradient(#e6eef2, #19d895); 
        color: #212529;
        padding: 10px;  
        border: 1px solid #000;   */
    } 
    span#lon_c,span#lat_c{
        color:black;
    }
    #content_search1,#content_search2{
        margin-top: 20px;
        margin-bottom: 20px;
        margin-right: 20px;
        margin-left: 20px;
    }
    .content_search_paddind{
        padding: 8px;
    }
    .drop_draw_L,p.H_content_map{
        color: black;
        font-size: 0.875rem;
        /* font-weight: bold; */
    }
    p{
        margin: 0;
        color: black;
    }
    .mdi{
        color: tomato;
    }
    button .mdi{
        color: white;
    }
    .card-image{
        padding: 1rem 1rem;
    }
    
    
    /* target,search */
    i.font_weight{
        font-weight: bold;
        font-size: 1.2rem;
    }
    .head_map{
        margin-bottom:10px;
    }
    .margin_p{
        margin-bottom:10px;
        
    }
    .margin_input{
        /* margin-right:10px; */
    }
    .select2-selection__rendered,input,.link_aaa{
        font-size: 0.875rem;
        font-weight: 400;
    }
    .button {
        background-color: #0c7cd5;
        border: none;
        color: #fff;
        padding: 5px 13px;
        text-align: center;
        font-size: 16px;
        margin: 4px 2px;
        opacity: 0.6;
        transition: 0.3s;
        display: inline-block;
        text-decoration: none;
        cursor: pointer;
    }
    .button:hover {opacity: 1}
    .card_shadow{
        box-shadow: 10px 10px 20px grey;
    }
    .noUi-target .noUi-base {
        background: #007bff;
    }
    .card{
        background-color: #e6eef2;
    }
    .portfolio-grid figure {
        height: 200px;
        background: tomato;
        box-shadow: 5px 5px 5px grey;
    }
    .portfolio-grid figure img {
        opacity: 1.0;
        height: 60%;
     
    }
    a:hover { 
        color: yellow;
    }
    a h4:hover { 
        color: yellow;
    }
    /* Map */
    .portfolio-grid figure.effect-text-in {
        border-radius: 1rem;
    }
    .gm-style .gm-style-iw-c,.gm-style .gm-style-iw-d::-webkit-scrollbar-track, .gm-style .gm-style-iw-d::-webkit-scrollbar-track-piece{
        background-color: #2cef57d1; 
    }
    .width_h{
        max-width: 160px; 
        min-width: 160px;
        max-height: 40px; 
        min-height: 20px;
        height: 10px;
    }
    .width_c{
        max-width: 170px; 
        min-width: 170px;
        max-height: 40px; 
        min-height: 20px;
        height: 10px;
       
    }
    .H_content_map{
        font-weight: bold;  
    }
    .conten_map{
        font-weight: 350;
    }
    .select2-container .select2-selection--single .select2-selection__rendered {
        padding-right: unset;
    }

   
</style>
 <?php
            error_reporting(0);
            $ans=$this->LC_all; 
            $ans2 = $this->findPermission;
    $CheckShareWithMe = false;
    $member = Session::get('member');
    if($member){
        //print_r($member);
        $member_id =   $member["id_member"];
    }
    else{
        //print("null");
        $member_id = -1;
    }
    $keyAccPermission = [];
    foreach ($ans2 as $key => $value) {
        $keyAccPermission[$value['accession_number']] = $ans2[$key];
    }
    foreach ($ans as $key => $value) {
        if( $value['status_ow'] == 'Public' || $value['id_member'] == $member_id){

        }
        else {
            // Start // chang data Unpublick to public required shar with me
            $CheckShareWithMe = false;
            $id_shareWithMe =  explode(",",$keyAccPermission[$value['accession_number']]['ownerSH']);
            foreach ($id_shareWithMe as $value2) {
                if( $member_id == $value2 ){
                    $CheckShareWithMe = true;
                }
            }
            // End // chang data Unpublick to public required shar with me
            if(!$CheckShareWithMe){
                unset($ans[$key]);
            }
           
        }
        

    }
            foreach($ans as $element) {
                $hash = $element['id_fact_location'];
    
                $LCT[$hash]['id'] = $element['id_fact_location'];
                $LCT[$hash]['path']  .= ','.$element['path'];
                $LCT[$hash]['accession'] .= ','.$element['accession_number'];
                
                $DropDown_c[] = $element['country'];
                $DropDown_p[] = $element['province'];
                $DropDown_d[] = $element['district'];
                $DropDown_sd[] = $element['sub_district'];

                if ($element['country'] != NULL) {
                    $LCT[$hash]['country'] = $element['country'];
                    $LCT[$hash]['lat'] = $element['country_lat'];
                    $LCT[$hash]['long'] = $element['country_long'];
                    # code...
                } 
                if ($element['province'] != NULL) {
                    $LCT[$hash]['province'] = $element['province'];
                    $LCT[$hash]['lat'] = $element['province_lat'];
                    $LCT[$hash]['long'] = $element['province_long'];
                    # code...
                }
                if ($element['district'] != NULL) {
                    $LCT[$hash]['district'] = $element['district'];
                    $LCT[$hash]['lat'] = $element['district_lat'];
                    $LCT[$hash]['long'] = $element['district_long'];
                    # code...
                }
                if ($element['sub_district'] != NULL) {
                    $LCT[$hash]['sub_district'] = $element['sub_district'];
                    $LCT[$hash]['lat'] = $element['sub_district_lat'];
                    $LCT[$hash]['long'] = $element['sub_district_long'];
                    # code...
                } 
                $LCT[$hash]['accession'] = ltrim($LCT[$hash]['accession'],' , ');
                $LCT[$hash]['path'] = ltrim($LCT[$hash]['path'],' , ');
                
            }; 
            
            $DropDown_c = array_unique($DropDown_c);
            $DropDown_c = array_values(array_filter(array_values($DropDown_c)));
            $DropDown_p = array_unique($DropDown_p);
            $DropDown_p = array_values(array_filter(array_values($DropDown_p)));
            $DropDown_d = array_unique($DropDown_d);
            $DropDown_d = array_values(array_filter(array_values($DropDown_d)));
            $DropDown_sd = array_unique($DropDown_sd);
            $DropDown_sd = array_values(array_filter(array_values($DropDown_sd)));
            error_reporting(1);
            // แปลง arr ที่ทำเปลี่ยนกลุ่มแล้วส่งขึ้น json แก้ json \u000
            $js_array = str_replace('\\u0000', "", json_encode($LCT)); 

            //แปลง [5,6,7,8] = [5],[6],[7]..
            $js_array2 = [];
            $i_ans2 =0;
            $ia_ans2 =0;
            foreach($ans2 as $element) {
                $js_array2[$i_ans2]['id_member'] = $element['id_member'];
                $js_array2[$i_ans2]['accession'] = $element['accession_number'];
                $js_array2[$i_ans2]['status_acc'] = $element['status_ow'];
                $js_array2[$i_ans2]['username'] = $element['username'];
                $js_array2[$i_ans2]['firstname'] = $element['firstname'];
                $js_array2[$i_ans2]['lastname'] = $element['lastname'];
                $js_array2[$i_ans2]['email'] = $element['email'];
                $js_array2[$i_ans2]['idMemberShare'] = explode(',',$element['ownerSH']);
                $i_ans2++;
            }
            echo " <script> 
                var arrJ = ".$js_array."; 
                var findPermission = ".json_encode($js_array2).";
                var sessionM = ".$this->sessionMember.";
            </script>";           
    ?>
                        <br>
                        <div class="row">
                            <div class="col-lg-6">
                                <h1 style="text-shadow: 2px 2px 8px orange;">Collector site</h1>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-lg-8 ">
                                <div class="card card_shadow">
                                    <div class="card-body">
                                        <div id="myDIV">
                                            <div id="map" style="width:100%; height: 511;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 ">
                                <div class="card card_shadow">
                                    <div class="card-body " id = "content_search1" >
                                        <div id="detail" class="row ">
                                            <div class="col-lg-12 col-md-12 A1 ">
                                                <div class="form-group ">
                                                    <div class="head_map">
                                                        <p class="font_weight">Target on click mark</p> 
                                                        <!-- <i class="mdi mdi-map-marker-multiple font_weight" data-name="mdi-map-marker-multiple" >Target</i> -->
                                                    </div>
                                                        <div class ="row"> 
                                                            <div class="col-md-6 col-sm-6 col-lg-6 "> 
                                                                <p class="font_weight">Latitude  : <span style = "margin:5px;font-weight: 500; " id = "lat_c" type="text" name="lat" ></span></p>    
                                                            </div>
                                                            <div class="col-md-6 col-sm-6 col-lg-6 "> 
                                                                <p class="font_weight">Longitude : <span style = "margin:5px;font-weight: 500; " id = "lon_c" type="text" name="lon" ></span></p>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 A2">
                                                <div class="template-demo">
                                                    <div class="row" >
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                    <div class="head_map">
                                                                        <i class="mdi mdi-map-marker-multiple font_weight" data-name="mdi-map-marker-multiple">Search</i>
                                                                    </div>
                                                                    <!-- <p class="font_weight " >Range area ( Km. ) :<span style="margin-left:20px"id="huge-value"></span></p> -->
                                                                    <p class="font_weight " >Range area ( Km. ) : <span><input type="text" id="huge-value" name="Length-area" value="1" ></span></p>
                                                                    <div id="value-range" class="ul-slider slider-success noUi-target noUi-ltr noUi-horizontal"></div>
                                                            </div>  
                                                        </div>
                                                    </div>  
                                                    <hr style="margin-bottom: 10px;margin-top: 5px;">     
                                                </div>
                                            </div>
                                           
                                            <div class="col-lg-12" id="detail">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-inline margin_p"  >
                                                                <p class="font_weight margin_input"> Latitude   : &nbsp</p> <input size="3"  id = "lat" type="text" name="lat" value="">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-inline margin_p"  >
                                                                <p class="font_weight margin_input"> Longitude : &nbsp</p> <input size="3"  id = "lon" type="text" name="lon" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr style="margin-bottom: 10px;margin-top: 5px;">
                                                    <div class="row" > 
                                                        <div class= "col-lg-6 margin_p">
                                                            <p class="font_weight "> Accession number :</p>
                                                        </div>
                                                        <div class= "col-lg-6 margin_p">
                                                            <input size="4.5" class="margin_input" id = "acce" type="text" name="acce" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr style="margin-bottom: 10px;margin-top: 5px;">
                                                <div class="row">
                                                    <div class = "col-lg-6 " >
                                                        <div class="form-group drop_draw_L" >
                                                        <a>Country</a>
                                                        <select id = "country_DD" class="js-example-basic-single select1-hidden-accessible" style="width:100%" tabindex="-1" aria-hidden="true">
                                                            <?php
                                                                sort($DropDown_c);
                                                                 if($DropDown_c[0] == NULL){
                                                                    echo "
                                                                        <option value=-1>NULL</option>
                                                                    ";
                                                                }
                                                                else{
                                                                    echo "<option value=-1>( Choose , Fill )</option>";
                                                                    for ($i=0; $i < sizeof($DropDown_c); $i++) { 
                                                                        echo "
                                                                            <option value='".$DropDown_c[$i]."'>".$DropDown_c[$i]."</option>
                                                                        ";
                                                                        # code...
                                                                    }
                                                                }
                                                            ?>
                                                        </select>
                                                        </div>
                                                    </div>
                                                    <div class = "col-lg-6 ">
                                                        <div class="form-group drop_draw_L">
                                                        <a>Province</a>
                                                        <select id = "province_DD" class="js-example-basic-single select2-hidden-accessible" style="width:100%" tabindex="-1" aria-hidden="true">
                                                            <?php
                                                                sort($DropDown_p);
                                                               if($DropDown_p[0] == NULL){
                                                                echo "
                                                                    <option value=-1>NULL</option>
                                                                ";
                                                                }
                                                                else{
                                                                    echo "<option value=-1>( Choose , Fill )</option>";
                                                                    for ($i=0; $i < sizeof($DropDown_p); $i++) { 
                                                                        echo "
                                                                            <option value='".$DropDown_p[$i]."'>".$DropDown_p[$i]."</option>
                                                                        ";
                                                                        # code...
                                                                    }
                                                                }
                                                            ?>
                                                        </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class = "col-lg-6 " >
                                                        <div class="form-group drop_draw_L" >
                                                        <a>District</a>
                                                        <select id = "district_DD" class="js-example-basic-single select3-hidden-accessible" style="width:100%" tabindex="-1" aria-hidden="true">
                                                            <?php
                                                                sort($DropDown_d);
                                                                if($DropDown_d[0] == NULL){
                                                                    echo "
                                                                        <option value=-1>NULL</option>
                                                                    ";
                                                                }
                                                                else{
                                                                    echo "<option value=-1>( Choose , Fill )</option>";
                                                                    for ($i=0; $i < sizeof($DropDown_d); $i++) { 
                                                                        echo "
                                                                            <option value='".$DropDown_d[$i]."'>".$DropDown_d[$i]."</option>
                                                                        ";
                                                                        # code...
                                                                    }
                                                                }
                                                            ?>
                                                        </select>
                                                        </div>
                                                    </div>
                                                    <div class = "col-lg-6 " >
                                                        <div class="form-group drop_draw_L" >
                                                        <a>Sub district</a>
                                                        <select id = "sub_district_DD" class="js-example-basic-single select4-hidden-accessible" style="width:100%" tabindex="-1" aria-hidden="true">
                                                            <?php
                                                                sort($DropDown_sd);
                                                                if($DropDown_sd[0] == NULL){
                                                                    echo "
                                                                        <option value=-1>NULL</option>
                                                                    ";
                                                                }
                                                                else{
                                                                    echo "<option value=-1>( Choose , Fill )</option>";
                                                                    for ($i=0; $i < sizeof($DropDown_sd); $i++) { 
                                                                        echo "
                                                                            <option value='".$DropDown_sd[$i]."'>".$DropDown_sd[$i]."</option>
                                                                        ";
                                                                        # code...
                                                                    }
                                                                }
                                                            ?>
                                                        </select>
                                                        </div>
                                                    </div>
                                                </div>  
                                                <center><button class=" btn btn-success btn-md"  id = "search-acc" type="button"><i class="fa fa-search"></i>Search</button><button class="btn btn-danger btn-md"  style="margin-left: 5%;" id = "clear_content_search" type="button"><i class="mdi mdi-refresh"></i>Clear</button></center>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div  class="form-group row" style = "margin-top:10px">
                            <div class="col-lg-12">
                                <div class="card card_shadow card-image">
                                    <div class="card-body">
                                        <p>Found total
                                            <span id="gene"></span><span id="gene_total"></span>
                                        </p>
                                        <div id="myImageA1" class='row remo  portfolio-grid'></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div  class="form-group row">
                            <div class="col-lg-12">
                                <div class="card card_shadow card-image">
                                    <div class="card-body">
                                        <p >Found nearby 
                                            <span id="Sp"></span><span id="gene_total"></span>  
                                        </p>
                                        <div id="myImageF1" class='row remo portfolio-grid'></div>
                                    </div>
                                </div>
                            </div>          
                        </div>                                  
<form id="sent_form" action="detail" method="post" target="_blank">
    <input id='id_fact_tomato' type='hidden' value='' name='id_accession_number'>
    <input id='sent_acc_number' type='hidden' value='' name='accession_number'>    
</form>                       
<input style = "margin:5px" id = "distance_search" type="text" name="distance_search" value="100000" hidden>                  
<script src="theme/assets/js/shared/select2.js"></script>                        

<script>
            var base_url = "<?php echo URL; ?>";
</script>
<script src="<?php echo URL ?>public/js/location_search.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwVxLnsuNM9mJUqDFkj6r7FSxVcQCh4ic&language=en&region=EN&callback=asree" async defer></script>