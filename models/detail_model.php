<?php
error_reporting(0);
class Detail_Model extends Model {

	public function __construct() {
		parent::__construct();
	}

  public function genome()
  {
    $atcg = "A/T";
    $maxmin_pos = array();

    $count_pos = $this->db->selectOne("SELECT count(DISTINCT(chrom)) as count_pos,MAX(position) as max_pos FROM view_genom");

    for ($i=0; $i < $count_pos['count_pos']; $i++) { 
      $maxmin_pos[] = $this->db->selectOne("SELECT ATCG,chrom,MIN(position) as min_pos,MAX(position) as max_pos FROM `view_genom` WHERE ATCG = '$atcg' AND chrom = $i+1");
    }

    return $maxmin_pos;

  }

  public function owner_check($id_fact_tomato){
    $sql = "SELECT id_member FROM data_owner WHERE `id_fact_tomato`= $id_fact_tomato" ;
    return $this->db->selectOne($sql) ;
  }

  public function detail()
  {
    $id_accession_number = "";
    $accession_number = "";

    if( isset($_POST['id_accession_number']) AND isset($_POST['accession_number']) ){
      $id_accession_number = $_POST['id_accession_number'];
      $accession_number = $_POST['accession_number'];
    }
    elseif( isset($_POST['accession_number']) ){
      $accession_number = $_POST['accession_number'];
    }
    elseif( isset($_POST['id_accession_number']) ){
      $id_accession_number = $_POST['id_accession_number'];
    }
    else{
      $accession_number = "";
      $id_accession_number = "";
    }

    $result = array();
    $id = $id_accession_number;

    
    if(!empty($accession_number)){
      $id = $this->db->selectOne("SELECT id_accession_number FROM `accession_number` WHERE accession_number = '$accession_number' ");
      $id = $id['id_accession_number'];
    }
    

    

    $result = $this->db->selectOne("SELECT * FROM `v_fact_tomato` WHERE id_accession_number = $id ");

    $accession_number = $result['accession_number'];

    //echo "<script> alert('$id'); </script>";

    if($accession_number != ""){
      $_SESSION['accession_number_detail'] = $accession_number;
      return $result ;
    }


  }//End function

  public function upload_file($file_name,$accession_number,$category){

    $check_accession = $this->db->selectOne("SELECT COUNT(accession_number) as count_accession FROM image_accession_number WHERE accession_number = '$accession_number'");

    $count = $check_accession['count_accession'];
    $img_name_table = "img_name_".$category ;
    $new_file_name = "";
    //echo "<script> alert('$img_name_table');  </script>" ;

    if($count == 0){ // No accession number in Table.

      $data = array(
        "img_id" => null,
        "accession_number" => $accession_number,
        "$img_name_table" => $file_name
      );
      
      $result = $this->db->insert("image_accession_number",$data);
    }
    else { // Have accession number in Table.

      $old_fileName_in_table = $this->db->selectOne("SELECT $img_name_table as name FROM image_accession_number WHERE accession_number = '$accession_number'");

      if($old_fileName_in_table['name'] != ""){
        $new_file_name = $old_fileName_in_table['name'].",".$file_name ;
      }
      else{
        $new_file_name = $file_name ;
      }

      $data = array("$img_name_table" => $new_file_name);
      $where = "accession_number = '$accession_number'" ;
      
      $result = $this->db->update("image_accession_number",$data,$where);

    }
    return $result;
  }//End function

  public function delete_file($pathFile,$accession_number){

    $arr_path = explode(',', $pathFile); // เหลือ array( "pic/detail/Fruit/img_test1.jpg" , "pic/detail/Fruit/img_test2.jpg" )
    //print_r($arr_path);

    for ($i=0; $i < sizeof($arr_path); $i++) {
      $p = explode('/', $arr_path[$i]); // เหลือ array("pic","detail","Fruit","img_test1.jpg")
      $filename = end($p) ; // img_test1.jpg
      $category = prev($p); // Fruit
      $table = "img_name_".$category ; // img_name_Fruit
      $txt_filename = $this->db->selectOne("SELECT $table as table_name FROM image_accession_number WHERE accession_number = '$accession_number'");
      $arr_filename = explode(',', $txt_filename['table_name']);

      for ($j=0; $j < sizeof($arr_filename); $j++) {
        if($arr_filename[$j] == $filename){
          unset($arr_filename[$j]);
        }
      }

      $new_file_name = implode(",", $arr_filename);
      echo $new_file_name;
      $data = array("$table" => $new_file_name);
      $where = "accession_number = '$accession_number'" ;

      $result = $this->db->update("image_accession_number",$data,$where);
    }

    return $result;
  }//End function

