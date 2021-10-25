<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phong vu shop</title>
    <link rel="shortcut icon" href="{{ asset ('Frontend/images/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/libs/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{asset ('Frontend/fonts/fontawesome-pro-5.14.0-web/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('Frontend/libs/owlcarousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('Frontend/libs/owlcarousel/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('Frontend/css/style.css') }}">
</head>

<body>
    @include('frontend.Home.layout.header')
    
    
        @yield('content')
   
    @include('frontend.Home.layout.footer') 
    <script type="text/javascript" src="{{ asset ('Frontend/js/jquery-3.5.0.min.js') }} "></script>
    <script type="text/javascript" src="{{ asset ('Frontend/libs/owlcarousel/owl.carousel.min.js')}} "></script>
    <script type="text/javascript" src="{{ asset ('Frontend/libs/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset ('Frontend/js/countdown.js ') }}"></script>
    <script src="{{ asset ('Frontend/js/index.js') }} "></script>



</body>

</html>

