@extends('frontend.master')
@section('content')
		<div class="container-fluid mb-4">
				<div class="row">
						<div class="col-md-12 mb-4">
								<div class="filters mt-3 bg-white rounded">
										<div class="title pl-3 ">
												<h3 class="text--title m-0 ">Bộ lọc sản phẩm </h3>
												<!-- <a class="see-more" href="#">Xem tất cả <i class="fal fa-angle-right"></i></a> -->
										</div>
										<div class="filter__content w-100 p-3">
												<div class="filter ">
														<div class="filter__name">
																<div class="option__name">
																		Thương hiệu Thương hiệu Thương hiệu Thương hiệu
																</div>
														</div>
														<div class="filter__option">

																@foreach ($category as $value)
																		<span class="option__value js-filter brand-filter" data-filters="brand"
																				name="brand-filter" value="{{ $value->brand_id }}"
																				data-name="">{{ $value->brand_name }}</span>
																@endforeach
														</div>
														<div class="filter__more text-secondary">
																<i class="fal fa-chevron-circle-down"></i>

														</div>
												</div>
												<div class="filter ">
														<div class="filter__name">
																<div class="option__name">
																		Màu sắc
																</div>
														</div>
														<div class="filter__option">
																<span class="option__value js-filter" data-name="">Trắng</span>
																<span class="option__value js-filter" data-name="">Đen</span>
																<span class="option__value js-filter" data-name="">Xám</span>
																<span class="option__value js-filter" data-name="">Xanh</span>
																<span class="option__value js-filter" data-name="">Hồng</span>
																<span class="option__value js-filter" data-name="">Trắng</span>
																<span class="option__value js-filter" data-name="">Đen</span>
																<span class="option__value js-filter" data-name="">Xám</span>
																<span class="option__value js-filter" data-name="">Xanh</span>
																<span class="option__value js-filter" data-name="">Hồng</span>
																<span class="option__value js-filter" data-name="">Đen</span>
																<span class="option__value js-filter" data-name="">Xám</span>
																<span class="option__value js-filter" data-name="">Xanh</span>
																<span class="option__value js-filter" data-name="">Hồng</span>

														</div>
														<div class="filter__more text-secondary">
																<i class="fal fa-chevron-circle-down"></i>

														</div>
												</div>
												<div class="filter ">
														<div class="filter__name">
																<div class="option__name">
																		Thương hiệu
																</div>
														</div>
														<div class="filter__option">
																<span class="option__value js-filter" data-name="">Airshot</span>
																<span class="option__value js-filter" data-name="">Aosmith</span>
																<span class="option__value js-filter" data-name="">Coway</span>
																<span class="option__value js-filter" data-name="">Daikin</span>
														</div>
														<div class="filter__more text-info">
														</div>
												</div>
										</div>
								</div>
								<!-- end .filter -->
						</div>
				</div>
				<!-- end .row -->

				<div class="row">
						<div class="col-md-12 mb-4">
								<div class="products__you bg-white rounded">
										<div class="filter filter--sort p-3">
												<div class="filter__name">
														<div class="option__name">
																Sắp xếp theo
														</div>
												</div>
												<div class="filter__option">
														<span class="option__value check js-filter" data-name="">Khuyễn mãi tốt nhất</span>
														<span class="option__value js-filter" data-name="">Bán chạy</span>
														<span class="option__value js-filter" data-name="">Mới về</span>
														<span class="option__value js-filter" data-name="">Giá giảm dần</span>
														<span class="option__value js-filter" data-name="">Giá tăng dần</span>

														<div class="sort__range--price">
																<input class="option__value " type="number" placeholder="Giá thấp nhất"> <i
																		class="d-inline-block mr-1 font-weight-bold"> - </i> <input class="option__value "
																		type="number" placeholder="Giá cao nhất">
														</div>
												</div>
												<div class="filter__more text-info">
												</div>
										</div>
										<div class="products flex-wrap" id="js-navigation-products-you">
												@foreach ($product as $value)
														<a class="product p-3 d-flex flex-column mb-3" href="">
																<div class="product__image">
																		<figure class="box__image ">
																				<img class="lazyload zoom banner__image "
																						data-src="{{ asset('Backend/uploads/products/' . $value->product_images) }}"
																						alt=" " loading="lazy" src="./images/product/unnamed (1).webp">
																		</figure>
																		@if ($value->product_price - $value->product_sales == 0)

																		@else
																				<div class="boxed__save shadow-sm rounded p-2">
																						<div class="text__save"> TIẾT KIỆM </div>
																						<div class="price_save">
																								{{ number_format($value->product_price - $value->product_sales, 0, ',', '.') }}
																								₫</div>
																				</div>
																		@endif
																</div>
																<div class="product__content d-flex flex-column justify-content-between">
																		<div class="product__top">
																				<div class="product__name">
																						{{ $value->product_name }}
																				</div>
																				<div class="product__number">
																						Còn 3 sản phẩm
																				</div>
																		</div>
																		<div class="product__bottom">
																				<div class="product__price new__price">
																						<strong class="">
																								{{ number_format($value->product_sales, 0, ',', '.') }} ₫</strong>
																						<i>Freeship</i>
																				</div>
																				@if ($value->product_price - $value->product_sales == 0)

																				@else
																						<div class="product__price old__price">
																								<span class="">
																										{{ number_format($value->product_price, 0, ',', '.') }} ₫</span>
																								<i
																										class="discount">-{{ round(100 - ($value->product_sales * 100) / $value->product_price, 1) }}%</i>
																						</div>
																				@endif
																		</div>
																</div>
														</a>
												@endforeach
										</div>
								</div>
						</div>
						<div class="col-md-12 ">
								<nav aria-label="Page navigation example">
										<ul class="pagination justify-content-center mb-0">
												<li class="page-item m-1 disabled">
														<a class="page-link" href="#" tabindex="-1"><i class="fal fa-chevron-left"></i></a>
												</li>
												<li class="page-item m-1 active"><a class="page-link" href="#">1</a></li>
												<li class="page-item m-1 "><a class="page-link" href="#">2</a></li>
												<li class="page-item m-1 "><a class="page-link" href="#">3</a></li>
												<li class="page-item m-1 "><a class="page-link" href="#">...</a></li>
												<li class="page-item m-1 "><a class="page-link" href="#">124</a></li>
												<li class="page-item m-1 ">
														<a class="page-link" href="#"><i class="fal fa-chevron-right"></i></a>
												</li>
										</ul>
								</nav>
						</div>
				</div>
				<!-- end .row Product for you -->

		</div>
@endsection
