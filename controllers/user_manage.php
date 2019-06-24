<?php

class User_manage extends Controller {

	public function __construct() {
		parent::__construct();
	}
	
	public function index() {		
        //Session:init();
		//Session::get([key]);
		Auth::handleLogin();
		$this->view->userList = $this->model->userList();
		$this->view->render('user_manage/index');
	}
	public function create() 
	{
		$data = array();
		$data['username'] = $_POST['username'];
		$data['password'] = md5($_POST['password']);
		$data['firstname'] = $_POST['firstname'];
		$data['lastname'] = $_POST['lastname'];
		$data['email'] = $_POST['email'];
		$data['permission'] = $_POST['permission'];
		$data['status'] = $_POST['status'];
		$check = $this->model->insert($data);
		header('Content-type: application/json');
		if($check)
		print json_encode($check);
		else
		print json_encode(false);
	}
	public function edit() 
	{
		$data = array();
		$data['id_member'] = $_POST['id'];
		$data['firstname'] = $_POST['firstname'];
		$data['lastname'] = $_POST['lastname'];
		$data['email'] = $_POST['email'];
		$data['permission'] = $_POST['permission'];
		$data['status'] = $_POST['status'];
		$check=$this->model->edit($data);
		header('Content-type: application/json');
		if($check)
		print json_encode(true);
		else
		print json_encode(false);
	}	
	public function delete() 
	{
		$id =$_POST['id'];
		$check=$this->model->delete($id);
		header('Content-type: application/json');
		if($check)
		print json_encode(true);
		else
		print json_encode(false);
	}
	public function change_status_block() 
	{
		$data = array();
		$data['id_member'] = $_POST['id'];
		$data['status'] = $_POST['status'];
		$check=$this->model->block($data);
		header('Content-type: application/json');
		if($check)
		print json_encode(true);
		else
		print json_encode(false);
	}
	
}