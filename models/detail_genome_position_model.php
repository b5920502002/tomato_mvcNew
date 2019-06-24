<?php
error_reporting(0);
class detail_genome_position_Model extends Model {

	public function __construct() {
		parent::__construct();
	}

    public function position(){

        if(isset($_POST['pos1']) && isset($_POST['pos2']) && !empty($_POST['pos1']) && !empty($_POST['pos2'])  ){
            $pos1 = $_POST['pos1'];
            $pos2 = $_POST['pos2'];
            $_SESSION['pos1'] = $_POST['pos1'];
            $_SESSION['pos2'] = $_POST['pos2'];
        }
        elseif (isset($_POST['pos1']) && !empty($_POST['pos1'])) {
            $pos2 = 0;
            $pos1 = $_POST['pos1'];
            $_SESSION['pos2'] = 0;
            $_SESSION['pos1'] = $_POST['pos1'];
        }
        elseif (isset($_POST['pos2']) && !empty($_POST['pos2'])) {
            $pos1 = 0;
            $pos2 = $_POST['pos2'];
            $_SESSION['pos1'] = 0;
            $_SESSION['pos2'] = $_POST['pos2'];
        }
        else{
            $pos1 = 0;
            $pos2 = 50000;
            $_SESSION['pos1'] = 0 ;
            $_SESSION['pos2'] = 50000 ;
        }

        
        $c = 0;
        $count_pos = $this->db->selectOne("SELECT count(DISTINCT(chrom)) as count_pos,MAX(position) as max_pos FROM view_genom");

        unset($_POST['pos1']);
        unset($_POST['pos2']);

        $atcg = "";
        $chrom = "";

        if($_POST['allele'][0] != ""){

            $atcg = $_POST['allele'][0];

            if($_POST['allele'][1] != ""){
                $atcg .= "/".$_POST['allele'][1];

                if($_POST['allele'][2] != ""){
                    $atcg .= "/".$_POST['allele'][2] ;
                }
            }
        }

        if($_POST['chrom'] != ""){
            $chrom = $_POST['chrom'];
        }
        else{
            $chrom = "";
        }

        return $this->db->selectAll("SELECT ATCG,chrom,position,strand,quality,allele_rs as rs_number FROM `view_genom` WHERE ATCG='$atcg' OR chrom='$chrom' OR position BETWEEN $pos1 AND $pos2 ORDER BY position");
    }

    public function tdp_all()
    {
      $all = array();
      $position1 = 0;
      $position2 = 50000;
      $accession_number = ["LE001"];

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

    $result = array();
    $qr = $this->db->selectAll("SELECT id_genomfact,id_bs,chrom,position,strand,ATCG,allele_rs as rs_number ,quality FROM view_genom WHERE (position BETWEEN $position1 AND $position2) ORDER BY position") ;

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

    //echo $color_array[1]['allele'];
    //echo "<pre>";print_r($color_array);echo "</pre>";


  array_push( $result, $qr , $color_array);

  return $result;
}

}