<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="{{ asset('template/css/styles.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="//cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        /* Membatasi lebar tabel agar tidak terlalu lebar */
        .table {
            max-width: 100%;
            margin: 0 auto;
            font-size: 0.875rem; /* Ukuran font lebih kecil */
        }

        /* Mengatur ukuran gambar */
        .table img {
            max-width: 80px; /* Batas lebar maksimum gambar */
            max-height: 80px; /* Batas tinggi maksimum gambar */
            object-fit: cover; /* Memastikan gambar tidak terdistorsi */
            border-radius: 5px;
        }

        .btn-sm {
            padding: 6px 12px;
            font-size: 0.875rem;
        }

        .delete-form {
            display: inline-block;
        }
    </style>
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
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Data Pesan</h1>
                    <ol class="breadcrumb mb-4">
                        <x-sidenav-admin></x-sidenav-admin>
                    </ol>

                    <div class="table-responsive">
                        <table id="myTable" class="table table-bordered table-striped table-hover">
                            <thead class="table-dark">
                                <tr class="text-center">
                                    <th scope="col">No</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pesan as $no => $row)
                                <tr>
                                <td class="align-middle text-center">{{ $no+1 }}</td>
                                    <td class="align-middle text-center">{{ $row->name }}</td>
                                    <td class="align-middle text-center">{{ $row->email }}</td>
                                    <td class="align-middle text-center">{{ $row->pesan }}</td>
                                    <td class="align-middle text-center">
                                        <a class="btn btn-warning btn-sm mb-2" href="{{ route('pesan.show', $row) }}">Detail</a>
                                        <form action="{{ route('pesan.destroy', $row->id) }}" method="POST" class="delete-form">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-sm mb-2 btn-danger delete-btn">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>


    <!--JQuery CDN-->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" crossorigin="anonymous"></script>
    <!--DataTables CDN-->
    <script src="//cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>

    @if(session('success'))
    <script>
        Swal.fire({
            title: 'Success!',
            text: "{{ session('success') }}",
            icon: 'success',
            confirmButtonText: 'OK!'
        });
    </script>
    @endif

    <script>
        let table = new DataTable('#myTable');

        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.delete-btn').forEach(button => {
                button.addEventListener('click', function () {
                    let form = this.closest('.delete-form');
                    Swal.fire({
                        title: 'Are you sure?',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit();
                        }
                    });
                });
            });
        });
    </script>
</body>
</html>
