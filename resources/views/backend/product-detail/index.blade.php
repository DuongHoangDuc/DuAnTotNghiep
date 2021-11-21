@extends('backend.master_layout')
@section('title', 'Dashboard')
@section('content')
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                         <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            
                            {{-- <div class="row">
                                <div class="col-sm-12">
                                    <table id="datatable"
                                        class="table table-bordered dt-responsive nowrap dataTable no-footer dtr-inline collapsed"
                                        style="border-collapse: collapse; border-spacing: 0px; width: 100%;" role="grid"
                                        aria-describedby="datatable_info">
                                        <thead class="thead-light .background-color">
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="datatable"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label=": activate to sort column descending"><input type="checkbox"
                                                        name="" id="master"></th>

                                                <th class="sorting" tabindex="0" aria-controls="datatable"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Số lượng sản phẩm: activate to sort column ascending">Hình
                                                    ảnh</th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Số lượng sản phẩm: activate to sort column ascending"> Loại
                                                    Sản phẩm
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Số lượng sản phẩm: activate to sort column ascending">Thương
                                                    Hiệu Sản phẩm</th>

                                                <th class="sorting" tabindex="0" aria-controls="datatable"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Số lượng sản phẩm: activate to sort column ascending">Giá
                                                </th>
                                               
                                                <th class="sorting" tabindex="0" aria-controls="datatable"
                                                    rowspan="1" style="width:250px " colspan="1"
                                                    aria-label="Hành động:  activate to sort column ascending">Hành động
                                                </th>
                                            </tr>
                                        </thead>
                                        @foreach ($product as $key => $pro)
                                            <tbody id="table_category">
                                                <tr id="category_2" role="row" class="odd">
                                                    <td tabindex="0" class="sorting_1"><input type="checkbox"
                                                            class="sub_chk" name="data_ids" data-id="'.$item->id.'">
                                                    </td>


                                                    <td> <img width="70px"
                                                            src="{{ asset('Backend/uploads/products/' . $pro->product_images) }}">
                                                    </td>
                                                    <td>{{ $pro->category_name }}</td>
                                                     <td>{{ $pro->brand_name }}</td>

                                                    <td>{{ number_format($pro->product_price, 0, ',', '.') }}</td>
                                                    
                                                    <td>



                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-secondary dropdown-toggle"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                Hành Động
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                @can('product-edit')
                                                                    <a class="btn btn-success"
                                                                        onclick="return confirm('bạn có muốn Sửa danh mục này')"
                                                                        href="{{ URL::to('/admin/product/edit-product/' . $pro->product_id) }}">
                                                                        <i class="fa fa-edit">
                                                                        </i> Chỉnh Sửa</a>
                                                                @endcan
                                                                @can('product-delete')
                                                                    <a class=" btn btn-danger"
                                                                        onclick="return confirm('bạn có muốn xóa danh mục này')"
                                                                        href="{{ URL::to('/admin/product/destroy-product/' . $pro->product_id) }}">
                                                                        <i class="fa fa-trash">
                                                                        </i> Xóa Sản phẩm</a>
                                                                @endcan
                                                                <a class=" btn btn-primary"
                                                                    href="{{ URL::to('/admin/gallery/add/' . $pro->product_id) }}"><i
                                                                        class="fas fa-images"></i> Thư Viện</a>


                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>     --}}
                        </div> 

                         <div class="row">
                            <h4 class="header-title mb-4">Thêm Thông tin sản phẩm</h4>
                            <div class="col-xl-12">
                                <form action="{{ URL::to('/admin/detail/add-detail/'.$id) }}" method="POST"
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
                                                <input type="text" name="connection_not_wire"
                                                    class=" title_product form-control" id="">
                                            </div>
                                            @error('connection_not_wire')
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
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card-box">

                       

                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="datatable"
                                        class="table table-bordered dt-responsive nowrap dataTable no-footer dtr-inline collapsed"
                                        style="border-collapse: collapse; border-spacing: 0px; width: 100%;" role="grid"
                                        aria-describedby="datatable_info">
                                        <thead class="thead-light .background-color">
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="datatable"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label=": activate to sort column descending"><input type="checkbox"
                                                        name="" id="master"></th>

                                                <th class="sorting" tabindex="0" aria-controls="datatable"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Số lượng sản phẩm: activate to sort column ascending">Hình
                                                    ảnh</th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Số lượng sản phẩm: activate to sort column ascending"> Loại
                                                    Sản phẩm
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Số lượng sản phẩm: activate to sort column ascending">Thương
                                                    Hiệu Sản phẩm</th>

                                                <th class="sorting" tabindex="0" aria-controls="datatable"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Số lượng sản phẩm: activate to sort column ascending">Giá
                                                </th>

                                                <th class="sorting" tabindex="0" aria-controls="datatable"
                                                    rowspan="1" style="width:250px " colspan="1"
                                                    aria-label="Hành động:  activate to sort column ascending">Hành động
                                                </th>
                                            </tr>
                                        </thead>
                                        @foreach ($product as $key => $pro)
                                            <tbody id="table_category">
                                                <tr id="category_2" role="row" class="odd">
                                                    <td tabindex="0" class="sorting_1"><input type="checkbox"
                                                            class="sub_chk" name="data_ids" data-id="'.$item->id.'">
                                                    </td>


                                                    <td> <img width="70px"
                                                            src="{{ asset('Backend/uploads/products/' . $pro->product_images) }}">
                                                    </td>
                                                    <td>{{ $pro->category_name }}</td>
                                                    <td>{{ $pro->brand_name }}</td>

                                                    <td>{{ number_format($pro->product_price, 0, ',', '.') }}</td>

                                                    <td>



                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-secondary dropdown-toggle"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                Hành Động
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                @can('product-edit')
                                                                    <a class="btn btn-success"
                                                                        onclick="return confirm('bạn có muốn Sửa danh mục này')"
                                                                        href="{{ URL::to('/admin/product/edit-product/' . $pro->product_id) }}">
                                                                        <i class="fa fa-edit">
                                                                        </i> Chỉnh Sửa</a>
                                                                @endcan
                                                                @can('product-delete')
                                                                    <a class=" btn btn-danger"
                                                                        onclick="return confirm('bạn có muốn xóa danh mục này')"
                                                                        href="{{ URL::to('/admin/product/destroy-product/' . $pro->product_id) }}">
                                                                        <i class="fa fa-trash">
                                                                        </i> Xóa Sản phẩm</a>
                                                                @endcan
                                                                <a class=" btn btn-primary"
                                                                    href="{{ URL::to('/admin/gallery/add/' . $pro->product_id) }}"><i
                                                                        class="fas fa-images"></i> Thư Viện</a>


                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card-box">

                        <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="datatable"
                                        class="table table-bordered dt-responsive nowrap dataTable no-footer dtr-inline collapsed"
                                        style="border-collapse: collapse; border-spacing: 0px; width: 100%;" role="grid"
                                        aria-describedby="datatable_info">
                                        <thead class="thead-light .background-color">
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="datatable"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label=": activate to sort column descending"><input type="checkbox"
                                                        name="" id="master"></th>

                                                <th class="sorting" tabindex="0" aria-controls="datatable"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Số lượng sản phẩm: activate to sort column ascending">Hình
                                                    ảnh</th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Số lượng sản phẩm: activate to sort column ascending"> Loại
                                                    Sản phẩm
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Số lượng sản phẩm: activate to sort column ascending">Thương
                                                    Hiệu Sản phẩm</th>

                                                <th class="sorting" tabindex="0" aria-controls="datatable"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Số lượng sản phẩm: activate to sort column ascending">Giá
                                                </th>

                                                <th class="sorting" tabindex="0" aria-controls="datatable"
                                                    rowspan="1" style="width:250px " colspan="1"
                                                    aria-label="Hành động:  activate to sort column ascending">Hành động
                                                </th>
                                            </tr>
                                        </thead>
                                        @foreach ($product as $key => $pro)
                                            <tbody id="table_category">
                                                <tr id="category_2" role="row" class="odd">
                                                    <td tabindex="0" class="sorting_1"><input type="checkbox"
                                                            class="sub_chk" name="data_ids" data-id="'.$item->id.'">
                                                    </td>


                                                    <td> <img width="70px"
                                                            src="{{ asset('Backend/uploads/products/' . $pro->product_images) }}">
                                                    </td>
                                                    <td>{{ $pro->category_name }}</td>
                                                    <td>{{ $pro->brand_name }}</td>

                                                    <td>{{ number_format($pro->product_price, 0, ',', '.') }}</td>

                                                    <td>



                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-secondary dropdown-toggle"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                Hành Động
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                @can('product-edit')
                                                                    <a class="btn btn-success"
                                                                        onclick="return confirm('bạn có muốn Sửa danh mục này')"
                                                                        href="{{ URL::to('/admin/product/edit-product/' . $pro->product_id) }}">
                                                                        <i class="fa fa-edit">
                                                                        </i> Chỉnh Sửa</a>
                                                                @endcan
                                                                @can('product-delete')
                                                                    <a class=" btn btn-danger"
                                                                        onclick="return confirm('bạn có muốn xóa danh mục này')"
                                                                        href="{{ URL::to('/admin/product/destroy-product/' . $pro->product_id) }}">
                                                                        <i class="fa fa-trash">
                                                                        </i> Xóa Sản phẩm</a>
                                                                @endcan
                                                                <a class=" btn btn-primary"
                                                                    href="{{ URL::to('/admin/gallery/add/' . $pro->product_id) }}"><i
                                                                        class="fas fa-images"></i> Thư Viện</a>


                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container-fluid -->
    </div>
@endsection
