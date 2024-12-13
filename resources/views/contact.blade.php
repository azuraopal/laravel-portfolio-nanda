<!--<x-layout>
<div class="container-fluid overflow-hidden py-5" style="margin-top: 2rem;">

    @if (session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '{{ session('success') }}',
                confirmButtonText: 'OK',
                timer: 3000 // Alert akan otomatis hilang setelah 3 detik
            });
        });
    </script>
    @endif

    @foreach ($contact as $row)
    <div class="text-center mx-auto mb-5 wow animate__animated animate__fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
        <h1 class="display-5 fw-bold mb-4 text-uppercase text-primary">Contact Me</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="main col-lg-8 mx-auto">
                <form id="contactForm" action="{{ route('pesan.store') }}" method="post">
                    @csrf
                    <!-- Name input 
                    <div class="mb-3">
                        <input class="form-control" id="name" name="name" type="text" placeholder="Name *" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                    </div>

                    <!-- Email address input 
                    <div class="mb-3">
                        <input class="form-control" id="emailAddress" name="email" type="email" placeholder="Email Address *" data-sb-validations="required, email" />
                        <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is required.</div>
                        <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
                    </div>

                    <!-- Message input 
                    <div class="mb-3">
                        <textarea class="form-control" id="contact" name="pesan" placeholder="Leave a Message" style="height: 10rem;" data-sb-validations="required"></textarea>
                        <div class="invalid-feedback" data-sb-feedback="message:required">Message is required.</div>
                    </div>

                    <!-- Form submit button 
                    <div class="d-grid">
                        <button class="btn btn-warning btn-lg text-uppercase fw-bold shadow-sm" id="submitButton" type="submit">
                            Send Message
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>

<div class="d-flex flex-wrap justify-content-center">
    <!-- Address 
    <div class="d-flex align-items-center m-3">
        <div class="bg-light d-flex align-items-center justify-content-center shadow" style="width: 70px; height: 70px; border-radius: 50%;">
            <i class="fa fa-home fa-lg text-primary"></i>
        </div>
        <div class="ms-2">
            <h6 class="fw-bold mb-1">Address</h6>
            <p class="mb-0" style="font-size: 0.9rem;">{{ $row->address }}</p>
        </div>
    </div>
    <!-- Mobile 
    <div class="d-flex align-items-center m-3">
        <div class="bg-light d-flex align-items-center justify-content-center shadow" style="width: 70px; height: 70px; border-radius: 50%;">
            <i class="fa fa-phone-alt fa-lg text-primary"></i>
        </div>
        <div class="ms-2">
            <h6 class="fw-bold mb-1">Mobile</h6>
            <p class="mb-0" style="font-size: 0.9rem;">{{ $row->telp }}</p>
        </div>
    </div>
    <!-- Email 
    <div class="d-flex align-items-center m-3">
        <div class="bg-light d-flex align-items-center justify-content-center shadow" style="width: 70px; height: 70px; border-radius: 50%;">
            <i class="fa fa-envelope-open fa-lg text-primary"></i>
        </div>
        <div class="ms-2">
            <h6 class="fw-bold mb-1">Email</h6>
            <p class="mb-0" style="font-size: 0.9rem;">{{ $row->email }}</p>
        </div>
    </div>
    <!-- Social Media 
    <div class="d-flex flex-column align-items-center m-3">
        <h6 class="fw-bold text-center mb-2">Follow Me</h6>
        <a 
            class="btn btn-sm btn-outline-primary rounded-circle shadow d-flex align-items-center justify-content-center" 
            style="width: 50px; height: 50px;" 
            href="{{ $row->sosmed }}" 
            target="_blank" 
            aria-label="Instagram Profile"
        >
            <i class="fab fa-instagram"></i>
        </a>
    </div>
</div>
</div>

<script>
    // Tambahkan efek hover dengan Bootstrap Utility
    document.addEventListener('DOMContentLoaded', function () {
        const btn = document.getElementById('submitButton');
        btn.addEventListener('mouseover', function () {
            btn.classList.remove('btn-warning');
            btn.classList.add('btn-dark');
        });
        btn.addEventListener('mouseout', function () {
            btn.classList.remove('btn-dark');
            btn.classList.add('btn-warning');
        });
    });
</script>

<!-- SweetAlert2 
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Tambahkan Google Fonts 
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Poppins:wght@400;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
</x-layout>
