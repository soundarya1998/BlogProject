<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\subcategory;
use Illuminate\Support\Facades\Input;
// use Input;
// use Illuminate\Support\Facades\Input as input;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcat = subcategory::select('subcategories.*','categories.category_name')
                                ->join('categories','categories.id','=','subcategories.category_id')
                                ->get();
        return view('Admin.display_subcategory',compact('subcat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat    = category::get();
        $subcat = subcategory::get();
        return view('Admin.add_subcategory',compact('subcat','cat'));
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
            'subcategory_name' => 'required',
            'image'            => 'required|mimes:png,jpg,jpeg,gif,webp',
            'price'            => 'required',
            'category_id'      => 'required'
        ]);
        $subcat_name = $request->get('category_name');
        $subcat = subcategory::get();
        foreach($subcat as $c)
        {
            if($c->category_name == $subcat_name){
                return redirect()->route('subcategory.create');
            }
            else{
                    $file = $request->file('image');
                    $img  = $file->getClientOriginalName();
                    $image = $file;
                    $subcat = new subcategory;
                    $subcat->subcategory_name = $request->get('subcategory_name');
                    $subcat->image = $img;
                    $subcat->price = $request->get('price');
                    $file->move(public_path(),$img);
                    $subcat->category_id = $request->get('category_id');
                    $subcat->save();
                    return redirect()->route('subcategory.index')->with('Success','SubCategory inserted Successfully!');
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
        $cat    = category::get();
        $subcat = subcategory::where('id',$id)->get();
        return view('Admin.edit_subCategory',compact('cat','subcat'));
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
            'subcategory_name' => 'required',
            'image'            => 'required|mimes:png,jpg,jpeg,gif,webp',
            'price'            => 'required',
            'category_id'      => 'required'
        ]);
        
        $file = $request->file('image');
        $img  = $file->getClientOriginalName();
        $image = $file;
        $subcat = subcategory::find($id);
        $subcat->subcategory_name=$request->subcategory_name;
        $subcat->image=$img;
        $subcat->price=$request->price;
        $subcat->category_id=$request->category_id;
        $file->move(public_path(),$img);
        $subcat->save();
        return redirect()->route('subcategory.index')->with('Success','SubCategory Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subcat = subcategory::find($id);
        $subcat->delete();
        return redirect()->route('subcategory.index')->with('Success','SubCategory Deleted Successfully!');
    }
}
