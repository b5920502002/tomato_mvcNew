<?php

class table_display2 extends Controller {

	function __construct() {
		parent::__construct();
	}
	
	function index() {

		$_SESSION['radio_position'] = "all";

		$this->view->tdp_all = $this->model->tdp_all();
		$this->view->tdp_same = $this->model->tdp_same();
		$this->view->tdp_diff = $this->model->tdp_diff();
		//$this->view->position = $this->model->position();
		$this->view->render('table_display/index',true);
	}
}