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
														<a href="{{ URL::to('/admin/post/create-post') }}" class="btn btn-primary">Thêm Bài
																viết</a>
												</div>
												<div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

														<div class="row">
																<div class="col-sm-12">
																		<table id="datatable" class="table table-bordered">
																				<thead class="thead-light .background-color">
																						<tr role="row">
																								<th></th>
																								<th>Tên Bài viết </th>
																								<th> Hình Ảnh </th>
																								<th> Danh mục </th>
																								<th> Trạng Thái </th>
																								<th> hành Động </th>

																						</tr>
																				</thead>

																				<tbody id="table_category">
																						@foreach ($post as $key => $po)
																								<tr id="category_2" role="row" class="odd">
																										<td tabindex="0" class="sorting_1"><input type="checkbox"
																														class="sub_chk" name="data_ids" data-id="'.$item->id.'">
																										</td>
																										<td>{{ $po->post_title }}</td>

																										<td> <img width="70px"
																														src="{{ asset('Backend/uploads/posts/' . $po->post_images) }}">
																										</td>
																										<td>{{ $po->category_post_name }}</td>
																										{{-- ================active========================= --}}
																										<td class="text">
																												<?php if($po->post_status == 0){ ?>
																												<a class=" btn btn-light "
																														onclick="return confirm('bạn có muốn kích hoạt Danh mục')"
																														href="{{ URL::to('/admin/active-category/' . $po->post_id) }}">none</a>
																												<?php }elseif($po->post_status == 1){ ?>
																												<a class=" btn btn-success "
																														onclick="return confirm('bạn có muốn kích hoạt Danh mục')"
																														href="{{ URL::to('/admin/unactive-category/' . $po->post_id) }}">kích
																														hoạt</a>
																												<?php } ?>
																										</td>
																										{{-- ================active========================= --}}
																										<td>
																												{{-- <button class="btn btn-success"><i class="fa fa-edit"></i>Chỉnh sửa</button> --}}

																												<a class="btn btn-success"
																														onclick="return confirm('bạn có muốn Sửa danh mục này')"
																														href="{{ URL::to('/admin/post/edit-post/' . $po->post_id) }}">
																														<i class="fa fa-edit">
																														</i> Chỉnh Sửa</a>
																												<a class="btn btn-danger"
																														onclick="return confirm('bạn có muốn xóa danh mục này')"
																														href="{{ URL::to('/admin/post/destroy-post/' . $po->post_id) }}">
																														<i class="fa fa-trash">
																														</i> Xóa</a>
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
