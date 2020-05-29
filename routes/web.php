<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'FontendController@getindex')->name('indexhome');
Route::get('dangnhap', 'FontendController@dangnhap')->name('dangnhap');
Route::post('dangnhap', 'FontendController@mem')->name('dangnhapmem');
Route::get('dangky', 'FontendController@dangky')->name('dangky');
Route::get('details/{id}', 'FontendController@getDeltail')->name('detaipro');
Route::get('categorypro/{id}', 'FontendController@getDeltailcate')->name('detaicate');
Route::post('categorypro/postcomment/{id}', 'FontendController@comment')->name('cmt');
Route::get('seach', 'FontendController@seach')->name('seach');
Route::get('lienhe', 'FontendController@lienhe')->name('lienhe');
Route::get('tintuc', 'FontendController@tintuc')->name('tintuc');
Route::get('gioithieu', 'FontendController@gioithieu')->name('gioithieu');
Route::get('trungtambaohanh', 'FontendController@baohanh')->name('baohanh');

Route::match(['get', 'post'],
    'tracuudonhang',
    [
        'as' =>'tracuudonhang',
        'uses' => 'FontendController@tracuudonhang'
    ]
);

Route::match(['get', 'post'],
    'timkiemsanpham',
    [
        'as' =>'timkiemsanpham',
        'uses' => 'FontendController@timkiemsanpham'
    ]
);

route::group(['prefix'=>'cart'],function(){
    route::get('addcart/{id}','CartController@getaddcart')->name('addcart');
    route::get('show','CartController@showcart')->name('showcart');
    route::post('show','CartController@sendmail')->name('sendmail');
    route::get('delete/{id}','CartController@delcart')->name('delcart');
    route::post('update','CartController@updatecart')->name('updatecart');
//    route::get('thanh-cong','CartController@thanhcong')->name('thanhcong');
    Route::match(['get', 'post'],
        'thanh-toan',
        [
            'as' =>'thanhtoan',
            'uses' => 'CartController@thanhtoan'
        ]
    );
    Route::match(['get', 'post'],
        'thanh-cong',
        [
            'as' =>'thanhcong',
            'uses' => 'CartController@thanhcong'
        ]
    );
});
route::get('complete','CartController@complete')->name('complete');

route::group(['prefix' => 'login','middleware'=>'Checklogin'], function () {
    route::get('/', 'LoginController@getLogin')->name('login');
    route::post('/', 'LoginController@postLogin');
});
route::get('logout', 'HomeController@getLogout');
route::group(['prefix' => 'admin','middleware'=>'Checklogout'], function () {
    route::get('home', 'HomeController@getHome')->name('home');
});
route::group(['prefix' => 'category'], function () {
    route::get('/', 'Category1Controller@cate')->name('category');
    route::post('/', 'Category1Controller@create')->name('createcategory');
    route::get('test', 'Category1Controller@test')->name('test');
    route::get('edit/{id}', 'Category1Controller@geteditcate')->name('editcategory');
    route::post('edit/{id}', 'Category1Controller@updatecate')->name('updatecate');
    route::get('delete/{id}', 'Category1Controller@delete')->name('deletecategory');
});
route::group(['prefix' => 'product'], function () {
    route::get('/', 'ProductController@product')->name('product');
    route::get('add', 'ProductController@createpro')->name('createpro');
    route::post('add', 'ProductController@add')->name('addpro');
    route::get('edit/{id}', 'ProductController@editpro')->name('editpro');
    route::post('edit/{id}', 'ProductController@updatepro')->name('updatepro');
    route::get('delete/{id}', 'ProductController@deletepro')->name('deletepro');
});
Route::resource('Blog', 'BlogController');
route::get('delete/{id}', 'BlogController@destroy')->name('destroy');
route::get('tintucbl', 'BlogController@show')->name('gettintuc');
route::get('tintuc-blog/{id}', 'BlogController@edit')->name('blogchitiet');
route::group(['prefix' => 'member'], function () {
    route::get('/', 'MemberController@member')->name('member');
    route::get('add', 'MemberController@createmem')->name('createmem');
    route::post('add', 'MemberController@add')->name('addmem');
    route::get('edit/{id}', 'MemberController@editmem')->name('editmem');
    route::post('edit/{id}', 'MemberController@updatemem')->name('updatemem');
    route::get('delete/{id}', 'MemberController@deletemem')->name('deletemem');
});
route::group(['prefix' => 'Order'], function () {
    route::get('/', 'OrderadminController@getorder')->name('getorder');
    route::get('sanphamOrder/{id}', 'OrderadminController@getsporder')->name('getsporder');
    Route::match(['get', 'post'],
        'TrangThai/{id}',
        [
            'as' =>'sttdonhang',
            'uses' => 'OrderadminController@sttdonhang'
        ]
    );
    Route::match(['get', 'post'],
        'Dondanggiao',
        [
            'as' =>'Dondanggiao',
            'uses' => 'OrderadminController@Dondanggiao'
        ]
    );
    Route::match(['get', 'post'],
        'ls',
        [
            'as' =>'huydon',
            'uses' => 'OrderadminController@orderhoanthanh'
        ]
    );
    Route::match(['get', 'post'],
        'DonHoanThanh',
        [
            'as' =>'Donhoanthanh',
            'uses' => 'OrderadminController@Donhoanthanh'
        ]
    );
});

