@extends('backend.master')
@section('title','Thêm Sản Phẩm')
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
					<div class="panel-heading">Thêm sản phẩm</div>
                    @include('errors.note')
					<div class="panel-body">
						<form method="post" enctype="multipart/form-data">
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-12">

                                    <div class="col-md-4">
                                        <div class="form-group" >
                                            <label>Tên sản phẩm</label>
                                            <input required type="text" name="pro_name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group" >
                                            <label>Giá sản phẩm</label>
                                            <input required type="number" name="pro_price" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group" >
                                            <label>Phụ kiện</label>
                                            <input required type="text" name="pro_accessories" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group" >
                                            <label>Bảo hành</label>
                                            <input required type="text" name="pro_Warranty" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group" >
                                            <label>Khuyến mãi</label>
                                            <input required type="text" name="pro_promotion" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group" >
                                            <label>Tình trạng</label>
                                            <input required type="text" name="pro_condition" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group" >
                                            <label>Trạng thái</label>
                                            <select required name="pro_status" class="form-control">
                                                <option value="1">Còn hàng</option>
                                                <option value="0">Hết hàng</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group" >
                                            <label>Danh mục</label>
                                            <select required name="pro_cate" class="form-control">
                                                @foreach($cate as $catego)
                                                    <option value="{{$catego->id}}">{{$catego->cate_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group" >
                                            <label>Sản phẩm nổi bật</label><br>
                                            Có: <input type="radio" name="pro_featured" value="1">
                                            Không: <input type="radio" checked name="pro_featured" value="0">
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>

                                    <div class="col-md-8">
                                        <div class="form-group" >
                                            <label>Miêu tả</label>
                                            <textarea class="ckeditor" required name="pro_decription"></textarea>
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
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group" >
                                            <label>Ảnh chính sản phẩm</label>
                                            <input required id="img" type="file" name="pro_img" class="form-control hidden" onchange="changeImg(this)">
                                            <img id="avatar" class="thumbnail" width="300px" src="img/new_seo-10-512.png">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="increment">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="url-file">File ảnh phụ</label>
                                                    <div class="form-line input-group control-group">
                                                        <input type="file" id="url-file" name="ten_file[]" class="form-control">
                                                        <div class="input-group-btn">
                                                            <span class="btn btn-success btn-sm" onclick="multiUploadFile('ten_file[]')" type="button">
                                                                <i class="fa fa-plus"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-12 text-center">
                                        <input type="submit" name="submit" value="Thêm" class="btn btn-primary">
                                        <a href="#" class="btn btn-danger">Hủy bỏ</a>
                                    </div>

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
