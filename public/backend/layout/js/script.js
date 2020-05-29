function multiUploadFile(fileName) {
    let htmlForm = `<div class="remove-multi-file">
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="form-line input-group control-group">
                                    <label for="url-file">File ảnh phụ</label>
                                    <input type="file" name="${fileName}" class="form-control">
                                    <div class="input-group-btn">
                                        <span class="btn btn-danger btn-remove-file btn-sm" type="button">
                                        <i class="fa fa-remove"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>`;

    $('.increment').append(htmlForm);
}
$("body").on("click",".btn-remove-file",function(){

    $(this).parents(".remove-multi-file").remove();
});