  public function show_img($accession_number){

    $img_name_all = array();

    $str_img_name_fruit = $this->db->selectOne("SELECT img_name_fruit as fruit FROM image_accession_number WHERE accession_number = '$accession_number'");
    $str_img_name_plant = $this->db->selectOne("SELECT img_name_plant as plant FROM image_accession_number WHERE accession_number = '$accession_number'");
    $str_img_name_flower = $this->db->selectOne("SELECT img_name_flower as flower FROM image_accession_number WHERE accession_number = '$accession_number'");
    $str_img_name_leaf = $this->db->selectOne("SELECT img_name_leaf as leaf FROM image_accession_number WHERE accession_number = '$accession_number'");

    $img_name_fruit = explode(",",$str_img_name_fruit['fruit']);
    $img_name_plant = explode(",",$str_img_name_plant['plant']);
    $img_name_flower = explode(",",$str_img_name_flower['flower']);
    $img_name_leaf = explode(",",$str_img_name_leaf['leaf']);
    //$name = $img_name[0];
    //echo "<script> alert('$name');  </script>" ;
    array_push($img_name_all, $img_name_fruit,$img_name_flower ,$img_name_leaf,$img_name_plant );
    return $img_name_all ;

  }

  public function insert_layout($layout,$accession_number){

    $check_accession = $this->db->selectOne("SELECT COUNT(accession_number) as count_accession FROM image_accession_number WHERE accession_number = '$accession_number'");

    $count = $check_accession['count_accession'];

    if($count == 0){ // No accession number in Table.

      $data = array(
        "img_id" => null,
        "accession_number" => $accession_number,
        "text_layout" => $layout
      );
      
      $result = $this->db->insert("image_accession_number",$data);
    }
    else { // Have accession number in Table.

      $data = array("text_layout" => $layout);
      $where = "accession_number = '$accession_number'" ;
      
      $result = $this->db->update("image_accession_number",$data,$where);

    }

    
  }//End function

  public function layout(){
    $accession_number = $_SESSION['accession_number_detail'];
    $l = $this->db->selectOne("SELECT text_layout FROM image_accession_number WHERE accession_number = '$accession_number' ");
    $l = $l['text_layout'];
    //echo "<script> alert('$l');  </script>" ;
    return $l ;
  }

  public function upload_primary_img($path,$accession_number){

    $data_in_photo = array(
      "id_photo" => null,
      "path" => $path
    );
    $in_photo = $this->db->insert("photo",$data_in_photo);

    $getID_photo = $this->db->selectOne("SELECT id_photo FROM photo WHERE photo.path = '$path'");
    $getID_accession_number = $this->db->selectOne("SELECT id_accession_number FROM accession_number WHERE accession_number = '$accession_number'");
    
    $id_photo = $getID_photo['id_photo'];
    $id_accession_number = $getID_accession_number['id_accession_number'];

    $data_in_fact = array( "id_photo" => $id_photo );
    $where = "id_accession_number = '$id_accession_number'" ;

    //echo "<script> alert('$accession_number');  </script>" ;

    $result = $this->db->update("fact_tomato",$data_in_fact,$where);

  }

  public function show_primary_img($accession_number)
  {
    $id_accession_number = $this->db->selectOne("SELECT id_accession_number FROM accession_number WHERE accession_number = '$accession_number'");
    $id_acc = $id_accession_number['id_accession_number'];
    $id_photo = $this->db->selectOne("SELECT id_photo FROM fact_tomato WHERE id_accession_number = $id_acc ");
    $id = $id_photo['id_photo'];
    return $this->db->selectOne("SELECT photo.path as 'path' FROM photo WHERE photo.id_photo = '$id' ");
  }

  public function location(){
    $acc = $_POST['accession_number'];
    $location = $this->db->selectOne("SELECT * FROM `view_location_all` WHERE `accession_number` = '$acc' ");
    $sql = "SELECT * FROM `view_location_all` WHERE `accession_number` = '$acc' ";
    return $location;
  }










}      