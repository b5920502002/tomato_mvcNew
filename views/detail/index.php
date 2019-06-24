<?php error_reporting(0); ?>
<head>
	<link href="theme/assets/css/vibrate-1.css" rel="stylesheet">
</link>
</head>
<style>
	@keyframes scale-up-center{0%{transform:scale(.5)}100%{transform:scale(1)}}

	@-webkit-keyframes scale-down-center{0%{-webkit-transform:scale(1);transform:scale(1)}100%{-webkit-transform:scale(.5);transform:scale(.5)}}@keyframes scale-down-center{0%{-webkit-transform:scale(1);transform:scale(1)}100%{-webkit-transform:scale(.5);transform:scale(.5)}}
	.breadcrumb
	{
		margin-bottom: 0rem;
	}
	.card .card-body.top
	{
		padding: 0rem;
	}
	b{
		margin-right: 10px;
	}
	iframe{
		width: 100%;
		height: 700px;
	}
	.row .lightGallery .image-tile{
		cursor: pointer ;
		padding: 20px;
		margin: 0;
		border-radius: 5px;
	}
	.image-tile:hover{
		background-color: skyblue;
	}
	.img-select{
		background-color: skyblue;
	}
	.circle{
		width: 50px;
		height: 50px;
		border-radius: 50%;
		background-color: rgb(255, 98, 88);
	}
	.in-circle{
		color: white;

	}
	.noUi-target .noUi-base .noUi-origin .noUi-handle.jump,.noUi-target .noUi-base{
		box-shadow: none;
		border: none;
		border-radius: 0;
	}
	.slider-danger .noUi-base .noUi-origin .noUi-handle.jump:after{
		background:none;
	}
	.s300x300{
		width: 300px;
		height: 250px;
	}
	.btn-inverse-dark {
		color: #424964;
		background-color: #ffffff;
		background-image: none;
		border-color: rgba(66, 73, 100, 0);
	}

	.btn-group {
		border: 1px solid #aaa;
		border-radius: 0.1875rem;
	}

	.btn-inverse-dark.focus,
	.btn-inverse-dark:focus {
		box-shadow: none;
	}

	.btn-inverse-dark:hover {
		opacity: 0.75;
	}

	.rounded, .loader-demo-box{
		margin-bottom: 10px;
	}
	.hidden{
		display: none;
	}
	#Advenced_search{
		color: #2196f3;
		cursor: pointer;
		margin:8px 0 0 15px;
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
	div.img-resize{
		margin-right: 20px;
		margin-bottom: 40px;
	}
	div.img-resize img {
		max-width: 100%;
		height: auto!important;
	}
	.img-back{
		padding-top: 20px;
		padding-left: 6%;
		padding-right: 0;
	}
	.bg-img-sm{
		padding: 7px;
		background-color: #ffd372;
		border-radius: 5px;
	}
	.btn{
		cursor: pointer;
	}
	#btn-selectImage{
		margin-right: 10px;
	}
	.blue-bg{
		background-color: skyblue;
	}
	.scale-up-center{
		animation:scale-up-center .4s cubic-bezier(.39,.575,.565,1.000) both;
	}
	.scale-down-center{
		-webkit-animation:scale-down-center .4s cubic-bezier(.25,.46,.45,.94) both;
		animation:scale-down-center .4s cubic-bezier(.25,.46,.45,.94) both;
	}
	#btn-deleteImage{
		margin-right: 10px;
		margin-left: 10px;
	}
	#gText1{
		padding: 0 100px 0 50px;
	}
	#gText2{
		padding: 0 50px 0 100px;
	}
	.highlight{
		color : #ff6258;
		font-style: oblique;
	}
	.option_none,
      .option_none2 {
        display: none;
      }
</style>
<script>

	function select(){
		$("#btn-deleteImage").show().removeClass('scale-down-center').addClass('scale-up-center');
		$("#btn-setMainImage").show().removeClass('scale-down-center').addClass('scale-up-center');
		$("#btn-selectImage").attr("onclick","cancelSelect()");
		$("#btn-selectImage").html("Cancel");
		$("#btn-selectImage").addClass("btn-outline-warning").removeClass("btn-outline-dark");
		$("#btn-deleteImage").addClass("btn-danger").removeClass("btn-secondary");
		$("#tabcontent-1").addClass("hidden");
		$("#tabcontent-2").removeClass("hidden");
		$(".forSelect").removeAttr("href");

		var min = 1;
		var max = 4;
		var count_rand = [];

		for (var i = 0; i < $(".forSelect").length; i++) {

			var random = Math.floor(Math.random() * (max - min + 1)) + min;
			count_rand[i] = random;

			if( i > 0 ){
				if(count_rand[i] == count_rand[i-1]){
					random = (random % 4) + 1 ;
				}
			}

			count_rand[i] = random;

			$(".forSelect").eq(i).addClass("vibrate-"+random);

		}

	}
	function cancelSelect(){
		$("#btn-deleteImage").show().removeClass('scale-up-center').addClass('scale-down-center').hide(500);
		$("#btn-setMainImage").show().removeClass('scale-up-center').addClass('scale-down-center').hide(500);
		$(".forSelect").removeClass (function (index, className) {
			return (className.match (/(^|\s)vibrate-\S+/g) || []).join(' ');
		});
		$("#btn-selectImage").attr("onclick","select()");
		$("#btn-selectImage").html("Select");
		$("#btn-selectImage").addClass("btn-outline-dark").removeClass("btn-outline-warning");
		$("#btn-deleteImage").removeClass("btn-danger").addClass("btn-secondary");
		$("#tabcontent-1").removeClass("hidden");
		$("#tabcontent-2").addClass("hidden");
		$(".forSelect").removeClass('blue-bg');
	}

