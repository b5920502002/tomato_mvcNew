<?php 
$tdp_all = $this->tdp_all;
$tdp_same = $this->tdp_same;
$tdp_diff = $this->tdp_diff;
?>
<link rel="stylesheet" href="<?php echo URL; ?>theme/assets/css/bg-for-Allele.css">
<style type="text/css">
	.hidden{
		display: none;
	}
	.sm-text{
		font-size: 12px;
	}
	.noUi-target .noUi-base .noUi-origin .noUi-handle{
		border: 1px solid #ffaf0082;
		cursor: pointer;
	}
	.label-pos{
		margin-right: 30px;
		line-height: 45px;
	}
	#ul-slider-6{
		position: absolute;
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
	.slider-warning .noUi-base .noUi-origin .noUi-handle:after{
		background-color: white;
	}
	.noUi-handle{
		box-shadow: inset 0 0 1px #FFF, inset 0 1px 3px #EBEBEB, 0 3px 6px -3px #BBB;
	}

</style>
<div id="table_display">

	<!-- ######################## Start Position line ######################## -->
	<?php
	$accession_number = $_SESSION['accession_number_line'];
	$compare_pos = ${'tdp_'.$_SESSION['radio_position']} ;
	$val_foreach = $compare_pos[0];
	
	if($_SESSION['radio_position'] == "diff"){
		$top_name = "Different";
	}
	else{
		$top_name = $_SESSION['radio_position'] ;
	}

	?>
	<h6 class="text-center">Position of <span class="text-danger"><?php echo strtoupper($top_name); ?></span> Haplotype block.</h6>
	<p class="text-dark" style="display: inline-block; margin-right: 10px;">Haplotype block color : </p>
	<?php
	$i = 0;
	$allele = [];
	foreach ($accession_number as $value) {
		foreach ($val_foreach as $key => $value) {
			$allele[$i] = $compare_pos[1][$i++]['allele'];
		}
	}
	
	$allele = array_values(array_unique($allele));
	for ($i=0; $i < sizeof($allele); $i++) {
		if($allele[$i] == "A"){
			echo "<div class='dot-indicator bg-for-A mr-2'></div>";
			echo "<p class='text-dark' style='display: inline-block; margin-right: 20px;'>$allele[$i]</p>";
		}
		else if($allele[$i] == "C"){
			echo "<div class='dot-indicator bg-for-C mr-2'></div>";
			echo "<p class='text-dark' style='display: inline-block; margin-right: 20px;'>$allele[$i]</p>";
		}
		else if($allele[$i] == "G"){
			echo "<div class='dot-indicator bg-for-G mr-2'></div>";
			echo "<p class='text-dark' style='display: inline-block; margin-right: 20px;'>$allele[$i]</p>";
		}
		else if($allele[$i] == "T"){
			echo "<div class='dot-indicator bg-for-T mr-2'></div>";
			echo "<p class='text-dark' style='display: inline-block; margin-right: 20px;'>$allele[$i]</p>";
		}
		else if($allele[$i] == "A,T"){
			echo "<div class='dot-indicator bg-for-AT mr-2'></div>";
			echo "<p class='text-dark' style='display: inline-block; margin-right: 20px;'>$allele[$i]</p>";
		}
		else if($allele[$i] == "A,C"){
			echo "<div class='dot-indicator bg-for-AC mr-2'></div>";
			echo "<p class='text-dark' style='display: inline-block; margin-right: 20px;'>$allele[$i]</p>";
		}
		else if($allele[$i] == "A,G"){
			echo "<div class='dot-indicator bg-for-AG mr-2'></div>";
			echo "<p class='text-dark' style='display: inline-block; margin-right: 20px;'>$allele[$i]</p>";
		}
		else if($allele[$i] == "T,C"){
			echo "<div class='dot-indicator bg-for-TC mr-2'></div>";
			echo "<p class='text-dark' style='display: inline-block; margin-right: 20px;'>$allele[$i]</p>";
		}

		else if($allele[$i] == "T,G"){
			echo "<div class='dot-indicator bg-for-TG mr-2'></div>";
			echo "<p class='text-dark' style='display: inline-block; margin-right: 20px;'>$allele[$i]</p>";
		}
		else if($allele[$i] == "C,G"){
			echo "<div class='dot-indicator bg-for-CG mr-2'></div>";
			echo "<p class='text-dark' style='display: inline-block; margin-right: 20px;'>$allele[$i]</p>";
		}
		else if($allele[$i] == "A,T,C"){
			echo "<div class='dot-indicator bg-for-ATC mr-2'></div>";
			echo "<p class='text-dark' style='display: inline-block; margin-right: 20px;'>$allele[$i]</p>";
		}
		else if($allele[$i] == "A,T,G"){
			echo "<div class='dot-indicator bg-for-ATG mr-2'></div>";
			echo "<p class='text-dark' style='display: inline-block; margin-right: 20px;'>$allele[$i]</p>";
		}
		else if($allele[$i] == "A,C,G"){
			echo "<div class='dot-indicator bg-for-ACG mr-2'></div>";
			echo "<p class='text-dark' style='display: inline-block; margin-right: 20px;'>$allele[$i]</p>";
		}
		else if($allele[$i] == "T,C,G"){
			echo "<div class='dot-indicator bg-for-TCG mr-2'></div>";
			echo "<p class='text-dark' style='display: inline-block; margin-right: 20px;'>$allele[$i]</p>";
		}
		else if($allele[$i] == "A,T,C,G"){
			echo "<div class='dot-indicator bg-for-ATCG mr-2'></div>";
			echo "<p class='text-dark' style='display: inline-block; margin-right: 20px;'>$allele[$i]</p>";
		}
		else
		{
			echo "<div class='dot-indicator bg-for-nul mr-2'></div>";
			echo "<p class='text-dark' style='display: inline-block; margin-right: 20px;'>No data.</p>";
		}
	}

	?>
	<br>
	<?php
	$sPos1 = $_SESSION['pos1'];
	$sPos2 = $_SESSION['pos2'];
	$i = 0;
	$count_diff = 0;
	foreach ($accession_number as $value) {
		?>
		<div class="d-inline-block label-pos" style="width: 50px;">
			<b><?php echo $value; ?></b>
		</div>
		<div id="ul-slider-6" class="d-inline-block ul-slider slider-warning noUi-target noUi-ltr noUi-horizontal" style="margin:auto; margin-top: 20px; margin-bottom: 10px; width:90%;">
			<div class="noUi-base">
				<div class="noUi-connect" style=""></div>

				<?php
				
				foreach ($val_foreach as $key => $value) {
					if($value['quality'] == "" || $value['quality'] == null){
						$value['quality'] = "No data.";
					}
					if($compare_pos[1][$count_diff]['allele'] == "" || $compare_pos[1][$count_diff]['allele'] == null){
						$compare_pos[1][$count_diff]['allele'] = "No data.";
					}
					if($value['position'] > $_SESSION['pos2']){
						//$test = $value['position'];
						//echo "<script> alert('$test'); </script>";
						break;
					}
						//$test = $value['position'];
						//echo "<script> alert('$test'); </script>";
					?>

					<span class="circle hidden"><?php echo $compare_pos[1][$count_diff]['allele'] ;?></span>

					<div class="noUi-origin" style="left: <?php echo ((($value['position']-$sPos1)/($sPos2-$sPos1))*100)."%" ; ?>">

						<div id="spanPoint<?php echo $i++ ; ?>" onclick="addValuePoint(this.id)" class="noUi-handle noUi-handle-lower click_pos" 

							data-toggle="popover" data-placement="top" data-trigger="hover" 

							data-original-title="<?php echo 'Position : '.$value['position']; ?>"

							data-content="Allele : <?php echo $compare_pos[1][$count_diff++]['allele'] ; ?> </br>
							Chromosome : <?php echo $value['chrom'] ; ?></br>
							Strand : <?php echo $value['strand'] ; ?></br>
							Quality : <?php echo $value['quality'] ; ?></br>
							RS Number : <span class='sm-text'> <?php echo $value['allele_rs'] ; ?> <span>"

								data-html="true"

								data-custom-class="popover-warning" data-handle="0"  role="slider" aria-orientation="horizontal" style="z-index: 4;">
								<span id="spanPoint<?php echo ($i-1)."_j" ; ?>" class="hidden"><?php echo $value['position']; ?></span>

							</div>

						</div>

					<?php  } ?>


				</div>
			</div>
			<div></div>
			<?php 

		} ?>

		<!-- ######################## End Position line ######################## -->

		<div style="margin-bottom: 40px; margin-top: 30px;">

			<div class="d-flex align-items-center pb-2">
				<div class="dot-indicator bg-success mr-2"></div>
				<p class="mb-0" style="font-size: 16px; font-style: oblique;">Same</p>
			</div>

			<table id="dtVerticalScrollExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="" style="width: 100%; ">
				<thead>
					<tr style="background-color: #19d895; color: white;">
						<th class="th-sm">Position <i class="fa fa-sort"></i></th>
						<th class="th-sm">Chromosome <i class="fa fa-sort"></i></th>
						<th class="th-sm">Alleles <i class="fa fa-sort"></i></th>
						<th class="th-sm">RS Number<i class="fa fa-sort"></i></th>
						<th class="th-sm">Strand <i class="fa fa-sort"></i></th>
						<?php

						for ($i=0; $i < sizeof($accession_number); $i++) { 
							echo "<th class='th-sm'>$accession_number[$i] <i class='fa fa-sort'></i></th>" ;
						}

						?>
					</tr>
				</thead>
				<tbody>
					<?php
					$count = 0;
					$set = 0;
					$setloop = sizeof($tdp_same[0]) ;
					foreach ($tdp_same[0] as $key => $value) {

						?>
						<tr>
							<td><?php echo $value['position']; ?></td>
							<td><?php echo $value['chrom']; ?></td>
							<td><?php echo $value['ATCG'] ?></td>
							<td><?php echo $value['allele_rs']; ?></td>
							<td><?php echo $value['strand']; ?></td>

							<?php

							for ($i=0; $i < sizeof($accession_number); $i++) { 
								$tmpSame = $tdp_same[1][$count]['allele'] ;
								echo "<td> $tmpSame </td>";
								$count += $setloop ;

								if($i == sizeof($accession_number)-1 ){
									$count = $set+1 ;
									$set++ ;
								}

							}

							?>

						</tr>

					<?php } ?>
				</tbody>
			</table>

		</div>

		<div style="margin-bottom: 50px;">

			<div class="d-flex align-items-center pb-2">
				<div class="dot-indicator bg-warning mr-2"></div>
				<p class="mb-0" style="font-size: 16px; font-style: oblique;">Different</p>
			</div>

			<table id="dtVerticalScrollExample2" class="table table-striped table-bordered table-sm" cellspacing="0" width="" style="width: 100%; ">
				<thead>
					<tr style="background-color: #ffaf00; color: white;">
						<th class="th-sm">Position <i class="fa fa-sort"></i></th>
						<th class="th-sm">Chromosome <i class="fa fa-sort"></i></th>
						<th class="th-sm">Alleles <i class="fa fa-sort"></i></th>
						<th class="th-sm">RS Number<i class="fa fa-sort"></i></th>
						<th class='th-sm'>Strand <i class='fa fa-sort'></i></th>
						<?php

						for ($i=0; $i < sizeof($accession_number); $i++) { 
							echo "<th class='th-sm'>$accession_number[$i] <i class='fa fa-sort'></i></th>" ;
						}

						?>
					</tr>
				</thead>
				<tbody>
					<?php 
					$count = 0;
					$set = 0;
					$setloop = sizeof($tdp_diff[0]) ;
					foreach ($tdp_diff[0] as $key => $value) {

						?>
						<tr>
							<td><?php echo $value['position']; ?></td>
							<td><?php echo $value['chrom']; ?></td>
							<td><?php echo $value['ATCG']; ?></td>
							<td><?php echo $value['allele_rs']; ?></td>
							<td><?php echo $value['strand']; ?></td>

							<?php

							for ($i=0; $i < sizeof($accession_number); $i++) { 
								$tmpDiff = $tdp_diff[1][$count]['allele'] ;
								echo "<td> $tmpDiff </td>";
								$count += $setloop ;

								if($i == sizeof($accession_number)-1 ){
									$count = $set+1 ;
									$set++ ;
								}

							}

							?>

						</tr>

					<?php } ?>
				</tbody>
			</table>

		</div>


	</div>

	<!-- End Table display -->


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

			$("#btnSearch").click(function(){
				var displayTable = document.getElementById("table_display");

				displayTable.style.display = "";

			});

		});

		$(".th-sm").click(function() {
			if ( $(this).find("i").hasClass('fa-sort') ){
				$(this).find("i").removeClass('fa-sort').addClass('fa-sort-up');
			}
			else if ( $(this).find("i").hasClass('fa-sort-up') ){
				$(this).find("i").removeClass('fa-sort-up').addClass('fa-sort-down');
			}
			else if ( $(this).find("i").hasClass('fa-sort-down') ){
				$(this).find("i").removeClass('fa-sort-down').addClass('fa-sort-up');
			}

			$(".th-sm").not(this).find("i").removeClass('fa-sort-up fa-sort-down').addClass('fa-sort');
			
		});

	</script>

	<script src="<?php echo URL; ?>theme/assets/js/color-for-Allele.js"></script>