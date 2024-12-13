<!-- Tambahkan Google Fonts -->
<!DOCTYPE html>
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

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700&family=Rubik:wght@400;500&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ asset('template/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('template/css2/style.css') }}" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Poppins:wght@400;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    </head>

    <body>
 <!-- Navbar & Hero Start -->

<nav class="navbar navbar-expand-lg fixed-top navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="index.html" class="navbar-brand p-0">
                    <h1 class="display-6 text-primary m-0"><i class="fas fa-envelope me-3"></i>Portofolio</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="#home" class="nav-item nav-link active">Home</a>
                        <a href="#about" class="nav-item nav-link">About</a>
                        <a href="#skill" class="nav-item nav-link">Skill</a>
                        <a href="#certificate" class="nav-item nav-link">Certificate</a>
                        <a href="#project" class="nav-item nav-link">Project</a>
                        <a href="#contact" class="nav-item nav-link">Contact</a>
                    </div>
                    
                    <div>
                    @if (Route::has('login'))
                    @auth
                    <a href="{{ url('/admin/dashboard') }}" class="btn btn-primary rounded-pill text-white">Dashboard</a>
                    @else
                    <a href="{{ route('login') }}" class="btn btn-primary rounded-pill text-white">Log In</a>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn btn-primary rounded-pill text-white">Register</a>
                    @endif
                        @endauth
                    @endif
                </div>
                    
                </div>
            </nav>

             <!-- Back to Top -->
<a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>


<!-- Template Javascript -->
<script src="{{ asset('template/js2/main.js') }}"></script>
</body>

</html>