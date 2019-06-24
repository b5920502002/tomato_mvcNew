<?php

class General_Infomation_Model extends Model {

	public function __construct() {
		parent::__construct();
	}
    public function showDetail()
	{
     
		return $this->db->selectAll('SELECT * FROM home_page');
		
	
	}
	public function insertDetail($data)
	{
	    date_default_timezone_set("Asia/Bangkok");         
		$value = array( 
			'id_home_page' =>'',
			'date_create' => date("Y-m-d h:i:s"),
			'front' =>'"Poppins", sans-serif', 
			'front_size' =>'16px', 
			'color' =>'red', 
			'position' =>$result[0]['pos'], 
			'type' =>'NULL', 
			'text' =>'NULL'
			);
		return $this->db->insert('fact_home',$value);
	}
	public function deleteDetail($id)
	{
		return $this->db->delete('fact_home'," `id_fact_home` = {$id}");
	
	}


	// start : Asree
	public function C_title($data)// DB เก่า
	{
		$this->db->insert('home_page', array(
					'id_home_page' => "",
					'type' => "title",
					'text' => $data['title_detail'],
					'title' => $data['title_name']
				));
	
	}

	public function D_HPS($data){// DELETE homepage summernote
		return	$this->db->delete('homepage_summernote'," `id_hps` = {$data['id']}");
	}

	public function U_HPS($data){// UPDATE homepage summernote	 
		$postData = array(
			'content' => $data['content']
		);
		$this->db->update('homepage_summernote', $postData, "homepage_summernote.id_hps = {$data['id']}");
		return $this->db->selectAll("SELECT *
			FROM homepage_summernote
			WHERE homepage_summernote.id_hps = '".$data['id']."'");
	}
	
	public function U_positionHPS($data){// UPDATE position homepage summernote	 

		// $sth = $this->prepare("UPDATE `homepage_summernote` SET `position`= homepage_summernote.position+1  WHERE homepage_summernote.position > '".$data['position']."' AND homepage_summernote.id_hps != '".$data['id']."'");
		// $sth->execute();

		$postData = array(
			'position'=>'homepage_summernote.position+1'
		);
		$this->db->updateIncreatement('homepage_summernote', $postData,"homepage_summernote.position > {$data['position']} AND homepage_summernote.id_hps != {$data['id']}");
		
		$postData2 = array(
			'position' => $data['position']+1
		);
		$this->db->update('homepage_summernote', $postData2, "homepage_summernote.id_hps = {$data['id']}");
		return $this->db->selectAll("SELECT * FROM homepage_summernote WHERE 1");
		
	}

	public function C_HPS($data){// CREATE homepage summernote
		 $pos = $this->db->selectAll('SELECT MAX(homepage_summernote.position) AS position FROM `homepage_summernote`');
		
		$this->db->insert('homepage_summernote', array(
			'content' => $data['content'],
			'create_by' => "",
			'position' =>  $pos[0]['position']+1
		));
		return $this->db->selectAll('SELECT *
			FROM homepage_summernote
			WHERE homepage_summernote.id_hps = (SELECT MAX(homepage_summernote.id_hps) FROM `homepage_summernote`)');
	}

	public function R_summernote(){ // READE homepage summernote		
		return $this->db->selectAll('SELECT * FROM `homepage_summernote` ORDER BY homepage_summernote.position');
	}



	

}