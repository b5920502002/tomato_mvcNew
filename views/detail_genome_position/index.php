<?php

$position = $this->tdp_all;

?>
<link rel="stylesheet" href="<?php echo URL; ?>theme/assets/css/bg-for-Allele.css">
<script>
  function addValue(clicked_id) {
    document.getElementById("input_pos").value = document.getElementById(clicked_id).innerHTML;
    posForm.submit();
  }

  function addValuePoint(clicked_id) {
    document.getElementById("input_pos").value = document.getElementById(clicked_id + "_j").innerHTML;
    posForm.submit();
  }
</script>
<style>
  .noUi-target .noUi-base .noUi-origin .noUi-handle.jump,
  .noUi-target .noUi-base {
    box-shadow: none;
    border: none;
    border-radius: 0;
    background-color: white;
    cursor: pointer;
  }

  .slider-danger .noUi-base .noUi-origin .noUi-handle.jump:after {
    background: none;
  }

  .slider-warning .noUi-base .noUi-origin .noUi-handle:after {
    background-color: white;
  }

  .noUi-target .noUi-base .noUi-origin .noUi-handle {
    border: 1px solid #ffaf0082;
    cursor: pointer;
  }

  .hidden {
    display: none;
  }

  .sm-text {
    font-size: 12px;
  }
</style>

<form id="posForm" name="posForm" method="post" action="detail_of_position" target="pos_frame">
  <div id="table_display" style="margin: 20px 100px 60px 100px;">

    <div style="margin-bottom: 0px; margin-top: 0px;">

      <div class="d-flex align-items-center pb-2">
        <div class="dot-indicator bg-danger mr-2"></div>
        <p class="mb-0" style="font-size: 16px; font-style: oblique;">Position table (<?php echo number_format($_SESSION['pos1']) . " - " . number_format($_SESSION['pos2']); ?>)</p>
      </div>

      <table id="dtVerticalScrollExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="" style="width: 100%; ">
        <thead>
          <tr style="background-color: #ff6258; color: white;">
            <th id="th_position" class="th-sm">Position <i class="fa fa-sort"></th>
            <th id="th_allele" class="th-sm" aria-sort="ascending">Allele <i class="fa fa-sort"></th>
            <th class="th-sm">Chromosome <i class="fa fa-sort"></th>
            <th class="th-sm">Strand <i class="fa fa-sort"></th>
            <th class="th-sm">Quality <i class="fa fa-sort"></th>
            <th class="th-sm">RS Number <i class="fa fa-sort"></th>

          </tr>
        </thead>
        <tbody>
          <?php
          $i = 0;
          foreach ($position[0] as $key => $value) {

            if ($value['quality'] == "" or $value['quality'] == null) {
              $value['quality'] = "No data.";
            }

            ?>
            <tr>
              <td>
                <a href="#" id="link_pos<?php echo $i++; ?>" onclick="addValue(this.id)" class="text-primary click_pos"><?php echo $value['position']; ?></a>

              </td>
              <!-- <td><a href="#position_frame" onclick="form.submit();" class="text-primary"><?php echo $value['position']; ?></a></td> -->
              <td><a><?php echo $value['ATCG'] ?></a></td>
              <td><a><?php echo $value['chrom'] ?></a></td>
              <td><a><?php echo $value['strand'] ?></a></td>
              <td><a><?php echo $value['quality'] ?></a></td>
              <td><a><?php echo $value['rs_number'] ?></a></td>


            </tr>

          <?php } ?>
        </tbody>
      </table>

    </div>

  </div>

  <input id="input_pos" type="hidden" name="pos" value="">


  <!-- ######################## Start Position line ######################## -->



  <h6 class="text-center">Position of Haplotype block.</h6>
  <p class="text-dark" style="display: inline-block; margin-right: 10px;">Haplotype block color : </p>
  <?php
  $i = 0;
  $allele = [];
  foreach ($position[0] as $key => $value) {
    $allele[$i] = $position[1][$i++]['allele'];
  }

  $allele = array_values(array_unique($allele));
  //print_r($allele);
  for ($i = 0; $i < sizeof($allele); $i++) {
    if ($allele[$i] == "A") {
      echo "<div class='dot-indicator bg-for-A mr-2'></div>";
      echo "<p class='text-dark' style='display: inline-block; margin-right: 20px;'>$allele[$i]</p>";
    } else if ($allele[$i] == "C") {
      echo "<div class='dot-indicator bg-for-C mr-2'></div>";
      echo "<p class='text-dark' style='display: inline-block; margin-right: 20px;'>$allele[$i]</p>";
    } else if ($allele[$i] == "G") {
      echo "<div class='dot-indicator bg-for-G mr-2'></div>";
      echo "<p class='text-dark' style='display: inline-block; margin-right: 20px;'>$allele[$i]</p>";
    } else if ($allele[$i] == "T") {
      echo "<div class='dot-indicator bg-for-T mr-2'></div>";
      echo "<p class='text-dark' style='display: inline-block; margin-right: 20px;'>$allele[$i]</p>";
    } else if ($allele[$i] == "A,T") {
      echo "<div class='dot-indicator bg-for-AT mr-2'></div>";
      echo "<p class='text-dark' style='display: inline-block; margin-right: 20px;'>$allele[$i]</p>";
    } else if ($allele[$i] == "A,C") {
      echo "<div class='dot-indicator bg-for-AC mr-2'></div>";
      echo "<p class='text-dark' style='display: inline-block; margin-right: 20px;'>$allele[$i]</p>";
    } else if ($allele[$i] == "A,G") {
      echo "<div class='dot-indicator bg-for-AG mr-2'></div>";
      echo "<p class='text-dark' style='display: inline-block; margin-right: 20px;'>$allele[$i]</p>";
    } else if ($allele[$i] == "T,C") {
      echo "<div class='dot-indicator bg-for-TC mr-2'></div>";
      echo "<p class='text-dark' style='display: inline-block; margin-right: 20px;'>$allele[$i]</p>";
    } else if ($allele[$i] == "T,G") {
      echo "<div class='dot-indicator bg-for-TG mr-2'></div>";
      echo "<p class='text-dark' style='display: inline-block; margin-right: 20px;'>$allele[$i]</p>";
    } else if ($allele[$i] == "C,G") {
      echo "<div class='dot-indicator bg-for-CG mr-2'></div>";
      echo "<p class='text-dark' style='display: inline-block; margin-right: 20px;'>$allele[$i]</p>";
    } else if ($allele[$i] == "A,T,C") {
      echo "<div class='dot-indicator bg-for-ATC mr-2'></div>";
      echo "<p class='text-dark' style='display: inline-block; margin-right: 20px;'>$allele[$i]</p>";
    } else if ($allele[$i] == "A,T,G") {
      echo "<div class='dot-indicator bg-for-ATG mr-2'></div>";
      echo "<p class='text-dark' style='display: inline-block; margin-right: 20px;'>$allele[$i]</p>";
    } else if ($allele[$i] == "A,C,G") {
      echo "<div class='dot-indicator bg-for-ACG mr-2'></div>";
      echo "<p class='text-dark' style='display: inline-block; margin-right: 20px;'>$allele[$i]</p>";
    } else if ($allele[$i] == "T,C,G") {
      echo "<div class='dot-indicator bg-for-TCG mr-2'></div>";
      echo "<p class='text-dark' style='display: inline-block; margin-right: 20px;'>$allele[$i]</p>";
    } else if ($allele[$i] == "A,T,C,G") {
      echo "<div class='dot-indicator bg-for-ATCG mr-2'></div>";
      echo "<p class='text-dark' style='display: inline-block; margin-right: 20px;'>$allele[$i]</p>";
    } else {
      echo "<div class='dot-indicator bg-for-nul mr-2'></div>";
      echo "<p class='text-dark' style='display: inline-block; margin-right: 20px;'>No Haplotype block data.</p>";
    }
  }

  ?>
  <br>

  <div id="ul-slider-6" class="ul-slider slider-warning noUi-target noUi-ltr noUi-horizontal" style="margin:auto; margin-top: 40px; margin-bottom: 0px; width:90%;">
    <div class="noUi-base">
      <div class="noUi-connect" style=""></div>

      <?php
      $sPos1 = $_SESSION['pos1'];
      $sPos2 = $_SESSION['pos2'];
      $i = 0;
      $count = 0;
      foreach ($position[0] as $key => $value) {
        if ($value['quality'] == "" || $value['quality'] == null) {
          $value['quality'] = "No data.";
        }
        if($position[1][$count]['allele'] == "" || $position[1][$count]['allele'] == null){
          $position[1][$count]['allele'] = "No data." ;
        }
        ?>

        <span value="<?php echo $position[1][$count]['allele']; ?>" class="circle hidden"><?php echo $position[1][$count]['allele']; ?></span>

        <div class="noUi-origin" style="left: <?php echo ((($value['position'] - $sPos1) / ($sPos2 - $sPos1)) * 100) . "%"; ?>">

          <div id="spanPoint<?php echo $i++; ?>" onclick="//addValuePoint(this.id)" class="noUi-handle noUi-handle-lower click_pos" data-toggle="popover" data-placement="top" data-trigger="hover" data-original-title="<?php echo 'Position : ' . $value['position']; ?>" data-content="
            Haplotype block : <?php echo $position[1][$count++]['allele']; ?> </br>
            Allele : <?php echo $value['ATCG']; ?> </br>
            Chromosome : <?php echo $value['chrom']; ?></br>
            Strand : <?php echo $value['strand']; ?></br>
            Quality : <?php echo $value['quality']; ?></br>
            RS Number : <span class='sm-text'> <?php echo $value['rs_number']; ?> <span>

              " data-html="true" data-custom-class="popover-warning" data-handle="0" role="slider" aria-orientation="horizontal" style="z-index: 4;">
            <span id="spanPoint<?php echo ($i - 1) . "_j"; ?>" class="hidden"><?php echo $value['position']; ?></span>
          </div>

        </div>

      <?php } ?>


    </div>
  </div>
