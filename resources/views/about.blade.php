<!--<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Portofolio</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>

        <!-- Google Web Fonts 
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700&family=Rubik:wght@400;500&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet 
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet 
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet 
        <link href="{{ asset('template/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Template Stylesheet 
        <link href="{{ asset('template/css2/style.css') }}" rel="stylesheet">
    </head>

    <body>

        <!-- Navbar & Hero Start 
    <div class="container-fluid header position-relative overflow-hidden p-0">
        <nav class="navbar navbar-expand-lg fixed-top navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="index.html" class="navbar-brand p-0">
                    <h1 class="display-6 text-primary m-0"><i class="fas fa-envelope me-3"></i>Portofolio</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <!--<a href="/" class="nav-item nav-link active">Home</a>
                        <a href="#about" class="nav-item nav-link">About</a>
                        <a href="/skill" class="nav-item nav-link">Skill</a>
                        <a href="/certificate" class="nav-item nav-link">Certificate</a>
                        <a href="/projek" class="nav-item nav-link">Project</a>
                        <a href="/contact" class="nav-item nav-link">Contact Us</a>
                    </div>
                    
                    <a href="{{ route('login') }}" class="btn btn-primary rounded-pill text-white">Log In</a>
                </div>
            </nav>
        </div>

        <div class="hero-header overflow-hidden px-5">
                <div class="rotate-img">
                    <img src="{{ asset('template/assets/img2/sty-1.png') }}" class="img-fluid w-50" alt="">
                    <div class="rotate-sty-2"></div>
                </div>
              <div class="row gy-5 align-items-center">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                        <h1 class="display-4 fw-bold text-dark mb-4 wow fadeInUp" data-wow-delay="0.3s">Welcome To My Portofolio</h1>
                        <p class="fs-4 mb-4 wow fadeInUp" data-wow-delay="0.5s">Win new customers with the #1 email marketing and automations brand* that recommends ways to get more opens, clicks, and sales.</p>
                        <a href="/about" class="btn btn-primary rounded-pill wow fadeInUp" data-wow-delay="0.7s">Get Started</a>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                        <img src="{{ asset('template/img3/foto1.jpg') }}" class="img-fluid w-100 h-100" alt="">
                    </div>
                </div>
            </div>

    <!-- About Section Start 
    <div id="about" class="container-fluid overflow-hidden py-5 bg-light" style="margin-top: 2rem; font-family: 'Poppins', sans-serif;">
        <div class="text-center mx-auto mb-5 wow animate__animated animate__fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-5 fw-bold mb-4 text-uppercase text-primary" style="font-weight: 700; letter-spacing: 2px;">
                About Me    
            </h1>
        </div>

        @foreach ($about as $row)
        <div class="container py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 wow animate__animated animate__zoomIn" data-wow-delay="0.1s">
                    <div class="image-wrapper overflow-hidden rounded-3 shadow">
                        <img src="{{ asset('storage/' . $row->image) }}" class="img-fluid" alt="Profile Picture">
                    </div>
                </div>
                <div class="col-lg-6 wow animate__animated animate__fadeInRight" data-wow-delay="0.3s">
                    <h1 class="mb-3" style="font-size: 2rem; font-weight: 600;">{{ $row->title }}</h1>
                    <p class="mb-4 text-muted" style="font-size: 1.1rem; line-height: 1.8;">{{ $row->description }}</p>
                    <a href="#" class="btn btn-primary rounded-pill py-2 px-4 shadow-sm" style="font-weight: 500;">Learn More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    

    <!-- Tambahkan Google Fonts 
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Poppins:wght@400;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <!-- About Section End 
<!-- Back to Top 
<a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
<!-- JavaScript Libraries 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>


<!-- Template Javascript 
<script src="{{ asset('template/js2/main.js') }}"></script>
</body>

</html>