<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Session;

class AdminController extends Controller
{
    public function showRegistrationPage(){
        $page_title = "Registration";

        return view('backend.auth.register', \get_defined_vars());
    }

    public function registerAdmin(Request $request){
        $this->validate($request,[
            'name' => 'required|min:2|max:255',
            'email' => 'required|email',
            'password' => 'required|min:6|required_with:confirm-password|same:confirm-password',
            'confirm-password' => 'required|min:6',
        ]);

        $found = Admin::where("email", $request->email)->first();

        if ($found != null) {
            Session::flash('registration_found', 'User already registered!');
            return redirect()->route('admin.register');
        }

        $admin = new Admin();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = $request->password;
        $admin->save();

        Session::flash('registered', 'Registration completed!');
        return redirect()->route('admin.panel');
    }

    public function showLoginPage(){
        $page_title = "Login";
        
        return view('backend.auth.login', \get_defined_vars());
    }

    public function adminLogin(Request $request){
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $admin = Admin::where("email", $request->email)->first();

        if($admin == null){
            Session::flash('login_message', 'User not found');
            return redirect()->route('admin.login.page');
        }

        if($admin->password != $request->password){
            Session::flash('login_message', 'Wrong password');
            return redirect()->route('admin.login.page');
        }

        Session::flash('registered', 'Login completed!');
        return redirect()->route('admin.panel');
    }
}
