<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="{{ asset('template/css/styles.css') }}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">

    <x-navbar-admin></x-navbar-admin>

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="index.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <!-- Other nav links -->
                    </div>
                </div>
            </nav>
        </div>
        
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4 text-center">Update Home</h1>
                    <ol class="breadcrumb mb-4">
                        <x-sidenav-admin></x-sidenav-admin>
                    </ol>
                    
                    <!-- Form Section -->
                    <div class="row justify-content-center">
                        <div class="col-md-8"> 
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <form action="{{ route('home.update', $home) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-4">
                                            <label for="title" class="form-label">Title</label>
                                            <input type="text" class="form-control custom-input" name="title" id="title" placeholder="Enter your title" value="{{ $home->title }}" required> 
                                        </div>
                                        <div class="mb-4">
                                            <label for="description" class="form-label">Description</label>
                                            <textarea name="description" id="description" class="form-control custom-input" placeholder="Enter description here..." rows="4" value="{{ $home->description }}" required></textarea>
                                        </div>
                                        <div>
                                            <a href="{{ route('home.index') }}" class="btn btn-custom">Back</a>
                                            <button type="submit" class="btn btn-custom">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Form Section -->
                </div>
            </main>
        </div>
    </div>

    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }
        .card {
            margin-top: 30px;
            border-radius: 8px;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        .form-label {
            font-weight: 600;
            color: #495057;
        }
        .custom-input {
            border-radius: 8px;
            border: 1px solid #ddd;
            padding: 12px;
            transition: border-color 0.3s;
        }
        .custom-input:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.2);
        }
        .btn-custom {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.3s;
            text-align: center;
        }
        .btn-custom:hover {
            background-color: #0056b3;
            transform: scale(1.05);
            text-decoration: none;
            color: #fff;
        }
    </style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('template/js/scripts.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('template/js/datatables-simple-demo.js') }}"></script>
    </body>
</html>
