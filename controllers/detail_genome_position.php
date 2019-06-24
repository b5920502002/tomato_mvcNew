<?php

class detail_genome_position extends Controller {

	function __construct() {
		parent::__construct();
	}
	
	function index(){

        //$this->view->position = $this->model->position();
        $this->view->tdp_all = $this->model->tdp_all();

		$this->view->render('detail_genome_position/index',true);
	}

}


