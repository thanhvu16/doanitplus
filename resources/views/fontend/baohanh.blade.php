
@extends('fontend.master')
@section('title',' Sản Phẩm')
@section('main')

    <!-- ============================================================= TOP NAVIGATION : END ============================================================= -->

    <!-- ============================================================= HEADER ============================================================= -->

    <!-- ============================================================= HEADER : END ============================================================= -->

    <div id="top-banner-and-menu">
        <div class="container">
            <div class="col-xs-12 col-sm-4 col-md-3 sidemenu-holder">
                <!-- ================================== TOP NAVIGATION ================================== -->
                <div class="side-menu animate-dropdown">
                    <div class="head"><i class="fa fa-list"></i> Hãng Điện Thoại</div>
                    <nav class="yamm megamenu-horizontal" role="navigation">
                        <ul class="nav">
                            @foreach($category as $cate)
                                <li class="dropdown menu-item"><a class="dropdown-toggle" data-toggle="dropdown" href="{{route('detaicate',$cate->id)}}">{{$cate->cate_name}}</a></li>
                            @endforeach

                        </ul><!-- /.nav -->
                    </nav><!-- /.megamenu-horizontal -->
                </div><!-- /.side-menu -->
                <!-- ================================== TOP NAVIGATION : END ================================== -->
            </div><!-- /.sidemenu-holder -->

            <div class="col-xs-12 col-sm-8 col-md-9 homebanner-holder">
                <!-- ========================================== SECTION – HERO ========================================= -->
                <div class="table-responsive">
                    <div class="dataTables_wrapper form-inline dt-bootstrap">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <colgroup width="100%">
                                <col style="width: 5%;">
                                <col style="width: 50%;">
                                <col style="width: 25%;">
                                <col style="width: 20%;">

                            <thead>
                            <tr role="row">
                                <th>STT</th>
                                <th>Địa Chỉ</th>
                                <th>Điện Thoại</th>
                                <th>Thời GianLàm Việc</th>

                            </tr>
                            </thead>
                            <tbody>
                                @foreach($baohanh as $key=>$itme)
                                <tr class="odd">
                                    <td>
                                       {{$key}}
                                    </td>
                                    <td>
                                       {{$itme->address}}
                                    </td>
                                    <td>
                                        {{$itme->phone}}
                                    </td>
                                    <td>
                                        {{$itme->time_work}}
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- pagination -->

                    </div>
                </div>
                <!-- ========================================= SECTION – HERO : END ========================================= -->
            </div><!-- /.homebanner-holder -->
        </div><!-- /.container -->
    </div><!-- /#top-banner-and-menu -->

    <!-- ========================================= HOME BANNERS ========================================= -->
@stop
