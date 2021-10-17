@extends('backend.master_layout')
@section('title', 'Dashboard')
@section('content')
 <div class="row">
        <div class="col-12">
            <div class="card-box">

                <h4 class="header-title mb-4">Cập Nhập Thương Hiệu</h4>

                <div class="row">
                    <div class="col-xl-12">
                        <form id="form_category_create" action = "{{ URL::to ('/admin/brand/update-brand/'.$brand->brand_id) }}" method = "POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="">Tên danh mục</label>
                                        <input type="text" value = "{{ $brand->brand_name }}" name="brand_name" class="form-control" id="">
                                    </div>
                                @error('brand_name')
                                        <span class="erorr text-danger" > {{ $message }} </span>
                                @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="">slug</label>
                                        <input type="text" value = "{{ $brand->brand_slug }}" name="brand_slug" class="form-control" id="">
                                    </div>
                                @error('brand_slug')
                                        <span class="erorr text-danger" > {{ $message }} </span>
                                @enderror
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
                </div><!-- end row -->
            </div>
        </div><!-- end col -->
    </div>{{--  --}}
@endsection