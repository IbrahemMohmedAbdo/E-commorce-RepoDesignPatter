<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    //
    public function adminLogin()
    {
        return view('dashboard.page-login');
    }

    public function checkadminLogin(Request $request)
    {

      // To check Admin..
            if (Auth::guard('admin')->attempt(['email'=>$request['email'], 'password'=>$request['password']]))
            {

                return view('dashboard.users.dashboard')->with('msg', 'Logged In Successfully...');
            }
            else{
                return redirect()->route('admin.login')->with('msg','you can not To access this page');

            }



    }

    public function logout()
    {
       Auth::guard('admin')->logout();
        return redirect()->route('admin.login')->with('msg', 'Logged Out Successfully... ');

    }
}