</script>
<?php $detail = $this->
detail;?>
<div class="container-scroller">
	<div class="container-fluid page-body-wrapper">
		<div class="main-panel">
			<div class="content-wrapper">
				<!-- หน้าเว็บ -->
				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
						<div class="card">
							<div class="card-body top">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="general_infomation" style="text-decoration: none; color: #f12222;">
												Home
											</a>
										</li>

										<li class="breadcrumb-item">
											<a href="physical_search" style="text-decoration: none; color: #f12222;">
												Physical Search
											</a>
										</li>
										<!-- <li class="breadcrumb-item">
											<a href="javascript:history.go(-1)" style="text-decoration: none; color: #f12222;">
												Search results
											</a>
										</li> -->
										
										<?php

										if ($detail) {
											?>
											<li aria-current="page" class="breadcrumb-item active">
												Accession Number :
												<?php echo $detail['accession_number']; ?>
											</li>
										<?php }?>
									</ol>
								</nav>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">
									Accession number :
									<?php echo $detail['accession_number']; ?>
								</h4>
								<ul class="nav nav-tabs tab-solid tab-solid-danger" role="tablist">
									<li class="nav-item">
										<a aria-controls="details-5-1" aria-selected="true" class="nav-link active" data-toggle="tab" href="#details-5-1" id="tab-5-1" role="tab">
											General details
										</a>
									</li>
									<li class="nav-item">
										<a aria-controls="Physical-5-2" aria-selected="false" class="nav-link" data-toggle="tab" href="#Physical-5-2" id="tab-5-2" role="tab">
											Physical
										</a>
									</li>
									<li class="nav-item">
										<a aria-controls="Genome-5-3" aria-selected="false" class="nav-link" data-toggle="tab" href="#Genome-5-3" id="tab-5-3" role="tab">
											Genotype
										</a>
									</li>
									<li class="nav-item">
										<a aria-controls="Disease-5-4" aria-selected="false" class="nav-link" data-toggle="tab" href="#Disease-5-4" id="tab-5-4" role="tab">
											Disease
										</a>
									</li>
									<li class="nav-item">
										<a aria-controls="Location-5-6" aria-selected="false" class="nav-link" data-toggle="tab" href="#Location-5-6" id="tab-5-6" role="tab">
											Location
										</a>
									</li>
									<li class="nav-item">
										<a aria-controls="Germ-5-7" aria-selected="false" class="nav-link" data-toggle="tab" href="#Germ-5-7" id="tab-5-7" role="tab">
											Germplasm
										</a>
									</li>
									<li class="nav-item">
										<a aria-controls="Gallery-5-8" aria-selected="false" class="nav-link" data-toggle="tab" href="#Gallery-5-8" id="tab-5-8" role="tab">
											Gallery
										</a>
									</li>
								</ul>
								<div class="tab-content tab-content-solid">
									<div aria-labelledby="tab-5-1" class="tab-pane fade active show" id="details-5-1" role="tabpanel">
										<div style="margin: 40px 0px 40px 20px;">
											<div class="btn-group">
												<form action="detail/layout" class="hidden" id="layout_form" method="post" target="layout_frame">
													<input id="input_text_layout" name="text_layout" type="number" value="">
													<input name="accession_number_layout" type="text" value="<?php echo $detail['accession_number']; ?>">
												</input>
											</input>
										</form>
										<iframe class="hidden" frameborder="0" id="layout_frame" name="layout_frame" src="">
										</iframe>
										<button class="btn btn-inverse-dark btn-sm pic-right" id="btn-left" type="button">
											<i class="fa fa-align-justify">
											</i>
											<i class="fa fa-image">
											</i>
										</button>
										<button class="btn btn-inverse-dark btn-sm pic-left" id="btn-right" type="button">
											<i class="fa fa-image">
											</i>
											<i class="fa fa-align-justify">
											</i>
										</button>
									</div>
								</div>
								<form id="primary_upload_form" action="detail/upload_primary_img" method="post" target="frame_primary_image" enctype="multipart/form-data">
									<input type="text" name="setMainImage" id="input-setMainImage" class="hidden">
									<div class="row hidden" id="gText1">
										<div class="col-md-9">
											<p style="padding: 10px 100px 10px 20px; ">
												Tomato plants are vines, initially decumbent, typically growing 180 cm (6 ft) or more above the ground
												if supported, although erect bush varieties have been bred, generally 100 cm (3 ft) tall or shorter. Indeterminate types are "tender" perennials, dying annually in temperate climates (they are originally native to tropical highlands), although they can live up to three years in a greenhouse in some cases. Determinate types are annual in all climates.
												Tomato plants are dicots, and grow as a series of branching stems, with a terminal bud at the tip that does the actual growing. When that tip eventually stops growing, whether because of pruning or flowering, lateral buds take over and grow into other, fully functional, vines.
											</p>
										</div>
										<div class="col-md-3">
											<?php 
											$primary_image = $this->show_primary_img ;
											$owner = $this->owner_check ;
											$member = Session::get('member');

											 ?>
											<?php if($member['permission']=='admin' || $member['id_member'] == $owner['id_member']){ ?>

												<div class="admin-show">
													<img alt="Sample Image" class="img-fluid w-100 rounded" 
													src="<?php echo URL.$primary_image['path'] ?>">
													
													<button id="admin-edit-1" class="btn btn-block btn-outline-primary mt-2" type="button">Edit</button>
												</div>
												<div class="admin-edit hidden">
													<input id="input-primary-1" type="file" class="dropify" name="primary_image[]">
													<input type="hidden" name="primary_accession_number" value="<?php echo $detail['accession_number'] ?>">
													<button id="btn-primary-upload-1" class="btn btn-block btn-primary mt-2" type="button">Submit</button>
													<button id="admin-cancel-1" class="btn btn-block btn-outline-secondary mt-2" type="button">Cancel</button>
												</div>                     


											<?php }else{ ?>
												<img alt="Sample Image" class="img-fluid w-100 rounded" src="<?php echo URL.$primary_image['path'] ?>">
											<?php } ?>
										</img>
									</div>
								</div>
								<div class="row hidden" id="gText2">
									<div class="col-md-3">
										<?php if($member['permission']=='admin' || $member['id_member'] == $owner['id_member']){ ?>

											<div class="admin-show">
												<img alt="Sample Image" class="img-fluid w-100 rounded" src="<?php echo URL.$primary_image['path'] ?>">
												<button id="admin-edit-2" class="btn btn-block btn-outline-primary mt-2" type="button">Edit</button>
											</div>
											<div class="admin-edit hidden">
												<input id="input-primary-2" type="file" class="dropify" name="primary_image[]">
												<input type="hidden" name="primary_accession_number" value="<?php echo $detail['accession_number'] ?>">
												<button id="btn-primary-upload-2" class="btn btn-block btn-primary mt-2" type="button">Submit</button>
												<button id="admin-cancel-2" class="btn btn-block btn-outline-secondary mt-2" type="button">Cancel</button>
											</div>

										<?php }else{ ?>
											<img alt="Sample Image" class="img-fluid w-100 rounded" src="<?php echo URL.$primary_image['path'] ?>">
										<?php } ?>
									</img>
								</div>
								<div class="col-md-9">
									<p style="padding: 10px 100px 10px 20px; ">
										Tomato plants are vines, initially decumbent, typically growing 180 cm (6 ft) or more above the ground
										if supported, although erect bush varieties have been bred, generally 100 cm (3 ft) tall or shorter. Indeterminate types are "tender" perennials, dying annually in temperate climates (they are originally native to tropical highlands), although they can live up to three years in a greenhouse in some cases. Determinate types are annual in all climates.
										Tomato plants are dicots, and grow as a series of branching stems, with a terminal bud at the tip that does the actual growing. When that tip eventually stops growing, whether because of pruning or flowering, lateral buds take over and grow into other, fully functional, vines.
									</p>
								</div>
							</div>
						</form>

						<iframe src="" name="frame_primary_image" class="hidden" frameborder="0"></iframe>

					</div>
					<div aria-labelledby="tab-5-2" class="tab-pane fade " id="Physical-5-2" role="tabpanel">
						<div class="accordion basic-accordion" id="accordion" role="tablist">
							<div class="card">
								<div class="card-header" id="headingOne" role="tab">
									<h6 class="mb-0">
										<a aria-controls="collapseOne" aria-expanded="true" data-toggle="collapse" href="#collapseOne">
											<i class="card-icon mdi mdi-apple">
											</i>
											Fruit
										</a>
									</h6>
								</div>
								<div aria-labelledby="headingOne" class="collapse" data-parent="#accordion" id="collapseOne" role="tabpanel">
									<div class="card-body">
										<div class="row">
											<div class="col-md-3">
												<img alt="image" class="img-fluid rounded" src="<?php echo URL.$primary_image['path'] ?>">
											</img>
										</img>
									</img>
								</div>
								<?php
								foreach ($detail as $key => $value) {
									if($value == null || $value == ''){
										$detail[$key] = "No data." ;
									} 
								} ?>
								<div class="col-md-9">
									<p>
										<b>
											Fruit weight (g) :
										</b>
										<?php echo $detail['fruit_weight_g']; ?>
									</p>
									<p>
										<b>
											Fruit size :
										</b>
										<?php echo $detail['fruit_size']; ?>
									</p>
									<p>
										<b>
											Exterior color of mature fruit :
										</b>
										<?php echo $detail['exterior_colour_of_mature_fruit']; ?>
									</p>
									<p>
										<b>
											Predominant fruit shape :
										</b>
										<?php echo $detail['predominant_fruit_shape']; ?>
									</p>
									<p>
										<b>
											Intensity of greenback :
										</b>
										<?php echo $detail['intensity_of_greenback']; ?>
									</p>
									<p>
										<b>
											Fruit shoulder shape :
										</b>
										<?php echo $detail['fruit_shoulder_shape']; ?>
									</p>
									<p>
										<b>
											Easiness of fruit to detach from the pedicel :
										</b>
										<?php echo $detail['fruit_weight_g']; ?>
									</p>
									<p>
										<b>
											Easiness of fruit wall skin to be peeled :
										</b>
										<?php echo $detail['fruit_shoulder_shape']; ?>
									</p>
									<p>
										<b>
											Fruit blossom end shape :
										</b>
										<?php echo $detail['fruit_blossom_end_shape']; ?>
									</p>
									<p>
										<b>
											Shape of pistil scar :
										</b>
										<?php echo $detail['shape_of_pistil_scar']; ?>
									</p>
									<p>
										<b>
											Presence of green shoulder trips on the fruit :
										</b>
										<?php echo $detail['presence_of_green_shoulder_trips_on_the_fruit']; ?>
										<?php echo $detail['fruit_weight_g']; ?>
									</p>
									<p>
										<b>
											Fruit pubescence :
										</b>
										<?php echo $detail['fruit_pubescence']; ?>
									</p>
									<p>
										<b>
											Fruit size homogeneity :
										</b>
										<?php echo $detail['fruit_size_homogeneity']; ?>
									</p>
									<p>
										<b>
											Intensity of exterior colour :
										</b>
										<?php echo $detail['intensity_of_exterior_colour']; ?>
									</p>
									<p>
										<b>
											Ribbing at calyx end :
										</b>
										<?php echo $detail['ribbing_at_calyx_end']; ?>
									</p>
									<p>
										<b>
											Presence absence of jiontless pedicel :
										</b>
										<?php echo $detail['presence_absence_of_jiontless_pedicel']; ?>
									</p>
									<p>
										<b>
											Skin colour of ripe fruit :
										</b>
										<?php echo $detail['skin_colour_of_ripe_fruit']; ?>
									</p>
									<p>
										<b>
											Flesh colour of peiricarp interior :
										</b>
										<?php echo $detail['flesh_colour_of_peiricarp_interior']; ?>
									</p>
									<p>
										<b>
											Flesh colour intensity :
										</b>
										<?php echo $detail['flesh_colour_intensity']; ?>
									</p>
									<p>
										<b>
											Colour intensity of core:
										</b>
										<?php echo $detail['colour_intensity_of_core']; ?>
									</p>
									<p>
										<b>
											Fruit cross sectional shape :
										</b>
										<?php echo $detail['fruit_cross_sectional_shape']; ?>
									</p>
									<p>
										<b>
											Blossom end scar condition :
										</b>
										<?php echo $detail['blossom_end_scar_condition']; ?>
									</p>
									<p>
										<b>
											Fruit firmness after storage :
										</b>
										<?php echo $detail['fruit_firmness_after_storage']; ?>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="accordion basic-accordion" id="accordion" role="tablist">
				<div class="card">
					<div class="card-header" id="headingFour" role="tab">
						<h6 class="mb-0">
							<a aria-controls="collapseFour" aria-expanded="false" data-toggle="collapse" href="#collapseFour">
								<i class="card-icon mdi mdi-tree">
								</i>
								Plant
							</a>
						</h6>
					</div>
					<div aria-labelledby="headingFour" class="collapse" data-parent="#accordion" id="collapseFour" role="tabpanel">
						<div class="card-body">
							<div class="row">
								<div class="col-md-3">
									<img alt="image" class="img-fluid rounded resize" src="theme/assets/images/tomato/plant3.jpg">
									<img alt="image" class="img-fluid rounded resize" src="theme/assets/images/tomato/plant2.jpg">
								</img>
							</img>
						</div>
						<div class="col-md-9">
							<p>
								<b>
									Plant growth type :
								</b>
								<?php echo $detail['plant_growth_type']; ?>
							</p>
							<p>
								<b>
									Plant size :
								</b>
								<?php echo $detail['plant_size']; ?>
							</p>
							<p>
								<b>
									Stem pubescence density :
								</b>
								<?php echo $detail['stem_pubescence_density']; ?>
							</p>
							<p>
								<b>
									Stem internode length :
								</b>
								<?php echo $detail['stem_internode_length']; ?>
							</p>
							<p>
								<b>
									Foliage density :
								</b>
								<?php echo $detail['foliage_density']; ?>
							</p>
							<p>
								<b>
									Number of leaves under 1st inflorescence :
								</b>
								<?php echo $detail['number_of_leaves_under_1st_inflorescence']; ?>
							</p>
							<p>
								<b>
									Leaf attitude :
								</b>
								<?php echo $detail['leaf_attitude']; ?>
							</p>
							<p>
								<b>
									Leaf type :
								</b>
								<?php echo $detail['leaf_type']; ?>
							</p>
							<p>
								<b>
									Degree of leaf dissection :
								</b>
								<?php echo $detail['degree_of_leaf_dissection']; ?>
							</p>
							<p>
								<b>
									Anthocyanin colouration of leaf veins :
								</b>
								<?php echo $detail['anthocyanin_colouration_of_leaf_veins']; ?>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="accordion basic-accordion" id="accordion" role="tablist">
		<div class="card">
			<div class="card-header" id="headingTwo" role="tab">
				<h6 class="mb-0">
					<a aria-controls="collapseTwo" aria-expanded="false" data-toggle="collapse" href="#collapseTwo">
						<i class="card-icon fa fa-leaf">
						</i>
						Seedling
					</a>
				</h6>
			</div>
			<div aria-labelledby="headingTwo" class="collapse" data-parent="#accordion" id="collapseTwo" role="tabpanel">
				<div class="card-body">
					<div class="row">
						<div class="col-md-3">
							<img alt="image" class="img-fluid rounded" src="theme/assets/images/tomato/leaf1.jpg">
						</img>
					</div>
					<div class="col-md-9">
						<p>
							<b>
								Hypocotyl colour :
							</b>
							<?php echo $detail['hypocotyl_colour']; ?>
						</p>
						<p>
							<b>
								Hypocotyl colour intensity :
							</b>
							<?php echo $detail['hypocotyl_colour_intensity']; ?>
						</p>
						<p>
							<b>
								Hypocotyl pubescence :
							</b>
							<?php echo $detail['hypocotyl_pubescence']; ?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="accordion basic-accordion" id="accordion" role="tablist">
	<div class="card">
		<div class="card-header" id="headingThree" role="tab">
			<h6 class="mb-0">
				<a aria-controls="collapseThree" aria-expanded="false" data-toggle="collapse" href="#collapseThree">
					<i class="card-icon mdi mdi-flower">
					</i>
					Flower
				</a>
			</h6>
		</div>
		<div aria-labelledby="headingThree" class="collapse" data-parent="#accordion" id="collapseThree" role="tabpanel">
			<div class="card-body">
				<div class="row">
					<div class="col-md-3">
						<img alt="image" class="img-fluid rounded" src="theme/assets/images/tomato/flower1.jpg">
					</img>
				</div>
				<div class="col-md-9">
					<p>
						<b>
							Inflorescence type :
						</b>
						<?php echo $detail['inflorescence_type']; ?>
					</p>
					<p>
						<b>
							Corolla colour :
						</b>
						<?php echo $detail['corolla_colour']; ?>
					</p>
					<p>
						<b>
							Corolla blossom type :
						</b>
						<?php echo $detail['corolla_blossom_type']; ?>
					</p>
					<p>
						<b>
							Flower sterility type :
						</b>
						<?php echo $detail['flower_sterility_type']; ?>
					</p>
					<p>
						<b>
							Style position :
						</b>
						<?php echo $detail['style_position']; ?>
					</p>
					<p>
						<b>
							Style shape :
						</b>
						<?php echo $detail['style_shape']; ?>
					</p>
					<p>
						<b>
							Style hairiness :
						</b>
						<?php echo $detail['style_hairiness']; ?>
					</p>
					<p>
						<b>
							Dehiscence :
						</b>
						<?php echo $detail['dehiscence']; ?>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<div class="accordion basic-accordion" id="accordion" role="tablist">
	<div class="card">
		<div class="card-header" id="headingFive" role="tab">
			<h6 class="mb-0">
				<a aria-controls="collapseFive" aria-expanded="false" data-toggle="collapse" href="#collapseFive">
					<i class="card-icon mdi mdi-google-circles-communities">
					</i>
					Seed
				</a>
			</h6>
		</div>
		<div aria-labelledby="headingFive" class="collapse" data-parent="#accordion" id="collapseFive" role="tabpanel">
			<div class="card-body">
				<div class="row">
					<div class="col-md-3">
						<img alt="image" class="img-fluid rounded" src="theme/assets/images/tomato/seed1.jpg">
					</img>
				</div>
				<div class="col-md-9">
					<p>
						<b>
							Seed shape :
						</b>
						<?php echo $detail['seed_shape']; ?>
					</p>
					<p>
						<b>
							Seed colour :
						</b>
						<?php echo $detail['seed_colour']; ?>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
