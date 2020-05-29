
@extends('backend.master')
@section('title','Thành Viên')
@section('main')

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thêm Thành viên</h1>
            </div>
            <a href="{{ route('createmem') }}" class="btn bg-indigo waves-effect"
               role="button">
                <button class="btn-primary">THÊM THÀNH VIÊN</button>
            </a>
        </div><!--/.row-->

       <div class="row">
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
                               Tên Thành Viên
                           </th>
                           <th>
                               Email
                           </th>
                           <th>
                               Phone
                           </th>
                           <th>
                               Password
                           </th>
                           <th>
                               Địa Chỉ
                           </th>
                           <th class="text-center">
                               Tác Vụ
                           </th>
                       </tr>
                       </thead>
                       <tbody>
                       @forelse ($member as $key=>$mem)
                           <tr class="odd">
                               <td>
                                   {{$key}}
                               </td>
                               <td>
                                   {{$mem->name}}
                               </td>
                               <td>
                                   {{$mem->email}}
                               </td>
                               <td>
                                   {{$mem->phone}}
                               </td>
                               <td>
                                   {{$mem->password}}
                               </td>
                               <td>
                                   {{$mem->address}}
                               </td>
                               <td class="text-center">
                                   <a class="btn btn-primary waves-effect btn-action" href="{{ route('editmem',$mem->id) }}" role="button" title="Sửa">
                                       <i class="fa fa-edit"></i>
                                   </a>
                                   <a class="btn btn-danger waves-effect btn-action" href="{{ route('deletemem',$mem->id) }}" role="button" title="Xóa">
                                       <i class="fa fa-trash" aria-hidden="true"></i>
                                   </a>
                               </td>
                           </tr>
                       @empty
                           <td colspan="4" class="text-center">Không tìm thấy dữ liệu.</td>
                       @endforelse
                       </tbody>
                   </table>
                   <!-- pagination -->

               </div>
           </div>
       </div>
    </div>	<!--/.main-->
@stop
