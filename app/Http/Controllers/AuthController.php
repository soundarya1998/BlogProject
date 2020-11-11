<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\authlogin;

class AuthController extends Controller
{
    public function AuthLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        $uname = $request->get("username");
        $pwd   = $request->get("password");

        if($uname == 'admin' && $pwd == 'admin')
        {
            echo "<script>alert('Logged in successfully');window.location.href='/Ad';</script>";
        }
        else
        {
            echo "<script>alert('Authentication Failed!');window.location.href='/myadmin';</script>";
        }
    }
}
