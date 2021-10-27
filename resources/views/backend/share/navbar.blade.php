<!-- Topbar Start -->
<div class="navbar-custom">
  <ul class="list-unstyled topnav-menu float-right mb-0">

    <li class="dropdown notification-list dropdown d-none d-lg-inline-block ml-2">
      <a class="nav-link dropdown-toggle mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button"
        aria-haspopup="false" aria-expanded="false">
        <img src="{{ asset('Backend/images/flags/us.jpg') }}" alt="lang-image" height="12">
      </a>
      <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
        <!-- item-->
        <a href="javascript:void(0);" class="dropdown-item notify-item">
          <img src="{{ asset('Backend/images/flags/germany.jpg') }}" alt="lang-image" class="mr-1" height="12"> <span
            class="align-middle">German</span>
        </a>

        <!-- item-->
        <a href="javascript:void(0);" class="dropdown-item notify-item">
          <img src="{{ asset('Backend/images/flags/italy.jpg') }}" alt="lang-image" class="mr-1" height="12"> <span
            class="align-middle">Italian</span>
        </a>

        <!-- item-->
        <a href="javascript:void(0);" class="dropdown-item notify-item">
          <img src="{{ asset('Backend/images/flags/spain.jpg') }}" alt="lang-image" class="mr-1" height="12"> <span
            class="align-middle">Spanish</span>
        </a>

        <!-- item-->
        <a href="javascript:void(0);" class="dropdown-item notify-item">
          <img src="{{ asset('Backend/images/flags/russia.jpg') }}" alt="lang-image" class="mr-1" height="12"> <span
            class="align-middle">Russian</span>
        </a>

      </div>
    </li>

    <li class="dropdown notification-list">
      <a class="nav-link dropdown-toggle  waves-effect waves-light" data-toggle="dropdown" href="#" role="button"
        aria-haspopup="false" aria-expanded="false">
        <i class="far fa-bell noti-icon"></i>
        <span class="badge badge-pink rounded-circle noti-icon-badge">4</span>
      </a>
      <div class="dropdown-menu dropdown-menu-right dropdown-lg">

        <div class="dropdown-header noti-title">
          <h5 class="text-overflow m-0"><span class="float-right">
              <span class="badge badge-danger float-right">5</span>
            </span>Thông báo</h5>
        </div>

        <div class="slimscroll noti-scroll">

          <a href="javascript:void(0);" class="dropdown-item notify-item">
            <div class="notify-icon bg-success"><i class="mdi mdi-comment-account-outline"></i></div>
            <p class="notify-details">Robert S. Taylor commented on Admin<small class="text-muted">1 min ago</small>
            </p>
          </a>

          <!-- item-->
          <a href="javascript:void(0);" class="dropdown-item notify-item">
            <div class="notify-icon bg-primary">
              <i class="mdi mdi-settings-outline"></i>
            </div>
            <p class="notify-details">New settings
              <small class="text-muted">There are new settings available</small>
            </p>
          </a>

          <!-- item-->
          <a href="javascript:void(0);" class="dropdown-item notify-item">
            <div class="notify-icon bg-warning">
              <i class="mdi mdi-bell-outline"></i>
            </div>
            <p class="notify-details">Updates
              <small class="text-muted">There are 2 new updates available</small>
            </p>
          </a>

          <!-- item-->
          <a href="javascript:void(0);" class="dropdown-item notify-item">
            <div class="notify-icon">
              <img src="{{ asset('Backend/images/users/avatar-4.jpg') }}" class="img-fluid rounded-circle" alt="" />
            </div>
            <p class="notify-details">Karen Robinson</p>
            <p class="text-muted mb-0 user-msg">
              <small>Wow ! this admin looks good and awesome design</small>
            </p>
          </a>

          <!-- item-->
          <a href="javascript:void(0);" class="dropdown-item notify-item">
            <div class="notify-icon bg-danger">
              <i class="mdi mdi-account-plus"></i>
            </div>
            <p class="notify-details">New user
              <small class="text-muted">You have 10 unread messages</small>
            </p>
          </a>

          <!-- item-->
          <a href="javascript:void(0);" class="dropdown-item notify-item">
            <div class="notify-icon bg-info">
              <i class="mdi mdi-comment-account-outline"></i>
            </div>
            <p class="notify-details">Caleb Flakelar commented on Admin
              <small class="text-muted">4 days ago</small>
            </p>
          </a>

          <!-- item-->
          <a href="javascript:void(0);" class="dropdown-item notify-item">
            <div class="notify-icon bg-secondary">
              <i class="mdi mdi-heart"></i>
            </div>
            <p class="notify-details">Carlos Crouch liked
              <b>Admin</b>
              <small class="text-muted">13 days ago</small>
            </p>
          </a>
        </div>

        <!-- All-->
        <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
          View all
          <i class="fi-arrow-right"></i>
        </a>

      </div>
    </li>

    <li class="dropdown notification-list">
      <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#"
        role="button" aria-haspopup="false" aria-expanded="false">
        <img src="{{ asset('Backend/images/users/avatar-1.jpg') }}" alt="user-image" class="rounded-circle">

        <span class="pro-user-name ml-1">
        {{ Auth::check() ? Auth::user()->name : '' }} <i class="far fa-angle-down"></i>
        </span>
        
      </a>
      <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
        <!-- item-->
        <div class="dropdown-header noti-title">
          <h6 class="text-overflow m-0">Xin chào !</h6>
        </div>

        <!-- item-->
        <a href="javascript:void(0);" class="dropdown-item notify-item">
          <i class="far fa-user"></i>
          <span>Hồ sơ</span>
        </a>
        <!-- item-->
        <a href="javascript:void(0);" class="dropdown-item notify-item">
          <i class="far fa-cog"></i>
          <span>Cài đặt</span>
        </a>

        <!-- item-->
        <a href="javascript:void(0);" class="dropdown-item notify-item">
          <i class="far fa-lock"></i>
          <span>Đổi mật khẩu</span>
        </a>

        <div class="dropdown-divider"></div>

        <!-- item-->
        <a href="{{ URL::to('/admin/logout') }}" class="dropdown-item notify-item" id="logout">
          <i class="fal fa-sign-out-alt"></i>
          <span>Đăng xuất</span>
        </a>

      </div>
    </li>

    <li class="dropdown notification-list">
      <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
        <i class="far fa-cog noti-icon"></i>
      </a>
    </li>


  </ul>

  <!-- LOGO -->
  <div class="logo-box">
    <a href="index.html" class="logo text-center">
      <span class="logo-lg">
        <img src="{{ asset('Backend/images/logo-full.svg') }}" alt="" height="25">
        <!-- <span class="logo-lg-text-light">UBold</span> -->
      </span>
      <span class="logo-sm">
        <!-- <span class="logo-sm-text-dark">U</span> -->
        <img src="{{ asset('Backend/images/logo.svg') }}" alt="" height="28">
      </span>
    </a>
  </div>

  <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
    <li>
      <button class="button-menu-mobile waves-effect waves-light">
        <i class="fas fa-bars"></i>
      </button>
    </li>

    <li class="d-none d-sm-block">
      <form class="app-search">
        <div class="app-search-box">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search...">
            <div class="input-group-append">
              <button class="btn" type="submit">
                <i class="fal fa-search"></i>
              </button>
            </div>
          </div>
        </div>
      </form>
    </li>

  </ul>
</div>
<!-- end Topbar -->