<!-- ############################ Start Genotype ##########################-->
<div aria-labelledby="tab-5-3" class="tab-pane fade" id="Genome-5-3" role="tabpanel">
	<div class="card-body">
		<form action="detail_genome_position" id="MyForm" method="post" name="MyForm" target="myframe">
			<div class="row">
				<div class="">
					<div class="form-group row">
						<label class="col-form-label" style="margin-right: 10px;">
							Position Range (Should not exceed 50,000)
						</label>
						<div class="col-sm-4">
							<input class="form-control" name="pos1" placeholder="0" type="text">
						</input>
					</div>
				</div>
			</div>
			<div class="">
				<div class="form-group row">
					<label class="col-form-label" style="margin-right: 15px;">
						-
					</label>
					<div class="col-sm-9">
						<input class="form-control" name="pos2" placeholder="50000" type="text">
					</input>
				</div>
			</div>
		</div>
		<button class="btn btn-primary" id="btnSearch" style="height: 38px; " type="submit">
			Search
		</button>
		<a id="Advenced_search">
			<span class="fa fa-sort-down" id="icon-AS">
			</span>
			Advenced search
		</a>
	</div>
	<div class="advancedSearch">
		<div class="row">
			<div class="form-group row AS">
				<label class="col-form-label" style="margin-right: 10px; margin-left: 255px;">
					Alleles
				</label>
				<div class="col-jump">
					<select class="form-control" id="allele1" name="allele[]">
						<option value="">
							None
						</option>
						<option value="A">
							A
						</option>
						<option value="T">
							T
						</option>
						<option value="C">
							C
						</option>
						<option value="G">
							G
						</option>
					</select>
				</div>
				<label class="col-form-label">
					/
				</label>
				<div class="col-jump">
					<select class="form-control" disabled="" id="allele2" name="allele[]">
						<option value="">
							None
						</option>
						<option value="A">
							A
						</option>
						<option value="T">
							T
						</option>
						<option value="C">
							C
						</option>
						<option value="G">
							G
						</option>
					</select>
				</div>
				<label class="col-form-label">
					/
				</label>
				<div class="col-jump">
					<select class="form-control" disabled="" id="allele3" name="allele[]">
						<option value="">
							None
						</option>
						<option value="A">
							A
						</option>
						<option value="T">
							T
						</option>
						<option value="C">
							C
						</option>
						<option value="G">
							G
						</option>
					</select>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="form-group row AS">
				<label class="col-form-label" style="margin-right: 10px; margin-left: 202px;">
					Chromosome
				</label>
				<div class="col-jump">
					<select class="form-control" name="chrom">
						<option value="">
							None
						</option>
						<option value="1">
							1
						</option>
						<option value="2">
							2
						</option>
						<option value="3">
							3
						</option>
						<option value="4">
							4
						</option>
						<option value="5">
							5
						</option>
						<option value="6">
							6
						</option>
						<option value="7">
							7
						</option>
						<option value="8">
							8
						</option>
						<option value="9">
							9
						</option>
						<option value="10">
							10
						</option>
						<option value="11">
							11
						</option>
						<option value="12">
							12
						</option>
					</select>
				</div>
			</div>
		</div>
	</div>
