<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat = category::get()->toArray();
        return view('Admin.display_category',compact('cat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.add_category');
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
            'category_name' => 'required'
        ]);

        $cat_name = $request->get('category_name');
        $cat =category::get();
        foreach($cat as $c)
        {
            if($c->category_name == $cat_name)
                return redirect()->route('category.create');
            else{
                $cat = new category;
                $cat->category_name = $request->get('category_name');
                $cat->save();
                return redirect()->route('category.index')->with('Success','Category inserted Successfully!');
            }
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
        $cat = category::where('id',$id)->get();
        return view('Admin.edit_category',compact('cat'));
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
        $request->validate([
            'category_name' => 'required'
        ]);

        $cat = category::find($id);
        $cat->category_name=$request->category_name;
        $cat->save();
        return redirect()->route('category.index')->with('Success','Category Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat = category::find($id);
        $cat->delete();
        return redirect()->route('category.index')->with('Success','Category Deleted Successfully!');
    }
}
