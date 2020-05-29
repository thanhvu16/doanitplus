<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\comment;
use App\Models\customer;
use App\Models\order;
use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function getHome(){
        $countdanhmuc=category::all()->count();
        $countproduct=products::all()->count();
        $countcomment=comment::all()->count();
        $countorder=customer::where('stt',1)->count();


        return view('backend.index',compact('countdanhmuc','countproduct','countorder','countcomment'));
    }
    public function getLogout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
