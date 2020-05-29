@extends('fontend.master')
@section('title',' Sản Phẩm')
@section('main')

    <!-- ========================================= MAIN ========================================= -->
    <main id="about-us">

        <section class="pt-40 pb-40 ">
            <div class="container">
                <div class="row" style="margin-top: 40px">
                    <div class="col-lg-12">
                        <div class="li-blog-single-item mb-30">
                            <div class="row">
                                @foreach($data as $blog)
                                <div class="col-md-6"  >
                                    <div class="col-lg-4" style="margin-top: 10px;">
                                        <div class="li-blog-banner">
                                            <a href="blog-details-left-sidebar.html"><img class="img-responsive"  src="{{asset('../storage/app/public/upload/blog/'.$blog->imges)}}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-8" style="margin-top: 10px;">
                                        <div class="li-blog-content">
                                            <div class="li-blog-details">
                                                <h3><a href="{{route('blogchitiet',$blog->id)}}" style="font-size: 18px;color: black">{{$blog->tiles}}</a></h3>
                                                <div class="li-blog-meta">
                                                    <a class="post-time" style="font-size: 12px;color: black" href="{{route('blogchitiet',$blog->id)}}"><i class="fa fa-calendar"></i>  {{date('d/m/Y',strtotime( $blog->date))}}</a>
                                                </div>
                                                <p></p>
                                                <a class="read-more"  style="font-size: 14px;color: midnightblue;" href="{{route('blogchitiet',$blog->id)}}">Xem Thêm...</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>


    </main><!-- /#about-us -->
    <!-- ========================================= MAIN : END ========================================= -->
@stop
    <!-- ============================================================= FOOTER ============================================================= -->

    <!-- ============================================================= FOOTER : END ============================================================= -->


