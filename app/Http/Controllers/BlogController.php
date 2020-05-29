<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {



        $id = (int)$request->get('id');
        $blog = null;

        if ($id) {
            $blog = Blog::where('id', $id)->first();
        }
        $ds_blog = Blog::all();

       return  view('Blog.index',compact('blog','ds_blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $fileName = '';
        if ($request->has('imges') && $request->imges != NULL) {
            $fileName = md5(time() . $request->imges->getClientOriginalName()) . '.' . $request->imges->getClientOriginalExtension();
            Storage::putFileAs('public/upload/blog' . DIRECTORY_SEPARATOR, $request->file('imges'), $fileName);
        }
        $data['imges'] = $fileName;
        $blogadd = new Blog();
        $blogadd->fill($data);
        $blogadd->save();
        return redirect()->route('Blog.index')
            ->with('success','Thêm thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

       $data=Blog::all();
        return  view('fontend.tintuc',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datablog=Blog::where('stt',0)->get();
        $data=Blog::find($id);
        return  view('blog.detailblog',compact('data','datablog'));
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
        $data = $request->all();
        $blogadd = Blog::where('id', $id)->first();
        $fileName = '';
        if ($request->has('imges') && $request->imges != NULL) {
            $fileName = md5(time() . $request->imges->getClientOriginalName()) . '.' . $request->imges->getClientOriginalExtension();
            Storage::putFileAs('public/upload/blog' . DIRECTORY_SEPARATOR, $request->file('imges'), $fileName);
            $data['imges'] = $fileName;
        }


        $blogadd->fill($data);
        $blogadd->save();
        return redirect()->route('Blog.index')
            ->with('success','Cập nhật dữ liệu thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Blog::whereId($id)->delete();
        return back()->with('success', 'Xóa bài viết thành công');
    }
}
