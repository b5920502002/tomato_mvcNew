<?php
error_reporting(0);
class detail_of_position_Model extends Model {

	public function __construct() {
		parent::__construct();
	}

    public function detail_of_position()
    {
    	$pos = $_POST['pos'];        
        return $this->db->selectOne("SELECT * FROM view_genom WHERE position = '$pos' ");
    }



}

