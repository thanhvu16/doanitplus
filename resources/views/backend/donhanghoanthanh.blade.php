
@extends('backend.master')
@section('title','Thành Viên')
@section('main')

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" style="margin-top: 10px">
        <ul class="nav nav-tabs tab-nav-right" role="tablist">
            <li role="presentation"
                class="text-uppercase {{  Route::is('getorder') ? 'active' : '' }}">
                <a href="{{ route('getorder') }}" aria-expanded="true">Đơn Hàng Mới</a>
            </li>
            <li role="presentation" class="text-uppercase {{ route::is('Dondanggiao') ? 'active' : '' }}">
                <a href="{{ route('Dondanggiao') }}" aria-expanded="true">Đang Giao</a>
            </li>
            <li role="presentation" class="text-uppercase {{ route::is('Donhoanthanh') ? 'active' : '' }}">
                <a href="{{ route('Donhoanthanh') }}" aria-expanded="true">Đã Giao</a>
            </li>
            <li role="presentation" class="text-uppercase {{ route::is('huydon') ? 'active' : '' }}">
                <a href="{{ route('huydon') }}" aria-expanded="true">Lịch sử đơn đã hoàn thành</a>
            </li>
        </ul>
        <fieldset class="feildset-form">
            <legend>Đơn Hàng</legend>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <strong>{{ $message }}</strong>
                </div>
            @endif
            <div class="table-responsive">
                <div  class="dataTables_wrapper form-inline dt-bootstrap">
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
                                Địa Chỉ
                            </th>
                            <th>
                                Số điện thoại
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                Trạng thái
                            </th>
                            <th>Xác nhận đơn hàng</th>
                            <th class="text-center">
                                Chi tiết đơn hàng
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($donhang as $key=>$data)
                            <tr class="odd">
                                <td>
                                    {{$key+1}}
                                </td>
                                <td>
                                    {{$data->ho_ten}}
                                </td>
                                <td>
                                    {{$data->address}}
                                </td>
                                <td>
                                    {{$data->phone}}
                                </td>
                                <td>
                                    {{$data->email}}
                                </td>
                                <td>
                                    @if($data->stt =='1')
                                        <span class="label label-success">Nhận đơn</span>
                                    @elseif(($data->stt =='2'))
                                        <span class="label label-primary">Xác nhận</span>
                                    @elseif(($data->stt =='3'))
                                        <span class="label label-warning">Đã Giao</span>
                                    @else
                                        <span class="label label-danger">Hoàn Thành</span>
                                    @endif
                                </td>
                                <td>
                                    <a class="btn btn-primary waves-effect btn-action"  href="{{ route('sttdonhang',$data->id) }}"  role="button" title="Trạng Thái">

                                        @if($data->stt =='1')
                                            <span class="label label-success">Nhận đơn</span>
                                        @elseif(($data->stt =='2'))
                                            <span class="label label-primary">Xác nhận</span>
                                        @elseif(($data->stt =='3'))
                                            <span class="label label-warning">Đã Giao</span>
                                        @else
                                            <span class="label label-danger">Hoàn Thành</span>
                                        @endif


                                    </a>
                                </td>
                                <td class="text-center">
                                    <a href="{{route('getsporder',$data->id)}}">Xem Chi tiết</a>
                                </td>
                                @empty
                            </tr>

                            <td colspan="8" class="text-center">Không có đơn hàng nào</td>
                        @endforelse
                        </tbody>
                    </table>
                    <!-- pagination -->

                </div>
            </div>
        </fieldset>
    </div>  <!--/.main-->


@stop
