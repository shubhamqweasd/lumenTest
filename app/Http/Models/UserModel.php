<?php 

namespace App\Http\Models;

class UserModel {
	protected $_name;
	protected $_email;
	protected $_role;
	protected $_permissions;

	public function setName($name){
		$this->_name = $name;
	}
	public function setEmail($email){
		$this->_email = $email;
	}
	public function setRole($role){
		$this->_role = $role;
	}
	public function setPermissions($permissions){
		$this->_permissions = $permissions;
	}


	public function getName(){
		return $this->_name;
	}
	public function getEmail(){
		return $this->_email;
	}
	public function getRole(){
		return $this->_role;
	}
	public function getPermissions(){
		return $this->_permissions;
	}

}