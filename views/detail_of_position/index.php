
<?php $detail_of_position = $this->detail_of_position; ?>

<div class="card" style="margin:auto; width: 30%;margin-top: 50px;">
  <table class="table table-hover">
    <thead>
      <tr style="color:white;background-color: rgb(255,98,88);">
        <th>Position</th>
        <th><?php echo $detail_of_position['position'] ?></th>
      </tr>
    </thead>
    <tbody>
      <tr >
        <td>Alleles</td>
        <td><?php echo $detail_of_position['ATCG'] ?></td>
      </tr>
      <tr >
        <td>Chromosome</td>
        <td><?php echo $detail_of_position['chrom'] ?></td>
      </tr>
      <tr >
        <td>Strand</td>
        <td><?php echo $detail_of_position['strand'] ?></td>
      </tr>
      <tr>
        <td>Quality</td>
        <td><?php 
         if($detail_of_position['quality'] == "" OR $detail_of_position['quality'] == null){
              $detail_of_position['quality'] = "No data";
            }
             echo $detail_of_position['quality'] ?></td>
      </tr>
      <tr >
        <td>RS Number</td>
        <td><?php echo $detail_of_position['allele_rs'] ?></td>
      </tr>
    </tbody>
  </table>
</div>
