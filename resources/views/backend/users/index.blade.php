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
														<a href="{{ URL::to('/admin/user/add-user') }}" class="btn btn-primary">Thêm User</a>
												</div>
												<div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

														<div class="row">
																<div class="col-sm-12">
																		<table id="datatable" class="table table-bordered ">
																				<thead class=" thead-light
																				.background-color">
																						<tr role="row">
																								<th></th>
																								<th>Tên loại</th>
																								<th>Email</th>

																								<th>Hành động</th>
																						</tr>
																				</thead>

																				<tbody id="table_category">
																						@foreach ($users as $key => $user)
																								<tr id="category_2" role="row" class="odd">
																										<td tabindex="0" class="sorting_1"><input type="checkbox"
																														class="sub_chk" name="data_ids" data-id="'.$item->id.'">
																										</td>
																										<td>{{ $user->name }}</td>
																										<td>{{ $user->email }}</td>

																										<td>
																												<a class="btn btn-success"
																														onclick="return confirm('bạn có muốn Sửa danh mục này')"
																														href="{{ URL::to('/admin/user/edit-user/' . $user->id) }}">
																														<i class="fa fa-edit">
																														</i> Chỉnh Sửa</a>
																												<a class="btn btn-danger"
																														onclick="return confirm('bạn có muốn xóa danh mục này')"
																														href="{{ URL::to('/admin/user/delete-user/' . $user->id) }}">
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
