<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\subcategory;

class ClientController extends Controller
{
    public function index()
    {
    //    echo session('user');
    //    exit();
        if(session('user') == null){
            return view('userlogin');
        }
        else{
        $data = subcategory::select('subcategories.*','categories.category_name')
                                ->join('categories','categories.id','=','subcategories.category_id')
                                ->paginate(4);
                                // ->get()
        $rec = category::select('*')
                          ->get();
                               
        return view('Client/index',compact('data','rec'));
        }
      
       
    }

    public function search($id)
    {
        // echo $id;
        // exit();
        $data = subcategory::select('subcategories.*','categories.id')->where('category_id',$id)
        ->join('categories','categories.id','=','subcategories.category_id')
                                ->paginate(4);

        $rec = category::select('*')->get();
        return view('Client/index',compact('data','rec'));
                                                                                                              

    }
}
