    <div class="row">
            <div class="col-md-12 mb-3">
                <div class="products__you bg-white rounded">
                    <div class="title pl-3">
                        <h3 class="text--title m-0">Sản phẩm dành cho bạn</h3>
                        <a class="see-more" href="#">Xem tất cả <i class="fal fa-angle-right"></i></a>
                    </div>
                    <div class="products flex-wrap" id="js-navigation-products-you">
                    @foreach($product_all as $value)
                        <a class="product p-3 d-flex flex-column mb-3" href="{{ URL::to('/product-detail/'.$value->product_id) }}">
                            <div class="product__image">
                                <figure class="box__image ">
                                    <img class="lazyload zoom banner__image "
                                        data-src="{{ asset ('Backend/uploads/products/'.$value->product_images) }}" alt=" " loading="lazy">
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
                                        <strong class="">{{ number_format($value->product_sales,0,',','.') }} ₫</strong>
                                        <i>Freeship</i>
                                    </div>
                                    <div class="product__price old__price">
                                        <span class="">{{ number_format($value->product_price,0,',','.') }} ₫</span>
                                        <i class="discount">-7.28%</i>
                                    </div>
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
                    {!! $product_all->links() !!}
                      
                    </ul>
                </nav>
            </div>
        </div>

