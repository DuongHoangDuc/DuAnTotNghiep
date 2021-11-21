   
    <div class="row row-pl-10 row-pr-10">
    
            <div class="col-md-6 mb-20 col-pl-10 col-pr-10">
                <div class="category rounded bg-white">
                    <div class="title">
                    @foreach ($category as $value )
                        <h3 class="text--title m-0 ml-3">{{ $value->category_name }}</h3>
                    @endforeach
                        <a class="see-more" href="#">Xem tất cả <i class="fal fa-angle-right"></i></a>
                    </div>
                    <div class="category__content d-flex flex-nowrap align-items-stretch">
                        <div class="category__image">
                            <figure class="box__image ">
                                <img class="lazyload zoom banner__image "
                                    data-src="{{ asset ('Frontend/images/banner_category/unnamed(3).webp') }}" alt=" " loading="lazy">
                            </figure>

                        </div>
                        <!-- end .category__image -->
                        <div class="category__content d-flex flex-wrap align-content-between">
                            @foreach ($product_DGD as $value )
                            <div class="brand text-center">

                                <a href="{{ URL::to('/product-detail/'.$value->product_id) }}" class="">
                                    <div class="brand__title font-weight-bold">{{ $value->brand_name }}</div>
                                    <div class="brand__title brand__title--sub mb-2">{{ $value->product_event }}</div>
                                    <figure class="box__image">
                                        <img class="lazyload zoom banner__image "
                                            data-src="{{ asset('Backend/uploads/products/' . $value->product_images) }}" alt=" " loading="lazy">
                                    </figure>
                                </a>
                            </div>
                            @endforeach
                           
                        </div>
                        <!-- end .category__content -->
                    </div>
                </div>
            </div>
            <!-- end .col-md-6 -->
             <div class="col-md-6 mb-20 col-pl-10 col-pr-10">
                <div class="category rounded bg-white">
                    <div class="title">
                    @foreach($category_phone as $value)
                        <h3 class="text--title m-0 ml-3">{{ $value->category_name }}</h3>
                    @endforeach    
                        <a class="see-more" href="#">Xem tất cả <i class="fal fa-angle-right"></i></a>
                    </div>
                    <div class="category__content d-flex flex-nowrap align-items-stretch">
                        <div class="category__image">
                            <figure class="box__image ">
                                <img class="lazyload zoom banner__image "
                                    data-src="{{  asset ('Frontend/images/banner_category/unnamed(4).webp') }}" alt=" " loading="lazy">
                            </figure>

                        </div>
                        <!-- end .category__image -->
                        <div class="category__content d-flex flex-wrap align-content-between">
                        @foreach($product_phone as $value)
                            <div class="brand text-center">
                                <a href="{{ URL::to('/product-detail/'.$value->product_id) }}" class="">
                                    <div class="brand__title font-weight-bold">{{ $value->brand_name }}</div>
                                    <div class="brand__title brand__title--sub mb-2">{{ $value->product_event }}</div>
                                    <figure class="box__image">
                                        <img class="lazyload zoom banner__image "
                                            data-src="{{ asset ('Backend/uploads/products/'.$value->product_images) }}" alt=" " loading="lazy">
                                    </figure>
                                </a>
                            </div>
                        @endforeach  
                        </div>
                        <!-- end .category__content -->
                    </div>
                </div>
            </div>
             <!-- end .col-md-6 -->
            <div class="col-md-6 mb-20 col-pl-10 col-pr-10">
                <div class="category rounded bg-white">
                    <div class="title">
                    @foreach ($category_laptop as $value )
                        <h3 class="text--title m-0 ml-3">{{ $value->category_name }}</h3>
                    @endforeach
                        <a class="see-more" href="#">Xem tất cả <i class="fal fa-angle-right"></i></a>
                    </div>
                    <div class="category__content d-flex flex-nowrap align-items-stretch">
                        <div class="category__image">
                            <figure class="box__image ">
                                <img class="lazyload zoom banner__image "
                                    data-src="{{ asset ('Frontend/images/banner_category/unnamed.webp') }}" alt=" " loading="lazy">
                            </figure>

                        </div>
                        <!-- end .category__image -->
                        <div class="category__content d-flex flex-wrap align-content-between">
                        @foreach ($product as $value )
                            <div class="brand text-center">
                                <a href="{{ URL::to('/product-detail/'.$value->product_id) }}" class="">
                                    <div class="brand__title font-weight-bold">{{ $value->brand_name }}</div>
                                    <div class="brand__title brand__title--sub mb-2">{{ $value->product_event }}</div>
                                    <figure class="box__image">
                                        <img class="lazyload zoom banner__image "
                                            data-src="{{ asset ('Backend/uploads/products/' .$value->product_images) }}" alt=" " loading="lazy">
                                    </figure>
                                </a>
                            </div>
                        @endforeach   
                        </div>
                        <!-- end .category__content -->
                    </div>
                </div>
            </div>
            <!-- end .col-md-6 -->
             <div class="col-md-6 mb-20 col-pl-10 col-pr-10">
                <div class="category rounded bg-white">
                    <div class="title">
                    @foreach($category_pc as $value)
                        <h3 class="text--title m-0 ml-3">{{ $value->category_name }}</h3>
                    @endforeach    
                        <a class="see-more" href="#">Xem tất cả <i class="fal fa-angle-right"></i></a>
                    </div>
                    <div class="category__content d-flex flex-nowrap align-items-stretch">
                        <div class="category__image">
                            <figure class="box__image ">
                                <img class="lazyload zoom banner__image "
                                    data-src="{{  asset ('Frontend/images/banner_category/unnamed(6).webp') }}" alt=" " loading="lazy">
                            </figure>

                        </div>
                        <!-- end .category__image -->
                        <div class="category__content d-flex flex-wrap align-content-between">
                        @foreach($product_pc as $value)
                            <div class="brand text-center">
                                <a href="{{ URL::to('/product-detail/'.$value->product_id) }}" class="">
                                    <div class="brand__title font-weight-bold">{{ $value->brand_name }}</div>
                                    <div class="brand__title brand__title--sub mb-2">{{ $value->product_event }}</div>
                                    <figure class="box__image">
                                        <img class="lazyload zoom banner__image "
                                            data-src="{{ asset ('Backend/uploads/products/'.$value->product_images) }}" alt=" " loading="lazy">
                                    </figure>
                                </a>
                            </div>
                        @endforeach  
                        </div>
                        <!-- end .category__content -->
                    </div>
                </div>
            </div>
            <!-- end .col-md-6 -->
            <div class="col-md-6 mb-20 col-pl-10 col-pr-10">
                <div class="category rounded bg-white">
                    <div class="title">
                    @foreach($category_TV as $value)
                        <h3 class="text--title m-0 ml-3">{{ $value->category_name }}</h3>
                    @endforeach    
                        <a class="see-more" href="#">Xem tất cả <i class="fal fa-angle-right"></i></a>
                    </div>
                    <div class="category__content d-flex flex-nowrap align-items-stretch">
                        <div class="category__image">
                            <figure class="box__image ">
                                <img class="lazyload zoom banner__image "
                                    data-src="{{  asset ('Frontend/images/banner_category/unnamed.webp') }}" alt=" " loading="lazy">
                            </figure>

                        </div>
                        <!-- end .category__image -->
                        <div class="category__content d-flex flex-wrap align-content-between">
                        @foreach($product_TV as $value)
                            <div class="brand text-center">
                                <a href="{{ URL::to('/product-detail/'.$value->product_id) }}" class="">
                                    <div class="brand__title font-weight-bold">{{ $value->brand_name }}</div>
                                    <div class="brand__title brand__title--sub mb-2">{{ $value->product_event }}</div>
                                    <figure class="box__image">
                                        <img class="lazyload zoom banner__image "
                                            data-src="{{ asset ('Backend/uploads/products/'.$value->product_images) }}" alt=" " loading="lazy">
                                    </figure>
                                </a>
                            </div>
                        @endforeach  
                        </div>
                        <!-- end .category__content -->
                    </div>
                </div>
            </div>
            <!-- end .col-md-6 -->
             <div class="col-md-6 mb-20 col-pl-10 col-pr-10">
                <div class="category rounded bg-white">
                    <div class="title">
                    @foreach($category_photo as $value)
                        <h3 class="text--title m-0 ml-3">{{ $value->category_name }}</h3>
                    @endforeach    
                        <a class="see-more" href="#">Xem tất cả <i class="fal fa-angle-right"></i></a>
                    </div>
                    <div class="category__content d-flex flex-nowrap align-items-stretch">
                        <div class="category__image">
                            <figure class="box__image ">
                                <img class="lazyload zoom banner__image "
                                    data-src="{{  asset ('Frontend/images/banner_category/unnamed(6).webp') }}" alt=" " loading="lazy">
                            </figure>

                        </div>
                        <!-- end .category__image -->
                        <div class="category__content d-flex flex-wrap align-content-between">
                        @foreach($product_photo as $value)
                            <div class="brand text-center">
                                <a href="{{ URL::to('/product-detail/'.$value->product_id) }}" class="">
                                    <div class="brand__title font-weight-bold">{{ $value->brand_name }}</div>
                                    <div class="brand__title brand__title--sub mb-2">{{ $value->product_event }}</div>
                                    <figure class="box__image">
                                        <img class="lazyload zoom banner__image "
                                            data-src="{{ asset ('Backend/uploads/products/'.$value->product_images) }}" alt=" " loading="lazy">
                                    </figure>
                                </a>
                            </div>
                        @endforeach  
                        </div>
                        <!-- end .category__content -->
                    </div>
                </div>
            </div>
            <!-- end .col-md-6 -->
        </div>
   