@extends('backend.master_layout')
@section('title', 'Dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card-box">

                <h4 class="header-title mb-4">chỉnh Sửa Vai Trò</h4>

                <div class="row">
                    <div class="col-xl-12">
                        <form id="form_category_create" action="{{ URL::to('/admin/roles/update-roles/'.$role->id) }}" style="width:100%"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="mb-3">
                                        <label for="">Tên Vai Trò</label>
                                        <input type="text" value = "{{ $role->name }}" name="name" class="form-control" id="">
                                    </div>
                                    @error('name')
                                        <span class="erorr text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                                <div class="col-md-8">
                                    <div class="mb-3">
                                        <label class=" title_product ">Mô tả Vai Trò</label>
                                        <textarea name="display_name"  class="form-control"  cols="0"
                                            rows="0">{{ $role->display_name }}</textarea>
                                            {{-- id="ckeditor_desc" --}}
                                    </div>
                                     @error('display_name')
                                        <span class="erorr text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                      <div class="col-md-12">
                                        <label class = "font">
                                            <input type = "checkbox" class = "checkall">
                                            chọn tất cả
                                        </label>
                                    </div>
                                    @foreach ($permissionsParent as $permissionsParentItem )
                                        
                                    
                                        <div class="card border-primary mb-3 col-md-12">
                                            <div class="card-header">
                                                <label for="">
                                                    <input type="checkbox" value="" class = "checkbox_wrapper">
                                                </label>
                                                Module {{ $permissionsParentItem->name }}
                                            </div>
                                            <div class="row">
                                                @foreach ( $permissionsParentItem->permissionsChildrent as $key => $permissionsChildrentItem)
                                                    <div class="card-body text-primary col-md-3 ">
                                                        <h5 class="card-title">
                                                            <label for="">
                                                                <input type="checkbox" class = "checkbox_childrent" name = "permission_id[]" 
                                                                {{ $permissionChecked->contains('id',$permissionsChildrentItem->id) ? 'checked' : '' }}
                                                                value="{{ $permissionsChildrentItem->id }}">
                                                            </label>
                                                            {{ $permissionsChildrentItem->name }}
                                                        </h5>
                                                    </div>
                                                 @endforeach
                                            </div>

                                        </div>
                                    @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <button type="submit" class="btn btn-primary">Cập nhập</button>
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
