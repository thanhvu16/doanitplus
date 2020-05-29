@extends('backend.master')
@section('title',' Sản Phẩm')

@section('main')

    <section class="content">
        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="container-fluid">
            <div class="body p-b-0">
                <!-- Nav tabs -->

                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade active in" id="div_1">
                        <div class="header">
                            <a class="btn bg-indigo waves-effect text-uppercase" role="button" data-toggle="collapse"
                               href="#collapseExample"
                               aria-expanded="false" aria-controls="collapseExample">
                                <button type="button" class="btn btn-outline-success">{{ isset($blog) ? 'Cập nhật' : 'Thêm Bài Viết' }}</button>
                            </a>
                        </div>
                        <br>
                        <div class="collapse {{ isset($blog) ? 'in' : '' }}" id="collapseExample">
                            @include('blog.form')
                        </div>
                        <div role="tabpanel" class="tab-pane fade in" id="div_1">
                            <fieldset class="feildset-form">
                                <legend>Danh sách</legend>
                                <br>
                                <div class="body">
                                    @if ($message = Session::get('success'))
                                        <div class="alert alert-success">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @endif
                                    <div class="table-responsive">
                                        <div class="dataTables_wrapper form-inline dt-bootstrap">
                                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                                <colgroup width="100%">
                                                    <col style="width: 5%;">
                                                    <col style="width: 30%;">
                                                    <col style="width: 10%;">
                                                    <col style="width: 10%;">
                                                    <col style="width: 30%;">
                                                    <col style="width: 10%;">
                                                </colgroup>
                                                <thead>
                                                <tr role="row">
                                                    <th>STT</th>
                                                    <th>Tên bài viết</th>
                                                    <th>Ngày đăng</th>
                                                    <th>Ảnh</th>
                                                    <th>Mô Tả Ngắn</th>
                                                    <th class="text-center">Tác vụ</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @forelse ($ds_blog as $key=>$baiviet)
                                                    <tr class="odd">
                                                        <td>
                                                            {{$key+1}}
                                                        </td>
                                                        <td>
                                                            {{$baiviet->tiles}}
                                                        </td>
                                                        <td>
                                                            {{date('d/m/Y',strtotime( $baiviet->date))}}
                                                        </td>
                                                        <td>
                                                            {{$baiviet->imges}}
                                                        </td>
                                                        <td>
                                                            {{$baiviet->short_decription}}
                                                        </td>
                                                        <td class="text-center">
                                                            <a href="{{route('Blog.index','id='.$baiviet->id)}}" class="btn btn-primary waves-effect btn-action"  role="button" title="Sửa">
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                            <a href="{{route('destroy',$baiviet->id)}}" class="btn btn-danger waves-effect btn-action"  role="button" title="Xóa">
                                                                <i class="fa fa-trash"></i>
                                                            </a>

                                                        </td>
                                                    </tr>
                                                @empty
                                                    <td colspan="6" class="text-center">Không tìm thấy dữ liệu.</td>
                                                @endforelse
                                                </tbody>
                                            </table>
                                            <!-- pagination -->

                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@stop
