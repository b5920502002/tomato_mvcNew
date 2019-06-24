<?php
error_reporting(0);
class table_display2_model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

  public function tdp_all($accession_Number)
  {
    $all = array();
    $position1 = 0;
    $position2 = 50000;
    $accession_number = $accession_Number;

    if( isset($_POST['pos1']) && $_POST['pos1'] != "" ){
      $position1 = $_POST['pos1'];
      $_SESSION['pos1'] = $_POST['pos1'];
    }
    else{
      $position1 = 0;
      $_SESSION['pos1'] = 0;
    }
    if( isset($_POST['pos2']) && $_POST['pos2'] != "" ){
      $position2 = $_POST['pos2'];
      $_SESSION['pos2'] = $_POST['pos2'];
    }
    else{
      $position2 = 50000;
      $_SESSION['pos2'] = 50000;
    }

    $where = " (position BETWEEN $position1 AND $position2) " ;

    if($_POST['chrom'][0] != ""){
      $chrom = $_POST['chrom'] ;
      $where .= " AND chrom IN ('".$chrom[0]."'" ;
      if(sizeof($chrom) > 1){
        foreach ($chrom as $key => $value) {
          $where .= ",'".$value."'" ;
        }
        $where .= ") " ;
      }
      else{
        $where .= ") " ;
      }
    }
    if($_POST['allele'][0] != ""){
      $allele = $_POST['allele'] ;
      $where .= " AND ATCG = '" ;
      foreach ($allele as $key => $value) {

        if($key > 0){
          $where .= "/".$value ;
        }
        else{
          $where .= $value ;
        }
      }
      $where = rtrim($where,'/');
      $where .= "'" ;
    }

    //echo '<script> console.log("'.$where.'")</script>' ;

    $result = array();
    $qr = $this->db->selectAll("SELECT id_genomfact,id_bs,chrom,position,strand,ATCG,allele_rs,quality
      FROM view_genom 
      WHERE $where
      ORDER BY position") ;

    $color_array = [];
    for ($i=0; $i < sizeof($accession_number); $i++) {
      for ($k=0; $k < sizeof($qr); $k++) {
        $color_pos = $qr[$k]['id_genomfact'];

        $color_check_sql = "SELECT SUBSTRING(dna_accession,$color_pos, 1) as color_pos,accession_number 
        FROM accession_number_genome 
        WHERE (accession_number = '$accession_number[$i]') " ;

        $color_check = $this->db->selectOne($color_check_sql) ;
        $transform = DB_toGenome($color_check['color_pos']) ;
        $color_array[] = array(
          "accession_number" => $color_check['accession_number'],
          "color_pos" => $color_pos,
          "allele" => $transform
        );
      }
    }

    array_push( $result, $qr , $color_array);

    return $result;
  }

  public function tdp_same($accession_Number){

   $same = array();
   $split = array();
   $c = array();
   $position1 = 0;
   $position2 = 50000;

   if( isset($_POST['pos1']) && $_POST['pos1'] != "" ){
    $position1 = $_POST['pos1'];
    $_SESSION['pos1'] = $_POST['pos1'];
  }
  else{
    $position1 = 0;
    $_SESSION['pos1'] = 0;
  }
  if( isset($_POST['pos2']) && $_POST['pos2'] != "" ){
    $position2 = $_POST['pos2'];
    $_SESSION['pos2'] = $_POST['pos2'];
  }
  else{
    $position2 = 50000;
    $_SESSION['pos2'] = 50000;
  }

  if(isset($accession_Number) && $accession_Number[0] != ""){

    $accession_number = $accession_Number;
    $_SESSION['accession_number_line'] = $accession_number;

    for ($i=0; $i < sizeof($accession_number); $i++) {

      $sql_text = "SELECT dna_accession FROM accession_number_genome WHERE (accession_number = '$accession_number[$i]') " ;
      $same[$i] = $this->db->selectOne($sql_text) ;
      $split[] = str_split($same[$i]['dna_accession']);

    }

    for ($i=0; $i < sizeof($split); $i++) {
      for ($j=0; $j < sizeof($split[0]); $j++) {
        if($i+1 != sizeof($split)){

          if($split[$i][$j] == $split[$i+1][$j]){

            $c[] = $j+1 ;

          }
        }

      }
    }

    $where = " (position BETWEEN $position1 AND $position2) " ;

    if($_POST['chrom'][0] != ""){
      $chrom = $_POST['chrom'] ;
      $where .= " AND chrom IN ('".$chrom[0]."'" ;
      if(sizeof($chrom) > 1){
        foreach ($chrom as $key => $value) {
          $where .= ",'".$value."'" ;
        }
        $where .= ") " ;
      }
      else{
        $where .= ") " ;
      }
    }
    if($_POST['allele'][0] != ""){
      $allele = $_POST['allele'] ;
      $where .= " AND ATCG = '" ;
      foreach ($allele as $key => $value) {

        if($key > 0){
          $where .= "/".$value ;
        }
        else{
          $where .= $value ;
        }
      }
      $where = rtrim($where,'/');
      $where .= "'" ;
    }

    //echo '<script> console.log("'.$where.'")</script>' ;

    $result = array();
    $ids = join("','",$c);
    $qr = $this->db->selectAll("
      SELECT id_genomfact,id_bs,chrom,position,strand,ATCG,allele_rs,quality 
      FROM view_genom 
      WHERE $where AND id_genomfact IN ('$ids') ORDER BY position") ;

    $color_array = [];
    for ($i=0; $i < sizeof($accession_number); $i++) {
      for ($k=0; $k < sizeof($qr); $k++) {
        $color_pos = $qr[$k]['id_genomfact'];
        $color_check_sql = "SELECT SUBSTRING(dna_accession,$color_pos, 1) as color_pos,accession_number FROM accession_number_genome WHERE (accession_number = '$accession_number[$i]') " ;
        $color_check = $this->db->selectOne($color_check_sql) ;
        //print_r($color_check);
        $transform = DB_toGenome($color_check['color_pos']) ;
        $color_array[] = array(
          "accession_number" => $color_check['accession_number'],
          "color_pos" => $color_pos,
          "allele" => $transform
        );
      }
    }


    array_push( $result, $qr , $color_array);

    return $result;
  }
}

public function tdp_diff($accession_Number){

 $diff = array();
 $split = array();
 $c = array();
 $position1 = 0;
 $position2 = 50000;

 if( isset($_POST['pos1']) && $_POST['pos1'] != "" ){
  $position1 = $_POST['pos1'];
  $_SESSION['pos1'] = $_POST['pos1'];
}
else{
  $position1 = 0;
  $_SESSION['pos1'] = 0;
}
if( isset($_POST['pos2']) && $_POST['pos2'] != "" ){
  $position2 = $_POST['pos2'];
  $_SESSION['pos2'] = $_POST['pos2'];
}
else{
  $position2 = 50000;
  $_SESSION['pos2'] = 50000;
}

if(isset($accession_Number) && $accession_Number[0] != ""){

  $accession_number = $accession_Number;
  $_SESSION['accession_number_line'] = $accession_number;
  for ($i=0; $i < sizeof($accession_number); $i++) {

    $sql_text = "SELECT dna_accession FROM accession_number_genome WHERE (accession_number = '$accession_number[$i]') " ;
    $diff[$i] = $this->db->selectOne($sql_text) ;
    $split[] = str_split($diff[$i]['dna_accession']);

  }

  for ($i=0; $i < sizeof($split); $i++) {
    for ($j=0; $j < sizeof($split[0]); $j++) {
      if($i+1 != sizeof($split)){

        if($split[$i][$j] != $split[$i+1][$j]){
          $c[] = $j+1 ;
        }

      }

    }
  }

  $where = " (position BETWEEN $position1 AND $position2) " ;

  if($_POST['chrom'][0] != ""){
    $chrom = $_POST['chrom'] ;
    $where .= " AND chrom IN ('".$chrom[0]."'" ;
    if(sizeof($chrom) > 1){
      foreach ($chrom as $key => $value) {
        $where .= ",'".$value."'" ;
      }
      $where .= ") " ;
    }
    else{
      $where .= ") " ;
    }
  }
  if($_POST['allele'][0] != ""){
    $allele = $_POST['allele'] ;
    $where .= " AND ATCG = '" ;
    foreach ($allele as $key => $value) {

      if($key > 0){
        $where .= "/".$value ;
      }
      else{
        $where .= $value ;
      }
    }
    $where = rtrim($where,'/');
    $where .= "'" ;
  }

  //echo '<script> console.log("'.$where.'")</script>' ;


  $result = array();
  $ids = join("','",$c);
  $qr = $this->db->selectAll("SELECT id_genomfact,id_bs,chrom,position,strand,ATCG,allele_rs,quality 
    FROM view_genom 
    WHERE $where AND id_genomfact IN ('$ids') 
    ORDER BY position") ;
  $color_array = [];
  for ($i=0; $i < sizeof($accession_number); $i++) {
    for ($k=0; $k < sizeof($qr); $k++) {
      $color_pos = $qr[$k]['id_genomfact'];
      $color_check_sql = "SELECT SUBSTRING(dna_accession,$color_pos, 1) as color_pos,accession_number FROM accession_number_genome WHERE (accession_number = '$accession_number[$i]') " ;
      $color_check = $this->db->selectOne($color_check_sql) ;
      $transform = DB_toGenome($color_check['color_pos']) ;
        $color_array[] = array(
          "accession_number" => $color_check['accession_number'],
          "color_pos" => $color_pos,
          "allele" => $transform
        );
    }
  }

  array_push( $result, $qr , $color_array);

  return $result;
}
else{
  return 0;
}
}

public function accession_number()
{
 return $this->db->selectAll("SELECT accession_number FROM accession_number_genome ORDER BY id_accession_number ASC") ;
}


}