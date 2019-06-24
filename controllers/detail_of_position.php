<?php

class detail_of_position extends Controller {

	function __construct() {
		parent::__construct();
	}
	
	function index(){
		
		$this->view->detail_of_position = $this->model->detail_of_position();

		$this->view->render('detail_of_position/index',true);
	}

}


