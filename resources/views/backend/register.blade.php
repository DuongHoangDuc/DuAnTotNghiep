<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>NOOB Shop</title>
  <link rel="shortcut icon" href="{{ asset('Backend/images/favicon.ico') }}">
	{{-- <link rel="stylesheet" type="text/css" href="{{ asset('libs/bootstrap/css/bootstrap.css') }}"> --}}
	<link rel="stylesheet" type="text/css" href="{{ asset('Backend/css/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('Backend/css/app.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('Backend/fonts/fontawesome-pro-5.14.0-web/css/all.min.css') }}">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('Backend/css/admin.css') }}">

</head>
<body class="authentication-bg bg-primary authentication-bg-pattern d-flex align-items-center pb-0 vh-100">
	<div class="home-btn d-none d-sm-block">
    <a href="#"><i class="fas fa-home h2 text-white"></i></a>
  </div>
  <div class="account-pages w-100 mt-5 mb-5">
    <div class="container">
			<div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-5">
          <div class="card mb-0">
            <div class="card-body p-4">
              <div class="account-box">
                <div class="account-logo-box">
                  <div class="text-center">
                    <a href="index.html">
                      <img src="{{ asset('Backend/images/logo-full.svg') }}" alt="" height="50">
                    </a>
                  </div>
                  <h5 class="text-uppercase mb-1 mt-4">Đăng kí tài khoản</h5>
                  <p class="mb-0">Nhận quyền truy cập vào bảng quản trị của chúng tôi</p>
                </div>
              
                <div class="account-content mt-4">
                  <form class="form-horizontal" action="{{ URL::to('/admin/register') }}" method = "post">
                    @csrf
										<div class="form-group row">
												<div class="col-12">
													<label for="username">Tên đăng nhập</label>
													<input class="form-control" name = "name" type="text" id="username" required="" placeholder="Tên đăng nhập">
												</div>
											</div>

										<div class="form-group row">
											<div class="col-12">
												<label for="emailaddress">Email</label> 
												<input class="form-control" type="email" id="emailaddress" name = "email" required="" placeholder="abc@gmail.com">
											</div>
										</div>

										<div class="form-group row">
											<div class="col-12">
												<label for="password">Mật khẩu</label>
												<input class="form-control" type="password" name="password" required="" id="password" placeholder="Nhập mật khẩu ">
											</div>
										</div>

                    <div class="form-group row">
											<div class="col-12">
												<label for="confirm-password">Xác nhận mật khẩu</label>
												<input class="form-control" type="password" required="" id="confirm_password" name="confirm_password" placeholder="Xác nhận mật khẩu">
											</div>
										</div>

										<div class="form-group row">
												<div class="col-12">

														<div class="checkbox checkbox-success">
															<input id="remember" type="checkbox" checked="">
															<label for="remember">
																Tôi chấp nhận <a href="#">các điều khoản và điều kiện</a>
															</label>
														</div>
	
													</div>
										</div>

										<div class="form-group row text-center mt-2">
											<div class="col-12">
												<button class="btn btn-md btn-block btn-primary waves-effect waves-light" type="submit">Đăng kí</button>
											</div>
										</div>

									</form>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="text-center">
                        <button type="button" class="btn mr-1 btn-facebook waves-effect waves-light">
                          <i class="fab fa-facebook-f"></i>
                        </button>
                        <button type="button" class="btn mr-1 btn-googleplus waves-effect waves-light">
                          <i class="fab fa-google"></i>
                        </button>
                        <button type="button" class="btn mr-1 btn-twitter waves-effect waves-light">
                          <i class="fab fa-twitter"></i>
                        </button>
                      </div>
                    </div>
                  </div>

                  <div class="row mt-2 pt-2">
                    <div class="col-sm-12 text-center">
                      <p class="text-muted mb-0">Đã có tài khoản? <a href="{{ route('admin.getLogin')}}" class="text-dark ml-1"><b>Đăng nhập</b></a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end card-body -->
        </div>
        <!-- end card -->
      </div>
       <!-- end row -->
    </div>
    <!-- end container -->
  </div>
  <!-- end page -->
</body>
</html>