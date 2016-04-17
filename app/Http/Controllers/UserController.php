<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function get(Request $req, $id){
        $userService = new \App\Http\Services\UserService;
        return response()->json($userService->getUser($id));
    }

    public function addUser(Request $req){
        if($req->method() == 'POST'){
            $userService = new \App\Http\Services\UserService;
            return response()->json($userService->saveUser($req->all()));
        }

    }
    //
}
