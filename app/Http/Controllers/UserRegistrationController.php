<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userreg;

class UserRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ureg = userreg::get()->toArray();
        return view('Admin.userdetails',compact('ureg'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('userreg');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required',
            'address'   => 'required',
            'contact'   => 'required|max:10',
            'email'     => 'required|email',
            'password'  => 'required'
        ]);

        $ureg = new userreg;
        $ureg->name = $request->get('name');
        $ureg->address = $request->get('address');
        $ureg->contact = $request->get('contact');
        $ureg->email = $request->get('email');
        $ureg->password = $request->get('password');
        $ureg->save();

        if($ureg){
            echo "<script>alert('Inserted Successfully')</script>";
            return view('userlogin');
		}
		else{
            echo "something went wrong";
        }
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ureg = userreg::find($id);
        $ureg->delete();
        return redirect()->route('userreg.index')->with('Success','User Record Deleted Successfully!');
    }
}
