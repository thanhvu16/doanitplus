
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
                                <td>Giới Thiệu</td>

                            </tr>
                            </thead>
                            <tbody>
                            <table>

                                <tr>
                                    <p>Được thành lập từ năm 2011, chúng tôi là một trong những nhà phân phối ĐTDĐ đầu tiên tại Hà Nội và kể từ năm 2005, chúng tôi chính thức trở thành nhà phân phối ĐTDĐ SamSung – Masterdealer duy nhất tại 194 Đường Lê Thanh Nghị-tp Hải Dương</p><br>

                                    <p>Với bề dày gần 10 năm kinh nghiệm và uy tín đã tạo được trong những năm vừa qua, chúng tôi luôn đem lại cho khách hàng sự hài lòng và thỏa mãn với tất cả các sản phẩm của mình.
                                        Bên cạnh đó là đội ngũ nhân viên nhiệt tình chu đáo và đầy kinh nghiệm của chúng tôi luôn đưa được ra cho khách hàng những thông tin có giá trị và giúp khách hàng lựa chọn được những sản phẩm phù hợp nhất.
                                        Để nâng cao thương hiệu của mình, mục tiêu của chúng tôi trong thời gian tới là cung cấp đến tận tay khách hàng những sản phẩm chính hãng với chất lượng đảm bảo và uy tín cũng như giá cả hợp lý nhất.
                                        Chúng tôi mong muốn sự đóng góp của khách hàng sẽ giúp chúng tôi ngày một phát triển để từ đó củng cố thêm lòng tin của khách hàng với chúng tôi. Chúng tôi rất biết ơn sự tin tưởng của khách hàng trong suốt gần 10 năm qua và chúng tôi luôn tâm niệm rằng cần phải cố gắng hơn nữa để xứng đáng với phương châm đề ra “Nếu những gì chúng tôi không có, nghĩa là bạn không cần” .
                                        Chúng tôi xin chân thành cảm ơn tất cả các khách hàng đã, đang và sẽ ủng hộ chúng tôi.</p>
                                </tr>
                            </table>
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
