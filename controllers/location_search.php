<?php
class location_search extends Controller {
	function __construct() {
		parent::__construct();
	}
	function index() {	
		$member = Session::get('member');
		if($member == null){
			$member = 0;
		}
		else
		{
			$member = $member["id_member"];
		}
		$this->view->LC_all = $this->model->location_all();	
		$this->view->findPermission = $this->model->findPermission();
		$this->view->sessionMember =  $member;
		$this->view->render('location_search/index');
	}
}
?>