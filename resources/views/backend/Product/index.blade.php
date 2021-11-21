@extends('backend.master_layout')
@section('title', 'Dashboard')
@section('content')
		<div class="content">
				<!-- Start Content-->



				{{-- <div class="mb-3">
                        @can('product-add')
                            <a href="{{ URL::to('/admin/product/create-product') }}" class="btn btn-primary">Thêm Sản
                                Phẩm</a>
                        @endcan
                        
                    </div> --}}

				<div class="row">
						<div class="col-sm-12">
								<div class="card">
										<div class="card-header"></div>
										<div class="card-body">
												<table id="datatable" class="table table-bordered">
														<thead class="thead-light .background-color">
																<tr role="row">
																		<th></th>
																		<th>Tên </th>
																		<th>Hình ảnh</th>

																		<th>Giá </th>
																		<th> Trạng thái </th>
																		<th>Hành động </th>
																</tr>
														</thead>

														<tbody id="table_category">
																@foreach ($product as $key => $pro)
																		<tr id="category_2" role="row" class="odd">
																				<td>
																				</td>
																				<td>{{ $pro->product_name }}</td>

																				<td> <img width="70px"
																								src="{{ asset('Backend/uploads/products/' . $pro->product_images) }}">
																				</td>

																				<td>{{ number_format($pro->product_price, 0, ',', '.') }}</td>
																				{{-- ================active========================= --}}
																				<td class="text">
																						<?php if($pro->category_status == 0){ ?>
																						<a class=" btn btn-light "
																								onclick="return confirm('bạn có muốn kích hoạt Danh mục')"
																								href="{{ URL::to('/admin/active-category/' . $pro->product_id) }}">none</a>
																						<?php }elseif($pro->product_status == 1){ ?>
																						<a class=" btn btn-success "
																								onclick="return confirm('bạn có muốn kích hoạt Danh mục')"
																								href="{{ URL::to('/admin/unactive-category/' . $pro->product_id) }}">kích
																								hoạt</a>
																						<?php } ?>
																				</td>
																				{{-- ================active========================= --}}
																				<td>



																						<div class="dropdown">
																								<button class="btn btn-secondary dropdown-toggle" type="button"
																										id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
																										aria-expanded="false">
																										Hành động
																								</button>
																								<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
																										<a class="dropdown-item text-success"
																												href="{{ url('/admin/product/edit-product/' . $pro->product_id) }}"><i
																														class="fa fa-edit"></i>Chỉnh
																												Sửa</a>
																										<a class="dropdown-item text-danger"
																												href="{{ url('/admin/product/destroy-product/' . $pro->product_id) }}"><i
																														class="fa fa-trash"></i> Xóa</a>
																										<a class="dropdown-item text-primary"
																												href="{{ url('/admin/gallery/add/' . $pro->product_id) }}">
																												<i class="fa fa-folder"></i> Thư Viện</a>
																								</div>
																						</div>
																				</td>
																		</tr>
																@endforeach
														</tbody>

												</table>
										</div>
								</div>

						</div>
				</div>


		</div>
@endsection
