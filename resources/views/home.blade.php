<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>A-AOM</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{asset('back-end/img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('back-end/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('back-end/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('back-end/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('back-end/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="{{route('home')}}" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Sua A-Aom Tree Shopp</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{asset('back-end/img/user.jpg')}}" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">A-aom</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{route('admin')}}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    
                    <a href="{{route('Menu.index')}}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>เมนูต้นไม้</a>
                    <a href="{{route('Type.index')}}" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>ประเภทต้นไม้</a>
                    <a href="{{route('Element.index')}}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>เมนูสมาชิก</a>
                    <a href="{{route('Contact.index')}}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Contact</a>
                   
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="{{route('home')}}" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="{{asset('back-end/img/user.jpg')}}" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">A-aom</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="{{route('home')}}" class="dropdown-item">My Profile</a>
                            <a href="href="{{ route('logout') }}
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit(); " class="dropdown-item">Log Out</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
                
            <div class="container-xxl flex-grow-1 container-p-y">

                <div class="col-md-6 col-lg-4 mb-6 mx-auto">
                    <div class="card h-50">
                        <img class="card-img" src="{{asset('back-end/img/user.jpg')}}" alt="" />
                        <div class="card-body">
                            <h3 class="card-title">My Profile</h3>
                            <p class="card-text">
                                Name : แอนนา สว่างเนตร
                            </p>

                            <p class="card-text">
                                Address : จ.นครนายก
                            </p>

                            <p class="card-text">
                                Email : anna.aom.aom@gmail.com
                            </p>

                            <p class="card-text">
                                Phone : 081 156 4329
                            </p>

                            <a href="edit_profile.html" class="btn btn-outline-success">Home</a>

                            <a href="{{route('admin')}}" class="btn btn-outline-primary">Product Managment</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- Content End -->


        
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('back-end/lib/chart/chart.min.js')}}"></script>
    <script src="{{asset('back-end/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('back-end/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('back-end/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('back-end/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('back-end/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('back-end/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('back-end/js/main.js')}}"></script>
</body>

</html>