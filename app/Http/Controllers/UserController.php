<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Tymon\JWTAuth\Facades\JWTAuth;
class UserController extends Controller
{
    public function register(Request $request){
    	// validate
    	
    		$this->validate($request,[
    			'name' => 'required|max:255',
	            'email' => 'required|email|max:255|unique:users',
	            'password' => 'required|min:6'
    		]);
		
    	// create db
    		// $user = User::create($request->all());
    		$user = new User();
    		$user->name = $request->name;
    		$user->email = $request->email;
    		$user->password = bcrypt($request->password);

    		$user->save();


    	// response
    		return ["message"=>"User Created","user"=>$user];
    }

    public function login(Request $request){
    	$credential = $request->only('email','password');
    	var_dump(JWTAuth::attempt($credential));
    	if (!$token = JWTAuth::attempt($credential)){
    		return "Not Authenticated";
    	}

    	return ['token'=>$token];
    }
}
