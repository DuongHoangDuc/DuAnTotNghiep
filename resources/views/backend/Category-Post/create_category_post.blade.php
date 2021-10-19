@extends('backend.master_layout')
@section('title', 'Dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card-box">

                <h4 class="header-title mb-4">Thêm Danh Mục Bài viết</h4>

                <div class="row">
                    <div class="col-xl-12">
                        <form id="form_category_create" action="{{ URL::to('/admin/category-post/store-category-post') }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="">Tên danh mục</label>
                                        <input type="text" name="category_post_name" class="form-control" id="">
                                    </div>
                                    @error('category_post_name')
                                        <span class="erorr text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="">slug</label>
                                        <input type="text" name="category_post_slug" class="form-control" id="">
                                    </div>
                                    @error('category_post_slug')
                                        <span class="erorr text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class=" title_producategorct ">Mô tả ngắn</label>
                                        <textarea name="category_post_desc" class="form-control" id="ckeditor_desc" cols="0"
                                            rows="0"></textarea>
                                    </div>
                                    @error('category_post_desc')
                                        <span class="erorr text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <button type="submit" class="btn btn-primary">Thêm danh mục</button>
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
