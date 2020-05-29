@extends('fontend.master')
@section('title',' Sản Phẩm')
@section('main')
    <section id="category-grid">
        <div class="container">
            <!-- ========================================= SIDEBAR ========================================= -->
            <div class="col-xs-12 col-sm-3 no-margin sidebar narrow">
                <!-- ========================================= PRODUCT FILTER ========================================= -->
                <div class="widget">
                    <h1>Lọc Sản Phẩm</h1>
                    <div class="body bordered">

                        <div class="category-filter">
                            <h2>Tìm Theo Hãng</h2>
                            <hr>
                            <ul>
                                @foreach($category as $cate)
                                    <li><input checked="checked" class="le-checkbox" type="checkbox"  /> <label>{{$cate->cate_name}}</label> <span class="pull-right">(2)</span></li>
                                @endforeach
                            </ul>
                        </div><!-- /.category-filter -->

                        <div class="price-filter">
                            <h2>Tìm theo giá</h2>
                            <hr>
                            <div class="price-range-holder">

                                <input type="text" class="price-slider" value="" >

                                <span class="min-max">
                                            Price: 0 - 10000000đ
                                        </span>
                                <span class="filter-button">
                                            <a href="#">Tìm kiếm</a>
                                        </span>
                            </div>
                        </div><!-- /.price-filter -->

                    </div><!-- /.body -->
                </div><!-- /.widget -->
                <!-- ========================================= PRODUCT FILTER : END ========================================= -->

                <!-- ========================================= CATEGORY TREE ========================================= -->
                <div class="widget">
                    <h4>Hãng điện thoại</h4>
                    <div class="body">
                        <ul class="le-links">
                            @foreach($category as $cate)
                                <li><a href="{{route('detaicate',$cate->id)}}">{{$cate->cate_name}}</a></li>
                            @endforeach
                        </ul><!-- /.le-links -->
                    </div>
                </div>
                <!-- ========================================= CATEGORY TREE : END ========================================= -->

                <!-- ========================================= LINKS ========================================= -->

                <!-- ========================================= LINKS : END ========================================= -->

                <div class="widget">
                    <div class="simple-banner">
                        <a href="#"><img alt="" class="img-responsive" src="assets/images/blank.gif" data-echo="assets/images/banners/banner-simple.jpg" /></a>
                    </div>
                </div>

                <!-- ========================================= FEATURED PRODUCTS ========================================= -->

                <!-- ========================================= FEATURED PRODUCTS : END ========================================= -->
            </div>
            <!-- ========================================= SIDEBAR : END ========================================= -->

            <!-- ========================================= CONTENT ========================================= -->

            <div class="col-xs-12 col-sm-9 no-margin wide sidebar">


                <section id="gaming">
                    <div class="grid-list-products">
                        <h2 class="section-title">Tìm kiếm </h2>

                        <div class="control-bar">
                            <div id="popularity-sort" class="le-select" >
                                <select data-placeholder="sort by popularity">
                                    <option value="1">1-100 sản phẩm</option>

                                </select>
                            </div>



                            <div class="grid-list-buttons">
                                <ul>
                                    <li class="grid-list-button-item active"><a data-toggle="tab" href="#grid-view"><i class="fa fa-th-large"></i> Grid</a></li>

                                </ul>
                            </div>
                        </div><!-- /.control-bar -->

                        <div class="tab-content">
                            <div id="grid-view" class="products-grid fade tab-pane in active">

                                <div class="product-grid-holder">
                                    <div class="row no-margin">
                                        @foreach($pro as $catepro)
                                            <div class="col-xs-12 col-sm-4 no-margin product-item-holder hover">
                                                <div class="product-item">
                                                    <div class="ribbon red"><span>sale</span></div>
                                                    <div class="image">
                                                        <img alt="" src="assets/images/blank.gif" style="height: 153px" class="img-responsive" data-echo="{{asset('../storage/app/public/upload/'.$catepro->pro_img)}}" />
                                                    </div>
                                                    <div class="body">
                                                        <div class="label-discount green">-50% sale</div>
                                                        <div class="title">
                                                            <a href="single-product.html">{{$catepro->pro_name}}</a>
                                                        </div>

                                                    </div>
                                                    <div class="prices">
                                                        <div class="price-prev">{{number_format(3450000,0,',','.')}}đ</div>
                                                        <div class="price-current pull-right">{{number_format($catepro->pro_price,0,',','.')}}đ</div>
                                                    </div>
                                                    <div class="hover-area">
                                                        <div class="add-cart-button">
                                                            <a href="{{ route('detaipro', $catepro->id) }}" class="le-button">add to cart</a>
                                                        </div>

                                                    </div>
                                                </div><!-- /.product-item -->
                                            </div><!-- /.product-item-holder -->
                                        @endforeach


                                    </div><!-- /.row -->
                                </div><!-- /.product-grid-holder -->

                                <div class="pagination-holder">
                                    <div class="row">

                                        <div class="col-xs-12 col-sm-6 text-left">
                                            <ul class="pagination ">
                                                <li class="current"><a  href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#">next</a></li>
                                            </ul>
                                        </div>



                                    </div><!-- /.row -->
                                </div><!-- /.pagination-holder -->
                            </div><!-- /.products-grid #grid-view -->



                        </div><!-- /.tab-content -->
                    </div><!-- /.grid-list-products -->

                </section><!-- /#gaming -->
            </div><!-- /.col -->
            <!-- ========================================= CONTENT : END ========================================= -->
        </div><!-- /.container -->
    </section><!-- /#category-grid -->
@stop
<!-- ============================================================= FOOTER ============================================================= -->

<!-- ============================================================= FOOTER : END ============================================================= -->

<!-- For demo purposes – can be removed on production -->

<!-- JavaScripts placed at the end of the document so the pages load faster -->
