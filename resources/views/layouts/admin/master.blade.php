<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="icon" type="image/png" href="{{asset('admin-authen/images/logo.jpg')}}"/>

    <link rel="stylesheet" href="{{asset('admin-authen/css/owl.carousel.min.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('admin-authen/css/bootstrap.min.css')}}">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{asset('admin-authen/css/style.css')}}">

    <title>A-AOM</title>
  </head>
  <body>
  

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('admin-authen/images/bg_1.jpg');"></div>
    <div class="contents order-2 order-md-1">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            @yield('content')
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="{{asset('admin-authen/js/jquery-3.3.1.min.js"></script')}}>
    <script src="{{asset('admin-authen/js/popper.min.js"></script')}}>
    <script src="{{asset('admin-authen/js/bootstrap.min.js"></script')}}>
    <script src="{{asset('admin-authen/js/main.js"></script')}}>
  </body>
</html>