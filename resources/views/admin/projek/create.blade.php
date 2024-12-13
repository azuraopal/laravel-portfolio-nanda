<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="{{ asset('template/css/styles.css') }}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- SweetAlert CSS & JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="sb-nav-fixed">

    <x-navbar-admin></x-navbar-admin>

    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4 text-center">Create Projek</h1>
                    <ol class="breadcrumb mb-4">
                        <x-sidenav-admin></x-sidenav-admin>
                    </ol>
 
                    <!-- Card Section -->
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <form id="createForm" action="{{ route('projek.store') }}" method="POST">
                                        @csrf
                                        <div class="mb-4">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" class="form-control custom-input" name="name" id="name" placeholder="Enter your name" required>
                                        </div>

                                        <div class="mb-4">
                                            <label for="description" class="form-label">Description</label>
                                            <textarea name="description" id="description" class="form-control custom-input" placeholder="Enter description here..." rows="4" required></textarea>
                                        </div>

                                        <div class="mb-4">
                                            <label for="link" class="form-label">Link</label>
                                            <input type="url" class="form-control custom-input" name="link" id="link" required>
                                        </div>

                                        <div class="mb-4">
                                            <label for="date" class="form-label">Date</label>
                                            <input type="date" class="form-control custom-input" name="date" id="date" equired>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-custom">Create</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Card Section -->
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
        }
        .btn-custom:hover {
            background-color: #0056b3;
            transform: scale(1.05);
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
