<?php 

namespace App\Http\Services;

class UserService {
	
	public function getUser($id){
		$userMapper = new \App\Http\Models\UserMapper;
		return $userMapper->fetchUser($id);
	}

	public function saveUser($data){
		$userModel = new \App\Http\Models\UserModel;
		$userModel->setName($data['name']);
		$userModel->setEmail($data['email']);
		$userModel->setRole('USER');
		$userModel->setPermissions("0");
		$userMapper = new \App\Http\Models\UserMapper;

		if( sizeof($userMapper->checkUser($data['email'])) == 0 ){
			$userMapper->addUser($userModel);
			$returnData = $userMapper->checkUser($data['email']);
			return array("success"=>true,"data"=>$returnData[0]);
		} else {
			return array("success"=>false,"message"=>"USER ALREADY EXISTS");
		}

		
	}
}