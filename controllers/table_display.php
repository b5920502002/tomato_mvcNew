<?php

class table_display extends Controller {

	function __construct() {
		parent::__construct();
	}
	
	function index() {

		$_SESSION['radio_position'] = $_POST['radio_position'];

		$this->view->tdp_all = $this->model->tdp_all();
		$this->view->tdp_same = $this->model->tdp_same();
		$this->view->tdp_diff = $this->model->tdp_diff();
		//$this->view->position = $this->model->position();
		$this->view->render('table_display/index',true);
	}
}