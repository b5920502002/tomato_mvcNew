<?php

class User_manage_Model extends Model {

	public function __construct() {
		parent::__construct();
	}

	public function userList()
	{
     
        $member = Session::get('member');
		return $this->db->selectAll("SELECT * FROM member WHERE id_member NOT IN (".$member['id_member'].") ORDER BY id_member DESC");

		/*$sth = $this->db->prepare('SELECT userid, login, role FROM user');
		$sth->execute();
		return $sth->fetchAll();*/
	}
	public function insert($data)
	{
		$value = array( 
			'id_member' => null,
			'username' =>$data['username'], 
			'password' =>$data['password'], 
			'firstname' =>$data['firstname'], 
			'lastname' =>$data['lastname'], 
			'email' =>$data['email'], 
			'permission' =>$data['permission'], 
			'status' =>$data['status'],
			'login_fail' =>0,			
			'login_date' =>null,
			'pictrue' =>null
			 
			);
			if($this->db->insert('member', $value))
			{
				return $this->db->lastInsertId();	
			}
			else 
			{
				return false;
			}
			
	}
	public function edit($data)
	{
		$value = array( 
		'firstname' =>$data['firstname'], 
		'lastname' =>$data['lastname'], 
		'email' =>$data['email'], 
		'permission' =>$data['permission'], 
		'status' =>$data['status'] 
		);		
		return $this->db->update('member', $value, " `id_member` = {$data['id_member']}");
	}
	public function delete($id)
	{
		return $this->db->delete('member'," `id_member` = {$id}");
	}
	public function block($data)
	{
		$value = array( 			
			'status' =>$data['status'] 
			);		
		return $this->db->update('member', $value, " `id_member` = {$data['id_member']}");
	}
	
	
}