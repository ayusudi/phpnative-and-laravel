<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use App\Models\Role;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
 
    public function loginHtml(){
        return view('login');
    }
    function doLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        return $request;
        // if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        //     $request->session()->regenerate();
        //     return redirect()->intended('/user');
        // }
        // return back()->withErrors([
        //     'password' => 'Wrong email or password',
        // ]);
    }
   
}

