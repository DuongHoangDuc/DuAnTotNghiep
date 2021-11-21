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
																<a href="{{ URL::to('/admin/brand/create-brand') }}" class="btn btn-primary">Thêm
																		Thương Hiệu</a>
														@endcan
												</div>
												<div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

														<div class="row">
																<div class="col-sm-12">
																		<table id="datatable" class="table table-bordered">
																				<thead class="thead-light .background-color">
																						<tr role="row">
																								<th></th>
																								<th>Tên Thương Hiệu</th>
																								<th>slug</th>
																								<th>Hành động</th>
																						</tr>
																				</thead>

																				<tbody id="table_category">
																						@foreach ($brand as $key => $bra)
																								<tr id="category_2" role="row" class="odd">
																										<td tabindex="0" class="sorting_1"><input type="checkbox"
																														class="sub_chk" name="data_ids" data-id="'.$item->id.'">
																										</td>
																										<td>{{ $bra->brand_name }}</td>
																										<td>{{ $bra->brand_slug }}</td>
																										<td>
																												{{-- <button class="btn btn-success"><i class="fa fa-edit"></i>Chỉnh sửa</button> --}}
																												@can('brand-edit')
																														<a class="btn btn-success"
																																onclick="return confirm('bạn có muốn Sửa danh mục này')"
																																href="{{ URL::to('/admin/brand/edit-brand/' . $bra->brand_id) }}">
																																<i class="fa fa-edit">
																																</i> Chỉnh Sửa</a>
																												@endcan
																												@can('brand-delete')
																														<a class="btn btn-danger"
																																onclick="return confirm('bạn có muốn xóa danh mục này')"
																																href="{{ URL::to('/admin/brand/destroy-brand/' . $bra->brand_id) }}">
																																<i class="fa fa-trash">
																																</i> Xóa</a>
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
