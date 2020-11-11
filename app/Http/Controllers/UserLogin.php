<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userreg;

class UserLogin extends Controller
{
    public function login()
    {
        return view('userlogin');
    }

    public function UserLogin(Request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'password' => 'required'
        // ]);
        $uname = $request->get("name");
        $pwd   = $request->get("password");
            // echo $uname;
            // exit();
           
        $records = userreg::select('*')->where('name',$uname)
                            ->where('password',$pwd)->get();
      
        if($records->isEmpty())
        {

            return view('userlogin');
        }
        else{
            session(['user'=>$uname]);
            return redirect('/cli');
           
        }
    }

    public function logout(){
        session()->put('user',null);
        return view('userlogin');
    }
}
