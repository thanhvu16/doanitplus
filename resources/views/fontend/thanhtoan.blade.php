@extends('fontend.master')
@section('title',' Sản Phẩm')
@section('main')

    <!-- ============================================================= HEADER : END ============================================================= -->

    <div class="animate-dropdown">
        <!-- ========================================= BREADCRUMB ========================================= -->
        <div id="top-mega-nav">
            <div class="container">
                <nav>
                    <ul class="inline">
                        <li class="dropdown le-dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-list"></i> Trang chủ
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Trở về</a></li>
                                <li><a href="#">Tiếp tục</a></li>
                            </ul>
                        </li>

                        <li class="breadcrumb-nav-holder">
                            <ul>
                                <li class="breadcrumb-item current gray">
                                    <a href="#">Xác Nhận Đặt Hàng</a>
                                </li>
                            </ul>
                        </li><!-- /.breadcrumb-nav-holder -->
                    </ul>
                </nav>
            </div><!-- /.container -->
        </div><!-- /#top-mega-nav -->
        <!-- ========================================= BREADCRUMB : END ========================================= -->
    </div>

    <!-- ========================================= CONTENT ========================================= -->
    <section id="checkout-page">
        <form action="{{route('thanhcong')}}" method="post">
            @csrf
        <div class="container">
            <div class="col-xs-12 no-margin">

                <div class="billing-address">
                    <h2 class="border h1">Thông tin khách hàng</h2>

                        <div class="row field-row">
                            <div class="col-xs-12 col-sm-6">
                                <label>Họ Tên*</label>
                                <input class="le-input" required name="ho_ten" placeholder="nhập họ tên1.." >
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <label>Số điện thoại*</label>
                                <input class="le-input" name="phone" required placeholder="nhập sdt.." >
                            </div>
                        </div><!-- /.field-row -->

                        <div class="row field-row">
                            <div class="col-xs-12">
                                <label>Địa chỉ*</label>
                                <input class="le-input" name="address" required placeholder="nhập địa chỉ giao hàng...">
                            </div>
                        </div><!-- /.field-row -->

                        <div class="row field-row">
                            <div class="col-xs-12 col-sm-6">
                                <label>Email*</label>
                                <input class="le-input" name="email" required data-placeholder="Email.." >
                            </div>
                        </div><!-- /.field-row -->
                </div><!-- /.billing-address -->
                <section id="your-order">
                    <h2 class="border h1">Giỏ Hàng</h2>
                        @foreach($data as $key => $sanpham)
                        <div class="row no-margin order-item">
                            <div class="col-xs-12 col-sm-1 no-margin">
                                <a href="#" class="qty">{{$sanpham->qty}} x</a>
                            </div>

                            <div class="col-xs-12 col-sm-9 ">
                                <div class="title"><a href="#">{{$sanpham->name}}</a></div>
                                <div class="brand"></div>
                            </div>

                            <div class="col-xs-12 col-sm-2 no-margin">
                                <div class="price">{{number_format($sanpham->price,0,',','.')}}đ</div>
                            </div>
                        </div><!-- /.order-item -->
                        @endforeach
                </section><!-- /#your-order -->

                <div id="total-area" class="row no-margin">
                    <div class="col-xs-12 col-lg-4 col-lg-offset-8 no-margin-right">
                        <div id="subtotal-holder">
                            <ul class="tabled-data inverse-bold no-border">
                                <li>
                                    <label>Tổng sản phẩm</label>
                                    <div class="value ">{{$tong}}đ</div>
                                </li>
                                <li>
                                    <label>Phí vận chuyển</label>
                                    <div class="value">
                                        <div class="radio-group">
                                            <input class="le-radio" type="radio" name="group1" value="local" checked>  <div class="radio-label">Miễn phí<br><span class="bold"></span></div>
                                        </div>
                                    </div>
                                </li>
                            </ul><!-- /.tabled-data -->

                            <ul id="total-field" class="tabled-data inverse-bold ">
                                <li>
                                    <label>Tổng đơn Hàng</label>
                                    <div class="value">{{$tong}}đ</div>
                                </li>
                            </ul><!-- /.tabled-data -->

                        </div><!-- /#subtotal-holder -->
                    </div><!-- /.col -->
                </div><!-- /#total-area -->



                <div class="place-order-button">
                    <button type="submit" class="le-button big">Đặt Hàng</button>
                </div><!-- /.place-order-button -->

            </div><!-- /.col -->
        </div>
        </form><!-- /.container -->
    </section><!-- /#checkout-page -->
    <!-- ========================================= CONTENT : END ========================================= -->

    <!-- ============================================================= FOOTER ============================================================= -->

@stop
