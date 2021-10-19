
@extends('backend.master_layout')
@section('title', 'Dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card-box">

                <h4 class="header-title mb-4">Thêm User</h4>

                <div class="row">
                    <div class="col-xl-12">
                        <form id="form_category_create" action="{{ URL::to('/admin/user/store-user') }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="mb-3">
                                        <label for="">Tên User</label>
                                        <input type="text" name="name" class="form-control" id="">
                                    </div>
                                    @error('name')
                                        <span class="erorr text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                                <div class="col-md-8">
                                    <div class="mb-3">
                                        <label for="">email</label>
                                        <input type="text" name="email" class="form-control" id="">
                                    @error('email')
                                        <span class="erorr text-danger"> {{ $message }} </span>
                                    @enderror
                                    </div>
                               
                                </div>
                                    <div class="col-md-8">
                                    <div class="mb-3">
                                        <label for="">password</label>
                                        <input type="password" name="password" class="form-control" id="">
                                    @error('password')
                                        <span class="erorr text-danger"> {{ $message }} </span>
                                    @enderror
                                    </div>
                                   
                                </div>
                                    <div class="col-md-8">
                                <div class="mb-3">
                                    <label class="title_product" for="">Vai Trò</label>
                                    <select multiple name = "role_id[]" class="select2_init form-control input-sm m-bot15">
                                    <option> --> Chọn Vai Trò <-- </option>
                                    @foreach ($roles as $key => $role )
                                        <option value = "{{ $role->id }}" >{{ $role->name }}</option>
                                        @error('role_id')
                                        <span class="erorr text-danger" > {{ $message }} </span>
                                        @enderror
                                    @endforeach
                                     
                                    </select>
                                </div>
                               
                            </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <button type="submit" class="btn btn-primary">Thêm User</button>
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
