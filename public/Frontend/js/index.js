$(function() {
  // header-banner
  $("#js-header-banner").owlCarousel({
    nav: false,
    items: 1,
    dots: false,
    autoplayHoverPause: true,
    autoplay: true,
    autoplayTimeout: 5000,
    loop: true,
    startPosition: 0,
    responsiveRefreshRate: 200,
  });

  // $(".owl-carousel.owl-theme").mouseenter(function() {
  //   $(".owl-carousel.owl-theme .owl-nav > *").css("display", "block");
  // }).mouseleave(function() {
  //   $(".owl-carousel.owl-theme .owl-nav > *").css("display", "none");
  // })

  // Close header-banner
  $('#js-close-header-banner').on('click', function() {
    $(this).parent().hide();
  })

  //  on scroll 
  const scrollFunction = function() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
      $('#js-header-category').show();
      $('#js-header-logo').children().first().hide();
      $('#js-header-logo').children().last().show();
      $('.js-scroll').hide();
    } else {
      $('#js-header-category').hide();
      $('#js-header-logo').children().last().hide();
      $('#js-header-logo').children().first().show();
      $('.js-scroll').show();
    }
  }
  window.onscroll = function() {
    scrollFunction();
  }

  // header-banner
  $("#js-home-carousel").owlCarousel({
    nav: true,
    navText: ['<i class="fal fa-chevron-left"></i>', '<i class="fal fa-chevron-right"></i>'],
    items: 1,
    dots: true,
    autoplayHoverPause: true,
    // autoplay: true,
    autoplayTimeout: 5000,
    loop: true,
    startPosition: 0,
    responsiveRefreshRate: 200,
  });

  // tab in home page

  // $('#myTab a').on('click', function(event) {
  //   event.preventDefault()
  //   $(this).tab('show');
  // });

  //  change background-image tab 
  $('#js-tabs-image .nav-link').on('click', function() {
    let path = $(this).data('bg');
    // console.log(path);
    $('#js-tabs-image').css({
      'background': 'url("' + path + '")',
      'background-repeat': 'no-repeat',
      'background-size': 'cover',
      'overflow': 'hidden'
    });
  });

  // countdown timer tabs

  // #js-product-carousel
  $(".js-product-carousel").owlCarousel({
    nav: true,
    navText: ['<i class="fal fa-chevron-left"></i>', '<i class="fal fa-chevron-right"></i>'],
    items: 1,
    dots: false,
    autoplayHoverPause: true,
    autoplay: false,
    autoplayTimeout: 5000,
    loop: false,
    margin: 15,
    startPosition: 0,
    responsiveRefreshRate: 200,
  });


  // #js-featured-brand
  $("#js-featured-brand").owlCarousel({
    nav: true,
    navText: ['<i class="fal fa-chevron-left"></i>', '<i class="fal fa-chevron-right"></i>'],
    items: 4,
    dots: false,
    autoplayHoverPause: true,
    autoplay: false,
    autoplayTimeout: 5000,
    loop: false,
    margin: 20,
    startPosition: 0,
    responsiveRefreshRate: 200,
  });

  // Lazyloading image
  if ('loading' in HTMLImageElement.prototype) {
    const images = document.querySelectorAll("img.lazyload");
    images.forEach(img => {
      img.src = img.dataset.src;
    });
  } else {
    // import Lazysize
    let script = document.createElement("script");
    script.async = true;
    script.src = "../js/lazysizes.min.js";
    document.body.appendChild(script);
  }
  // category page
  $('.js-filter').on('click',function(){
    $('.js-filter').removeClass('check');
    $(this).addClass('check');
  })
  // end category page
  
  // detail page
  $('.js-active-view').on('mouseenter', function(){
    console.log('mouseenter');
    let _src = $(this).data('src');
    $('.js-active-view').removeClass('active');
    $(this).addClass('active');
    $('#js-view-image').attr('src', _src);
  })

  $('.js-active-view').on('click', function(){
    $('#js-view-gallery').modal('show');
    
  });

    //  gallery carrousel
  $("#js-gallery-carousel").owlCarousel({
    nav: true,
    navText: ['<i class="fal fa-chevron-left"></i>', '<i class="fal fa-chevron-right"></i>'],
    items: 1,
    dots: true,
    dotsContainer: '#carousel-custom-dots',
    autoplayHoverPause: true,
    autoplay: false,
    autoplayTimeout: 5000,
    loop: false,
    startPosition: 0,
    responsiveRefreshRate: 200,
  });

  $('.js-check-gift').on('click',function(){
    $('.js-check-gift').removeClass('check');
    $(this).addClass('check');

  })

   // xem thêm bài viết trong detail
    $(".js-read-more").click(function () {
      if($(this).prev().css("height") != "600px"){
        $(this).css('margin-top', '-60px');
        $(this).prev().css("height","600px");
        $(this).html("Đọc thêm <i class='fas fa-caret-down'></i>");
      }else {
        $(this).css('margin-top', '35px');
        $(this).prev().css("height","auto");
        $(this).html("Ẩn bớt <i class='fas fa-caret-up'></i>");
      }
    });
    //  show modal specifications
    $('.js-show-modal-specifications').on('click', function(){
      $('#js-show-modal-specifications').modal('show');
    })
  // end detail page

// cart
// dropdown

})