@extends('fontend.master')
@section('title',' Sản Phẩm')
@section('main')
    <section id="blog-single">
        <div class="container">
            <!-- ========================================= CONTENT ========================================= -->
            <div class="posts col-md-9">
                <div class="post-entry">
                    <div class="clearfix">
                        <!-- ========================================== SECTION – HERO ========================================= -->
                        <div id="hero">
                            <div id="owl-main" class="owl-carousel owl-carousel-blog owl-inner-nav owl-ui-sm" style="margin-top: 10px">

                                <div class="item">
                                    <img src="{{asset('../storage/app/public/upload/blog/'.$data->imges)}}" alt="">
                                </div><!-- /.item -->

                                <div class="item">
                                    <img src="assets/images/blog-post/slider-2.jpg" alt="">
                                </div><!-- /.item -->

                                <div class="item">
                                    <img src="assets/images/blog-post/slider-1.jpg" alt="">
                                </div><!-- /.item -->

                            </div><!-- /.owl-carousel -->
                        </div>
                        <!-- ========================================= SECTION – HERO : END ========================================= -->
                    </div><!-- /.clearfix -->

                    <div class="post-content">
                        <h2 class="post-title">{{$data->tiles}}</h2>
                        <ul class="meta">
                            <li>Posted By : Admin</li>
                            <li>{{date('d/m/Y',strtotime( $data->date))}}</li>

                        </ul><!-- /.meta -->
                        <p class="highlight">{{$data->short_decription}}</p>
                        <p>{!!  $data->description!!}</p>
                    </div><!-- /.post-content -->
                </div><!-- /.post-entry -->

                <div class="meta-row">
                    <div class="inline">
                        <label>tag:</label>
                        <span><a href="#">fast</a>,</span>
                        <span><a href="#">gaming</a>,</span>
                        <span><a href="#">strong</a></span>
                    </div>
                </div><!-- /.meta-row -->

                <div class="blog-post-author">
                    <div class="media">
                        <a href="#" class="pull-left"><img src="assets/images/blog-post/blog-author.jpg" alt=""></a>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="#">Jane Smith</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
                        </div>
                    </div>
                </div><!-- /.blog-post-author -->

                <section id="comments" class="inner-bottom-xs">
                    <h3>2 Comments</h3>

                    <div class="comment-item">
                        <div class="row no-margin">
                            <div class="col-lg-1 col-xs-12 col-sm-2 no-margin">
                                <div class="avatar">
                                    <img src="assets/images/default-avatar.jpg" alt="avatar">
                                </div>
                            </div>
                            <div class="col-xs-12 col-lg-11 col-sm-10 no-margin-right">
                                <div class="comment-body">
                                    <div class="meta-info">
                                        <header class="row no-margin">
                                            <div class="pull-left">
                                                <h4 class="author"><a href="#">Angela</a></h4>
                                                <span class="date">- 21 hours ago</span>
                                                <span class="likes"><a href="#"><span class="likes-count">22</span><i class="icon fa fa-thumbs-up"></i></a></span>
                                                <span class="dislikes"><a href="#"><i class="icon fa fa-thumbs-down"></i></a></span>
                                            </div>
                                            <div class="pull-right">
                                                <a class="comment-reply" href="#">Reply</a>
                                            </div>
                                        </header>
                                    </div>
                                    <p class="comment-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="comment-item">
                        <div class="row no-margin">
                            <div class="col-lg-1 col-xs-12 col-sm-2 no-margin">
                                <div class="avatar">
                                    <img src="assets/images/default-avatar.jpg" alt="avatar">
                                </div>
                            </div>
                            <div class="col-xs-12 col-lg-11 col-sm-10 no-margin-right">
                                <div class="comment-body">
                                    <div class="meta-info">
                                        <header class="row no-margin">
                                            <div class="pull-left">
                                                <h4 class="author"><a href="#">Angela</a></h4>
                                                <span class="date">- 21 hours ago</span>
                                                <span class="likes"><a href="#"><span class="likes-count">22</span><i class="icon fa fa-thumbs-up"></i></a></span>
                                                <span class="dislikes"><a href="#"><i class="icon fa fa-thumbs-down"></i></a></span>
                                            </div>
                                            <div class="pull-right">
                                                <a class="comment-reply" href="#">Reply</a>
                                            </div>
                                        </header>
                                    </div>
                                    <p class="comment-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="reply-block" class="leave-reply">
                    <h3>Leave a Reply</h3>
                    <p>Your email address cannot be published. Required fields are marked <abbr class="required">*</abbr> </p>

                    <form role="form" class="reply-form cf-style-1">
                        <div class="row field-row">
                            <div class="col-xs-12 col-sm-6">
                                <label>full name*</label>
                                <input class="le-input">
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <label>last name*</label>
                                <input class="le-input">
                            </div>
                        </div>

                        <div class="row field-row">
                            <div class="col-xs-12">
                                <label>company name</label>
                                <textarea rows="10" id="inputComment" class="form-control le-input"></textarea>
                            </div>
                        </div>
                        <button class="le-button big post-comment-button" type="submit">Post comment</button>
                    </form>

                </section>
            </div><!-- /.posts -->

            <!-- ========================================= CONTENT :END ========================================= -->

            <!-- ========================================= SIDEBAR ========================================= -->
            <div class="col-md-3">
                <aside class="sidebar blog-sidebar">

                    <div class="widget clearfix">

                    </div><!-- /.widget -->

                    <div class="widget">
                        <div class="simple-banner">
                            <img alt="" class="img-responsive" src="assets/images/hi.jpg" data-echo="assets/images/banners/hi.jpg" />
                        </div>
                    </div>

                    <div class="widget">
                        <h4>Hãng điện thoại</h4>
                        <div class="body">
                            <ul class="le-links">
                                @foreach($category as $cate)
                                    <li><a href="{{route('detaicate',$cate->id)}}">{{$cate->cate_name}}</a></li>
                                @endforeach
                            </ul><!-- /.le-links -->
                        </div>
                    </div><!-- /.widget -->

                    <div class="widget">
                        <div class="simple-banner">
                            <img alt="" class="img-responsive" src="assets/images/blank.gif" data-echo="assets/images/banners/banner-simple.jpg" />
                        </div>
                    </div>

                    <!-- ========================================= RECENT POST ========================================= -->
                    <div class="widget">
                        <h4>Bài Viết Khác</h4>
                        <div class="body">
                            <ul class="recent-post-list">
                                @foreach($datablog as $item)
                                <li class="sidebar-recent-post-item">
                                    <div class="media">
                                        <a href="{{route('blogchitiet',$item->id)}}" class="thumb-holder pull-left">
                                            <img alt="" class="img-responsive" src="{{asset('../storage/app/public/upload/blog/'.$item->imges)}}"  />
                                        </a>
                                        <div class="">
                                            <h5><a href="{{route('blogchitiet',$item->id)}}" style="font-family: Arial">{{$item->tiles}} </a></h5>
                                            <div class="posted-date">{{date('d/m/Y',strtotime( $item->date))}}</div>
                                        </div>
                                    </div>
                                </li><!-- /.sidebar-recent-post-item -->
                                @endforeach


                            </ul><!-- /.recent-post-list -->
                        </div><!-- /.body -->
                    </div><!-- /.widget -->
                    <!-- ========================================= RECENT POST : END ========================================= -->


                </aside><!-- /.sidebar .blog-sidebar -->
            </div><!-- /.col -->
            <!-- ========================================= SIDEBAR : END ========================================= -->

            <!-- ========================================= CONTENT ========================================= -->
        </div>
    </section>
@stop

    <!-- ============================================================= FOOTER ============================================================= -->


<!-- For demo purposes – can be removed on production -->