</form>
<!-- ######################## End Position line ######################## -->

<!-- ########################  Detail of Position ######################## -

<iframe id='pos_frame' class=" hidden " name="pos_frame" src="detail_of_position" frameborder='0' width='100%' height='100%' scrolling='no'></iframe>

-->



<script>
  $(document).ready(function() {
    $('#dtVerticalScrollExample').DataTable({
      "scrollY": "250px",
      "scrollCollapse": true,
    });
    $('.dataTables_length').addClass('bs-select');

    $(".click_pos").click(function() {
      $('#pos_frame').removeClass("hidden");

    });

    $(".th-sm").click(function() {
      if ($(this).find("i").hasClass('fa-sort')) {
        $(this).find("i").removeClass('fa-sort').addClass('fa-sort-up');
      } else if ($(this).find("i").hasClass('fa-sort-up')) {
        $(this).find("i").removeClass('fa-sort-up').addClass('fa-sort-down');
      } else if ($(this).find("i").hasClass('fa-sort-down')) {
        $(this).find("i").removeClass('fa-sort-down').addClass('fa-sort-up');
      }

      $(".th-sm").not(this).find("i").removeClass('fa-sort-up fa-sort-down').addClass('fa-sort');

    });

  });
</script>
<script src="<?php echo URL; ?>theme/assets/js/color-for-Allele.js"></script>