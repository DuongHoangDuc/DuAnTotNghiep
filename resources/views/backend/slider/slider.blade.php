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
														@can('brand-add')
																<a href="{{ URL::to('/admin/slider/add-slider') }}" class="btn btn-primary">Thêm
																		Slider</a>
														@endcan
												</div>
												<div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

														<div class="row">
																<div class="col-sm-12">
																		<table id="datatable" class="table table-bordered">
																				<thead class="thead-light .background-color">
																						<tr role="row">
																								<th></th>
																								<th>Tên slider</th>
																								<th>ảnh slider </th>
																								<th> Mô tả </th>
																								<th>Hiển thị</th>
																								<th>Hành động</th>
																						</tr>
																				</thead>

																				<tbody id="table_category">
																						@foreach ($slider as $key => $value)
																								<tr id="category_2" role="row" class="odd">
																										<td tabindex="0" class="sorting_1"><input type="checkbox"
																														class="sub_chk" name="data_ids" data-id="'.$item->id.'">
																										</td>
																										<td>{{ $value->slider_name }}</td>
																										<td> <img width="70px"
																														src="{{ asset('Backend/uploads/slider/' . $value->slider_image) }}">
																										</td>

																										<td>{{ $value->slider_desc }}</td>

																										<?php if($value->slider_status == 1) {?>

																										<td>Hiển Thị</td>

																										<?php } else{ ?>

																										<td>Ẩn</td>

																										<?php } ?>

																										<td>
																												{{-- <button class="btn btn-success"><i class="fa fa-edit"></i>Chỉnh sửa</button> --}}

																												<a class="btn btn-success"
																														onclick="return confirm('bạn có muốn Sửa danh mục này')"
																														href="{{ URL::to('/admin/slider/edit-slider/' . $value->slider_id) }}">
																														<i class="fa fa-edit">
																														</i> Chỉnh Sửa</a>


																												<a class="btn btn-danger"
																														onclick="return confirm('bạn có muốn xóa danh mục này')"
																														href="{{ route('slider.delete', $value->slider_id) }}">
																														<i class="fa fa-trash">
																														</i> Xóa</a>

																										</td>
																								</tr>
																						@endforeach
																				</tbody>

																		</table>
																</div>
														</div>
														<div class="row">
																<div class="col-sm-12 col-md-5">
																		<div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">
																				Đang
																				show 1 → 8 → 8 mục</div>
																</div>
																<div class="col-sm-12 col-md-7">
																		<div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate">
																				<ul class="pagination">
																						<li class="paginate_button page-item previous disabled" id="datatable_previous">
																								<a href="#" aria-controls="datatable" data-dt-idx="0" tabindex="0"
																										class="page-link">Trước</a>
																						</li>
																						<li class="paginate_button page-item active"><a href="#"
																										aria-controls="datatable" data-dt-idx="1" tabindex="0"
																										class="page-link">1</a></li>
																						<li class="paginate_button page-item next disabled" id="datatable_next"><a
																										href="#" aria-controls="datatable" data-dt-idx="2" tabindex="0"
																										class="page-link">Kế tiếp</a></li>
																				</ul>
																		</div>
																</div>
														</div>
												</div>
										</div>
								</div>
						</div> <!-- end row -->
				</div> <!-- end container-fluid -->
		</div>
@endsection
