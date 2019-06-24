<?php

class Login extends Controller {

	function __construct() {
		parent::__construct();	
	}
	
	function index() 
	{	
		//echo Hash::create('sha256', 'jonathan', HASH_PASSWORD_KEY);
		$this->view->render('login/index',true);
	}
	function register() 
	{	
		$this->view->render('login/register',true);
	}
	function register_insert() 
	{
        if(isset($_POST['g-recaptcha-response']))
        {
            $captcha=$_POST['g-recaptcha-response'];
            if($captcha)
            {
                $secretKey = "6LcGdakUAAAAAGYr5bX1LbijU2Ga7av_hORqIscf";
                $ip = $_SERVER['REMOTE_ADDR'];
                $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
                $responseKeys = json_decode($response,true);

                $data = array();
                $data['name'] = $_POST['name'];
                $data['surname'] = $_POST['surname'];
                $data['email'] = $_POST['email'];
                $data['username'] = $_POST['username'];
                $data['password'] = $_POST['password'];
                $data['cf_password'] = $_POST['cf_password'];

                $this->model->register_insert($data);
                header('location: ../login');
                exit;

            }
        }
        $this->register();
	}
	function check_login()
	{	
		$check =$this->model->check_login($_POST['username'],$_POST['password']);
		if($check === "Blocked")
		{
			echo "<script> alert('Account blocked by admin. Please contact admin.'); window.location='../login'</script>";
		}	
		else if($check)
		{
			header('location: ../general_infomation');
		}
		else
		{
			header('location: ../login');
		}
	}
	function logout()
	{
		Session::destroy();
		header("location: ".URL."general_infomation" );
		// header("location :".URL."general_infomation");
	}
	public function FP_checkUser()// เช็คว่ามีชื่อในระบบไหม เพื่อจะไปส่ง key ให้
	{
		header('Content-Type: application/json');
		$data = array();
		$data['email'] = $_POST['emailAJ'];
		$data['username'] = $_POST['usernameAJ'];
		$json_data = $this->model->checkUser($data);
		print json_encode($json_data);
	}
	public function FP_sentMail()// ส่ง mail ไปยังปลายทาง
	{
		header('Content-Type: application/json');
		$data = array();
		$data['email'] = $_POST['emailAJ'];
		$data['username'] = $_POST['usernameAJ'];
		$data['base_url'] = $_POST['base_url'];
		//$this->model->createMail($data);
		 $json_data = $this->model->createMail($data);
		 print json_encode($json_data);
	}
	public function FP_checkToken()// เช็คว่า key reset password ถูกต้องหรือไม่ 
	{
		header('Content-Type: application/json');
		$data = array();
		$data['email'] = $_POST['emailAJ'];
		$data['username'] = $_POST['usernameAJ'];
		$data['key'] = $_POST['keyAJ'];
		$json_data = $this->model->checkToken($data);
		print json_encode($json_data);
	}
	public function FP_updatPassword()// เปลี่ยน password ที่รับเข้ามาใหม่
	{
		//header('Content-Type: application/json');
		$data = array();
		$data['email'] = $_POST['emailAJ'];
		$data['username'] = $_POST['usernameAJ'];
		$data['key'] = $_POST['passAJ'];
		//$this->model->updatPass($data);
		$json_data = $this->model->updatPass($data);
		print json_encode($json_data);
	}
	
	
	

	

}