</form>
<!-- ######################## Start Table ######################## -->
<div class="bar-loader hidden" id="bar-loader" style="margin-top: 100px; margin-bottom: 100px;">
	<span>
	</span>
	<span>
	</span>
	<span>
	</span>
	<span>
	</span>
</div>
<iframe class="detail_genome_frame" frameborder="0" height="100%" id="myframe" name="myframe" scrolling="no" src="detail_genome_position" width="100%">
</iframe>
<!-- ######################## End Table ######################## -->
</div>
</div>
<div aria-labelledby="tab-5-4" class="tab-pane fade" id="Disease-5-4" role="tabpanel">
	...
</div>
<div aria-labelledby="tab-5-6" class="tab-pane fade" id="Location-5-6" role="tabpanel">
	<div class="row">
		<div class="card-body">
			<!--Start Asree add -->
			<?php       
			$lat = 0;
			$long = 0;
			$location_latlong =  $this->location;
			if($location_latlong['sub_district_lat'] != '' && $location_latlong['sub_district_long'] != ''){
				$lat = $location_latlong['sub_district_lat'];
				$long = $location_latlong['sub_district_long'];
			}
			else if($location_latlong['district_lat'] != '' && $location_latlong['district_long'] != ''){
				$lat = $location_latlong['district_lat'];
				$long = $location_latlong['district_long'];
			}
			else if($location_latlong['province_lat'] != '' && $location_latlong['province_long'] != ''){
				$lat = $location_latlong['province_lat'];
				$long = $location_latlong['province_long'];
			}
			else if($location_latlong['country_lat'] != '' && $location_latlong['country_long'] != ''){
				$lat = $location_latlong['country_lat'];
				$long = $location_latlong['country_long'];
			}
			?>
			<div class="row ">
				<div class="col-lg-12 ">
					<div class="card card_shadow">
						<div class="card-body">
							<div id="myDIV">
								<div id="map" style="width:100%; height: 511;">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!--End Asree add -->
		</div>
	</div>
