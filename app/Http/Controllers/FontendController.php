<?php

namespace App\Http\Controllers;
use App\Models\customer;
use App\Models\order;
use App\Models\products;
use App\Models\category;
use App\Models\comment;
use App\Models\address;
use App\Models\file_product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class FontendController extends Controller
{

    public function getindex(){
        $future= products::where('pro_featured',1)->get()->take(8) ;
        $new= products::orderBy('id','desc')->get()->take(8) ;

        $applewatch1= products::where('pro_cate',12)->orderBy('id','desc')->get()->take(3);
        $applewatch2= products::where('pro_cate',12)->orderBy('id','asc')->get()->take(3);
        $phukien= products::where('pro_cate',13)->orderBy('id','asc')->get()->take(3);
        $phukien2= products::where('pro_cate',13)->orderBy('id','desc')->get()->take(3);

        $applewatch3= products::where('pro_cate',12)->orderBy('id','asc')->first();





        return view('fontend.home',compact('future','new','applewatch1','applewatch2','applewatch3','phukien','phukien2'));
    }

    public function gioithieu()
    {
        return view('fontend.gioithieu');
    }

    public function getDeltail($id){
        $comment = comment::where('cmt_product',$id)->get();
        $detaipro=products::find($id);
        $anhsp =file_product::where('id_products',$id)->get();


        return view('fontend.details',compact('detaipro','comment','anhsp'));
    }

    public function getDeltailcate($id){
        $catename=category::find($id);
//        dd($id);
        $category3 = products::where('pro_cate',$id)->get();



        return view('fontend.category',compact('category3','catename'));
    }


    public function lienhe(){

        return view('fontend.Lienhe');
    }
    public function tintuc(){

        return view('fontend.tintuc');
    }
    public function baohanh(){
        $baohanh=address::all();
        return view('fontend.baohanh',compact('baohanh'));
    }

    public function tracuudonhang(Request $request){
        $phone = $request->get('phone');
//        $donhang=customer::where('stt',2)
//            ->where(function ($query) use ($phone) {
//                if (!empty($phone)) {
//                    return $query->where('phone', 'LIKE', "$phone");
//                }
//            })-
//        $donhang=customer::where('phone',$request['phone'])->count();
        $donhang=customer::where('phone', $request['phone'])->whereIn('stt', [1,2,3])->count();

//        $donhang1=customer::where('phone',$request['phone'])->get();

        $donhang1=customer::whereIn('stt', [1,2,3])
            ->where(function ($query) use ($phone) {
                if (!empty($phone)) {
                    return $query->where('phone', $phone);
                }
            })->get();


        return view('fontend.tracuudon',compact('donhang1','donhang'));
    }

    public function timkiemsanpham(Request $request)
    {

        $seachpro= $request->key;

        $pro= products::where('pro_name','like','%'.$seachpro.'%')->paginate(2);

        return view('fontend.timkiem',compact('pro'));
    }


    public function comment(Request $request,$id){

        $datacmt  = $request->all();

        $datacmt['cmt_product'] = $id;
        comment::create($datacmt);
        return back();
    }
    public function seach(Request $request){
        $seachpro= $request->seach;

        $data= products::where('pro_name','like','%'.$seachpro.'%')->paginate(2);
        return view('fontend.search',compact('data','seachpro'));
    }

    public function dangnhap(Request $request){

        return view('fontend.dangnhap');
    }
    public function mem(Request $request){
        $arr = ['email' => $request->email, 'password' => $request->password];
        if (Auth::attempt($arr)){
            return redirect()->route('indexhome');
        }else{

            return redirect()->back()
                ->with('erro', 'Tài Khoản mật khẩu chưa đúng !');
        }
    }
    public function dangky(Request $request){

        return view('fontend.dangky');
    }
}
