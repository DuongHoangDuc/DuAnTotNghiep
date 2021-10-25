  <section class="carousel ">
      <div id="js-home-carousel" class="owl-carousel owl-theme">
          <div class="item">
              <a href="" class="carousel__link">
                  <img src="{{ asset('Frontend/images/home_carousel1.jpg') }}" alt="" class="carousel__image">
              </a>
          </div>
          <div class="item">
              <a href="" class="carousel__link">
                  <img src="{{ asset('Frontend/images/home_carousel2.jpg') }}" alt="" class="carousel__image">
              </a>
          </div>
          <div class="item">
              <a href="" class="carousel__link">
                  <img src="{{ asset('Frontend/images/home_carousel3.jpg') }}" alt="" class="carousel__image">
              </a>
          </div>
          <div class="item">
              <a href="" class="carousel__link">
                  <img src="{{ asset('Frontend/images/home_carousel4.jpg') }}" alt="" class="carousel__image">
              </a>
          </div>
          <div class="item">
              <a href="" class="carousel__link">
                  <img src="{{ asset('Frontend/images/home_carousel5.jpg') }}" alt="" class="carousel__image">
              </a>
          </div>
          <div class="item">
              <a href="" class="carousel__link">
                  <img src="{{ asset('Frontend/images/home_carousel6.jpg') }}" alt="" class="carousel__image">
              </a>
          </div>
          <div class="item">
              <a href="" class="carousel__link">
                  <img src="{{ asset('Frontend/images/home_carousel7.jpg') }}" alt="" class="carousel__image">
              </a>
          </div>
          <div class="item">
              <a href="" class="carousel__link">
                  <img src="{{ asset('Frontend/images/home_carousel8.jpg') }}" alt="" class="carousel__image">
              </a>
          </div>
          <div class="item">
              <a href="" class="carousel__link">
                  <img src="{{ asset('Frontend/images/home_carousel9.jpg') }}" alt="" class="carousel__image">
              </a>
          </div>
          <div class="item">
              <a href="" class="carousel__link">
                  <img src="{{ asset('Frontend/images/home_carousel10.jpg') }}" alt="" class="carousel__image">
              </a>
          </div>
          <div class="item">
              <a href="" class="carousel__link">
                  <img src="{{ asset('Frontend/images/home_carousel11.jpg') }}" alt="" class="carousel__image">
              </a>
          </div>
      </div>
      <!-- End #home-carousel -->

      <div class="nav-aside d-flex justify-content-between align-items-start pt-3">
          <ul class="nav flex-column align-items-center bg-white nav__category">
        @foreach ($category_all as $value )
              <li class="nav-item">
                  <a class="nav-link active" href="category_page.html">
                      <i class="fal fa-laptop"></i> {{ $value->category_name }}
                  </a>
              </li>
        @endforeach
            
          </ul>
          <!-- End .menu -->

          <aside class="banner banner__right ">
              <div class="banner__item ">
                  <a href="" class="banner__link">
                      <figure class="box__image">
                          <img class="zoom banner__image" src="{{ asset('Frontend/images/banner/banner1.jpg') }}"
                              alt="">
                      </figure>
                  </a>
              </div>
              <!-- end .banner__item -->
              <div class="banner__item">
                  <a href=" " class="banner__link ">
                      <figure class="box__image ">
                          <img class="zoom banner__image " src="{{ asset('Frontend/images/banner/banner2.jpg') }}"
                              alt=" ">
                      </figure>
                  </a>
              </div>
              <!-- end .banner__item -->
          </aside>
          <!-- end .banner__right -->
      </div>
      <!-- End .nav && .banner_right -->

      <div class="banner banner__bottom ">
          <div class="banner__item ">
              <a href=" " class="banner__link ">
                  <figure class="box__image ">
                      <img class="zoom banner__image " src="{{ asset('Frontend/images/banner/banner3.jpg') }}"
                          alt=" ">
                  </figure>
              </a>
          </div>
          <div class="banner__item ">
              <a href=" " class="banner__link ">
                  <figure class="box__image ">
                      <img class="zoom banner__image " src="{{ asset('Frontend/images/banner/banner4.jpg') }}"
                          alt=" ">
                  </figure>
              </a>
          </div>
          <div class="banner__item ">
              <a href=" " class="banner__link ">
                  <figure class="box__image ">
                      <img class="zoom banner__image " src="{{ asset('Frontend/images/banner/banner5.jpg') }}"
                          alt=" ">
                  </figure>
              </a>
          </div>
          <div class="banner__item ">
              <a href=" " class="banner__link ">
                  <figure class="box__image ">
                      <img class="zoom banner__image " src="{{ asset('Frontend/images/banner/banner6.jpg') }}"
                          alt=" ">
                  </figure>
              </a>
          </div>
      </div>
      <!-- end .banner__bottom -->
  </section>
  <div class="container-fluid mt-10 mb-4">
      <div class="tab__carousel rounded bg-white" id="js-tabs-image">
          <nav class="rounded-top">
              <div class="nav nav-tabs d-flex flex-nowrap" id="nav-tab" role="tablist">
                  <a class="nav-link active" id="js-nav-home-tab"
                      data-bg="{{ asset('Frontend/images/tabs-category/tab1.png') }}" data-toggle="tab"
                      href="#js-nav-home" role="tab" aria-controls="js-nav-home" aria-selected="true">
                      <h4 class="title-tab">Laptop</h4>
                      <div class="sub-title">Ưu đãi đến 4.8 Triệu</div>
                  </a>
                  <a class="nav-link" id="js-nav-profile-tab"
                      data-bg="{{ asset('Frontend/images/tabs-category/tab2.png') }}" data-toggle="tab"
                      href="#js-nav-profile" role="tab" aria-controls="js-nav-profile" aria-selected="false">
                      <h4 class="title-tab">Điện Gia Dụng</h4>
                      <div class="sub-title">Ưu đãi đến 46%</div>
                  </a>
                  <a class="nav-link" id="js-nav-contact-tab"
                      data-bg="{{ asset('Frontend/images/tabs-category/tab3.png') }}" data-toggle="tab"
                      href="#js-nav-contact" role="tab" aria-controls="js-nav-contact" aria-selected="false">
                      <h4 class="title-tab">TV</h4>
                      <div class="sub-title">Ưu đãi đến 9 Triệu</div>
                  </a>
                  <a class="nav-link" id="js-nav-contact2-tab"
                      data-bg="{{ asset('Frontend/images/tabs-category/tab4.png') }}" data-toggle="tab"
                      href="#js-nav-contact2" role="tab" aria-controls="js-nav-contact2" aria-selected="false">
                      <h4 class="title-tab">Điện thoại- Thiết Bị Thông minh</h4>
                      <div class="sub-title">Ưu đãi đến 48%</div>
                  </a>
                  <a class="nav-link" id="js-nav-contact3-tab"
                      data-bg="{{ asset('Frontend/images/tabs-category/tab5.png') }}" data-toggle="tab"
                      href="#js-nav-contact3" role="tab" aria-controls="js-nav-contact3" aria-selected="false">
                      <h4 class="title-tab">PC</h4>
                      <div class="sub-title">Ưu đãi đến 45%</div>
                  </a>
              </div>
          </nav>
          <!-- end .rounded-top -->

          <div class="tab-content p-3 pt-5" id="nav-tabContent">
        {{--sản phẩm theo Laptop  --}}
              <div class="tab-pane fade show active" id="js-nav-home" role="tabpanel"
                  aria-labelledby="js-nav-home-tab">
                  <div class="d-flex flex-nowrap align-items-center align-content-center">
                      <div class="special__offer">
                          <div class="time__boxed">
                              <div class="boxed__title mb-2">
                                  Kết thúc sau <span class="time__number" id="js-nav-home-days" id=""> </span> ngày
                              </div>
                              <div class="boxed__content">
                                  <div class="boxed__item boxed__item--hour" id="js-nav-home-hours"> </div>
                                  <div class="boxed__item boxed__item--minute" id="js-nav-home-minutes"> </div>
                                  <div class="boxed__item boxed__item--seconds" id="js-nav-home-seconds"></div>
                              </div>
                          </div>
                      </div>
                      <!-- end .special__offer -->

                      <div class="product__carousel owl-carousel owl-theme js-product-carousel">
                          {{-- Item sản phẩm Laptop --}}
                          <div class="item">
                              <div class="products">
                                  @foreach ($product as $value)
                                      <a class="product rounded p-3 d-flex flex-column" href="">

                                          <div class="product__image">
                                              <figure class="box__image ">
                                                  <img class="lazyload zoom banner__image "
                                                      data-src="{{ asset('Backend/uploads/products/' . $value->product_images) }}"
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
                                                      {{ $value->product_name }}
                                                  </div>
                                                  <div class="product__number">
                                                      Còn 3 sản phẩm
                                                  </div>
                                              </div>
                                              <div class="product__bottom">
                                                  <div class="product__price new__price">
                                                      <strong
                                                          class="">{{ number_format($value->product_sales, 0, ',', '.') }}
                                                          đ</strong>
                                                      <i>Freeship</i>
                                                  </div>
                                                  <div class="product__price old__price">
                                                      <span
                                                          class="">{{ number_format($value->product_price, 0, ',', '.') }}
                                                          đ</span>
                                                      <i class="discount">-7.28%</i>
                                                  </div>
                                              </div>
                                          </div>
                                      </a>
                                  @endforeach


                              </div>
                          </div>
                          <!-- end .item -->
                          <div class="item">
                              <div class="products">
                                  @foreach ($product1 as $value)
                                      <a class="product rounded p-3 d-flex flex-column" href="">
                                          <div class="product__image">
                                              <figure class="box__image ">
                                                  <img class="lazyload zoom banner__image "
                                                      data-src="{{ asset('Backend/uploads/products/' . $value->product_images) }}"
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
                                                      {{ $value->product_name }}
                                                  </div>
                                                  <div class="product__number">
                                                      Còn 3 sản phẩm
                                                  </div>
                                              </div>
                                              <div class="product__bottom">
                                                  <div class="product__price new__price">
                                                      <strong
                                                          class="">{{ number_format($value->product_sales, 0, ',', '.') }}
                                                          ₫</strong>
                                                      <i>Freeship</i>
                                                  </div>
                                                  <div class="product__price old__price">
                                                      <span class="">
                                                          {{ number_format($value->product_price, 0, ',', '.') }}
                                                          ₫</span>
                                                      <i class="discount">-7.28%</i>
                                                  </div>
                                              </div>
                                          </div>
                                      </a>
                                  @endforeach

                              </div>
                          </div>
                          <!-- end .item -->
                          <div class="item">
                              <div class="products">
                                  @foreach ($product2 as $value)
                                      <a class="product rounded p-3 d-flex flex-column" href="">
                                          <div class="product__image">
                                              <figure class="box__image ">
                                                  <img class="lazyload zoom banner__image "
                                                      data-src="{{ asset('Backend/uploads/products/' . $value->product_images) }}"
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
                                                      {{ $value->product_name }}
                                                  </div>
                                                  <div class="product__number">
                                                      Còn 3 sản phẩm
                                                  </div>
                                              </div>
                                              <div class="product__bottom">
                                                  <div class="product__price new__price">
                                                      <strong
                                                          class="">{{ number_format($value->product_sales, 0, ',', '.') }}
                                                          ₫</strong>
                                                      <i>Freeship</i>
                                                  </div>
                                                  <div class="product__price old__price">
                                                      <span
                                                          class="">{{ number_format($value->product_price, 0, ',', '.') }}
                                                          ₫</span>
                                                      <i class="discount">-7.28%</i>
                                                  </div>
                                              </div>
                                          </div>
                                      </a>
                                  @endforeach
                              </div>
                          </div>
                          {{-- Item sản phẩm Laptop --}}
                          <!-- end .item -->

                          <!-- end .item -->
                      </div>
                      <!-- end .product_carousel -->
                      <a href="" class="see-more">Xem thêm <i class="fal fa-angle-right"></i></a>
                  </div>
              </div>
        {{--sản phẩm theo Laptop  --}}
        {{--sản phẩm theo Điện gia dụng  --}}
              <div class="tab-pane fade" id="js-nav-profile" role="tabpanel" aria-labelledby="js-nav-profile-tab">
                  <div class="d-flex flex-nowrap align-items-center align-content-center">
                      <div class="special__offer">
                          <div class="boxed__title mb-2">
                              Kết thúc sau <span class="time__number" id="js-nav-profile-days" id=""> </span> ngày
                          </div>
                          <div class="boxed__content">
                              <div class="boxed__item boxed__item--hour" id="js-nav-profile-hours"> </div>
                              <div class="boxed__item boxed__item--minute" id="js-nav-profile-minutes"> </div>
                              <div class="boxed__item boxed__item--seconds" id="js-nav-profile-seconds"></div>
                          </div>
                      </div>
                      <!-- end .special__offer -->

                      <div class="product__carousel owl-carousel owl-theme js-product-carousel">
                          {{-- Item sản phẩm Điện gia Dụng --}}
                          <div class="item">
                              <div class="products">
                                  @foreach ($product_DGD as $value)
                                      <a class="product rounded p-3 d-flex flex-column" href="">
                                          <div class="product__image">
                                              <figure class="box__image ">
                                                  <img class="lazyload zoom banner__image "
                                                      data-src="{{ asset('Backend/uploads/products/' . $value->product_images) }}"
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
                                                      {{ $value->product_name }}
                                                  </div>
                                                  <div class="product__number">
                                                      Còn 3 sản phẩm
                                                  </div>
                                              </div>
                                              <div class="product__bottom">
                                                  <div class="product__price new__price">
                                                      <strong
                                                          class="">{{ number_format($value->product_sales, 0, ',', '.') }}
                                                          ₫</strong>
                                                      <i>Freeship</i>
                                                  </div>
                                                  <div class="product__price old__price">
                                                      <span
                                                          class="">{{ number_format($value->product_price, 0, ',', '.') }}
                                                          ₫</span>
                                                      <i class="discount">-7.28%</i>
                                                  </div>
                                              </div>
                                          </div>
                                      </a>
                                  @endforeach
                              </div>
                          </div>
                          <!-- end .item -->
                          <div class="item">
                              <div class="products">
                                  @foreach ($product_DGD1 as $value)
                                      <a class="product rounded p-3 d-flex flex-column" href="">
                                          <div class="product__image">
                                              <figure class="box__image ">
                                                  <img class="lazyload zoom banner__image "
                                                      data-src="{{ asset('Backend/uploads/products/' . $value->product_images) }}"
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
                                                      {{ $value->product_name }}
                                                  </div>
                                                  <div class="product__number">
                                                      Còn 3 sản phẩm
                                                  </div>
                                              </div>
                                              <div class="product__bottom">
                                                  <div class="product__price new__price">
                                                      <strong
                                                          class="">{{ number_format($value->product_sales, 0, ',', '.') }}
                                                          ₫</strong>
                                                      <i>Freeship</i>
                                                  </div>
                                                  <div class="product__price old__price">
                                                      <span
                                                          class="">{{ number_format($value->product_price, 0, ',', '.') }}
                                                          ₫</span>
                                                      <i class="discount">-7.28%</i>
                                                  </div>
                                              </div>
                                          </div>
                                      </a>
                                  @endforeach
                              </div>
                          </div>
                          {{-- Item sản phẩm Điện gia Dụng --}}
                      </div>
                      <!-- end .product_carousel -->
                      <a href="" class="see-more">Xem thêm <i class="fal fa-angle-right"></i></a>

                  </div>

              </div>
        {{--sản phẩm theo Điện gia dụng  --}}
        {{--sản phẩm theo TV --}}      
              <div class="tab-pane fade" id="js-nav-contact" role="tabpanel" aria-labelledby="js-nav-contact-tab">
                  <div class="d-flex flex-nowrap align-items-center align-content-center">
                      <div class="special__offer">
                          <div class="time__boxed">
                              <div class="boxed__title mb-2">
                                  Kết thúc sau <span class="time__number" id="js-nav-contact-days" id=""> </span>
                                  ngày
                              </div>
                              <div class="boxed__content">
                                  <div class="boxed__item boxed__item--hour" id="js-nav-contact-hours"> </div>
                                  <div class="boxed__item boxed__item--minute" id="js-nav-contact-minutes"> </div>
                                  <div class="boxed__item boxed__item--seconds" id="js-nav-contact-seconds"></div>
                              </div>
                          </div>
                      </div>
                      <!-- end .special__offer -->

                      <div class="product__carousel owl-carousel owl-theme js-product-carousel">
                          <div class="item">
                              <div class="products">
                                  {{-- Item sản phẩm TV --}}
                                  @foreach ($product_TV as $value)
                                      <a class="product rounded p-3 d-flex flex-column" href="">
                                          <div class="product__image">
                                              <figure class="box__image ">
                                                  <img class="lazyload zoom banner__image "
                                                      data-src="{{ asset('Backend/uploads/products/' . $value->product_images) }}"
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
                                                      {{ $value->product_name }}
                                                  </div>
                                                  <div class="product__number">
                                                      Còn 3 sản phẩm
                                                  </div>
                                              </div>
                                              <div class="product__bottom">
                                                  <div class="product__price new__price">
                                                      <strong
                                                          class="">{{ number_format($value->product_sales, 0, ',', '.') }}
                                                          ₫</strong>
                                                      <i>Freeship</i>
                                                  </div>
                                                  <div class="product__price old__price">
                                                      <span
                                                          class="">{{ number_format($value->product_price, 0, ',', '.') }}
                                                          ₫</span>
                                                      <i class="discount">-7.28%</i>
                                                  </div>
                                              </div>
                                          </div>
                                      </a>
                                  @endforeach
                              </div>
                          </div>
                          <!-- end .item -->

                          <!-- end .item -->
                      </div>
                      <!-- end .product_carousel -->
                      <a href="" class="see-more">Xem thêm <i class="fal fa-angle-right"></i></a>

                  </div>
              </div>
        {{--sản phẩm theo TV --}} 
        {{--sản phẩm theo Điện thoại --}}                 
              <div class="tab-pane fade" id="js-nav-contact2" role="tabpanel" aria-labelledby="js-nav-contact-tab2">
                  <div class="d-flex flex-nowrap align-items-center align-content-center">
                      <div class="special__offer">
                          <div class="time__boxed">
                              <div class="boxed__title mb-2">
                                  Kết thúc sau <span class="time__number" id="js-nav-contact2-days" id=""> </span>
                                  ngày
                              </div>
                              <div class="boxed__content">
                                  <div class="boxed__item boxed__item--hour" id="js-nav-contact2-hours"> </div>
                                  <div class="boxed__item boxed__item--minute" id="js-nav-contact2-minutes"> </div>
                                  <div class="boxed__item boxed__item--seconds" id="js-nav-contact2-seconds"></div>
                              </div>
                          </div>
                      </div>
                      <!-- end .special__offer -->

                      <div class="product__carousel owl-carousel owl-theme js-product-carousel">
                          {{-- Item sản phẩm Điện thoại --}}
                          <div class="item">
                              <div class="products">
                                  @foreach ($product_phone as $value)
                                      <a class="product rounded p-3 d-flex flex-column" href="">
                                          <div class="product__image">
                                              <figure class="box__image ">
                                                  <img class="lazyload zoom banner__image "
                                                      data-src="{{ asset('Backend/uploads/products/' . $value->product_images) }}"
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
                                                      {{ $value->product_name }}
                                                  </div>
                                                  <div class="product__number">
                                                      Còn 3 sản phẩm
                                                  </div>
                                              </div>
                                              <div class="product__bottom">
                                                  <div class="product__price new__price">
                                                      <strong
                                                          class="">{{ number_format($value->product_sales, 0, ',', '.') }}
                                                          ₫</strong>
                                                      <i>Freeship</i>
                                                  </div>
                                                  <div class="product__price old__price">
                                                      <span
                                                          class="">{{ number_format($value->product_price, 0, ',', '.') }}
                                                          ₫</span>
                                                      <i class="discount">-7.28%</i>
                                                  </div>
                                              </div>
                                          </div>
                                      </a>
                                  @endforeach


                              </div>
                          </div>
                          <!-- end .item -->
                          <div class="item">
                              <div class="products">
                                   @foreach ($product_phone1 as $value)
                                      <a class="product rounded p-3 d-flex flex-column" href="">
                                          <div class="product__image">
                                              <figure class="box__image ">
                                                  <img class="lazyload zoom banner__image "
                                                      data-src="{{ asset('Backend/uploads/products/' . $value->product_images) }}"
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
                                                      {{ $value->product_name }}
                                                  </div>
                                                  <div class="product__number">
                                                      Còn 3 sản phẩm
                                                  </div>
                                              </div>
                                              <div class="product__bottom">
                                                  <div class="product__price new__price">
                                                      <strong
                                                          class="">{{ number_format($value->product_sales, 0, ',', '.') }}
                                                          ₫</strong>
                                                      <i>Freeship</i>
                                                  </div>
                                                  <div class="product__price old__price">
                                                      <span
                                                          class="">{{ number_format($value->product_price, 0, ',', '.') }}
                                                          ₫</span>
                                                      <i class="discount">-7.28%</i>
                                                  </div>
                                              </div>
                                          </div>
                                      </a>
                                  @endforeach

                              </div>
                          </div>
                          {{-- Item sản phẩm Điện thoại --}}
                      
                      </div>
                      <!-- end .product_carousel -->
                      <a href="" class="see-more">Xem thêm <i class="fal fa-angle-right"></i></a>

                  </div>
              </div>
        {{--sản phẩm theo Điện thoại --}}
        {{--sản phẩm theo PC --}}        
              <div class="tab-pane fade" id="js-nav-contact3" role="tabpanel" aria-labelledby="js-nav-contact-tab3">
                  <div class="d-flex flex-nowrap align-items-center align-content-center">
                      <div class="special__offer">
                          <div class="time__boxed">
                              <div class="boxed__title mb-2">
                                  Kết thúc sau <span class="time__number" id="js-nav-contact3-days" id=""> </span>
                                  ngày
                              </div>
                              <div class="boxed__content">
                                  <div class="boxed__item boxed__item--hour" id="js-nav-contact3-hours"> </div>
                                  <div class="boxed__item boxed__item--minute" id="js-nav-contact3-minutes"> </div>
                                  <div class="boxed__item boxed__item--seconds" id="js-nav-contact3-seconds"></div>
                              </div>
                          </div>
                      </div>
                      <!-- end .special__offer -->
                      <div class="product__carousel owl-carousel owl-theme js-product-carousel">
                      {{--  Item sản phẩm PC --}}
                          <div class="item">
                              <div class="products">
                            @foreach ($product_pc as $value)
                                      <a class="product rounded p-3 d-flex flex-column" href="">
                                          <div class="product__image">
                                              <figure class="box__image ">
                                                  <img class="lazyload zoom banner__image "
                                                      data-src="{{ asset('Backend/uploads/products/' . $value->product_images) }}"
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
                                                      {{ $value->product_name }}
                                                  </div>
                                                  <div class="product__number">
                                                      Còn 3 sản phẩm
                                                  </div>
                                              </div>
                                              <div class="product__bottom">
                                                  <div class="product__price new__price">
                                                      <strong
                                                          class="">{{ number_format($value->product_sales, 0, ',', '.') }}
                                                          ₫</strong>
                                                      <i>Freeship</i>
                                                  </div>
                                                  <div class="product__price old__price">
                                                      <span
                                                          class="">{{ number_format($value->product_price, 0, ',', '.') }}
                                                          ₫</span>
                                                      <i class="discount">-7.28%</i>
                                                  </div>
                                              </div>
                                          </div>
                                      </a>
                            @endforeach
                              </div>
                          </div>
                          <!-- end .item -->
                        
                        {{--  Item sản phẩm PC --}}
                      </div>
                      <!-- end .product_carousel -->
                      <a href="" class="see-more">Xem thêm <i class="fal fa-angle-right"></i></a>

                  </div>
              </div>
         {{--sản phẩm theo PC --}}       
          </div>
      </div>
      <!-- end .nav__tab -->
  </div>
  <div class="container-fluid mb-4">
      <div class="banner banner__news d-flex justify-content-between align-content-center align-items-center">
          <div class="banner__item ">
              <a href=" " class="banner__link ">
                  <figure class="box__image mb-0">
                      <img class="lazyload zoom banner__image "
                          data-src="{{ asset('Frontend/images/banner/banner_new1.jpg') }}" alt=" " loading="lazy">
                  </figure>
              </a>
          </div>
          <div class="banner__item ">
              <a href=" " class="banner__link ">
                  <figure class="box__image mb-0 ">
                      <img class="lazyload zoom banner__image "
                          data-src="{{ asset('Frontend/images/banner/banner_new2.jpg') }}" alt=" " loading="lazy">
                  </figure>
              </a>
          </div>
          <div class="banner__item ">
              <a href=" " class="banner__link ">
                  <figure class="box__image mb-0 ">
                      <img class="lazyload zoom banner__image "
                          data-src="{{ asset('Frontend/images/banner/banner_new3.jpg') }}" alt=" " loading="lazy">
                  </figure>
              </a>
          </div>
      </div>
  </div>
