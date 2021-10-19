@extends('backend.master_layout')
@section('title', 'Dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card-box">

                <h4 class="header-title mb-4">Tạo dữ liệu</h4>

                <div class="row">
                    <div class="col-xl-12">
                        <form action="{{ URL::to('/admin/permission/store-permission') }}" method="POST"
                            id="form_category_create" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="title_product" for="">Chọn menu cha</label>
                                        <select name="module_parent" class="title_product form-control input-sm m-bot15">
                                            <option> Chọn Phân Quyền </option>
                                            @foreach( config('permissions.table_module') as $moduleItem)
                                            <option value = "{{ $moduleItem }}">{{ $moduleItem }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                 <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="title_product" for="">Mô tả vai trò</label>
                                    <input type="text" name="display_name" class="title_product form-control" id="">
                                </div>
                                @error('display_name')
                                        <span class="erorr text-danger" > {{ $message }} </span>
                                @enderror
                            </div>
                                <div class="form-group">
                                  <div class="col-md-12">
                                    <div class="row">
                                      @foreach( config('permissions.module_childrent') as $moduleItemChildrent)
                                        <div class="col-md-6">
                                            <label  for="">
                                                <input type="checkbox" name = "mudule_childrent[]" value = "{{ $moduleItemChildrent }}">
                                              {{ $moduleItemChildrent }}
                                            </label>
                                        </div>
                                      @endforeach
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <button type="submit" class="btn btn-primary">Thêm</button>
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
    </div>
@endsection
