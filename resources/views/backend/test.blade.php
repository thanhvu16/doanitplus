@extends('backend.master')
@section('title','Danh Mục Sản Phẩm')
@section('main')

    <fieldset class="feildset-form">
        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh mục sản phẩm</h1>
            </div>
        </div><!--/.row-->

        <div class="row">
            <div class="col-xs-12 col-md-5 col-lg-12">
                <form class="form-horizontal row"  action="" method="post" enctype="multipart/form-data">
                @csrf 
                       <div class="col-lg-12 col-md-12 col-sm-8 col-xs-7">
                            
                            <div class="form-group">
                                <h4>Nội Dung</h4>
                                <div class="form-line">
                                    <textarea name="" cols="100" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-8 col-xs-7">
                            
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="radio" name="">Giao Chuyên Viên
                                    <input type="radio" name="">Giao Phó Phòng
                                   
                                </div>
                            </div>
                        </div>
                <div class="col-md-4 text-center mt-4">
                    <button type="submit" class="btn btn-primary waves-effect">Tạo Việc</button>
                </div>
            </form>
            </div>
        </div><!--/.row-->
    </div>  <!--/.main-->
    </fieldset>
@stop
