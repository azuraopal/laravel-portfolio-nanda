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
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                    <h1 class="mt-4">Data About</h1>
                    <ol class="breadcrumb mb-4">
                        <x-sidenav-admin></x-sidenav-admin>
                    </ol>
                    <a href="{{ route('about.create') }}" class="btn btn-success mb-3" onclick="showCreateAlert()">Create</a>
                    <table id="myTable" class="table table-bordered table-striped table-hover">
                        <thead class="table-dark">
                            <tr class="text-center">
                            <th scope="col">No</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead> 
                        <tbody> 
                            @foreach($about as $no=>$row)
                            <tr>
                            <td class="align-middle text-center">{{ $no+1 }}</td>
                                <td class="align-middle text-center">{{ $row->title }}</td>
                                <td class="align-middle text-center">{{ $row->description }}</td>
                                <td class="align-middle text-center">
                                    @if ($row->image)
                                    <a href="{{ asset('/storage/' . $row->image) }}" 
                                    class="btn btn-info btn-sm mb-2" target="_blank">View Image</a>
                                    @else
                                        <span>No file uplouded</span>
                                    @endif
                                </td>
                                
                                <td class="align-middle text-center">
                                    <a class="btn btn-warning btn-sm mb-2" href="{{ route('about.show', $row) }}">Detail</a>
                                    <a class="btn btn-primary btn-sm mb-2" href="{{ route('about.edit', $row) }}" onclick="showEditAlert()">Edit</a>
                                    <form action="{{ route('about.destroy', $row->id) }}" method="POST" class="delete-form">
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
            </main>
        </div>
    </div>

    <style>
    .btn-sm {
        padding: 6px 12px;
        font-size: 0.875rem;
    }
    .delete-form {
        display: inline-block;
    }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!--J Query CDN-->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" crossorigin="anonymous"></script>
    <!--Data Tables CDN-->
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
