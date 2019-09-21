<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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
}