</div>
<!-- ######################## ******* Test Tab ******* ######################## -->
<div aria-labelledby="tab-5-7" class="tab-pane fade" id="Germ-5-7" role="tabpanel">
</div>
<div aria-labelledby="tab-5-8" class="tab-pane fade" id="Gallery-5-8" role="tabpanel">
	<?php if($member['permission']=='admin' || $member['id_member'] == $owner['id_member']){ ?>
		<div style="margin: 50px 0 20px 20px;">
			<div class="ajax-upload-dragdrop" style="vertical-align: top; width: 400px; margin-right: 0; display: inline-block;">
				<div class="ajax-file-upload" style="position: relative; overflow: hidden; cursor: default;">
					Upload
					<form action="detail/upload_img" enctype="multipart/form-data" id="upload_form" method="POST" style="margin: 0px; padding: 0px;" target="upload_frame">
						<input accept="*" id="input_file" multiple="" name="myfile[]" style="position: absolute; cursor: pointer; top: 0px; width: 100%; height: 100%; left: 0px; z-index: 100; opacity: 0;" type="file">
						<input class="hidden" name="accession_number" type="text" value="<?php echo $detail['accession_number']; ?>">
					</input>
				</input>
			</div>
			<span>
				<b id="txt_filename">
					No file selected.
				</b>
			</span>
		</div>
		<div style="margin-right: 20px; display: inline-block;">
			<select id="category" class="form-control border-primary" name="category" style="margin-top: 12px; margin-left: 10px;">
				<option disabled="" selected="" value="Category">
					Category
				</option>
				<option value="fruit">
					Fruit
				</option>
				<option value="flower">
					Flower
				</option>
				<option value="leaf">
					Leaf
				</option>
				<option value="plant">
					Plant
				</option>
			</select>
		</div>

		<div style="margin-right: 0; display: inline-block;">
			<button class="btn btn-primary" id="btn-upload" style="margin-top: 0; margin-left: 10px; width: 120px; height: 40px;" type="button">
				Submit
			</button>
		</div>

	</form>

</div>
<?php } ?>
<iframe class="hidden" frameborder="0" id="upload_frame" name="upload_frame" src="" style="margin: 15px 0 0 20px; width: 200px; height:35px; position: absolute;">
</iframe>

