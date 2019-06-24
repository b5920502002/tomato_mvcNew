
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
    height: 30px !important;
}
table.dataTable tbody td {
    padding: 5px 5px 5px 10px;
}
.table td img
{
    border-radius: 100%;
    max-height: 100px;
    max-width: 100px;
    width: 100%;
    height: 100%;
}
table tr td img,
table tr td.imge
{
    height: 100px !important;
    width: 100px !important;
    text-align: center !important;
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
.hidden{
    display: none;
}
</style>
<body onload="loading()">
    <?php 
    $tomato = $this->search;
    //  Start : Asree ADD
    // print_r($tomato);
    // $ShareWithMe = $this->ShareWithMe;
    // $CheckShareWithMe = false;
    // $member = Session::get('member');
    // if($member){
    //     //print_r($member);
    //     $member_id =   $member["id_member"];
    // }
    // else{
    //     //print("null");
    //     $member_id = -1;
    // }
    // foreach ($tomato as $key => $value) {
    //     if( $value['status_ow'] == 'Public' ){
  
    //     }
    //     else {
           
    //         // Start // chang data Unpublick to public required shar with me
    //         $CheckShareWithMe = false;
    //         foreach ($ShareWithMe as $key2=> $value2) {
    //             if( $value2['id_fact_tomato'] == $value['id_fact_tomato'] ){
    //                 $tomato[$key]['status_ow'] = 'Public';
    //                 $CheckShareWithMe = true;
    //                 break;
    //             }
    //         }
    //         // End // chang data Unpublick to public required shar with me
    //         if($CheckShareWithMe){

    //         }
    //         else if( $member_id != $value['id_member'] ){
    //             unset($tomato[$key]);
    //         }
    //     }
        

    // }
        // End : Asree Add
        //print_r($tomato);
    ?>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body top">
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a href="general_infomation">Home</a>
                    </li>        
                    <li class="breadcrumb-item">
                        <a href="javascript:history.go(-1)">Physical Search</a>
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
                      </div>
                  </div>
                            <!--
                            <div class="row">
                              <div class="col-md-12">
                              <p class="red right"><a href="#" >+more</a></p>
                              </div>
                            </div>
                        -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p class="text-result">Search results <span class="red"><?php echo sizeof($tomato) ?></span> items</p>

</div>

</div>
</div>              

<!-- หน้าเว็บ -->
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card " >
            <div class="card-body">

                <div class="row">

                    <div id="bar-loader" class="bar-loader hidden" style="margin-top: 100px; margin-bottom: 100px;">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

                    <div class="col-md-12 hidden" id="disp">

                        <form id="sent_form" action="detail" method="post">
                            <input id='id_fact_tomato' type='hidden' value='' name='id_accession_number'>
                            <input id='sent_acc_number' type='hidden' value='' name='accession_number'>           
                            <?php 
                            if($tomato)
                            {                                                       
                             ?>
                             <table id="data" class="table table-bordered" style="width:100%;">
                                <thead>

                                    <tr align="center">
                                        <th >Accession number</th>
                                        
                                        <?php
                                        foreach($tomato as $key=>$value)
                                        {
                                            $v = $value['accession_number'] ;
                                            echo "<th>
                                            <button type='button' data-accnumber='$v' data-id='".$value['id_accession_number']."'class='btn btn-danger btn-sm btn-send' 
                                            value='".$value['id_accession_number']."'".">".$value['accession_number']??'-'."</button>
                                            </th>";
                                        }
                                        ?>


                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td bgcolor='#ff6258' class="text-white">Photo</td>
                                        <?php
                                        foreach($tomato as $key=>$value)
                                        {
                                            echo "<td bgcolor='#ff6258'></td>";
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <td> </td>
                                        <?php
                                        $path = $this->image_result;
                                        $p = 0;
                                        $index = 0;
                                        $len_key = sizeof($tomato);
                                        foreach($path as $key=>$value)
                                        {
                                            
                                            $path = $value['path'];
                                            echo "<td class='imge'> <a> <img class='image' src='".URL."$path' ></a></td>";
                                            
                                            $index++;
                                            if($index ==  $len_key){
                                                break;
                                            }
                                            
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <td bgcolor='#ff6258' class="text-white">Fruit</td>
                                        <?php
                                        foreach($tomato as $key=>$value)
                                        {
                                            echo "<td bgcolor='#ff6258'></td>";
                                        }
                                        ?>
                                    </tr>

                                    <tr>
                                        <td>Fruit weight</td>
                                        <?php
                                        foreach($tomato as $key=>$value)
                                        {
                                            echo "<td>".round($value['fruit_weight_g'],2)??'-'."</td>";
                                        }
                                        ?>
                                    </tr>

                                    <tr>
                                        <td>Fruit size</td>
                                        <?php
                                        foreach($tomato as $key=>$value)
                                        {
                                            echo "<td>".$value['fruit_size']??'-'."</td>";
                                        }
                                        ?>
                                    </tr>

                                    <tr>
                                        <td>Fruit size homogeneity</td>
                                        <?php
                                        foreach($tomato as $key=>$value)
                                        {
                                            echo "<td>".$value['fruit_size_homogeneity']??'-'."</td>";
                                        }
                                        ?>
                                    </tr>

                                    <tr>
                                        <td>Exterior colour of mature fruit</td>
                                        <?php
                                        foreach($tomato as $key=>$value)
                                        {
                                            echo "<td>".$value['exterior_colour_of_mature_fruit']??'-'."</td>";
                                        }
                                        ?>
                                    </tr>

                                    <tr>
                                        <td>Presence of green shoulder trips on the fruit</td>
                                        <?php
                                        foreach($tomato as $key=>$value)
                                        {
                                            echo "<td>".$value['presence_of_green_shoulder_trips_on_the_fruit']??'-'."</td>";
                                        }
                                        ?>
                                    </tr>

                                    <tr>
                                        <td>Intensity of greenback</td>
                                        <?php
                                        foreach($tomato as $key=>$value)
                                        {
                                            echo "<td>".$value['intensity_of_greenback']??'-'."</td>";
                                        }
                                        ?>
                                    </tr>

                                    <tr>
                                        <td>Fruit pubescence</td>
                                        <?php
                                        foreach($tomato as $key=>$value)
                                        {
                                            echo "<td>".$value['fruit_pubescence']??'-'."</td>";
                                        }
                                        ?>
                                    </tr>

                                    <tr>
                                        <td>Predominant fruit shape</td>
                                        <?php
                                        foreach($tomato as $key=>$value)
                                        {
                                            echo "<td>".$value['predominant_fruit_shape']??'-'."</td>";
                                        }
                                        ?>
                                    </tr>

                                    <tr>
                                        <td>Intensity of exterior colour</td>
                                        <?php
                                        foreach($tomato as $key=>$value)
                                        {
                                            echo "<td>".$value['intensity_of_exterior_colour']??'-'."</td>";
                                        }
                                        ?>
                                    </tr>

                                    <tr>
                                        <td>Ribbing at calyx end</td>
                                        <?php
                                        foreach($tomato as $key=>$value)
                                        {
                                            echo "<td>".$value['ribbing_at_calyx_end']??'-'."</td>";
                                        }
                                        ?>
                                    </tr>

                                    <tr>
                                        <td>Easiness of fruit to detach from pedicel</td>
                                        <?php
                                        foreach($tomato as $key=>$value)
                                        {
                                            echo "<td>".$value['easiness_of_fruit_to_detach_from_pedicel']??'-'."</td>";
                                        }
                                        ?>
                                    </tr>

                                    <tr>
                                        <td>Fruit shoulder shape</td>
                                        <?php
                                        foreach($tomato as $key=>$value)
                                        {
                                            echo "<td>".$value['fruit_shoulder_shape']??'-'."</td>";
                                        }
                                        ?>
                                    </tr>

                                    <tr>
                                        <td>Presence absence of jiontless pedicel</td>
                                        <?php
                                        foreach($tomato as $key=>$value)
                                        {
                                            echo "<td>".$value['presence_absence_of_jiontless_pedicel']??'-'."</td>";
                                        }
                                        ?>
                                    </tr>

                                    <tr>
                                        <td>Easiness of fruit wall skin to be peeled</td>
                                        <?php
                                        foreach($tomato as $key=>$value)
                                        {
                                            echo "<td>".$value['easiness_of_fruit_wall_skin_to_be_peeled']??'-'."</td>";
                                        }
                                        ?>
                                    </tr>

                                    <tr>
                                        <td>Skin colour of ripe fruit</td>
                                        <?php
                                        foreach($tomato as $key=>$value)
                                        {
                                            echo "<td>".$value['skin_colour_of_ripe_fruit']??'-'."</td>";
                                        }
                                        ?>
                                    </tr>

                                    <tr>
                                        <td>Flesh colour of peiricarp interior</td>
                                        <?php
                                        foreach($tomato as $key=>$value)
                                        {
                                            echo "<td>".$value['flesh_colour_of_peiricarp_interior']??'-'."</td>";
                                        }
                                        ?>
                                    </tr>

                                    <tr>
                                        <td>Flesh colour intensity</td>
                                        <?php
                                        foreach($tomato as $key=>$value)
                                        {
                                            echo "<td>".$value['flesh_colour_intensity']??'-'."</td>";
                                        }
                                        ?>
                                    </tr>

                                    <tr>
                                        <td>Colour intensity of core</td>
                                        <?php
                                        foreach($tomato as $key=>$value)
                                        {
                                            echo "<td>".$value['colour_intensity_of_core']??'-'."</td>";
                                        }
                                        ?>
                                    </tr>

                                    <tr>
                                        <td>Fruit cross sectional shape</td>
                                        <?php
                                        foreach($tomato as $key=>$value)
                                        {
                                            echo "<td>".$value['fruit_cross_sectional_shape']??'-'."</td>";
                                        }
                                        ?>
                                    </tr>

                                    <tr>
                                        <td>Shape of pistil scar</td>
                                        <?php
                                        foreach($tomato as $key=>$value)
                                        {
                                            echo "<td>".$value['shape_of_pistil_scar']??'-'."</td>";
                                        }
                                        ?>
                                    </tr>

                                    <tr>
                                        <td>Fruit blossom end shape</td>
                                        <?php
                                        foreach($tomato as $key=>$value)
                                        {
                                            echo "<td>".$value['fruit_blossom_end_shape']??'-'."</td>";
                                        }
                                        ?>
                                    </tr>

                                    <tr>
                                        <td>Blossom end scar condition</td>
                                        <?php
                                        foreach($tomato as $key=>$value)
                                        {
                                            echo "<td>".$value['blossom_end_scar_condition']??'-'."</td>";
                                        }
                                        ?>
                                    </tr>

                                    <tr>
                                        <td>Fruit firmness after storage</td>
                                        <?php
                                        foreach($tomato as $key=>$value)
                                        {
                                            echo "<td>".$value['fruit_firmness_after_storage']??'-'."</td>";
                                        }
                                        ?>
                                    </tr>

                                    <!-- ******* End Fruit ******** -->


                                    <!-- ******* Start Plant ******** -->                                                            
                                    <tr>
                                        <td bgcolor='#ff6258' class="text-white">Plant</td>
                                        <?php
                                        foreach($tomato as $key=>$value)
                                        {
                                            echo "<td bgcolor='#ff6258'></td>";
                                        }
                                        ?>
                                    </tr>

                                    <td>Plant growth type</td>
                                    <?php
                                    foreach($tomato as $key=>$value)
                                    {
                                        echo "<td>".$value['plant_growth_type']??'-'."</td>";
                                    }
                                    ?>
                                </tr>

                                <td>Plant size</td>
                                <?php
                                foreach($tomato as $key=>$value)
                                {
                                    echo "<td>".$value['plant_size']??'-'."</td>";
                                }
                                ?>
                            </tr>

                            <td>Stem pubescence density</td>
                            <?php
                            foreach($tomato as $key=>$value)
                            {
                                echo "<td>".$value['stem_pubescence_density']??'-'."</td>";
                            }
                            ?>
                        </tr>

                        <td>Stem internode length</td>
                        <?php
                        foreach($tomato as $key=>$value)
                        {
                            echo "<td>".$value['stem_internode_length']??'-'."</td>";
                        }
                        ?>
                    </tr>

                    <td>Foliage density</td>
                    <?php
                    foreach($tomato as $key=>$value)
                    {
                        echo "<td>".$value['foliage_density']??'-'."</td>";
                    }
                    ?>
                </tr>

                <td>Number of leaves under 1st inflorescence</td>
                <?php
                foreach($tomato as $key=>$value)
                {
                    echo "<td>".$value['number_of_leaves_under_1st_inflorescence']??'-'."</td>";
                }
                ?>
            </tr>

            <td>Leaf attitude</td>
            <?php
            foreach($tomato as $key=>$value)
            {
                echo "<td>".$value['leaf_attitude']??'-'."</td>";
            }
            ?>
        </tr>

        <td>Leaf type</td>
        <?php
        foreach($tomato as $key=>$value)
        {
            echo "<td>".$value['leaf_type']??'-'."</td>";
        }
        ?>
    </tr>

    <td>Degree of leaf dissection</td>
    <?php
    foreach($tomato as $key=>$value)
    {
        echo "<td>".$value['degree_of_leaf_dissection']??'-'."</td>";
    }
    ?>
</tr>

<td>Anthocyanin colouration of leaf veins</td>
<?php
foreach($tomato as $key=>$value)
{
    echo "<td>".$value['anthocyanin_colouration_of_leaf_veins']??'-'."</td>";
}
?>
</tr>





<!-- ******* End Plant ******** -->

<!-- ******* Start Seedling ******** -->


<tr>
    <td bgcolor='#ff6258' class="text-white">Seedling</td>
    <?php
    foreach($tomato as $key=>$value)
    {
        echo "<td bgcolor='#ff6258'></td>";
    }
    ?>
</tr>

<td>Hypocotyl colour</td>
<?php
foreach($tomato as $key=>$value)
{
    echo "<td>".$value['hypocotyl_colour']??'-'."</td>";
}
?>
</tr>

<td>Hypocotyl colour intensity</td>
<?php
foreach($tomato as $key=>$value)
{
    echo "<td>".$value['hypocotyl_colour_intensity']??'-'."</td>";
}
?>
</tr>

<td>Hypocotyl pubescence</td>
<?php
foreach($tomato as $key=>$value)
{
    echo "<td>".$value['hypocotyl_pubescence']??'-'."</td>";
}
?>
</tr>


<!-- ******* End Seedling ******** -->

<!-- ******* Start Flower ******** -->                                                         
<tr>
    <td bgcolor='#ff6258' class="text-white">Flower</td>
    <?php
    foreach($tomato as $key=>$value)
    {
        echo "<td bgcolor='#ff6258'></td>";
    }
    ?>
</tr>

<td>Inflorescence type</td>
<?php
foreach($tomato as $key=>$value)
{
    echo "<td>".$value['inflorescence_type']??'-'."</td>";
}
?>
</tr>

<td>Corolla colour</td>
<?php
foreach($tomato as $key=>$value)
{
    echo "<td>".$value['corolla_colour']??'-'."</td>";
}
?>
</tr>

<td>Corolla blossom type</td>
<?php
foreach($tomato as $key=>$value)
{
    echo "<td>".$value['corolla_blossom_type']??'-'."</td>";
}
?>
</tr>

<td>Flower sterility type</td>
<?php
foreach($tomato as $key=>$value)
{
    echo "<td>".$value['flower_sterility_type']??'-'."</td>";
}
?>
</tr>

<td>Style position</td>
<?php
foreach($tomato as $key=>$value)
{
    echo "<td>".$value['style_position']??'-'."</td>";
}
?>
</tr>

<td>Style shape</td>
<?php
foreach($tomato as $key=>$value)
{
    echo "<td>".$value['style_shape']??'-'."</td>";
}
?>
</tr>

<td>Style hairiness</td>
<?php
foreach($tomato as $key=>$value)
{
    echo "<td>".$value['style_hairiness']??'-'."</td>";
}
?>
</tr>

<td>Dehiscence</td>
<?php
foreach($tomato as $key=>$value)
{
    echo "<td>".$value['dehiscence']??'-'."</td>";
}
?>
</tr>

<!-- ******* End Flower ******** -->

<!-- ******* Start Seed ******** -->                                                         
<tr>
    <td bgcolor='#ff6258' class="text-white">Seed</td>
    <?php
    foreach($tomato as $key=>$value)
    {
        echo "<td bgcolor='#ff6258'></td>";
    }
    ?>
</tr>

<td>Seed shape</td>
<?php
foreach($tomato as $key=>$value)
{
    echo "<td>".$value['seed_shape']??'-'."</td>";
}
?>
</tr>

<td>Seed colour</td>
<?php
foreach($tomato as $key=>$value)
{
    echo "<td>".$value['seed_colour']??'-'."</td>";
}
?>
</tr>

<!-- ******* End Seed ******** -->                                                           






</tbody>
</table>
<script>
    $(document).ready(function () {
        var table = $('#data').DataTable({
            fixedColumns: {
                leftColumns: 1
            },
            scrollY: "500px",
            scrollX: true,
            scrollCollapse: true,
            paging: false,
            ordering: false,
            columnDefs: [
            { searchable: false, targets: 0 }
            ]
        });

    });
</script>
<?php

}
else
{
    ?>
    <table id="data" class="table  table-bordered" style="width:100%">
        <tr><td style="text-align:center;">No data available</td></tr>
    </table>
    <?php
}
?>



</form>
</div>
</div>
</div>
</div>
</div>
</div>

<?php 
$search_list = array();
if(!empty($_POST['accession_number']))
{
    $search_list['accession_number']=$_POST['accession_number'];
}
if(isset($_POST['number_of_leaves_under_1st_inflorescence']))
{
    $number_of_leaves_under_1st_inflorescence=array();
    foreach($_POST['number_of_leaves_under_1st_inflorescence'] as $value)
    {
        $number_of_leaves_under_1st_inflorescence[]=$value;
    }   
    $search_list['number_of_leaves_under_1st_inflorescence']= $number_of_leaves_under_1st_inflorescence;            
}
if(isset($_POST['leaf_attitude']))
{
    $leaf_attitude=array();
    foreach($_POST['leaf_attitude'] as $value)
    {
        $leaf_attitude[] = $value;           
    }
    $search_list['leaf_attitude']= $leaf_attitude;            
}
if(isset($_POST['degree_of_leaf_dissection']))
{
    $degree_of_leaf_dissection=array();
    foreach($_POST['degree_of_leaf_dissection'] as $value)
    {
        $degree_of_leaf_dissection[] = $value;           
    }
    $search_list['degree_of_leaf_dissection']= $degree_of_leaf_dissection;            
}
if(isset($_POST['anthocyanin_colouration_of_leaf_veins']))
{
    $anthocyanin_colouration_of_leaf_veins=array();
    foreach($_POST['anthocyanin_colouration_of_leaf_veins'] as $value)
    {
        $anthocyanin_colouration_of_leaf_veins[] = $value;           
    }
    $search_list['anthocyanin_colouration_of_leaf_veins']= $anthocyanin_colouration_of_leaf_veins;            
}
if(isset($_POST['leaf_type']))
{
    $leaf_type=array();
    foreach($_POST['leaf_type'] as $value)
    {
        $leaf_type[]= $value;
    }
    $search_list['leaf_type']= $leaf_type;     
}
if($_POST['fruit_weight_g_start'] != 0 || $_POST['fruit_weight_g_end'] != 200)
{
    $fruit_weight_g = array();
    $val = array();
    $val[0] = $_POST['fruit_weight_g_start'];
    $val[1] = $_POST['fruit_weight_g_end'];
    $fruit_weight_g[]=$val[0];
    $fruit_weight_g[]=$val[1];
    $search_list['fruit_weight_g']= $fruit_weight_g;
}


if($_POST['vine_length_cm_start'] != 0 || $_POST['vine_length_cm_end'] != 200)
{
    $vine_length_cm = array();
    $val = array();
    $val[0] = $_POST['vine_length_cm_start'];
    $val[1] = $_POST['vine_length_cm_end'];
    $vine_length_cm[]=$val[0];
    $vine_length_cm[]=$val[1];
    $search_list['vine_length_cm']= $vine_length_cm;
}
if($_POST['primary_leaf_length_mm_start'] != 0 || $_POST['primary_leaf_length_mm_end'] != 100)
{
    $primary_leaf_length_mm = array();
    $val = array();
    $val[0] = $_POST['primary_leaf_length_mm_start'];
    $val[1] = $_POST['primary_leaf_length_mm_end'];
    $primary_leaf_length_mm[]=$val[0];
    $primary_leaf_length_mm[]=$val[1];
    $search_list['primary_leaf_length_mm']= $primary_leaf_length_mm;
}
if($_POST['primary_leaf_width_mm_start'] != 0 || $_POST['primary_leaf_width_mm_end'] != 50)
{
    $primary_leaf_width_mm = array();
    $val = array();
    $val[0] = $_POST['primary_leaf_width_mm_start'];
    $val[1] = $_POST['primary_leaf_width_mm_end'];
    $primary_leaf_width_mm[]=$val[0];
    $primary_leaf_width_mm[]=$val[1];
    $search_list['primary_leaf_width_mm']= $primary_leaf_width_mm;
}

if($_POST['petal_length_cm_start'] != 0 || $_POST['petal_length_cm_end'] != 2)
{
    $petal_length_cm = array();
    $val = array();
    $val[0] = $_POST['petal_length_cm_start'];
    $val[1] = $_POST['petal_length_cm_end'];
    $petal_length_cm[]=$val[0];
    $petal_length_cm[]=$val[1];
    $search_list['petal_length_cm']= $petal_length_cm;
}
if($_POST['sepal_length_cm_start'] != 0 || $_POST['sepal_length_cm_end'] != 2)
{
    $sepal_length_cm = array();
    $val = array();
    $val[0] = $_POST['sepal_length_cm_start'];
    $val[1] = $_POST['sepal_length_cm_end'];
    $sepal_length_cm[]=$val[0];
    $sepal_length_cm[]=$val[1];
    $search_list['sepal_length_cm']= $sepal_length_cm;
}
if($_POST['stamen_length_cm_start'] != 0 || $_POST['stamen_length_cm_end'] != 2)
{
    $stamen_length_cm = array();
    $val = array();
    $val[0] = $_POST['stamen_length_cm_start'];
    $val[1] = $_POST['stamen_length_cm_end'];
    $stamen_length_cm[]=$val[0];
    $stamen_length_cm[]=$val[1];
    $search_list['stamen_length_cm']= $stamen_length_cm;
}



if(isset($_POST['stem_internode_length']))
{
    $stem_internode_length=array();
    foreach($_POST['stem_internode_length'] as $value)
    {
        $stem_internode_length[]= $value;
    }

    $search_list['stem_internode_length']= $stem_internode_length;     
}
if(isset($_POST['foliage_density']))
{
    $foliage_density=array();
    foreach($_POST['foliage_density'] as $value)
    {
        $foliage_density[]= $value;
    }

    $search_list['foliage_density']= $foliage_density;     
}
if(isset($_POST['number_of_days_to_flowering']))
{
    $number_of_days_to_flowering=array();
    $tmp =$_POST['number_of_days_to_flowering'];
    $val =explode(",",$tmp); 
    $number_of_days_to_flowering[]=$val[0];
    $number_of_days_to_flowering[]=$val[1];

    $search_list['number_of_days_to_flowering']= $number_of_days_to_flowering;     
}
if(isset($_POST['number_of_flowers_per']))
{
    $number_of_flowers_per=array();
    $tmp =$_POST['number_of_flowers_per'];
    $val =explode(",",$tmp); 
    $number_of_flowers_per[]=$val[0];
    $number_of_flowers_per[]=$val[1];

    $search_list['number_of_flowers_per']= $number_of_flowers_per;     
}
if(isset($_POST['fruit_size']))
{
    $fruit_size=array();
    foreach($_POST['fruit_size'] as $key=>$value)
    {
        $fruit_size[]=$value;
    }
    $search_list['fruit_size']= $fruit_size;     
}
if(isset($_POST['exterior_colour_of_mature_fruit']))
{
    $exterior_colour_of_mature_fruit=array();
    foreach($_POST['exterior_colour_of_mature_fruit'] as $key=>$value)
    {
        $exterior_colour_of_mature_fruit[]=$value;
    }
    $search_list['exterior_colour_of_mature_fruit']= $exterior_colour_of_mature_fruit;     
}
if(isset($_POST['presence_of_green_shoulder_trips_on_the_fruit']))
{
    $presence_of_green_shoulder_trips_on_the_fruit=array();
    foreach($_POST['presence_of_green_shoulder_trips_on_the_fruit'] as $key=>$value)
    {
        $presence_of_green_shoulder_trips_on_the_fruit[]=$value;
    }
    $search_list['presence_of_green_shoulder_trips_on_the_fruit']= $presence_of_green_shoulder_trips_on_the_fruit;     
}
if(isset($_POST['fruit_size_homogeneity']))
{
    $fruit_size_homogeneity=array();
    foreach($_POST['fruit_size_homogeneity'] as $key=>$value)
    {
        $fruit_size_homogeneity[]=$value;
    }
    $search_list['fruit_size_homogeneity']= $fruit_size_homogeneity;     
}
if(isset($_POST['intensity_of_exterior_colour']))
{
    $intensity_of_exterior_colour=array();
    foreach($_POST['intensity_of_exterior_colour'] as $key=>$value)
    {
        $intensity_of_exterior_colour[]=$value;
    }
    $search_list['intensity_of_exterior_colour']= $intensity_of_exterior_colour;     
}
if(isset($_POST['ribbing_at_calyx_end']))
{
    $ribbing_at_calyx_end=array();
    foreach($_POST['ribbing_at_calyx_end'] as $key=>$value)
    {
        $ribbing_at_calyx_end[]=$value;
    }
    $search_list['ribbing_at_calyx_end']= $ribbing_at_calyx_end;     
}
if(isset($_POST['predominant_fruit_shape']))
{
    $predominant_fruit_shape=array();
    foreach($_POST['predominant_fruit_shape'] as $key=>$value)
    {
        $predominant_fruit_shape[]=$value;
    }
    $search_list['predominant_fruit_shape']= $predominant_fruit_shape;     
}
if(isset($_POST['fruit_pubescence']))
{
    $fruit_pubescence=array();
    foreach($_POST['fruit_pubescence'] as $key=>$value)
    {
        $fruit_pubescence[]=$value;
    }
    $search_list['fruit_pubescence']= $fruit_pubescence;     
}
if(isset($_POST['intensity_of_greenback']))
{
    $intensity_of_greenback=array();
    foreach($_POST['intensity_of_greenback'] as $key=>$value)
    {
        $intensity_of_greenback[]=$value;
    }
    $search_list['intensity_of_greenback']= $intensity_of_greenback;     
}
if(isset($_POST['fruit_shoulder_shape']))
{
    $fruit_shoulder_shape=array();
    foreach($_POST['fruit_shoulder_shape'] as $key=>$value)
    {
        $fruit_shoulder_shape[]=$value;
    }
    $search_list['fruit_shoulder_shape']= $fruit_shoulder_shape;     
}
if(isset($_POST['presence_absence_of_jiontless_pedicel']))
{
    $presence_absence_of_jiontless_pedicel=array();
    foreach($_POST['presence_absence_of_jiontless_pedicel'] as $key=>$value)
    {
        $presence_absence_of_jiontless_pedicel[]=$value;
    }
    $search_list['presence_absence_of_jiontless_pedicel']= $presence_absence_of_jiontless_pedicel;     
}
if(isset($_POST['easiness_of_fruit_to_detach_from_pedicel']))
{
    $easiness_of_fruit_to_detach_from_pedicel=array();
    foreach($_POST['easiness_of_fruit_to_detach_from_pedicel'] as $key=>$value)
    {
        $easiness_of_fruit_to_detach_from_pedicel[]=$value;
    }
    $search_list['easiness_of_fruit_to_detach_from_pedicel']= $easiness_of_fruit_to_detach_from_pedicel;     
}
if(isset($_POST['easiness_of_fruit_wall_skin_to_be_peeled']))
{
    $easiness_of_fruit_wall_skin_to_be_peeled=array();
    foreach($_POST['easiness_of_fruit_wall_skin_to_be_peeled'] as $key=>$value)
    {
        $easiness_of_fruit_wall_skin_to_be_peeled[]=$value;
    }
    $search_list['easiness_of_fruit_wall_skin_to_be_peeled']= $easiness_of_fruit_wall_skin_to_be_peeled;     
}
if(isset($_POST['flesh_colour_of_peiricarp_interior']))
{
    $flesh_colour_of_peiricarp_interior=array();
    foreach($_POST['flesh_colour_of_peiricarp_interior'] as $key=>$value)
    {
        $flesh_colour_of_peiricarp_interior[]=$value;
    }
    $search_list['flesh_colour_of_peiricarp_interior']= $flesh_colour_of_peiricarp_interior;     
}
if(isset($_POST['flesh_colour_intensity']))
{
    $flesh_colour_intensity=array();
    foreach($_POST['flesh_colour_intensity'] as $key=>$value)
    {
        $flesh_colour_intensity[]=$value;
    }
    $search_list['flesh_colour_intensity']= $flesh_colour_intensity;     
}
if(isset($_POST['colour_intensity_of_core']))
{
    $colour_intensity_of_core=array();
    foreach($_POST['colour_intensity_of_core'] as $key=>$value)
    {
        $colour_intensity_of_core[]=$value;
    }
    $search_list['colour_intensity_of_core']= $colour_intensity_of_core;     
}
if(isset($_POST['fruit_cross_sectional_shape']))
{
    $fruit_cross_sectional_shape=array();
    foreach($_POST['fruit_cross_sectional_shape'] as $key=>$value)
    {
        $fruit_cross_sectional_shape[]=$value;
    }
    $search_list['fruit_cross_sectional_shape']= $fruit_cross_sectional_shape;     
}
if(isset($_POST['skin_colour_of_ripe_fruit']))
{
    $skin_colour_of_ripe_fruit=array();
    foreach($_POST['skin_colour_of_ripe_fruit'] as $key=>$value)
    {
        $skin_colour_of_ripe_fruit[]=$value;
    }
    $search_list['skin_colour_of_ripe_fruit']= $skin_colour_of_ripe_fruit;     
}
if(isset($_POST['fruit_blossom_end_shape']))
{
    $fruit_blossom_end_shape=array();
    foreach($_POST['fruit_blossom_end_shape'] as $key=>$value)
    {
        $fruit_blossom_end_shape[]=$value;
    }
    $search_list['fruit_blossom_end_shape']= $fruit_blossom_end_shape;     
}
if(isset($_POST['fruit_firmness_after_storage']))
{
    $fruit_firmness_after_storage=array();
    foreach($_POST['fruit_firmness_after_storage'] as $key=>$value)
    {
        $fruit_firmness_after_storage[]=$value;
    }
    $search_list['fruit_firmness_after_storage']= $fruit_firmness_after_storage;     
}
if(isset($_POST['blossom_end_scar_condition']))
{
    $blossom_end_scar_condition=array();
    foreach($_POST['blossom_end_scar_condition'] as $key=>$value)
    {
        $blossom_end_scar_condition[]=$value;
    }
    $search_list['blossom_end_scar_condition']= $blossom_end_scar_condition;     
}
if(isset($_POST['shape_of_pistil_scar']))
{
    $shape_of_pistil_scar=array();
    foreach($_POST['shape_of_pistil_scar'] as $key=>$value)
    {
        $shape_of_pistil_scar[]=$value;
    }
    $search_list['shape_of_pistil_scar']= $shape_of_pistil_scar;     
}
if(isset($_POST['stem_pubescence_density']))
{
    $stem_pubescence_density=array();
    foreach($_POST['stem_pubescence_density'] as $key=>$value)
    {
        $stem_pubescence_density[]=$value;
    }
    $search_list['stem_pubescence_density']= $stem_pubescence_density;     
}
if(isset($_POST['corolla_colour']))
{
    $corolla_colour=array();
    foreach($_POST['corolla_colour'] as $key=>$value)
    {
        $corolla_colour[]=$value;
    }
    $search_list['corolla_colour']= $corolla_colour;     
}
if(isset($_POST['inflorescence_type']))
{
    $inflorescence_type=array();
    foreach($_POST['inflorescence_type'] as $key=>$value)
    {
        $inflorescence_type[]=$value;
    }
    $search_list['inflorescence_type']= $inflorescence_type;     
}
if(isset($_POST['corolla_blossom_type']))
{
    $corolla_blossom_type=array();
    foreach($_POST['corolla_blossom_type'] as $key=>$value)
    {
        $corolla_blossom_type[]=$value;
    }
    $search_list['corolla_blossom_type']= $corolla_blossom_type;     
}
if(isset($_POST['flower_sterility_type']))
{
    $flower_sterility_type=array();
    foreach($_POST['flower_sterility_type'] as $key=>$value)
    {
        $flower_sterility_type[]=$value;
    }
    $search_list['flower_sterility_type']= $flower_sterility_type;     
}
if(isset($_POST['style_position']))
{
    $style_position=array();
    foreach($_POST['style_position'] as $key=>$value)
    {
        $style_position[]=$value;
    }
    $search_list['style_position']= $style_position;     
}
if(isset($_POST['style_shape']))
{
    $style_shape=array();
    foreach($_POST['style_shape'] as $key=>$value)
    {
        $style_shape[]=$value;
    }
    $search_list['style_shape']= $style_shape;     
}
if(isset($_POST['style_hairiness']))
{
    $style_hairiness=array();
    foreach($_POST['style_hairiness'] as $key=>$value)
    {
        $style_hairiness[]=$value;
    }
    $search_list['style_hairiness']= $style_hairiness;     
}
if(isset($_POST['dehiscence']))
{
    $dehiscence=array();
    foreach($_POST['dehiscence'] as $key=>$value)
    {
        $dehiscence[]=$value;
    }
    $search_list['dehiscence']= $dehiscence;     
}
if(isset($_POST['seed_shape']))
{
    $seed_shape=array();
    foreach($_POST['seed_shape'] as $key=>$value)
    {
        $seed_shape[]=$value;
    }
    $search_list['seed_shape']= $seed_shape;     
}
if(isset($_POST['seed_colour']))
{
    $seed_colour=array();
    foreach($_POST['seed_colour'] as $key=>$value)
    {
        $seed_colour[]=$value;
    }
    $search_list['seed_colour']= $seed_colour;     
}
if(isset($_POST['hypocotyl_colour']))
{
    $hypocotyl_colour=array();
    foreach($_POST['hypocotyl_colour'] as $key=>$value)
    {
        $hypocotyl_colour[]=$value;
    }
    $search_list['hypocotyl_colour']= $hypocotyl_colour;     
}
if(isset($_POST['hypocotyl_colour_intensity']))
{
    $hypocotyl_colour_intensity=array();
    foreach($_POST['hypocotyl_colour_intensity'] as $key=>$value)
    {
        $hypocotyl_colour_intensity[]=$value;
    }
    $search_list['hypocotyl_colour_intensity']= $hypocotyl_colour_intensity;     
}
if(isset($_POST['hypocotyl_pubescence']))
{
    $hypocotyl_pubescence=array();
    foreach($_POST['hypocotyl_pubescence'] as $key=>$value)
    {
        $hypocotyl_pubescence[]=$value;
    }
    $search_list['hypocotyl_pubescence']= $hypocotyl_pubescence;     
}
if(isset($_POST['plant_growth_type']))
{
    $plant_growth_type=array();
    foreach($_POST['plant_growth_type'] as $key=>$value)
    {
        $plant_growth_type[]=$value;
    }
    $search_list['plant_growth_type']= $plant_growth_type;     
}
if(isset($_POST['plant_size']))
{
    $plant_size=array();
    foreach($_POST['plant_size'] as $key=>$value)
    {
        $plant_size[]=$value;
    }
    $search_list['plant_size']= $plant_size;     
}
?>
<input type="hidden" id="search_list" value='<?php echo json_encode($search_list); ?>'>
</body>
<script>
    $('.btn-send').click(function(){
        var id = $(this).attr('data-id');
        var acc_number = $(this).attr('data-accnumber');
        $("#id_fact_tomato").val(id);
        $("#sent_acc_number").val(acc_number);
        $('#sent_form').submit();
    });
</script>
<script src="<?php echo URL ?>theme/assets/js/shared/owl-carousel.js"></script>
<script>
    var search_list = JSON.parse($('#search_list').val());
    $('#search_by').empty();
    var item = 0;
    if(search_list['accession_number'])
    {
        $('#search_by').append('Accession Number : <span class="red"> '+search_list['accession_number']+' </span>');
        item++;
    }

    if(search_list['number_of_leaves_under_1st_inflorescence'])
    {
        $('#search_by').append(' Number of leaves under 1st inflorescence : ');
        for(i =0 ;i<search_list['number_of_leaves_under_1st_inflorescence'].length;i++)
        {
            if(i>0)
            {
                $('#search_by').append(', ');
            }
            $('#search_by').append('<span class="red"> '+search_list['number_of_leaves_under_1st_inflorescence'][i]+' </span>');
        }

        item++;
    }
    if(search_list['leaf_attitude'])
    {
        $('#search_by').append(' Leaf attitude : ');
        for(i =0 ;i<search_list['leaf_attitude'].length;i++)
        {
            if(i>0)
            {
                $('#search_by').append(', ');
            }
            $('#search_by').append('<span class="red"> '+search_list['leaf_attitude'][i]+' </span>');
        }

        item++;
    }
    if(search_list['degree_of_leaf_dissection'])
    {
        $('#search_by').append(' Degree of leaf dissection : ');
        for(i =0 ;i<search_list['degree_of_leaf_dissection'].length;i++)
        {
            if(i>0)
            {
                $('#search_by').append(', ');
            }
            $('#search_by').append('<span class="red"> '+search_list['degree_of_leaf_dissection'][i]+' </span>');
        }

        item++;
    }
    if(search_list['anthocyanin_colouration_of_leaf_veins'])
    {
        $('#search_by').append(' Anthocyanin colouration of leaf veins : ');
        for(i =0 ;i<search_list['anthocyanin_colouration_of_leaf_veins'].length;i++)
        {
            if(i>0)
            {
                $('#search_by').append(', ');
            }
            $('#search_by').append('<span class="red"> '+search_list['anthocyanin_colouration_of_leaf_veins'][i]+' </span>');
        }

        item++;
    }
    if(search_list['leaf_type'])
    {
        $('#search_by').append(' Leaf type : ');
        for(i =0 ;i<search_list['leaf_type'].length;i++)
        {
            if(i>0)
            {
                $('#search_by').append(', ');
            }
            $('#search_by').append('<span class="red"> '+search_list['leaf_type'][i]+' </span>');
        }

        item++;
    }
    if(search_list['fruit_weight_g'])
    {
        if(search_list['fruit_weight_g'][0] != null){
            $('#search_by').append('Fruit Weight (g): ');
            for(i =0 ;i<search_list['fruit_weight_g'].length;i++)
            {
                if(i>0)
                {
                    $('#search_by').append(' - ');
                }
                $('#search_by').append('<span class="red"> '+search_list['fruit_weight_g'][i]+' </span>');
            }

            item++;
        }
        
    }

    if(search_list['vine_length_cm'])
    {
        if(search_list['vine_length_cm'][0] != null){
            $('#search_by').append('Vine length (cm): ');
            for(i =0 ;i<search_list['vine_length_cm'].length;i++)
            {
                if(i>0)
                {
                    $('#search_by').append(' - ');
                }
                $('#search_by').append('<span class="red"> '+search_list['vine_length_cm'][i]+' </span>');
            }

            item++;
        }
        
    }
    if(search_list['primary_leaf_length_mm'])
    {
        if(search_list['primary_leaf_length_mm'][0] != null){
            $('#search_by').append('Primary leaf length(mm): ');
            for(i =0 ;i<search_list['primary_leaf_length_mm'].length;i++)
            {
                if(i>0)
                {
                    $('#search_by').append(' - ');
                }
                $('#search_by').append('<span class="red"> '+search_list['primary_leaf_length_mm'][i]+' </span>');
            }

            item++;
        }
        
    }
    if(search_list['primary_leaf_width_mm'])
    {
        if(search_list['primary_leaf_width_mm'][0] != null){
            $('#search_by').append('Primary leaf width(mm): ');
            for(i =0 ;i<search_list['primary_leaf_width_mm'].length;i++)
            {
                if(i>0)
                {
                    $('#search_by').append(' - ');
                }
                $('#search_by').append('<span class="red"> '+search_list['primary_leaf_width_mm'][i]+' </span>');
            }

            item++;
        }
        
    }

    if(search_list['petal_length_cm'])
    {
        if(search_list['petal_length_cm'][0] != null){
            $('#search_by').append('Petal length (cm): ');
            for(i =0 ;i<search_list['petal_length_cm'].length;i++)
            {
                if(i>0)
                {
                    $('#search_by').append(' - ');
                }
                $('#search_by').append('<span class="red"> '+search_list['petal_length_cm'][i]+' </span>');
            }

            item++;
        }
        
    }
    if(search_list['sepal_length_cm'])
    {
        if(search_list['sepal_length_cm'][0] != null){
            $('#search_by').append('Sepal length (cm): ');
            for(i =0 ;i<search_list['sepal_length_cm'].length;i++)
            {
                if(i>0)
                {
                    $('#search_by').append(' - ');
                }
                $('#search_by').append('<span class="red"> '+search_list['sepal_length_cm'][i]+' </span>');
            }

            item++;
        }
        
    }
    if(search_list['stamen_length_cm'])
    {
        if(search_list['stamen_length_cm'][0] != null){
            $('#search_by').append('Stamen length (cm): ');
            for(i =0 ;i<search_list['stamen_length_cm'].length;i++)
            {
                if(i>0)
                {
                    $('#search_by').append(' - ');
                }
                $('#search_by').append('<span class="red"> '+search_list['stamen_length_cm'][i]+' </span>');
            }

            item++;
        }
        
    }


    if(search_list['stem_internode_length'])
    {
        $('#search_by').append(' Stem internode length (cm) : ');
        for(i =0 ;i<search_list['stem_internode_length'].length;i++)
        {
            if(i>0)
            {
                $('#search_by').append(' - ');
            }
            $('#search_by').append('<span class="red"> '+search_list['stem_internode_length'][i]+' </span>');
        }

        item++;
    }
    if(search_list['foliage_density'])
    {
        $('#search_by').append(' Foliage density : ');
        for(i =0 ;i<search_list['foliage_density'].length;i++)
        {
            if(i>0)
            {
                $('#search_by').append(' - ');
            }
            $('#search_by').append('<span class="red"> '+search_list['foliage_density'][i]+' </span>');
        }

        item++;
    }
    if(search_list['number_of_days_to_flowering'])
    {
        $('#search_by').append(' Number of days to flowering : ');
        for(i =0 ;i<search_list['number_of_days_to_flowering'].length;i++)
        {
            if(i>0)
            {
                $('#search_by').append(' - ');
            }
            $('#search_by').append('<span class="red"> '+search_list['number_of_days_to_flowering'][i]+' </span>');
        }

        item++;
    }
    if(search_list['number_of_flowers_per'])
    {
        $('#search_by').append(' Number of flowers : ');
        for(i =0 ;i<search_list['number_of_flowers_per'].length;i++)
        {
            if(i>0)
            {
                $('#search_by').append(' - ');
            }
            $('#search_by').append('<span class="red"> '+search_list['number_of_flowers_per'][i]+' </span>');
        }

        item++;
    }
    if(search_list['fruit_size'])
    {
        $('#search_by').append(' Fruit Size : ');
        for(i =0 ;i<search_list['fruit_size'].length;i++)
        {
            if(i>0)
            {
                $('#search_by').append(', ');
            }
            $('#search_by').append('<span class="red"> '+search_list['fruit_size'][i]+' </span>');
        }

        item++;
    }
    if(search_list['exterior_colour_of_mature_fruit'])
    {
        $('#search_by').append(' Exterior color of mature fruit : ');
        for(i =0 ;i<search_list['exterior_colour_of_mature_fruit'].length;i++)
        {
            if(i>0)
            {
                $('#search_by').append(', ');
            }
            $('#search_by').append('<span class="red"> '+search_list['exterior_colour_of_mature_fruit'][i]+' </span>');
        }

        item++;
    }
    if(search_list['presence_of_green_shoulder_trips_on_the_fruit'])
    {
        $('#search_by').append(' Presence of green shoulder trips on the fruit : ');
        for(i =0 ;i<search_list['presence_of_green_shoulder_trips_on_the_fruit'].length;i++)
        {
            if(i>0)
            {
                $('#search_by').append(', ');
            }
            $('#search_by').append('<span class="red"> '+search_list['presence_of_green_shoulder_trips_on_the_fruit'][i]+' </span>');
        }

        item++;
    }
    if(search_list['predominant_fruit_shape'])
    {
        $('#search_by').append(' Predominant fruit shape : ');
        for(i =0 ;i<search_list['predominant_fruit_shape'].length;i++)
        {
            if(i>0)
            {
                $('#search_by').append(', ');
            }
            $('#search_by').append('<span class="red"> '+search_list['predominant_fruit_shape'][i]+' </span>');
        }

        item++;
    }
    if(search_list['fruit_size_homogeneity'])
    {
        $('#search_by').append(' Fruit size homogeneity : ');
        for(i =0 ;i<search_list['fruit_size_homogeneity'].length;i++)
        {
            if(i>0)
            {
                $('#search_by').append(', ');
            }
            $('#search_by').append('<span class="red"> '+search_list['fruit_size_homogeneity'][i]+' </span>');
        }

        item++;
    }
    if(search_list['intensity_of_exterior_colour'])
    {
        $('#search_by').append(' Intensity of exterior colour : ');
        for(i =0 ;i<search_list['intensity_of_exterior_colour'].length;i++)
        {
            if(i>0)
            {
                $('#search_by').append(', ');
            }
            $('#search_by').append('<span class="red"> '+search_list['intensity_of_exterior_colour'][i]+' </span>');
        }

        item++;
    }
    if(search_list['ribbing_at_calyx_end'])
    {
        $('#search_by').append(' Ribbing at calyx end : ');
        for(i =0 ;i<search_list['ribbing_at_calyx_end'].length;i++)
        {
            if(i>0)
            {
                $('#search_by').append(', ');
            }
            $('#search_by').append('<span class="red"> '+search_list['ribbing_at_calyx_end'][i]+' </span>');
        }

        item++;
    }
    if(search_list['intensity_of_greenback'])
    {
        $('#search_by').append(' Intensity of greenback : ');
        for(i =0 ;i<search_list['intensity_of_greenback'].length;i++)
        {
            if(i>0)
            {
                $('#search_by').append(', ');
            }
            $('#search_by').append('<span class="red"> '+search_list['intensity_of_greenback'][i]+' </span>');
        }

        item++;
    }
    if(search_list['fruit_pubescence'])
    {
        $('#search_by').append(' Fruit pubescence : ');
        for(i =0 ;i<search_list['fruit_pubescence'].length;i++)
        {
            if(i>0)
            {
                $('#search_by').append(', ');
            }
            $('#search_by').append('<span class="red"> '+search_list['fruit_pubescence'][i]+' </span>');
        }

        item++;
    }
    if(search_list['fruit_shoulder_shape'])
    {
        $('#search_by').append(' Fruit shoulder shape : ');
        for(i =0 ;i<search_list['fruit_shoulder_shape'].length;i++)
        {
            if(i>0)
            {
                $('#search_by').append(', ');
            }
            $('#search_by').append('<span class="red"> '+search_list['fruit_shoulder_shape'][i]+' </span>');
        }

        item++;
    }
    if(search_list['presence_absence_of_jiontless_pedicel'])
    {
        $('#search_by').append(' Presence absence of jiontless pedicel : ');
        for(i =0 ;i<search_list['presence_absence_of_jiontless_pedicel'].length;i++)
        {
            if(i>0)
            {
                $('#search_by').append(', ');
            }
            $('#search_by').append('<span class="red"> '+search_list['presence_absence_of_jiontless_pedicel'][i]+' </span>');
        }

        item++;
    }
    if(search_list['easiness_of_fruit_to_detach_from_pedicel'])
    {
        $('#search_by').append(' Easiness of fruit to detach from the pedicel : ');
        for(i =0 ;i<search_list['easiness_of_fruit_to_detach_from_pedicel'].length;i++)
        {
            if(i>0)
            {
                $('#search_by').append(', ');
            }
            $('#search_by').append('<span class="red"> '+search_list['easiness_of_fruit_to_detach_from_pedicel'][i]+' </span>');
        }

        item++;
    }
    if(search_list['easiness_of_fruit_wall_skin_to_be_peeled'])
    {
        $('#search_by').append(' Easiness of fruit wall skin to be peeled : ');
        for(i =0 ;i<search_list['easiness_of_fruit_wall_skin_to_be_peeled'].length;i++)
        {
            if(i>0)
            {
                $('#search_by').append(', ');
            }
            $('#search_by').append('<span class="red"> '+search_list['easiness_of_fruit_wall_skin_to_be_peeled'][i]+' </span>');
        }

        item++;
    }
    if(search_list['flesh_colour_of_peiricarp_interior'])
    {
        $('#search_by').append(' Flesh colour of peiricarp interior : ');
        for(i =0 ;i<search_list['flesh_colour_of_peiricarp_interior'].length;i++)
        {
            if(i>0)
            {
                $('#search_by').append(', ');
            }
            $('#search_by').append('<span class="red"> '+search_list['flesh_colour_of_peiricarp_interior'][i]+' </span>');
        }

        item++;
    }
    if(search_list['flesh_colour_intensity'])
    {
        $('#search_by').append(' Flesh colour intensity : ');
        for(i =0 ;i<search_list['flesh_colour_intensity'].length;i++)
        {
            if(i>0)
            {
                $('#search_by').append(', ');
            }
            $('#search_by').append('<span class="red"> '+search_list['flesh_colour_intensity'][i]+' </span>');
        }

        item++;
    }
    if(search_list['colour_intensity_of_core'])
    {
        $('#search_by').append(' Colour intensity of core : ');
        for(i =0 ;i<search_list['colour_intensity_of_core'].length;i++)
        {
            if(i>0)
            {
                $('#search_by').append(', ');
            }
            $('#search_by').append('<span class="red"> '+search_list['colour_intensity_of_core'][i]+' </span>');
        }

        item++;
    }
    if(search_list['fruit_cross_sectional_shape'])
    {
        $('#search_by').append(' Fruit cross sectional shape : ');
        for(i =0 ;i<search_list['fruit_cross_sectional_shape'].length;i++)
        {
            if(i>0)
            {
                $('#search_by').append(', ');
            }
            $('#search_by').append('<span class="red"> '+search_list['fruit_cross_sectional_shape'][i]+' </span>');
        }

        item++;
    }
    if(search_list['skin_colour_of_ripe_fruit'])
    {
        $('#search_by').append(' Skin colour of ripe fruit : ');
        for(i =0 ;i<search_list['skin_colour_of_ripe_fruit'].length;i++)
        {
            if(i>0)
            {
                $('#search_by').append(', ');
            }
            $('#search_by').append('<span class="red"> '+search_list['skin_colour_of_ripe_fruit'][i]+' </span>');
        }

        item++;
    }
    if(search_list['fruit_blossom_end_shape'])
    {
        $('#search_by').append(' Fruit blossom end shape : ');
        for(i =0 ;i<search_list['fruit_blossom_end_shape'].length;i++)
        {
            if(i>0)
            {
                $('#search_by').append(', ');
            }
            $('#search_by').append('<span class="red"> '+search_list['fruit_blossom_end_shape'][i]+' </span>');
        }

        item++;
    }
    if(search_list['fruit_firmness_after_storage'])
    {
        $('#search_by').append(' Fruit firmness after storage : ');
        for(i =0 ;i<search_list['fruit_firmness_after_storage'].length;i++)
        {
            if(i>0)
            {
                $('#search_by').append(', ');
            }
            $('#search_by').append('<span class="red"> '+search_list['fruit_firmness_after_storage'][i]+' </span>');
        }

        item++;
    }
    if(search_list['blossom_end_scar_condition'])
    {
        $('#search_by').append(' Blossom end scar condition : ');
        for(i =0 ;i<search_list['blossom_end_scar_condition'].length;i++)
        {
            if(i>0)
            {
                $('#search_by').append(', ');
            }
            $('#search_by').append('<span class="red"> '+search_list['blossom_end_scar_condition'][i]+' </span>');
        }

        item++;
    }
    if(search_list['shape_of_pistil_scar'])
    {
        $('#search_by').append(' Shape of pistil scar : ');
        for(i =0 ;i<search_list['shape_of_pistil_scar'].length;i++)
        {
            if(i>0)
            {
                $('#search_by').append(', ');
            }
            $('#search_by').append('<span class="red"> '+search_list['shape_of_pistil_scar'][i]+' </span>');
        }

        item++;
    }
    if(search_list['stem_pubescence_density'])
    {
        $('#search_by').append(' Stem pubescence density : ');
        for(i =0 ;i<search_list['stem_pubescence_density'].length;i++)
        {
            if(i>0)
            {
                $('#search_by').append(', ');
            }
            $('#search_by').append('<span class="red"> '+search_list['stem_pubescence_density'][i]+' </span>');
        }

        item++;
    }
    if(search_list['corolla_colour'])
    {
        $('#search_by').append(' Corolla colour : ');
        for(i =0 ;i<search_list['corolla_colour'].length;i++)
        {
            if(i>0)
            {
                $('#search_by').append(', ');
            }
            $('#search_by').append('<span class="red"> '+search_list['corolla_colour'][i]+' </span>');
        }

        item++;
    }
    if(search_list['inflorescence_type'])
    {
        $('#search_by').append(' Inflorescence type : ');
        for(i =0 ;i<search_list['inflorescence_type'].length;i++)
        {
            if(i>0)
            {
                $('#search_by').append(', ');
            }
            $('#search_by').append('<span class="red"> '+search_list['inflorescence_type'][i]+' </span>');
        }

        item++;
    }
    if(search_list['corolla_blossom_type'])
    {
        $('#search_by').append(' Corolla blossom type : ');
        for(i =0 ;i<search_list['corolla_blossom_type'].length;i++)
        {
            if(i>0)
            {
                $('#search_by').append(', ');
            }
            $('#search_by').append('<span class="red"> '+search_list['corolla_blossom_type'][i]+' </span>');
        }

        item++;
    }
    if(search_list['flower_sterility_type'])
    {
        $('#search_by').append(' Flower sterility type : ');
        for(i =0 ;i<search_list['flower_sterility_type'].length;i++)
        {
            if(i>0)
            {
                $('#search_by').append(', ');
            }
            $('#search_by').append('<span class="red"> '+search_list['flower_sterility_type'][i]+' </span>');
        }

        item++;
    }
    if(search_list['style_position'])
    {
        $('#search_by').append(' Style position : ');
        for(i =0 ;i<search_list['style_position'].length;i++)
        {
            if(i>0)
            {
                $('#search_by').append(', ');
            }
            $('#search_by').append('<span class="red"> '+search_list['style_position'][i]+' </span>');
        }

        item++;
    }
    if(search_list['style_shape'])
    {
        $('#search_by').append(' Style shape : ');
        for(i =0 ;i<search_list['style_shape'].length;i++)
        {
            if(i>0)
            {
                $('#search_by').append(', ');
            }
            $('#search_by').append('<span class="red"> '+search_list['style_shape'][i]+' </span>');
        }

        item++;
    }
    if(search_list['style_hairiness'])
    {
        $('#search_by').append(' Style hairiness : ');
        for(i =0 ;i<search_list['style_hairiness'].length;i++)
        {
            if(i>0)
            {
                $('#search_by').append(', ');
            }
            $('#search_by').append('<span class="red"> '+search_list['style_hairiness'][i]+' </span>');
        }

        item++;
    }
    if(search_list['dehiscence'])
    {
        $('#search_by').append(' Dehiscence : ');
        for(i =0 ;i<search_list['dehiscence'].length;i++)
        {
            if(i>0)
            {
                $('#search_by').append(', ');
            }
            $('#search_by').append('<span class="red"> '+search_list['dehiscence'][i]+' </span>');
        }

        item++;
    }
    if(search_list['seed_shape'])
    {
        $('#search_by').append(' Seed shape : ');
        for(i =0 ;i<search_list['seed_shape'].length;i++)
        {
            if(i>0)
            {
                $('#search_by').append(', ');
            }
            $('#search_by').append('<span class="red"> '+search_list['seed_shape'][i]+' </span>');
        }

        item++;
    }
    if(search_list['seed_colour'])
    {
        $('#search_by').append(' Seed colour : ');
        for(i =0 ;i<search_list['seed_colour'].length;i++)
        {
            if(i>0)
            {
                $('#search_by').append(', ');
            }
            $('#search_by').append('<span class="red"> '+search_list['seed_colour'][i]+' </span>');
        }

        item++;
    }
    if(search_list['hypocotyl_colour'])
    {
        $('#search_by').append(' Hypocotyl colour : ');
        for(i =0 ;i<search_list['hypocotyl_colour'].length;i++)
        {
            if(i>0)
            {
                $('#search_by').append(', ');
            }
            $('#search_by').append('<span class="red"> '+search_list['hypocotyl_colour'][i]+' </span>');
        }

        item++;
    }
    if(search_list['hypocotyl_colour_intensity'])
    {
        $('#search_by').append(' Hypocotyl colour intensity : ');
        for(i =0 ;i<search_list['hypocotyl_colour_intensity'].length;i++)
        {
            if(i>0)
            {
                $('#search_by').append(', ');
            }
            $('#search_by').append('<span class="red"> '+search_list['hypocotyl_colour_intensity'][i]+' </span>');
        }

        item++;
    }
    if(search_list['hypocotyl_pubescence'])
    {
        $('#search_by').append(' Hypocotyl pubescence : ');
        for(i =0 ;i<search_list['hypocotyl_pubescence'].length;i++)
        {
            if(i>0)
            {
                $('#search_by').append(', ');
            }
            $('#search_by').append('<span class="red"> '+search_list['hypocotyl_pubescence'][i]+' </span>');
        }

        item++;
    }
    if(search_list['plant_growth_type'])
    {
        $('#search_by').append(' Plant growth type : ');
        for(i =0 ;i<search_list['plant_growth_type'].length;i++)
        {
            if(i>0)
            {
                $('#search_by').append(', ');
            }
            $('#search_by').append('<span class="red"> '+search_list['plant_growth_type'][i]+' </span>');
        }

        item++;
    }
    if(search_list['plant_size'])
    {
        $('#search_by').append(' Plant size : ');
        for(i =0 ;i<search_list['plant_size'].length;i++)
        {
            if(i>0)
            {
                $('#search_by').append(', ');
            }
            $('#search_by').append('<span class="red"> '+search_list['plant_size'][i]+' </span>');
        }

        item++;
    }
    if(item == 0)
    {
        $('#search_by').append(' Accession Number : <span class="red"> All </span>');
    }

</script>

<script>
   $("#bar-loader").removeClass("hidden");

   function loading(){
    $("#bar-loader").addClass("hidden");
    $("#disp").removeClass("hidden");
};

</script>

