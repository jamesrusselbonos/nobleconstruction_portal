<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class admin_loginController extends Controller
{

	public function __construct(){

        $this->middleware('guest:admin');
    }

    public function loginform(){

    	return view('auth/admin_login');
    }

    public function login(Request $request){

    	$this->validate($request, [
    		'email' => 'required|email',
    		'password' => 'required|min:8'
    	]);

    	if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
    		return redirect()->intended(route('admin.dashboard'));
    	}

    	return redirect()->back()->withInput($request->only('email', 'remember'));
    }
}