<div class="card-body" id="forReloadDiv">
	<ul class="nav nav-tabs tab-solid tab-solid-warning" role="tablist">
		<li class="nav-item">
			<a aria-controls="details-g-1" aria-selected="true" class="nav-link active" data-toggle="tab" href="#details-g-1" id="tab-g-1" role="tab">
				All
			</a>
		</li>
		<li class="nav-item">
			<a aria-controls="details-g-2" aria-selected="false" class="nav-link" data-toggle="tab" href="#details-g-2" id="tab-g-2" role="tab">
				Fruit
			</a>
		</li>
		<li class="nav-item">
			<a aria-controls="details-g-3" aria-selected="false" class="nav-link" data-toggle="tab" href="#details-g-3" id="tab-g-3" role="tab">
				Flower
			</a>
		</li>
		<li class="nav-item">
			<a aria-controls="details-g-4" aria-selected="false" class="nav-link" data-toggle="tab" href="#details-g-4" id="tab-g-4" role="tab">
				Leaf
			</a>
		</li>
		<li class="nav-item">
			<a aria-controls="details-g-5" aria-selected="false" class="nav-link" data-toggle="tab" href="#details-g-5" id="tab-g-5" role="tab">
				Plant
			</a>
		</li>

		<?php if($member['permission'] == "admin" || $member['id_member'] == $owner['id_member']){ ?>
			<form id="delete_form" target="delete_frame" action="detail/deleteImage" method="post" class="hidden">
				<input type="text" name="filename_delete" id="filename_delete">
				<input type="text" name="accession_number_delete" value="<?php echo $detail['accession_number']; ?>">
			</form>
			<iframe id="delete_frame" name="delete_frame" src="" frameborder="0" class="hidden" style="height: 50px;"></iframe>
			<div style="right: 0px; position: absolute; margin-right: 6%;">
				
				<button class="btn btn-info btn-rounded btn-fw" id="btn-setMainImage" type="button">
					Set to main photo
				</button>
				<button class="btn btn-secondary btn-rounded btn-fw" id="btn-deleteImage" type="button">
					Delete
				</button>
				<button class="btn btn-outline-dark btn-rounded btn-fw" id="btn-selectImage" onclick="select()" type="button">
					Select
				</button>
			</div>
		<?php } ?>
	</ul>
	<div class="tab-content tab-content-solid" id="tabcontent-1">
		<?php $show_img = $this->
		show_img;?>
		<!-- All -->
		<div aria-labelledby="tab-g-1" class="tab-pane fade active show" id="details-g-1" role="tabpanel">
			<div class="row lightGallery lightGallery-jump">
				<?php
				$err = 0;
				foreach ($show_img[0] as $value) {
					if ($value == "") {
						$err++;
						?>
						<?php break;}?>
						<a class="image-tile col-xl-3 col-lg-3 col-md-3 col-md-4 col-6" href="pic/detail/fruit/<?php echo $value; ?>">
							<img class=" " src="<?php echo URL; ?>pic/detail/fruit/<?php echo $value; ?>">
						</img>
					</a>
				<?php }?>
				<?php foreach ($show_img[1] as $value) {
					if ($value == "") {
						$err++;
						?>
						<?php break;}?>
						<a class="image-tile col-xl-3 col-lg-3 col-md-3 col-md-4 col-6" href="pic/detail/flower/<?php echo $value; ?>">
							<img class=" " src="<?php echo URL; ?>pic/detail/flower/<?php echo $value; ?>">
						</img>
					</a>
				<?php }?>
				<?php foreach ($show_img[2] as $value) {
					if ($value == "") {$err++;?>
						<?php break;}?>
						<a class="image-tile col-xl-3 col-lg-3 col-md-3 col-md-4 col-6" href="pic/detail/leaf/<?php echo $value; ?>">
							<img class=" " src="<?php echo URL; ?>pic/detail/leaf/<?php echo $value; ?>">
						</img>
					</a>
				<?php }?>
				<?php foreach ($show_img[3] as $value) {
					if ($value == "") {$err++;?>
						<?php break;}?>
						<a class="image-tile col-xl-3 col-lg-3 col-md-3 col-md-4 col-6" href="pic/detail/plant/<?php echo $value; ?>">
							<img class=" " src="<?php echo URL; ?>pic/detail/plant/<?php echo $value; ?>">
						</img>
					</a>
				<?php }?>
				<?php if ($err == 4) {?>
					<div style="margin-right: 7%; width: 100%; background-color: #8ba2b5; border-radius: 5px; vertical-align: center; padding:5px; height: 35px;">
						<p style="margin-left: 45%; color: white; ">
							No image.
						</p>
					</div>
				<?php }?>
			</div>
		</div>
		<div aria-labelledby="tab-g-2" class="tab-pane fade" id="details-g-2" role="tabpanel">
			<div class="row lightGallery lightGallery-jump">
				<?php foreach ($show_img[0] as $value) {
					if ($value == "") {?>
						<div style=" width: 100%; background-color: #8ba2b5; border-radius: 5px; vertical-align: center; padding:5px; height: 35px;">
							<p style="margin-left: 45%; color: white; ">
								No image.
							</p>
						</div>
						<?php break;}?>
						<a class="image-tile col-xl-3 col-lg-3 col-md-3 col-md-4 col-6" href="pic/detail/fruit/<?php echo $value; ?>">
							<img class=" " src="<?php echo URL; ?>pic/detail/fruit/<?php echo $value; ?>">
						</img>
					</a>
				<?php }?>
			</div>
		</div>
		<div aria-labelledby="tab-g-3" class="tab-pane fade" id="details-g-3" role="tabpanel">
			<div class="row lightGallery lightGallery-jump">
				<?php foreach ($show_img[1] as $value) {
					if ($value == "") {?>
						<div style=" width: 100%; background-color: #8ba2b5; border-radius: 5px; vertical-align: center; padding:5px; height: 35px;">
							<p style="margin-left: 45%; color: white; ">
								No image.
							</p>
						</div>
						<?php break;}?>
						<a class="image-tile col-xl-3 col-lg-3 col-md-3 col-md-4 col-6" href="pic/detail/flower/<?php echo $value; ?>">
							<img class=" " src="<?php echo URL; ?>pic/detail/flower/<?php echo $value; ?>">
						</img>
					</a>
				<?php }?>
			</div>
		</div>
		<div aria-labelledby="tab-g-4" class="tab-pane fade" id="details-g-4" role="tabpanel">
			<div class="row lightGallery lightGallery-jump">
				<?php foreach ($show_img[2] as $value) {
					if ($value == "") {?>
						<div style=" width: 100%; background-color: #8ba2b5; border-radius: 5px; vertical-align: center; padding:5px; height: 35px;">
							<p style="margin-left: 45%; color: white; ">
								No image.
							</p>
						</div>
						<?php break;}?>
						<a class="image-tile col-xl-3 col-lg-3 col-md-3 col-md-4 col-6" href="pic/detail/leaf/<?php echo $value; ?>">
							<img class=" " src="<?php echo URL; ?>pic/detail/leaf/<?php echo $value; ?>">
						</img>
					</a>
				<?php }?>
			</div>
		</div>
		<div aria-labelledby="tab-g-5" class="tab-pane fade" id="details-g-5" role="tabpanel">
			<div class="row lightGallery lightGallery-jump">
				<?php foreach ($show_img[3] as $value) {
					if ($value == "") {?>
						<div style=" width: 100%; background-color: #8ba2b5; border-radius: 5px; vertical-align: center; padding:5px; height: 35px;">
							<p style="margin-left: 45%; color: white; ">
								No image.
							</p>
						</div>
						<?php break;}?>
						<a class="image-tile col-xl-3 col-lg-3 col-md-3 col-md-4 col-6" href="pic/detail/plant/<?php echo $value; ?>">
							<img class=" " src="<?php echo URL; ?>pic/detail/plant/<?php echo $value; ?>">
						</img>
					</a>
				<?php }?>
			</div>
		</div>
		
	</div>
	<!-- END Tab content 1 -->


	<div class="hidden tab-content tab-content-solid" id="tabcontent-2">
		<?php $show_img = $this->
		show_img;?>
		<!-- All -->
		<div aria-labelledby="tab-g-1" class="tab-pane fade active show" id="details-g-1" role="tabpanel">
			<div class="row lightGallery">
				<?php
				$err = 0;
				foreach ($show_img[0] as $value) {
					if ($value == "") {
						$err++;
						?>
						<?php break;}?>
						<a  class="image-tile col-xl-3 col-lg-3 col-md-3 col-md-4 col-6 forSelect" href="pic/detail/fruit/<?php echo $value; ?>">
							<img data-fileName="<?php echo $value; ?>" class="clickSelect" src="<?php echo URL; ?>pic/detail/fruit/<?php echo $value; ?>">
						</img>
					</a>
				<?php }?>
				<?php foreach ($show_img[1] as $value) {
					if ($value == "") {
						$err++;
						?>
						<?php break;}?>
						<a  class="image-tile col-xl-3 col-lg-3 col-md-3 col-md-4 col-6 forSelect" href="pic/detail/flower/<?php echo $value; ?>">
							<img  data-fileName="<?php echo $value; ?>" class="clickSelect" src="<?php echo URL; ?>pic/detail/flower/<?php echo $value; ?>">
						</img>
					</a>
				<?php }?>
				<?php foreach ($show_img[2] as $value) {
					if ($value == "") {$err++;?>
						<?php break;}?>
						<a  class="image-tile col-xl-3 col-lg-3 col-md-3 col-md-4 col-6 forSelect" href="pic/detail/leaf/<?php echo $value; ?>">
							<img  data-fileName="<?php echo $value; ?>" class="clickSelect" src="<?php echo URL; ?>pic/detail/leaf/<?php echo $value; ?>">
						</img>
					</a>
				<?php }?>
				<?php foreach ($show_img[3] as $value) {
					if ($value == "") {$err++;?>
						<?php break;}?>
						<a  class="image-tile col-xl-3 col-lg-3 col-md-3 col-md-4 col-6 forSelect" href="pic/detail/plant/<?php echo $value; ?>">
							<img  data-fileName="<?php echo $value; ?>" class="clickSelect" src="<?php echo URL; ?>pic/detail/plant/<?php echo $value; ?>">
						</img>
					</a>
				<?php }?>
				<?php if ($err == 4) {?>
					<div style="margin-right: 7%; width: 100%; background-color: #8ba2b5; border-radius: 5px; vertical-align: center; padding:5px; height: 35px;">
						<p style="margin-left: 45%; color: white; ">
							No image.
						</p>
					</div>
				<?php }?>
			</div>

		</div>
	</div>
	<!-- END Tab content -->
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
</div>
<!-- END Card body -->
<!-- main-panel ends -->
<!-- page-body-wrapper ends -->
<script>
	$(document).ready(function(){

		<?php
		$layout = $this->layout;
		if ($layout == 0 || $layout == "") {?>
			if($("#gText1").hasClass("hidden")){
				$("#gText1").removeClass("hidden");
			}
			if( !($("#gText2").hasClass("hidden")) ){
				$("#gText2").addClass("hidden");
			}
			if($("#btn-left").hasClass("active")){

			}
			else{
				$("#btn-left").addClass("active");
				$("#btn-right").removeClass("active");

			}

		<?php } elseif ($layout == 1) {?>

			if($("#gText2").hasClass("hidden")){
				$("#gText2").removeClass("hidden");
			}
			if( !($("#gText1").hasClass("hidden")) ){
				$("#gText1").addClass("hidden");
			}
			if($("#btn-right").hasClass("active")){

			}
			else{
				$("#btn-right").addClass("active");
				$("#btn-left").removeClass("active");

			}

		<?php }?>

		$("#btn-left").click(function(){

			if($("#gText1").hasClass("hidden")){
				$("#gText1").removeClass("hidden");
			}
			if( !($("#gText2").hasClass("hidden")) ){
				$("#gText2").addClass("hidden");
			}
			if($("#btn-left").hasClass("active")){

			}
			else{
				$("#btn-left").addClass("active");
				$("#btn-right").removeClass("active");

			}

			var layout_form = document.getElementById("layout_form");
			$("#input_text_layout").val(0);
			layout_form.submit();

		});

		$("#btn-right").click(function(){

			if($("#gText2").hasClass("hidden")){
				$("#gText2").removeClass("hidden");
			}
			if( !($("#gText1").hasClass("hidden")) ){
				$("#gText1").addClass("hidden");
			}
			if($("#btn-right").hasClass("active")){

			}
			else{
				$("#btn-right").addClass("active");
				$("#btn-left").removeClass("active");

			}

			var layout_form = document.getElementById("layout_form");
			$("#input_text_layout").val(1);
			layout_form.submit();

		});


		$("#sent_data").click(function(){
			var text = [];
			var x = document.getElementsByClassName("noUi-tooltip");
			for (var i = 0; i < x.length; i++) {
				text[i] = x[i].innerHTML;
			}
			var start = document.getElementById("fruit_weight_g_start");
			var end = document.getElementById("fruit_weight_g_end");
			start.value = text[0];
			end.value = text[1];
		});
		$("#reset_data").click(function(){
			var point = document.getElementsByClassName("noUi-origin");
			var line = document.getElementsByClassName("noUi-connect");
			var tag = document.getElementsByClassName("noUi-tooltip");
			var dropdown = document.getElementsByClassName("select2-selection__choice");

			point[0].style.left = "0%";
			point[1].style.left = "100%";
			line[0].style.left = "0%";
			line[0].style.right = "0%";
			$("div.noUi-handle.noUi-handle-lower").attr("aria-valuetext","0.00");
			$("div.noUi-handle.noUi-handle-lower").attr("aria-valuenow","0.0");

			$("div.noUi-handle.noUi-handle-upper").attr("aria-valuetext","300.00");
			$("div.noUi-handle.noUi-handle-upper").attr("aria-valuenow","100.0");

			$("div.noUi-handle").attr("aria-valuemin","0.0");
			$("div.noUi-handle").attr("aria-valuemax","100.0");

			$(".select2-selection__choice").remove();

			tag[0].innerHTML = "0.00";
			tag[1].innerHTML = "300.00";

		});
	});
