
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
                 <form action="{{route('tracuudonhang')}}" method="get">
                     @csrf
                        <div class="billing-address">
                            <h2 class="border h1">Tra Cứu Đơn Hàng</h2>
                            <div class="row field-row">
                                <div class="col-xs-12">
                                    <label>Tìm kiếm</label>
                                    <input class="le-input" name="phone" required placeholder="nhập số điện thoại...">
                                </div>
                            </div><!-- /.field-row -->
                        </div><!-- /.billing-address -->
                     <div class="col-md-12 text-right" style="margin-top: 10px">
                         <button class="btn btn-danger">Tìm kiếm</button>
                     </div>
                </form><br>
                <!-- ========================================= SECTION – HERO : END ========================================= -->
                @if($donhang >0)
                <div class="col-md-12" style="margin-top: 15px">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable" >
                        <thead>
                        <tr role="row">
                            <th>
                                STT
                            </th>
                            <th>
                                Tên Khách Hàng
                            </th>
                            <th>
                                Trạng thái
                            </th>


                        </tr>
                        </thead>
                        <tbody>
                        @forelse($donhang1 as $key=>$data)
                            <tr class="odd">
                                <td>
                                    {{$key+1}}
                                </td>
                                <td>
                                    {{$data->ho_ten}}
                                </td>
                                <td>
                                    @if($data->stt =='1')
                                        <span class="label label-success">Nhận đơn</span>
                                    @elseif(($data->stt =='2'))
                                        <span class="label label-warning">Xác nhận</span>
                                    @else
                                        <span class="label label-warning">Đã giao</span>
                                    @endif
                                </td>


                                @empty
                            </tr>

                            <td colspan="8" class="text-center">Không có đơn hàng nào</td>
                        @endforelse
                        </tbody>
                    </table>
                </div>
                @else
                <div class="col-md-12 text-center">
                    <p style="color: red">Hiện Tại không có đơn hàng nào!Mời bạn nhập số điện thoại để tìm kiếm!!!</p>
                </div>
                @endif

            </div><!-- /.homebanner-holder -->



        </div><!-- /.container -->
    <!-- /#top-banner-and-menu -->
    </div>

    <!-- ========================================= HOME BANNERS ========================================= -->
@stop
