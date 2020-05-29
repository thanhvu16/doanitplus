<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\customer;
use App\Models\products;
use App\Models\order;
use Cart;
use DebugBar\DebugBar;
use Mail;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function getaddcart($id)
    {
        $product = Products::find($id);
        // Cart::add(['id' => $id, 'name' => $product->pro_name, 'qty' => 1, 'price' => $product->pro_price, 'options' => ['img' => $product->pro_img]]);
        Cart::add(array(
            'id' => $id, // inique row ID
            'name' => $product->pro_name,
            'price' => $product->pro_price,
            'qty' => 1,
            'weight' => 0,
            'options' => array(
                'img' => $product->pro_img
            )
        ));
//        $data = Cart::getContent();
//        dd($data);
        return redirect()->route('showcart');
    }

    public function showcart()
    {
//        dd(Cart::total());

        $tong = Cart::total();
        $data = Cart::content();
//        DebugBar::
        return view('fontend.cart', compact('data', 'tong'));

    }

    public function delcart($id)
    {
        if ($id == 'all') {
            Cart::destroy();
        } else {
            Cart::remove($id);
        }
        return back();
    }

    public function updatecart(Request $request)
    {
        Cart::update($request->row_id, $request->qty);
        return response()->json('true', 204);
    }

    public function thanhtoan()
    {
        $tong = Cart::total();
        $data = Cart::content();

        return view('fontend.thanhtoan', compact('data', 'tong'));
    }

    public function thanhcong(Request $request)
    {
        $data['info'] = $request->all();
        $email = $request->email;
        $data['cart'] = Cart::content();
        $data['total'] = Cart::total();


        Mail::Send('fontend.email', $data, function ($message) use ($email) {
            $message->from('vuhaithanhcx1@gmail.com', 'HaiThanh');
            $message->to($email, $email);
            $message->cc('Trangnguyen98@gmail.com', 'Nguyễn Thu Trang');
            $message->subject('Xác nhận mua hàng Hải Thanh shop');
        });

        $customer = new customer();
        $customer->ho_ten=$request->ho_ten;
        $customer->email=$request->email;
        $customer->address=$request->address;
        $customer->phone=$request->phone;
        $customer->save();


        $datacart = Cart::content();

        foreach ($datacart as $item){
            $order= new order();
            $order->id_sp = $item->id;
            $order->name_sp = $item->name;
            $order->id_customer =$customer->id;
            $order->sl=$item->qty;
            $order->total=$item->qty*$item->price;
            $order->save();
        }
        Cart::destroy();

        return view('fontend.ketthuc');
    }


    public function sendmail(Request $request)
    {
        $data['info'] = $request->all();
        $email = $request->email;
//        $data['cart'] = Cart::getContent();

        Mail::Send('fontend.email', $data, function ($message) use ($email) {
            $message->from('vuhaithanhcx1@gmail.com', 'HaiThanh');
            $message->to($email, $email);
            $message->cc('Trangnguyen98@gmail.com', 'Nguyễn Thu Trang');
            $message->subject('Xác nhận mua hàng Hải Thanh shop');
        });
        return view('fontend.ketthuc');
    }

    public function complete()
    {

    }
}