</script>
<script>
	$(document).ready(function () {
		$('#dtVerticalScrollExample').DataTable({
			"scrollY": "300px",
			"scrollCollapse": true,
		});
		$('.dataTables_length').addClass('bs-select');

		$("#th_allele").removeClass("sorting_asc");
		$("#th_allele").addClass("sorting");
		$("#th_position").removeClass("sorting");
		$("#th_position").addClass("sorting_asc");

		$("#btnSearch").click(function(){

			var myframe = document.getElementById("myframe");
			if(!$("#myframe").hasClass("hidden")){
				$("#myframe").addClass("hidden");
			}

			$("#bar-loader").removeClass("hidden");

			myframe.onload = function(){
				$("#bar-loader").addClass("hidden");
				$("#myframe").removeClass("hidden");
			};

		});

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

		var file = [] ;

		$("#btn-upload").click(function(){

			var selected_category = $('#category').find(":selected").val() ;
			var check_uploadfile = $('#input_file').val() ;
			//alert(check_uploadfile)
			if(check_uploadfile  == ""){
				$(".ajax-upload-dragdrop").eq(0).css("border-color","red");
			}
			if(selected_category == "Category"){
				$('#category').removeClass('border-primary').addClass('border-danger');
			}
			else if( check_uploadfile  != "" && selected_category != "Category"){
				$('#category').removeClass('border-danger').addClass('border-primary');
				$(".ajax-upload-dragdrop").eq(0).css("border-color","#2196f3");

        //alert(file[0].name);
        var tylefile = ['jpg','jpeg','png'];
        var check = 0;

        for (var i = 0; i < file.length; i++) {
        	for (var j = 0; j < tylefile.length; j++) {
        		lowerFileName = file[i].name.toLowerCase();
        		sn = lowerFileName.search(tylefile[j]) ;
        		if(sn >= 0){
        			check++;
        		}
        	}
        }

        if(file.length == check){

        	$("#upload_form").submit();

        	showSwal('submit-upload');

        	setTimeout(function(){
        		location.reload();
        	},2000);

        }
        else{
        	showSwal('file-type-error');
        }




    }
    if(check_uploadfile  != ""){
    	$(".ajax-upload-dragdrop").eq(0).css("border-color","#2196f3");
    }
    if(selected_category != "Category"){
    	$('#category').removeClass('border-danger').addClass('border-primary');
    }

});

		$("#input_file").change(function(e) {
			file = e.target.files;
			var txt = "";
			if(file.length > 2){
				$("#txt_filename").html(file.length+" files selected.") ;
			}
			else{
				for (var i = 0; i < file.length; i++) {
					txt += file[i].name+" ," ;
				}
				var new_txt = txt.substring(0, txt.length-1);
				$("#txt_filename").html(new_txt);
			}

		});

		var x = document.getElementsByName("fname[]")[0];

		$("#lightgallery").lightGallery();

		var selected = [];

		$(".clickSelect").click(function(){

			var max = 4 , min = 1;
			var random = Math.floor(Math.random() * (max - min + 1)) + min;
			var this_filename = $(this).attr("src") ;
			var count = 0;

			if($(this).parent('a').hasClass('blue-bg')){
				$(this).parent('a').removeClass('blue-bg');
				$(this).parent('a').addClass('vibrate-'+random);
			}
			else{
				$(this).parent('a').addClass('blue-bg');
				$(this).parent('a').removeClass (function (index, className) {
					return (className.match (/(^|\s)vibrate-\S+/g) || []).join(' ');
				});
			}

			for (var i = 0; i < selected.length; i++) {
				if( selected[i] == this_filename ){
					selected.splice(i, 1);
					count++;
				}
				$('#filename_delete').val(selected);
			}

			if(count == 0){
				selected.push(this_filename) ;
				$('#filename_delete').val(selected);
			}

      //alert($('#filename_delete').val());
      
  });

		$("#btn-selectImage").click(function(){

			if($(this).text() == "Cancel"){
				selected = [];
				$('#filename_delete').val(selected);
			}

		});

		$("#btn-selectImage").click(function(){

			if($(this).text() == "Cancel"){
				selected = [];
				$('#filename_delete').val(selected);
			}

		});

		$("#btn-deleteImage").click(function(){
			var count = 0;
			for (var i = 0; i < $(".forSelect").length; i++) {
				if($(".forSelect").eq(i).hasClass('blue-bg')){
					count++;
				}
			}

			if(count > 0){
				showSwal('message-and-cancel-jump') ;
				setTimeout(function(){
					location.reload();
				},2300);

			}
			else{
				showSwal('auto-close-jump');
			}
		});

		$('.dropify').dropify();

		$("#admin-edit-1").click(function(){

			$(".admin-show").eq(0).addClass('hidden');
			$(".admin-edit").eq(0).removeClass('hidden');

		});
		$("#admin-cancel-1").click(function(){

			$(".admin-show").eq(0).removeClass('hidden');
			$(".admin-edit").eq(0).addClass('hidden');

		});

		$("#admin-edit-2").click(function(){

			$(".admin-show").eq(1).addClass('hidden');
			$(".admin-edit").eq(1).removeClass('hidden');

		});
		$("#admin-cancel-2").click(function(){

			$(".admin-show").eq(1).removeClass('hidden');
			$(".admin-edit").eq(1).addClass('hidden');

		});

		var primary_fileName = "";

		$("#input-primary-1").change(function(e) {
			file = e.target.files;
			primary_fileName = file[0].name;  
		});
		$("#input-primary-2").change(function(e) {
			file = e.target.files;
			primary_fileName = file[0].name;
		});

		$("#btn-primary-upload-1").click(function(){

			var tylefile = ['jpg','jpeg','png'];
			var check = 0;
			var lowerFileName = primary_fileName.toLowerCase();
			for (var j = 0; j < tylefile.length; j++) {
				sn = lowerFileName.search(tylefile[j]) ;
				if(sn >= 0){
					check++;
				}
			}
			if(check == 1){

				$("#primary_upload_form").submit();

				showSwal('submit-upload');

				setTimeout(function(){
					location.reload();
				},2000);

			}
			else{
				showSwal('file-type-error');
			}

		});

		$("#btn-primary-upload-2").click(function(){

			var tylefile = ['jpg','jpeg','png'];
			var check = 0;
			var lowerFileName = primary_fileName.toLowerCase();
			for (var j = 0; j < tylefile.length; j++) {
				sn = lowerFileName.search(tylefile[j]) ;
				if(sn >= 0){
					check++;
				}
			}
			if(check == 1){

				$("#primary_upload_form").submit();

				showSwal('submit-upload');

				setTimeout(function(){
					location.reload();
				},2000);

			}
			else{
				showSwal('file-type-error');
			}

		});

		$("#btn-deleteImage,#btn-setMainImage").hide();

		$("#btn-setMainImage").click(function(){

			var count = 0;
			for (var i = 0; i < $(".forSelect").length; i++) {
				if($(".forSelect").eq(i).hasClass('blue-bg')){
					count++;
				}
			}
			
			if(count == 1){
				var tmp = $('#filename_delete').val() ;
				//alert(tmp);
				$("#input-setMainImage").val(tmp);
				$("#primary_upload_form").submit();
				showSwal('submit-upload');
			}
			else{
				showSwal('auto-close-jump');
			}

		});

		$.fn.highlight = function(what,spanClass) {
			return this.each(function(){
				var container = this,
				content = container.innerHTML,
				pattern = new RegExp('(>[^<.]*)(' + what + ')([^<.]*)','g'),
				replaceWith = '$1<span ' + ( spanClass ? 'class="' + spanClass + '"' : '' ) + '">$2</span>$3',
				highlighted = content.replace(pattern,replaceWith);
				container.innerHTML = highlighted;
			});
		}

		$("p").highlight('No data.','highlight');



	});
