
@extends('backend.master')
@section('title','Sửa Danh Mục Sản Phẩm')
@section('main')

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh mục sản phẩm</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-xs-12 col-md-5 col-lg-5">
					<div class="panel panel-primary">
                        <form method="post">
						<div class="panel-heading">
							Sửa danh mục
						</div>
                            @include('errors.note')
						<div class="panel-body">
							<div class="form-group">
								<label>Tên danh mục:</label>
    							<input type="text" name="cate_name" value="{{$category->cate_name}}" class="form-control" placeholder="Tên danh mục...">
							</div>
                            <div class="form-group">
                                <input type="submit" value="Cập nhật" name="submit" class="btn btn-primary" >
                            </div>
                            {{csrf_field()}}
						</div>
                        </form>
					</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@stop
