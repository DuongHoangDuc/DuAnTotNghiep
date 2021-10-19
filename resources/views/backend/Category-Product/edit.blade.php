@extends('backend.master_layout')
@section('title', 'Dashboard')
@section('content')

    <div class="card">
    
        <div class="card-body">
            <h4 class="header-title mb-4">Cập Nhập Loại</h4>
            <div class="row">
                <div class="col-xl-12">
                    <form action="{{ URL::to('/admin/category-product/update-category-product/'.$category->category_id) }}" method="POST" id="form_category_create"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="">Tên danh mục</label>
                                    <input type="text" value = "{{ $category->category_name }}" name="category_name" class="form-control" id="">
                                </div>
                            @error('category_name')
                                        <span class="erorr text-danger" > {{ $message }} </span>
                            @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="">slug</label>
                                    <input type="text" value = "{{ $category->category_slug }}" name="category_slug" class="form-control" id="">
                                </div>
                             @error('category_slug')
                                        <span class="erorr text-danger" > {{ $message }} </span>
                            @enderror
                            </div>
                            <div class="col-md-6" id="add-image-file">
                                <div class="mb-3">
                                    <div class="preview hide" id="category_preview_image">
                                    </div>
                                    <label for="">Hình ảnh File</label>
                                    <div class="custom-file">
                                        <input type="file" name="category_images" class="custom-file-input" accept="image/*"
                                            onchange="readURL(this);" id="images" multiple="multiple">
                                        <label class="custom-file-label" for="images">Choose image</label>
                                    </div>
                                    <img width = "70px" src="{{ asset ('Backend/uploads/category/'.$category->category_images) }}"> 
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <button type="submit" class="btn btn-primary">Cập Nhập</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div><!-- end col -->


            </div>
        </div>
    </div>
@endsection