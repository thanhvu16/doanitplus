@extends('backend.master')
@section('title','Cập nhật Sản Phẩm')
@section('main')

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Sản phẩm</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">

				<div class="panel panel-primary">
					<div class="panel-heading">Sửa sản phẩm</div>
					<div class="panel-body">
						<form method="post" enctype="multipart/form-data">
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									<div class="form-group" >
										<label>Tên sản phẩm</label>
										<input required type="text" name="pro_name" value="{{$pro->pro_name}}" class="form-control">
									</div>
									<div class="form-group" >
										<label>Giá sản phẩm</label>
										<input required type="number" value="{{$pro->pro_price}}" name="pro_price" class="form-control">
									</div>
									<div class="form-group" >
										<label>Ảnh sản phẩm</label>
                                        <input id="img" type="file" name="pro_img" class="form-control hidden" onchange="changeImg(this)">
                                        <img id="avatar" class="thumbnail" width="300px" src="{{asset('../storage/app/public/upload/'.$pro->pro_img)}}">
									</div>
									<div class="form-group" >
										<label>Phụ kiện</label>
										<input required type="text" value="{{$pro->pro_accessories}}" name="pro_accessories" class="form-control">
									</div>
									<div class="form-group" >
										<label>Bảo hành</label>
										<input required type="text" value="{{$pro->pro_Warranty}}" name="pro_Warranty" class="form-control">
									</div>
									<div class="form-group" >
										<label>Khuyến mãi</label>
										<input required type="text" name="pro_promotion" value="{{$pro->pro_promotion}}" class="form-control">
									</div>
									<div class="form-group" >
										<label>Tình trạng</label>
										<input required type="text" value="{{$pro->pro_condition}}" name="pro_condition" class="form-control">
									</div>
									<div class="form-group" >
										<label>Trạng thái</label>
										<select required name="pro_status" class="form-control">
											<option value="1" {{$pro->pro_status == 1 ?'selected':''}}>Còn hàng</option>
											<option value="0" {{$pro->pro_status == 0 ?'selected':''}}>Hết hàng</option>
					                    </select>
									</div>
									<div class="form-group" >
										<label>Miêu tả</label>
										<textarea class="ckeditor" required name="pro_decription">{{$pro->pro_decription}}</textarea>
                                        <script type="text/javascript">
                                            var editor = CKEDITOR.replace('pro_decription',{
                                                language:'vi',
                                                filebrowserImageBrowseUrl: '../../editor/ckfinder/ckfinder.html?Type=Images',
                                                filebrowserFlashBrowseUrl: '../../editor/ckfinder/ckfinder.html?Type=Flash',
                                                filebrowserImageUploadUrl: '../../editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                                                filebrowserFlashUploadUrl: '../../public/editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                                            });
                                        </script>
									</div>
									<div class="form-group" >
										<label>Danh mục</label>
										<select required name="pro_cate" class="form-control">
                                            @foreach($cate as $catego)
											<option value="{{$catego->id}}" @if($pro->pro_cate == $catego->id) selected="selected" @endif>{{$catego->cate_name}}</option>
											@endforeach
					                    </select>
									</div>
									<div class="form-group" >
										<label>Sản phẩm nổi bật</label><br>
										Có: <input type="radio" checked name="pro_featured"{{$pro->pro_featured == 1 ?'checked':''}}  value="1">
										Không: <input type="radio" {{$pro->pro_featured == 0 ?'checked':''}}  name="pro_featured" value="0">
									</div>
                                    <button type="submit" class="btn btn-primary">Sửa Sản Phẩm</button>
									<a href="#" class="btn btn-danger">Hủy bỏ</a>
								</div>
							</div>
                            {{csrf_field()}}
						</form>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->

@stop
