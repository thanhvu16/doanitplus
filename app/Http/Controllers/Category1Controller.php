<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Http\Requests\Addcaterequest;
use App\Http\Requests\editcaterequest;
use Illuminate\Http\Request;

class Category1Controller extends Controller
{
    public function cate(){
        $category = category::all();
        return view('backend.category',compact('category'));
    }
//    public function create(Addcaterequest $request){
//        $category = new category();
//        $category->cate_name= $request->cate_name;
//        $category->cate_slug= $request->cate_name;
//        $category->save();
//        return back();
//    }

    public function create(Addcaterequest $request){
        $data= $request->all();
        $data['cate_slug'] = $data['cate_name'];
        category::create($data);
        return back();
    }
    public function geteditcate($id)
    {
       $category=category::find($id);
        return view('backend.editcategory',compact('category'));
    }
    public function updatecate(editcaterequest $request,$id)
    {
        $category = category::find($id);
        $category->cate_name= $request->cate_name;
        $category->cate_slug= $request->cate_name;
        $category->save();
        return redirect()->route('category');
    }
    public function delete($id)
    {
        category::whereId($id)->delete();
        return back();

    }
    public function test()
    {
        return view('backend.test');

    }
}
