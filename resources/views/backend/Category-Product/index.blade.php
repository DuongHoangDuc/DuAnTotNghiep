@extends('backend.master_layout')
@section('title', 'Dashboard')
@section('content')
		<div class="content">
				<!-- Start Content-->
				<div class="container-fluid">
						<div class="row">
								<div class="col-12">
										<div class="card-box">
												<div class="mb-3">
														@can('category-product-add')
																<a href="{{ URL::to('/admin/category-product/create-category-product') }}"
																		class="btn btn-primary">Thêm Loại</a>
														@endcan
												</div>
												<div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

														<div class="row">
																<div class="col-sm-12">
																		<table id="datatable" class="table table-bordered ">
																				<thead class="thead-light .background-color">
																						<tr role="row">
																								<th></th>
																								<th>Tên loại</th>
																								<th>Hình ảnh</th>
																								<th>Trạng thái </th>
																								<th>Hành động </th>
																						</tr>
																				</thead>

																				<tbody id="table_category">
																						@foreach ($category as $key => $cate)
																								<tr id="category_2" role="row" class="odd">
																										<td tabindex="0" class="sorting_1"><input type="checkbox"
																														class="sub_chk" name="data_ids" data-id="'.$item->id.'">
																										</td>
																										<td>{{ $cate->category_name }}</td>

																										<td> <img width="70px"
																														src="{{ asset('Backend/uploads/category/' . $cate->category_images) }}">
																										</td>
																										{{-- ================active========================= --}}
																										<td class="text">
																												<?php if($cate->category_status == 0){ ?>
																												<a class=" btn btn-light "
																														onclick="return confirm('bạn có muốn kích hoạt Danh mục')"
																														href="{{ URL::to('/admin/category-product/active-category-product/' . $cate->category_id) }}">none</a>
																												<?php }elseif($cate->category_status == 1){ ?>
																												<a class=" btn btn-success "
																														onclick="return confirm('bạn có muốn kích hoạt Danh mục')"
																														href="{{ URL::to('/admin/category-product/unactive-category-product/' . $cate->category_id) }}">kích
																														hoạt</a>
																												<?php } ?>
																										</td>
																										{{-- ================active========================= --}}
																										<td>
																												{{-- <button class="btn btn-success"><i class="fa fa-edit"></i>Chỉnh sửa</button> --}}
																												@can('category-product-edit')
																														<a class="btn btn-success"
																																onclick="return confirm('bạn có muốn Sửa danh mục này')"
																																href="{{ URL::to('/admin/category-product/edit-category-product/' . $cate->category_id) }}">
																																<i class="fa fa-edit">
																																</i> Chỉnh Sửa</a>
																												@endcan
																												@can('category-product-delete')
																														<a class="btn btn-danger"
																																onclick="return confirm('bạn có muốn xóa danh mục này')"
																																href="{{ URL::to('/admin/category-product/destroy-category-product/' . $cate->category_id) }}">
																																<i class="fa fa-trash">
																																</i> Xóa
																														</a>
																												@endcan

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
						</div> <!-- end row -->
				</div> <!-- end container-fluid -->
		</div>
@endsection
