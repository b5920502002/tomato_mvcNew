<?php

class General_Infomation extends Controller {

	function __construct() {
		parent::__construct();
	}
	
	function indexfiw() {		
		// $member = new Session;
		//header('Content-Type: application/json');
		
		//$json_data = $this->model->saveDetail();
		
		// $member->get('member');
		//Session::get([key]);
		$this->view->homepage = $this->model->showDetail();
		//print json_encode($json_data);
		$this->view->render('general_infomation/indexfiw');
	}
	public function createtitle() 
	{
		//header('Content-type: application/json');
		$this->view->render('general_infomation/createtitle');
	}
	public function edittitle() 
	{
		//header('Content-type: application/json');
		$this->view->render('general_infomation/edittitle');
	}
	public function createdetail() 
	{
		//header('Content-type: application/json');
		$this->view->render('general_infomation/createdetail');
	}
	public function editdetail() 
	{
		//header('Content-type: application/json');
		$this->view->render('general_infomation/editdetail');
	}
	public function createpicture() 
	{
		//header('Content-type: application/json');
		$this->view->render('general_infomation/createpicture');
	}
	public function insert_detail()
	{
		$data = array();
		$data = $_POST['type_crop'];
		$data = $_POST['title'];
		$data = $_POST['imagebase64'];
		$data = $_POST['imagebase64'];
		$test = $this->model->insertDetail($data);
		print_r($test);echo $test[0]['pos'];
	}

	public function crop_image()
	{
		
			$data = $_POST['imagebase64'];
			
			list($type, $data) = explode(';', $data);
			list(, $data)      = explode(',', $data);
			$data = base64_decode($data);
			
			date_default_timezone_set("Asia/Bangkok");
			
			list($usec, $sec) = explode(" ", microtime());
			$time =(float)$usec + (float)$sec;
			list($usec, $sec) = explode(".", $time);

			$name =date("dmyHis").$usec.$sec;
			file_put_contents('temp_pic/'.$name.'.png', $data);
			header('Content-Type: application/json');
			$path =  URL."temp_pic/".$name.".png";
			//print json_encode('55555555555');
			print json_encode("temp_pic/".$name.".png");	
	}

	/////// start : Asree , HPS = homepage summernote
	public function index() {	
		$this->view->R_summernote = $this->model->R_summernote();
		$this->view->render('general_infomation/index');	
	}
	public function C_title()// DB แบบเก่า
	{
		$data = array();
		$data['title_detail'] = $_POST['title_detail'];
		$this->view->homepage = $this->model->C_title($data);
		header('location: ' . URL . 'General_Infomation');
	}
	public function  C_HPS()// CREATE DB summernote
	{
		$data = array();
		$data['content'] = $_POST['content'];
		header('Content-Type: application/json');
		$json_data = $this->model->C_HPS($data);
		print json_encode($json_data);
	}
	public function  U_HPS()// UPDATE DB summernote
	{
		
		$data = array();
		$data['id'] = $_POST['id'];
		$data['content'] = $_POST['content'];
		header('Content-Type: application/json');
		$json_data = $this->model->U_HPS($data);
		print json_encode($json_data);
	}
	public function  U_positionHPS()// UPDATE DB summernote
	{
		
		$data = array();
		$data['id'] = $_POST['id'];
		$data['position'] = $_POST['position'];
		header('Content-Type: application/json');
		$json_data = $this->model->U_positionHPS($data);
		print json_encode($json_data);
	}
	public function  D_HPS()// DELETE DB summernote
	{
		
		$data = array();
		$data['id'] = $_POST['id'];
		header('Content-Type: application/json');
		$json_data = $this->model->D_HPS($data);
		header('location: ' . URL . 'General_Infomation/index');
	}
	public function C_chang_path()// DB summernote
	{
			$data = $_POST['imagebase64'];
			$name_data = $_POST['file_name'];
			list($type, $data) = explode(';', $data);
			list(, $data)      = explode(',', $data);
			$data = base64_decode($data);
			
			date_default_timezone_set("Asia/Bangkok");
			
			list($usec, $sec) = explode(" ", microtime());
			$time =(float)$usec + (float)$sec;
			list($usec, $sec) = explode(".", $time);

			$name =	$name_data;
			file_put_contents('pic/home_page/'.$name, $data);
			header('Content-Type: application/json');
			$path =  "pic/home_page/".$name;
			print json_encode($path);	
	}
	
}