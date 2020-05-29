@extends('fontend.master')
@section('title',' Sản Phẩm')
@section('main')

    <!-- ============================================================= HEADER : END ============================================================= -->

    <div id="single-product">
        <div class="container">

            <div class="no-margin col-xs-12 col-sm-6 col-md-5 gallery-holder">
                <div class="product-item-holder size-big single-product-gallery small-gallery">

                    <div id="owl-single-product" class="owl-carousel">
                        <div class="single-product-gallery-item" id="slide1">
                            <a data-rel="prettyphoto" href="{{asset('../storage/app/public/upload/'.$detaipro->pro_img)}}">
                                <img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="{{asset('../storage/app/public/upload/'.$detaipro->pro_img)}}" />
                            </a>
                        </div><!-- /.single-product-gallery-item -->


                        @foreach($anhsp as $sp)
                            <div class="single-product-gallery-item" id="slide2">
                                <a data-rel="prettyphoto" href="assets/images/products/product-gallery-01.jpg">
                                    <img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="{{asset('../public/public/upload/'.$sp->url)}}" />
                                </a>
                            </div><!-- /.single-product-gallery-item -->
                        @endforeach

                    </div><!-- /.single-product-slider -->


                    <div class="single-product-gallery-thumbs gallery-thumbs">

                        <div id="owl-single-product-thumbnails" class="owl-carousel">
                            @foreach($anhsp as $sp)
                            <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="0" href="#slide1">
                                <img width="67" alt="" src="assets/images/blank.gif" data-echo="{{asset('../public/public/upload/'.$sp->url)}}" />
                            </a>
                            @endforeach

                        </div><!-- /#owl-single-product-thumbnails -->

                        <div class="nav-holder left hidden-xs">
                            <a class="prev-btn slider-prev" data-target="#owl-single-product-thumbnails" href="#prev"></a>
                        </div><!-- /.nav-holder -->

                        <div class="nav-holder right hidden-xs">
                            <a class="next-btn slider-next" data-target="#owl-single-product-thumbnails" href="#next"></a>
                        </div><!-- /.nav-holder -->

                    </div><!-- /.gallery-thumbs -->

                </div><!-- /.single-product-gallery -->
            </div><!-- /.gallery-holder -->
            <div class="no-margin col-xs-12 col-sm-7 body-holder">
                <div class="body" style="margin-top: 20px;">


                    <div class="title"><a href="">{{$detaipro->pro_name}}</a></div>
                    <div class="brand">{{$detaipro->procate->cate_name}}</div>

                    <div class="social-row">
                        <span class="st_facebook_hcount"></span>
                        <span class="st_twitter_hcount"></span>
                        <span class="st_pinterest_hcount"></span>
                    </div>

                    <div class="buttons-holder">

                    </div>

                    <div class="excerpt">
                        <p>Bảo hành: {{$detaipro->pro_Warranty}}</p>
                        <p>Phụ kiện: {{$detaipro->pro_accessories}}</p>
                        <p>Tình trạng: {{$detaipro->pro_condition}}</p>
                        <p>Khuyến mại: {{$detaipro->pro_promotion}}</p>
                        <p>Còn hàng: Còn hàng</p>
                    </div>

                    <div class="prices">
                        <div class="price-current">{{number_format($detaipro->pro_price,0,',','.')}}đ</div>
                        <div class="price-prev">3.250.000đ</div>
                    </div>

                    <div class="qnt-holder">
                        <div class="le-quantity">
                            <form>

                                <input name="quantity" readonly="readonly" type="text" value="1" min="0"  max="2" />

                            </form>
                        </div>
                        <a id="addto-cart" href="{{route('addcart' , $detaipro->id) }}" class="le-button huge">add to cart</a>
                    </div><!-- /.qnt-holder -->
                </div><!-- /.body -->

            </div><!-- /.body-holder -->
        </div><!-- /.container -->
    </div><!-- /.single-product -->

    <!-- ========================================= SINGLE PRODUCT TAB ========================================= -->
    <section id="single-product-tab">
        <div class="container">
            <div class="tab-holder">

                <ul class="nav nav-tabs simple" >
                    <li class="active"><a href="#description" data-toggle="tab">Chi Tiết</a></li>
                    <li><a href="#additional-info" data-toggle="tab">Thông Số</a></li>
                    <li><a href="#reviews" data-toggle="tab">Bình Luận </a></li>
                </ul><!-- /.nav-tabs -->

                <div class="tab-content">
                    <div class="tab-pane active" id="description">
                        <p>{!!$detaipro->pro_decription!!}</p>


                        <div class="meta-row">




                            <div class="inline">

                            </div><!-- /.inline -->


                            <div class="inline">

                            </div><!-- /.inline -->
                        </div><!-- /.meta-row -->
                    </div><!-- /.tab-pane #description -->

                    <div class="tab-pane" id="additional-info">
                        <ul class="tabled-data">
                            <li>
                                <label>Ưu đãi</label>
                                <div class="value">{{$detaipro->pro_Warranty}}</div>
                            </li>
                            <li>
                                <label>Phụ kiện</label>
                                <div class="value">{{$detaipro->pro_accessories}}</div>
                            </li>
                            <li>
                                <label>Tình Trạng</label>
                                <div class="value">{{$detaipro->pro_condition}}</div>
                            </li>
                            <li>
                                <label>Màu sắc</label>
                                <div class="value">white</div>
                            </li>
                            <li>
                                <label>Bảo hành</label>
                                <div class="value">5 years</div>
                            </li>
                        </ul><!-- /.tabled-data -->

                        <div class="meta-row">
                            <div class="inline">
                                <label>SKU:</label>
                                <span>54687621</span>
                            </div><!-- /.inline -->

                            <span class="seperator">/</span>

                            <div class="inline">
                                <label>categories:</label>
                                <span><a href="#">-50% sale</a>,</span>
                                <span><a href="#">gaming</a>,</span>
                                <span><a href="#">desktop PC</a></span>
                            </div><!-- /.inline -->

                            <span class="seperator">/</span>

                            <div class="inline">
                                <label>tag:</label>
                                <span><a href="#">fast</a>,</span>
                                <span><a href="#">gaming</a>,</span>
                                <span><a href="#">strong</a></span>
                            </div><!-- /.inline -->
                        </div><!-- /.meta-row -->
                    </div><!-- /.tab-pane #additional-info -->


                    <div class="tab-pane" id="reviews">
                        @foreach($comment as $cmt)
                        <div class="comments">
                            <div class="comment-item">
                                <div class="row no-margin">
                                    <div class="col-lg-1 col-xs-12 col-sm-2 no-margin">
                                        <div class="avatar">
                                            <img alt="avatar" src="assets/images/default-avatar.jpg">
                                        </div><!-- /.avatar -->
                                    </div><!-- /.col -->

                                    <div class="col-xs-12 col-lg-11 col-sm-10 no-margin">

                                        <div class="comment-body">
                                            <div class="meta-info">
                                                <div class="author inline">
                                                    <a href="#" class="bold">{{$cmt->cmt_name}}</a>
                                                </div>

                                                <div class="date inline pull-right">
                                                    {{date('d/m/Y H:i',strtotime($cmt->created_at))}}
                                                </div>
                                            </div><!-- /.meta-info -->
                                            <p class="comment-text">
                                                {{$cmt->cmt_content}}
                                            </p><!-- /.comment-text -->
                                        </div><!-- /.comment-body -->

                                    </div><!-- /.col -->

                                </div><!-- /.row -->
                            </div><!-- /.comment-item -->


                        </div><!-- /.comments -->
                        @endforeach
                        <div class="add-review row">
                            <div class="col-sm-8 col-xs-12">
                                <div class="new-review-form">
                                    <h2>Bình Luận</h2>
                                    <form id="contact-form" action="{{ route('cmt',$detaipro->id) }}" class="contact-form" method="post" >
                                        @csrf
                                        <div class="row field-row">
                                            <div class="col-xs-12 col-sm-6">
                                                <label>Họ Tên*</label>
                                                <input class="le-input" name="cmt_name">
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <label>Email*</label>
                                                <input class="le-input"  name="cmt_email">
                                            </div>
                                        </div><!-- /.field-row -->


                                        <div class="field-row">
                                            <label>Bình luận</label>
                                            <textarea rows="4" name="cmt_content" class="le-input"></textarea>
                                        </div><!-- /.field-row -->

                                        <div class="buttons-holder">
                                            <button type="submit" class="le-button huge">Gửi</button>
                                        </div><!-- /.buttons-holder -->
                                    </form><!-- /.contact-form -->
                                </div><!-- /.new-review-form -->
                            </div><!-- /.col -->
                        </div><!-- /.add-review -->

                    </div><!-- /.tab-pane #reviews -->
                </div><!-- /.tab-content -->

            </div><!-- /.tab-holder -->
        </div><!-- /.container -->
    </section><!-- /#single-product-tab -->
    <!-- ========================================= SINGLE PRODUCT TAB : END ========================================= -->
    <!-- ========================================= RECENTLY VIEWED ========================================= -->

    <!-- ========================================= RECENTLY VIEWED : END ========================================= -->
    <!-- ============================================================= FOOTER ============================================================= -->

@stop
