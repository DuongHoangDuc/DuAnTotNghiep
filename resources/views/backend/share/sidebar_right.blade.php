<div class="right-bar">
  <div class="rightbar-title">
      <a href="javascript:void(0);" class="right-bar-toggle float-right">
        <i class="fal fa-times"></i>
      </a>
      <h4 class="font-16 m-0 text-white">Tùy chỉnh chủ đề</h4>
  </div>
  <div class="slimscroll-menu">

      <div class="p-3">
          <div class="alert alert-warning" role="alert">
              <strong>Tùy chỉnh </strong> bảng màu tổng thể, bố cục, v.v.
          </div>
          <div class="mb-2">
              <img src="{{ asset('Backend/images/layouts/light.png') }}" class="img-fluid img-thumbnail" alt="">
          </div>
          <div class="custom-control custom-switch mb-3">
              <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked />
              <label class="custom-control-label" for="light-mode-switch">Chế độ sáng</label>
          </div>
  
          <div class="mb-2">
              <img src="{{ asset('Backend/images/layouts/dark.png') }}" class="img-fluid img-thumbnail" alt="">
          </div>
          <div class="custom-control custom-switch mb-3">
              <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" 
                  data-appStyle="assets/css/app-dark.min.css" />
              <label class="custom-control-label" for="dark-mode-switch">Chế độ tối</label>
          </div>
  
          <div class="mb-2">
              <img src="{{ asset('Backend/images/layouts/rtl.png') }}" class="img-fluid img-thumbnail" alt="">
          </div>
          <div class="custom-control custom-switch mb-3">
              <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css" />
              <label class="custom-control-label" for="rtl-mode-switch">Chế độ sáng RTL</label>
          </div>

          <div class="mb-2">
              <img src="{{ asset('Backend/images/layouts/dark-rtl.png') }}" class="img-fluid img-thumbnail" alt="">
          </div>
          <div class="custom-control custom-switch mb-5">
              <input type="checkbox" class="custom-control-input theme-choice" id="dark-rtl-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" 
                  data-appStyle="assets/css/app-dark-rtl.min.css" />
              <label class="custom-control-label" for="dark-rtl-mode-switch">Chế độ tối RTL</label>
          </div>

          {{-- <a href="https://1.envato.market/y2YAD" class="btn btn-danger btn-block mt-3" target="_blank"><i class="mdi mdi-download mr-1"></i> Download Now</a> --}}
      </div>
  </div> <!-- end slimscroll-menu-->
</div>