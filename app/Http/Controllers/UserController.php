<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function userRegistration(Request $request) {
    	$table = new User();


    	$table->name 		= $request->input('name');
    	$table->email 		= $request->input('email');
    	$table->password 	= bcrypt($request->input('password'));

    	$table->save();
    	return "Data added";
    }

    public function loginUser(Request $request) {
    	$data = $request->only('email', 'password');

    	if(Auth::attempt($data)) {
    		return "Sucesssss";
    	}else {
    		return "Faail";
    	}
    }


}
