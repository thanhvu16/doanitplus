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
                                <li><a href="{{route('indexhome')}}">Quay về</a></li>
                                <li><a href="#">Thanh Toán</a></li>

                            </ul>
                        </li>

                        <li class="breadcrumb-nav-holder">
                            <ul>
                                <li class="breadcrumb-item current gray">
                                    <a href="">Giỏ Hàng</a>
                                </li>
                            </ul>
                        </li><!-- /.breadcrumb-nav-holder -->
                    </ul>
                </nav>
            </div><!-- /.container -->
        </div><!-- /#top-mega-nav -->
        <!-- ========================================= BREADCRUMB : END ========================================= -->
    </div>

    <section id="cart-page">
        <div class="container">
            <!-- ========================================= CONTENT ========================================= -->
            <div class="col-xs-12 col-md-8 items-holder no-margin">
                @foreach($data as $key => $sanpham)
                <div class="row no-margin cart-item">
                    <div class="col-xs-12 col-sm-2 no-margin">
                        <a href="#" class="thumb-holder">
                            <img class="lazy" alt="" src="{{asset('../storage/app/public/upload/'.$sanpham->options->img)}}" />
                        </a>
                    </div>

                    <div class="col-xs-12 col-sm-5 ">
                        <div class="title">
                            <a href="#">{{$sanpham->name}}</a>
                        </div>
                        <div class="brand">{{$sanpham->procate->cate_name ?? ''}}</div>
                    </div>

                    <div class="col-xs-12 col-sm-3 no-margin">
                        <div class="quantity">
                            <div class="le-quantity">
                                <input class="form-control change-qty" min="1" value="{{$sanpham->qty}}"
                                       data-row_id="{{ $sanpham->rowId }}" data-url="{{ route('updatecart') }}"
                                       type="number">
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-2 no-margin">
                        <div class="price">
                            {{number_format($sanpham->price,0,',','.')}}đ
                        </div>
                        <a class="close-btn" href="{{ asset('cart/delete/'.$sanpham->rowId )}}"></a>
                    </div>
                </div><!-- /.cart-item -->
                @endforeach

            </div>
            <!-- ========================================= CONTENT : END ========================================= -->

            <!-- ========================================= SIDEBAR ========================================= -->

            <div class="col-xs-12 col-md-4 no-margin sidebar ">
                <div class="widget cart-summary">
                    <h1 class="border">shopping cart</h1>
                    <div class="body">
                        <ul class="tabled-data no-border inverse-bold">
                            <li>
                                <label>Tổng Sản Phẩm</label>
                                <div class="value pull-right">{{$tong}} đ</div>
                            </li>
                            <li>
                                <label>Phí vận chuyển</label>
                                <div class="value pull-right">miễn phí</div>
                            </li>
                        </ul>
                        <ul id="total-price" class="tabled-data inverse-bold no-border">
                            <li>
                                <label>Tổng đơn hàng</label>
                                <div class="value pull-right">{{$tong}} đ</div>
                            </li>
                        </ul>
                        <div class="buttons-holder">
                            <a class="le-button big" href="{{route('thanhtoan')}}" >Thanh Toán</a>
                            <a class="simple-link block" href="{{route('indexhome')}}" >Tiếp tục mua hàng</a>
                        </div>
                    </div>
                </div><!-- /.widget -->


            </div><!-- /.sidebar -->

            <!-- ========================================= SIDEBAR : END ========================================= -->
        </div>
    </section>

    <!-- ============================================================= FOOTER ============================================================= -->

@stop
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $('.change-qty').change(function () {
            let row_id = $(this).data('row_id');
            let url = $(this).data('url');
            let qty = $(this).val();
            $.ajax({
                method: 'POST',
                dataType: 'json',
                url: url,
                data: {
                    _token: "{{ csrf_token() }}",

                    row_id: row_id,
                    qty: qty,
                },
                success: function () {
                    window.location.reload();
                },
                error: function () {
                    alert('errror');
                }
            });
        })
    })
</script>
