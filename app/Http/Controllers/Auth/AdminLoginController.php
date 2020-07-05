<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AdminLoginController extends Controller
{
    //

	public function __construct()
	{
		$this->middleware('guest:admin');
        //$this->middleware('guest')->except('logout');
	}

    //login form for only admin
    public function showLoginForm()
    {
        return view('auth.admin-login');
    }
   
    //login function of admin
    public function login(Request $request)
    {
    	//validate form data
    	$this->validate($request, [
    		'email' => 'required|email',
    		'password' => 'required|min:4'
    	]);

    	//attampt to log admin in
    	if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember))
    		{
    			// if successful redirect to dashboard
    			return redirect()->intended(route('admin.dashboard'));
    		}

    	//if unsucess redirect to them back
    		return redirect()->back()->withInput($request->only('email','remember'));
    }
}
