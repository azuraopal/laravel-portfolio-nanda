<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="{{ asset ('template/css/styles.css') }}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">

    <x-navbar-admin></x-navbar-admin>

    <div id="layoutSidenav">    
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Detail</h1>
                    <ol class="breadcrumb mb-4">
                        <x-sidenav-admin></x-sidenav-admin>
                    </ol>

                    <!-- Card Container -->
                    <div class="card mt-4">
                        <div class="card-header bg-dark text-white">
                            <h5 class="card-title mb-0">Detail Pesan</h5>
                        </div>
                        <div class="card-body">
                            <p><strong>Name:</strong> {{ $pesan->name }}</p>
                            <p><strong>Email:</strong> {{ $pesan->email }}</p>
                            <p><strong>Pesan:</strong> {{ $pesan->pesan }}</p>
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-primary" href="{{ route('pesan.index') }}">Back</a>
                        </div>
                    </div>
                    <!-- End of Card -->

                </div>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset ('template/js/scripts.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('template/js/datatables-simple-demo.js') }}"></script>
    </body>
</html>
