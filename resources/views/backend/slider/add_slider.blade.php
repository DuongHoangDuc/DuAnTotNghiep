@extends('backend.master_layout')
@section('title', 'Dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card-box">

                <h4 class="header-title mb-4">Thêm Loại</h4>

                <div class="row">
                    <div class="col-xl-12">
                        <form id="form_category_create" action="{{ URL::to('/admin/slider/store-slider') }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="">Tên slider</label>
                                        <input type="text" name="slider_name" class="form-control" id="">
                                    </div>
                                    @error('slider_name')
                                        <span class="erorr text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="">Hiển Thị / Ẩn</label>
                                        <select name="slider_status" class="title_product form-control input-sm m-bot15">
                                            <option value = "1"> Hiển thị </option>
                                            <option value = "0"> Ẩn </option>
                                        </select>
                                    </div>
                                
                                </div>

                                <div class="col-md-4" id="add-image-file">
                                    <div class="mb-3">
                                        
                                        <label for="">Hình ảnh File</label>
                                        <div class="custom-file">
                                            <input type="file" name="slider_image" class="custom-file-input"
                                               multiple="multiple">
                                            <label class="custom-file-label" for="images">Choose image</label>
                                        </div>
                                        @error('slider_image')
                                            <span class="erorr text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class=" title_product ">Mô tả Slider</label>
                                        <textarea name="slider_desc" class="form-control" id="ckeditor_desc" cols="0"
                                            rows="0"></textarea>
                                    </div>
                                    @error('slider_desc')
                                        <span class="erorr text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <button type="submit" class="btn btn-primary">Thêm slider</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div><!-- end col -->


                </div><!-- end row -->
            </div>
        </div><!-- end col -->
    </div>{{--  --}}
@endsection
