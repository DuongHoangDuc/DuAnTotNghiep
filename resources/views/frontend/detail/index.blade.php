<div class="container-fluid mb-4">
		@foreach ($product as $value)
				<div class="row">
						<div class="col-md-12">
								<nav aria-label="breadcrumb">
										<ol class="breadcrumb sub__nav bg-none mb-0">
												<li class="breadcrumb-item rounded-circle">
														<a href="#" class="icon__home"><i class="fas fa-home-lg"></i></a>
												</li>
												<li class="breadcrumb-item active icon__home--active">
														<i class="fal fa-angle-right"></i>
												</li>
												<li class="breadcrumb-item active" aria-current="page">
														{{ $value->product_name }}
												</li>
										</ol>
								</nav>
						</div>
				</div>
				<!-- end .row sub__nav -->
				<div class="row ">
						<div class="col-md-9 mb-3">

								<div class="row bg-white rounded ml-0">
										<div class="col-md-5">
												<div class="gallerys pl-3 pr-3">
														<div class="gallery__view ">
																<img src="{{ asset('Backend/uploads/products/' . $value->product_images) }}"
																		alt="" id="js-view-image">
														</div>
														<div class="gallery__nav d-flex mb-3 pb-3">
																@foreach ($gallery as $image)
																		<div class="image__item js-active-view active"
																				data-src="{{ asset('Backend/uploads/products/' . $image->gallery_image) }}"
																				data-toggle="modal">
																				<img src="{{ asset('Backend/uploads/products/' . $image->gallery_image) }}"
																						alt="">
																		</div>
																@endforeach
														</div>
														<!-- end gallery__nav -->
														<div class="short__desc p-2 mb-3">
																{!! $value->product_desc !!}

														</div>
												</div>
										</div>
										<!-- end col5 -->
										<div class="col-md-7 pr-3">
												<div class="product__info pt-4">
														<div class="product__name ">
																{{ $value->product_name }}
														</div>
														<div class="product__brand">
																Thương hiệu: <a href="#"> {{ $value->brand_name }}</a> | SKU: 1702783
														</div>
														<div class="product__price new__price">
																<strong
																		class="">{{ number_format($value->product_sales, 0, ',', '.') }}
																		₫</strong>
														</div>
														<div class="product__price old__price pb-3 mb-3">
																<span
																		class="">{{ number_format($value->product_price, 0, ',', '.') }}
																		₫</span>
																<i class="discount">
																		-{{ round(100 - ($value->product_sales * 100) / $value->product_price, 1) }}%</i>
														</div>
														<div class="attached__promotion">
																<div class="title font-weight-bold mb-2">Chọn thêm 1 trong những khuyến mãi sau
																</div>
																<div class="gifts">
																		<div class="gift check d-flex p-3 mb-3 js-check-gift">
																				<div class="gift__icon"><i class="fas fa-gifts"></i></div>
																				<div class="gift__content">
																						<span>Giảm giá</span>
																						<p class="mb-0">Giảm giá trực tiếp <span>800.000 ₫</span></p>
																				</div>
																		</div>
																		<div class="gift d-flex p-3 mb-3 js-check-gift">
																				<div class="gift__icon"><i class="fas fa-gifts"></i></div>
																				<div class="gift__content">
																						<span>Giảm giá</span>
																						<p class="mb-0">Giảm giá trực tiếp <span>800.000 ₫</span></p>
																				</div>
																		</div>
																		<div class="gift d-flex p-3 mb-3 js-check-gift">
																				<div class="gift__icon"><i class="fas fa-gifts"></i></div>
																				<div class="gift__content">
																						<span>Giảm giá</span>
																						<p class="mb-0">Giảm giá trực tiếp <span>800.000 ₫</span></p>
																				</div>
																		</div>
																</div>
														</div>
														<div class="btn btn-primary d-block mb-3 ">Thêm vào giỏ hàng</div>

														<!-- <div class="related_promotion">
																<div class="title">
																		Khuyến mãi liên quan
																</div>
																<div class="promotion__content">
																		
																</div>
														</div> -->
												</div>
										</div>
								</div>
								<!-- end row -->

						</div>
						<div class="col-md-3 mb-3">
								<div class="other__services p-3 ">
										<div class="freeship pb-3 mb-3">
												<i class="fad fa-shipping-fast"></i>
												Sản phẩm được miễn phí giao hàng
										</div>
										<div class="sale__policy mb-3">
												<div class="title mb-2">Chính sạc bán hàng</div>
												<div class="policy__option">
														<i class="fal fa-shield-check"></i>
														Cam kết hàng chính hãng
												</div>
												<div class="policy__option">
														<i class="far fa-repeat-1"></i>
														Đổi trả trong vòng 10 ngày
												</div>
												<div class="policy__option">
														<i class="fal fa-truck-container"></i>
														Miễn phí ship cho đơn trên 800k
												</div>
										</div>
										<div class="services">
												<div class="title mb-2">Dịch vụ khác</div>
												<div class="services__option">
														<i class="fal fa-cogs"></i>
														Sửa chữa đồng giá 150.000đ
												</div>
												<div class="services__option">
														<i class="fal fa-laptop"></i>
														Vệ sinh máy laptop
												</div>
												<div class="services__option">
														<i class="fal fa-shield-check"></i>
														Bảo hành tại nhà
												</div>
												<a href="">Xem chi tiết</a>
										</div>
								</div>
						</div>

						<div class="col-md-12 mb-3">
								<div class="bg-white rounded">
										<div class="row ">
												<div class="col-md-8">
														<div class="title">
																<h3 class="text--title m-0 ml-3">Mô tả sản phẩm</h3>
														</div>
														<div class="product__desc p-3">
																<article class="article">

																		{!! $value->product_content !!}
																</article>
																<p class="read-more js-read-more">Đọc thêm <i class="fas fa-caret-down"></i></p>
														</div>
												</div>

												<div class="col-md-4">
														<div class="title">
																<h3 class="text--title m-0 ml-3">Thông số kỹ thuật</h3>
														</div>
														<div class="specifications p-3">
																<div class="specifications__item">
																		<div class="specifications__name">
																				Thương hiệu
																		</div>
																		<div class="specifications__value">
																				{{ $value->brand_name }}
																		</div>
																</div>
																<div class="specifications__item">
																		<div class="specifications__name">
																				Bảo hành
																		</div>

																		<div class="specifications__value">

																		</div>
																</div>
																<div class="specifications__title">
																		Thông tin chung
																</div>
																<div class="specifications__item">
																		<div class="specifications__name">
																				Series laptop
																		</div>
																		<div class="specifications__value">
																				Pavilion
																		</div>
																</div>
																<div class="specifications__item">
																		<div class="specifications__name">
																				Series laptop
																		</div>
																		<div class="specifications__value">
																				Pavilion
																		</div>
																</div>
																<div class="specifications__title">
																		Cấu hình chi tiết
																</div>
																<div class="specifications__item">
																		<div class="specifications__name">
																				Series laptop
																		</div>
																		<div class="specifications__value">
																				Pavilion
																		</div>
																</div>
																<div class="specifications__item">
																		<div class="specifications__name">
																				Series laptop
																		</div>
																		<div class="specifications__value">
																				Pavilion
																		</div>
																</div>
																<div class="specifications__item">
																		<div class="specifications__name">
																				Series laptop
																		</div>
																		<div class="specifications__value">
																				Pavilion
																		</div>
																</div>
																<div class="specifications__item">
																		<div class="specifications__name">
																				Series laptop
																		</div>
																		<div class="specifications__value">
																				Pavilion
																		</div>
																</div>
																<div class="specifications__item">
																		<div class="specifications__name">
																				Series laptop
																		</div>
																		<div class="specifications__value">
																				Pavilion
																		</div>
																</div>
																<div class="specifications__item">
																		<div class="specifications__name">
																				Series laptop
																		</div>
																		<div class="specifications__value">
																				Pavilion
																		</div>
																</div>
																<div class="specifications__item">
																		<div class="specifications__name">
																				Series laptop
																		</div>
																		<div class="specifications__value">
																				Pavilion
																		</div>
																</div>
																<div class="specifications__item">
																		<div class="specifications__name">
																				Series laptop
																		</div>
																		<div class="specifications__value">
																				Pavilion
																		</div>
																</div>
																<div class="specifications__item">
																		<div class="specifications__name">
																				Series laptop
																		</div>
																		<div class="specifications__value">
																				Pavilion
																		</div>
																</div>
																<div class="specifications__item">
																		<div class="specifications__name">
																				Series laptop
																		</div>
																		<div class="specifications__value">
																				Pavilion
																		</div>
																</div>
														</div>
														<p class="read-more read__specifications js-show-modal-specifications"
																data-toggle="modal">Đọc thêm <i class="fas fa-caret-down"></i></p>
												</div>
										</div>
								</div>
						</div>

						<div class="col-md-12">
								<div class="same__brand rounded">
										<div class="title">
												<h3 class="text--title m-0 ml-3">Cùng thương hiệu {{ $value->brand_name }}</h3>
												<a class="see-more" href="#">Xem tất cả <i class="fal fa-angle-right"></i></a>
										</div>
										<div class="owl-carousel owl-theme product__carousel--same-brand js-product-carousel"
												id="js-same-brand">
												<div class="item">
														<div class="products">
																@foreach ($related as $pro)
																		<a class="product p-3 d-flex flex-column mb-3"
																				href="{{ url('/product-detail/' . $pro->product_id) }}">
																				<div class="product__image">
																						<figure class="box__image ">
																								<img class="lazyload zoom banner__image "
																										data-src="{{ asset('Backend/uploads/products/' . $pro->product_images) }}"
																										alt=" " loading="lazy">
																						</figure>
																						<div class="boxed__save shadow-sm rounded p-2">
																								<div class="text__save"> TIẾT KIỆM </div>
																								<div class="price_save">1.600.000 ₫</div>
																						</div>
																				</div>
																				<div class="product__content d-flex flex-column justify-content-between">
																						<div class="product__top">
																								<div class="product__name">
																										{{ $pro->product_name }}
																								</div>
																								<!-- <div class="product__number">
																								Còn 3 sản phẩm
																						</div> -->
																						</div>
																						<div class="product__bottom">
																								<div class="product__price new__price">
																										<strong
																												class="">{{ number_format($pro->product_sales, 0, ',', '.') }}
																												₫</strong>
																										<i>Freeship</i>
																								</div>
																								<div class="product__price old__price">
																										<span
																												class="">{{ number_format($pro->product_sales, 0, ',', '.') }}
																												₫</span>
																										<i class="discount">-7.28%</i>
																								</div>
																						</div>
																				</div>
																		</a>
																@endforeach
														</div>
												</div>
												<div class="item">
														<div class="products">
																@foreach ($related1 as $pro)
																		<a class="product p-3 d-flex flex-column mb-3"
																				href="{{ url('/product-detail/' . $pro->product_id) }}">
																				<div class="product__image">
																						<figure class="box__image ">
																								<img class="lazyload zoom banner__image "
																										data-src="{{ asset('Backend/uploads/products/' . $pro->product_images) }}"
																										alt=" " loading="lazy">
																						</figure>
																						<div class="boxed__save shadow-sm rounded p-2">
																								<div class="text__save"> TIẾT KIỆM </div>
																								<div class="price_save">1.600.000 ₫</div>
																						</div>
																				</div>
																				<div class="product__content d-flex flex-column justify-content-between">
																						<div class="product__top">
																								<div class="product__name">
																										{{ $pro->product_name }}
																								</div>
																								<!-- <div class="product__number">
																								Còn 3 sản phẩm
																						</div> -->
																						</div>
																						<div class="product__bottom">
																								<div class="product__price new__price">
																										<strong
																												class="">{{ number_format($pro->product_sales, 0, ',', '.') }}
																												₫</strong>
																										<i>Freeship</i>
																								</div>
																								<div class="product__price old__price">
																										<span
																												class="">{{ number_format($pro->product_sales, 0, ',', '.') }}
																												₫</span>
																										<i class="discount">-7.28%</i>
																								</div>
																						</div>
																				</div>
																		</a>
																@endforeach
														</div>
												</div>
												{{-- <div class="item">
              <div class="products">
                 <a class="product p-3 d-flex flex-column mb-3" href="">
                  <div class="product__image">
                    <figure class="box__image ">
                      <img class="lazyload zoom banner__image " data-src="./images/product/unnamed (1).webp" alt=" " loading="lazy">
                    </figure>
                    <div class="boxed__save shadow-sm rounded p-2">
                      <div class="text__save"> TIẾT KIỆM </div>
                      <div class="price_save">1.600.000 ₫</div>
                    </div>
                  </div>
                  <div class="product__content d-flex flex-column justify-content-between">
                    <div class="product__top">
                      <div class="product__name">
                        Laptop ACER Swift 3 SF313-53-503A NX.A4JSV.002 ( 13.5" Quad HD (2K)/Intel Core i5-1135G7/8GB/512GB SSD/Windows 10
                      </div>
                      <!-- <div class="product__number">
                        Còn 3 sản phẩm
                      </div> -->
                    </div>
                    <div class="product__bottom">
                      <div class="product__price new__price">
                        <strong class="">20.390.000 ₫</strong>
                        <i>Freeship</i>
                      </div>
                      <div class="product__price old__price">
                        <span class="">21.990.000 ₫</span>
                        <i class="discount">-7.28%</i>
                      </div>
                    </div>
                  </div>
                </a>
                <a class="product p-3 d-flex flex-column mb-3" href="">
                  <div class="product__image">
                    <figure class="box__image ">
                      <img class="lazyload zoom banner__image " data-src="./images/product/unnamed (1).webp" alt=" " loading="lazy">
                    </figure>
                    <div class="boxed__save shadow-sm rounded p-2">
                      <div class="text__save"> TIẾT KIỆM </div>
                      <div class="price_save">1.600.000 ₫</div>
                    </div>
                  </div>
                  <div class="product__content d-flex flex-column justify-content-between">
                    <div class="product__top">
                      <div class="product__name">
                        Laptop ACER Swift 3 SF313-53-503A NX.A4JSV.002 ( 13.5" Quad HD (2K)/Intel Core i5-1135G7/8GB/512GB SSD/Windows 10
                      </div>
                      <!-- <div class="product__number">
                        Còn 3 sản phẩm
                      </div> -->
                    </div>
                    <div class="product__bottom">
                      <div class="product__price new__price">
                        <strong class="">20.390.000 ₫</strong>
                        <i>Freeship</i>
                      </div>
                      <div class="product__price old__price">
                        <span class="">21.990.000 ₫</span>
                        <i class="discount">-7.28%</i>
                      </div>
                    </div>
                  </div>
                </a>
                <a class="product p-3 d-flex flex-column mb-3" href="">
                  <div class="product__image">
                    <figure class="box__image ">
                      <img class="lazyload zoom banner__image " data-src="./images/product/unnamed (1).webp" alt=" " loading="lazy">
                    </figure>
                    <div class="boxed__save shadow-sm rounded p-2">
                      <div class="text__save"> TIẾT KIỆM </div>
                      <div class="price_save">1.600.000 ₫</div>
                    </div>
                  </div>
                  <div class="product__content d-flex flex-column justify-content-between">
                    <div class="product__top">
                      <div class="product__name">
                        Laptop ACER Swift 3 SF313-53-503A NX.A4JSV.002 ( 13.5" Quad HD (2K)/Intel Core i5-1135G7/8GB/512GB SSD/Windows 10
                      </div>
                      <!-- <div class="product__number">
                        Còn 3 sản phẩm
                      </div> -->
                    </div>
                    <div class="product__bottom">
                      <div class="product__price new__price">
                        <strong class="">20.390.000 ₫</strong>
                        <i>Freeship</i>
                      </div>
                      <div class="product__price old__price">
                        <span class="">21.990.000 ₫</span>
                        <i class="discount">-7.28%</i>
                      </div>
                    </div>
                  </div>
                </a>
                <a class="product p-3 d-flex flex-column mb-3" href="">
                  <div class="product__image">
                    <figure class="box__image ">
                      <img class="lazyload zoom banner__image " data-src="./images/product/unnamed (1).webp" alt=" " loading="lazy">
                    </figure>
                    <div class="boxed__save shadow-sm rounded p-2">
                      <div class="text__save"> TIẾT KIỆM </div>
                      <div class="price_save">1.600.000 ₫</div>
                    </div>
                  </div>
                  <div class="product__content d-flex flex-column justify-content-between">
                    <div class="product__top">
                      <div class="product__name">
                        Laptop ACER Swift 3 SF313-53-503A NX.A4JSV.002 ( 13.5" Quad HD (2K)/Intel Core i5-1135G7/8GB/512GB SSD/Windows 10
                      </div>
                      <!-- <div class="product__number">
                        Còn 3 sản phẩm
                      </div> -->
                    </div>
                    <div class="product__bottom">
                      <div class="product__price new__price">
                        <strong class="">20.390.000 ₫</strong>
                        <i>Freeship</i>
                      </div>
                      <div class="product__price old__price">
                        <span class="">21.990.000 ₫</span>
                        <i class="discount">-7.28%</i>
                      </div>
                    </div>
                  </div>
                </a>
                <a class="product p-3 d-flex flex-column mb-3" href="">
                  <div class="product__image">
                    <figure class="box__image ">
                      <img class="lazyload zoom banner__image " data-src="./images/product/unnamed (1).webp" alt=" " loading="lazy">
                    </figure>
                    <div class="boxed__save shadow-sm rounded p-2">
                      <div class="text__save"> TIẾT KIỆM </div>
                      <div class="price_save">1.600.000 ₫</div>
                    </div>
                  </div>
                  <div class="product__content d-flex flex-column justify-content-between">
                    <div class="product__top">
                      <div class="product__name">
                        Laptop ACER Swift 3 SF313-53-503A NX.A4JSV.002 ( 13.5" Quad HD (2K)/Intel Core i5-1135G7/8GB/512GB SSD/Windows 10
                      </div>
                      <!-- <div class="product__number">
                        Còn 3 sản phẩm
                      </div> -->
                    </div>
                    <div class="product__bottom">
                      <div class="product__price new__price">
                        <strong class="">20.390.000 ₫</strong>
                        <i>Freeship</i>
                      </div>
                      <div class="product__price old__price">
                        <span class="">21.990.000 ₫</span>
                        <i class="discount">-7.28%</i>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div> --}}
										</div>
								</div>
						</div>
				</div>
		@endforeach
		<div class="modal fade" id="js-view-gallery" tabindex="-1" role="dialog"
				aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">

								<div class="modal-body">
										<div id="js-gallery-carousel" class="modal-carousel owl-carousel owl-theme">
												@foreach ($gallery as $value)
														<div class="item">
																<div class="">
																		<img class="m-auto" width="500px"
																				src="{{ asset('Backend/uploads/products/' . $value->gallery_image) }}"
																				alt="">
																</div>
														</div>
												@endforeach
										</div>
										<ul id='carousel-custom-dots' class='owl-dots'>
												@foreach ($gallery as $value)

														<li class='owl-dot'>
																<img class="m-auto" width="200px"
																		src="{{ asset('Backend/uploads/products/' . $value->gallery_image) }}" alt="">
														</li>
												@endforeach
										</ul>
								</div>
						</div>
				</div>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i class="far fa-times"></i>
				</button>
		</div>

		<div class="modal fade" id="js-show-modal-specifications" tabindex="-1" role="dialog"
				aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
								@foreach ($product as $value)
										<div class="modal-body">
												<div class="title">
														<h3 class="text--title m-0 ml-3 text-center">Thông số kỹ thuật</h3>
												</div>
												<div class="specifications p-3">
														<div class="specifications__item">
																<div class="specifications__name">
																		Thương hiệu
																</div>
																<div class="specifications__value">
																		{{ $value->brand_name }}
																</div>
														</div>
														<div class="specifications__item">
																<div class="specifications__name">
																		Bảo hành
																</div>
																<div class="specifications__value">
																		12 tháng
																</div>
														</div>
														<div class="specifications__title">
																Thông tin chung
														</div>
														<div class="specifications__item">
																<div class="specifications__name">
																		Series laptop
																</div>
																<div class="specifications__value">
																		Pavilion
																</div>
														</div>
														<div class="specifications__item">
																<div class="specifications__name">
																		Series laptop
																</div>
																<div class="specifications__value">
																		Pavilion
																</div>
														</div>
														<div class="specifications__title">
																Cấu hình chi tiết
														</div>
														<div class="specifications__item">
																<div class="specifications__name">
																		Series laptop
																</div>
																<div class="specifications__value">
																		Pavilion
																</div>
														</div>
														<div class="specifications__item">
																<div class="specifications__name">
																		Series laptop
																</div>
																<div class="specifications__value">
																		Pavilion
																</div>
														</div>
														<div class="specifications__item">
																<div class="specifications__name">
																		Series laptop
																</div>
																<div class="specifications__value">
																		Pavilion
																</div>
														</div>
														<div class="specifications__item">
																<div class="specifications__name">
																		Series laptop
																</div>
																<div class="specifications__value">
																		Pavilion
																</div>
														</div>
														<div class="specifications__item">
																<div class="specifications__name">
																		Series laptop
																</div>
																<div class="specifications__value">
																		Pavilion
																</div>
														</div>
														<div class="specifications__item">
																<div class="specifications__name">
																		Series laptop
																</div>
																<div class="specifications__value">
																		Pavilion
																</div>
														</div>
														<div class="specifications__item">
																<div class="specifications__name">
																		Series laptop
																</div>
																<div class="specifications__value">
																		Pavilion
																</div>
														</div>
														<div class="specifications__item">
																<div class="specifications__name">
																		Series laptop
																</div>
																<div class="specifications__value">
																		Pavilion
																</div>
														</div>
														<div class="specifications__item">
																<div class="specifications__name">
																		Series laptop
																</div>
																<div class="specifications__value">
																		Pavilion
																</div>
														</div>
														<div class="specifications__item">
																<div class="specifications__name">
																		Series laptop
																</div>
																<div class="specifications__value">
																		Pavilion
																</div>
														</div>
												</div>
										</div>
								@endforeach
						</div>
				</div>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i class="far fa-times"></i>
				</button>
		</div>
</div>
