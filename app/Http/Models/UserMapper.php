<?php 

namespace App\Http\Models;
use App\Http\Models\UserModel;
use DB;

class UserMapper {
	
	public function fetchUser($id){
		return DB::select('select * from users where id = ?',[$id]);
	}
	public function checkUser($email){
		return DB::select('select * from users where email = ?',[$email]);
	}

	public function addUser(UserModel $user){

		DB::insert('insert into users (name,email,role,permissions) values (?,?,?,?)',[
				$user->getName(),
				$user->getEmail(),
				$user->getRole(),
				$user->getPermissions()
			]);
	}
}