</script>
<script src="<?php echo URL; ?>theme/assets/js/shared/dragula.js">
</script>
<script src="<?php echo URL; ?>theme/assets/js/shared/select2.js">
</script>
<script src="<?php echo URL; ?>theme/assets/js/shared/light-gallery.js">
</script>
<script src="<?php echo URL; ?>theme/assets/js/shared/alert.js">
</script>

<script src="<?php echo URL; ?>theme/assets/js/shared/dropify.js">
</script>
 <script>
      $("#allele1").on("change", function() {
        var allele1 = $("#allele1").val();
        var allele2 = $("#allele2").val();
        var allele3 = $("#allele3").val();
        $(".option_none").removeClass("option_none");
        if (allele1 != "") {
          $("#allele2").find("option[value=" + allele1 + "]").addClass("option_none");
        }
        if (allele1 == allele2 || allele1 == allele3) {
          $(".option_none").removeClass("option_none");
          $(".option_none2").removeClass("option_none2");
          $("#allele2").val("");
          $("#allele3").val("");
          if (allele1 != "") {
            $("#allele2").find("option[value=" + allele1 + "]").addClass("option_none");
          }
        }

      });
      $("#allele2").on("change", function() {
        var allele1 = $("#allele1").val();
        var allele2 = $("#allele2").val();
        $(".option_none2").removeClass("option_none2");
        if (allele2 != "") {
          $("#allele3").find("option[value=" + allele1 + "]").addClass("option_none2");
          $("#allele3").find("option[value=" + allele2 + "]").addClass("option_none2");
        }
      });
    </script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwVxLnsuNM9mJUqDFkj6r7FSxVcQCh4ic&callback=asree" async defer></script>
<script>

	function asree() {
		let lat = <?php echo $lat; ?>;
		let long = <?php echo $long; ?>;
		var myLatlng = new google.maps.LatLng(lat,long);
		var mapOptions = {
			zoom: 4,
			center: myLatlng
		}
		var map = new google.maps.Map(document.getElementById("map"), mapOptions);

		var marker = new google.maps.Marker({
			position: myLatlng,
			title:"Hello World!"
		});
    // To add the marker to the map, call setMap();
    marker.setMap(map);
}
</script>