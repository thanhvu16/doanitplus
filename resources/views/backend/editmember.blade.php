@extends('backend.master')
@section('title','Sửa Thành Viên')
@section('main')


    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>THÊM THÀNH VIÊN</h2>
                        </div>
                        <div class="body">
                            <form  action="{{route('updatemem',$memner->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-8" style="float: none;margin: auto;">
                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <div class="col-md-6">
                                                <h5 class="card-inside-title">Tên Thành Viên</h5>
                                                <div class="form-group">
                                                    <div class="form-line col-lg-8">
                                                        <input type="text" id="ten_so_van_ban" name="name" value="{{$memner->name}}" class="form-control" required placeholder="Nhập tên...">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <h5 class="card-inside-title">Email</h5>
                                                <div class="form-group">
                                                    <div class="form-line col-lg-8">
                                                        <input type="email" id="ten_so_van_ban" value="{{$memner->email}}"  name="email" class="form-control" required >
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-md-12">

                                            <div class="col-md-6">
                                                <h5 class="card-inside-title">Số Điện Thoại</h5>
                                                <div class="form-group">
                                                    <div class="form-line col-lg-8">
                                                        <input type="number" id="ten_so_van_ban" value="{{$memner->phone}}" name="phone" class="form-control" required >
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="col-md-6">
                                                <h5 class="card-inside-title">Địa chỉ</h5>
                                                <div class="form-group">
                                                    <div class="form-line col-lg-8">
                                                        <input type="text" id="ten_so_van_ban" value="{{$memner->address}}" name="address" class="form-control" required >
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-md-12">
                                            <div class="col-md-6">
                                                <h5 class="card-inside-title">Mật Khẩu</h5>
                                                <div class="form-group">
                                                    <div class="form-line col-lg-8">
                                                        <input type="password" id="ten_so_van_ban" value="{{$memner->password}}" name="password" class="form-control" required >
                                                    </div>
                                                </div>
                                            </div>




                                        </div>







                                        <div class="col-md-12 text-center">
                                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">Cập nhật</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
