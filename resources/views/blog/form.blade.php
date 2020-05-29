<fieldset class="feildset-form">
    <legend>{{ isset($blog) ? 'Cập nhật' : 'Thêm mới' }}</legend>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <form action="{{ isset($blog) ? route('Blog.update', $blog->id) : route('Blog.store') }}"
                  method="post" enctype="multipart/form-data">
                @csrf

                @if (isset($blog))
                    @method('PUT')
                @endif

                <div class="col-md-3">
                    <div id="avartar-img">
                        <label>Ảnh Bài viết</label>
                        <input  id="img" type="file" name="imges" class="form-control hidden" onchange="changeImg(this)">
                        @if($blog)
                        <img id="avatar" class="thumbnail" width="300px" src="{{asset('../storage/app/public/upload/blog/'.$blog->imges )}}">
                        @else   <img id="avatar" class="thumbnail" width="300px" src="img/new_seo-10-512.png">
                        @endif
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="tai_khoan">Titles Bài Viết</label>
                                <input type="text" id="tiles" name="tiles" class="form-control"
                                       value="{{ old('tiles', isset($blog) ? $blog->tiles : '') }}" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="full_name">Mô Tả Ngắn</label>
                                <input type="text" name="short_decription" id="short_decription" class="form-control" placeholder="..."
                                       value="{{ old('short_decription', isset($blog) ? $blog->short_decription : '') }}" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="card-inside-title">Ngày Đăng </label>
                                <div class="form-line " id="datepicker">
                                    <input type="date" name="date" id="date" class="form-control" value="{{ old('ma_nhan_su', isset($blog) ? $blog->date : '') }}" autocomplete="off" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Bài Viết</label>
                                <textarea class="ckeditor" required name="description">{{ old('description', isset($blog) ? $blog->description : '') }}</textarea>
                                <script type="text/javascript">
                                    var editor = CKEDITOR.replace('description',{
                                        language:'vi',
                                        filebrowserImageBrowseUrl: '../../editor/ckfinder/ckfinder.html?Type=Images',
                                        filebrowserFlashBrowseUrl: '../../editor/ckfinder/ckfinder.html?Type=Flash',
                                        filebrowserImageUploadUrl: '../../editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                                        filebrowserFlashUploadUrl: '../../public/editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                                    });
                                </script>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-12 text-center mt-4">
                    <button type="submit" class="btn btn-primary waves-effect text-uppercase">{{ isset($blog) ? 'Cập nhật' : 'Thêm Bài Viết' }}</button>
                    <a href="{{ route('Blog.index') }}" title="hủy" class="btn btn-default">Hủy</a>
                </div>
            </form>
        </div>
    </div>
</fieldset>


