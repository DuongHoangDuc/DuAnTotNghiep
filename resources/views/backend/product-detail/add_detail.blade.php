@extends('backend.master_layout')
@section('title', 'Dashboard')
@section('content')
<div class="row">
        <div class="col-12">
            <div class="card-box">

                <h4 class="header-title mb-4">Thêm Loại</h4>

               <div class="row">
                            <h4 class="header-title mb-4">Thêm Thông tin sản phẩm</h4>
                            <div class="col-xl-12">
                                <form action="{{ URL::to('/admin/detail/store-detail/' . $id) }}" method="POST"
                                    id="form_category_create" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label class="title_product" for="">Bảo Hành</label>
                                                <input type="text" name="warranty" class="title_product form-control" id="">
                                            </div>
                                            @error('warranty')
                                                <span class="erorr text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label class="title_product" for="">Series </label>
                                                <input type="text" name="series" class=" title_product form-control" id="">
                                            </div>
                                            @error('series')
                                                <span class="erorr text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label class="title_product" for="">Part Number </label>
                                                <input type="text" name="part_number" class=" title_product form-control"
                                                    id="">
                                            </div>
                                            @error('part_number')
                                                <span class="erorr text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label class="title_product" for="">Thế hệ CPU </label>
                                                <input type="text" name="generation" class=" title_product form-control"
                                                    id="">
                                            </div>
                                            @error('generation')
                                                <span class="erorr text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label class="title_product" for="">CPU </label>
                                                <input type="text" name="cpu" class=" title_product form-control" id="">
                                            </div>
                                            @error('cpu')
                                                <span class="erorr text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label class="title_product" for="">Chíp đồ họa </label>
                                                <input type="text" name="graphics" class=" title_product form-control"
                                                    id="">
                                            </div>
                                            @error('graphics')
                                                <span class="erorr text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label class="title_product" for="">Ram</label>
                                                <input type="text" name="ram" class=" title_product form-control" id="">
                                            </div>
                                            @error('ram')
                                                <span class="erorr text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label class="title_product" for="">Màn Hình </label>
                                                <input type="text" name="screen" class=" title_product form-control" id="">
                                            </div>
                                            @error('screen')
                                                <span class="erorr text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label class="title_product" for="">lưu Trữ</label>
                                                <input type="text" name="archive" class="title_product form-control" id="">
                                            </div>
                                            @error('archive')
                                                <span class="erorr text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label class="title_product" for="">Số cổng lưu trữ tối đa </label>
                                                <input type="text" name="maximum_archive"
                                                    class=" title_product form-control" id="">
                                            </div>
                                            @error('maximum_archive')
                                                <span class="erorr text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label class="title_product" for="">Kiểu khe M.2 hỗ trợ </label>
                                                <input type="text" name="slot_type" class=" title_product form-control"
                                                    id="">
                                            </div>
                                            @error('slot_type')
                                                <span class="erorr text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label class="title_product" for="">Cổng xuất hình </label>
                                                <input type="text" name="screen_output" class=" title_product form-control"
                                                    id="">
                                            </div>
                                            @error('screen_output')
                                                <span class="erorr text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label class="title_product" for="">Cổng kết nối</label>
                                                <input type="text" name="connecting" class="title_product form-control"
                                                    id="">
                                            </div>
                                            @error('connecting')
                                                <span class="erorr text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label class="title_product" for="">Kết nối không dây</label>
                                                <input type="text" name="Connection_not_wire"
                                                    class=" title_product form-control" id="">
                                            </div>
                                            @error('Connection_not_wire')
                                                <span class="erorr text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label class="title_product" for="">Bàn phím </label>
                                                <input type="text" name="keyboard" class=" title_product form-control"
                                                    id="">
                                            </div>
                                            @error('keyboard')
                                                <span class="erorr text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label class="title_product" for="">Hệ điều hành </label>
                                                <input type="text" name="system" class=" title_product form-control" id="">
                                            </div>
                                            @error('system')
                                                <span class="erorr text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label class="title_product" for="">Kích thước</label>
                                                <input type="text" name="size" class="title_product form-control" id="">
                                            </div>
                                            @error('size')
                                                <span class="erorr text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label class="title_product" for="">Pin </label>
                                                <input type="text" name="pin" class=" title_product form-control" id="">
                                            </div>
                                            @error('pin')
                                                <span class="erorr text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label class="title_product" for="">Khối lượng </label>
                                                <input type="text" name="weight" class=" title_product form-control" id="">
                                            </div>
                                            @error('weight')
                                                <span class="erorr text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label class="title_product" for="">Đèn LED trên máy</label>
                                                <input type="text" name="led" class=" title_product form-control" id="">
                                            </div>
                                            @error('led')
                                                <span class="erorr text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <button type="submit" class="btn btn-primary">Thêm Thông số
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div><!-- end col -->


                        </div>
            </div>
        </div><!-- end col -->
    </div>
@endsection
