@include('layouts.navbar')

<section id="home">
<div class="hero-header overflow-hidden px-5">
@foreach ($home as $row)
                <div class="rotate-img">
                    <img src="{{ asset('template/assets/img2/sty-1.png') }}" class="img-fluid w-50" alt="">
                    <div class="rotate-sty-2"></div>
                </div>
              <div class="row gy-5 align-items-center">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                        <h1 class="display-4 fw-bold text-dark mb-4 wow fadeInUp" data-wow-delay="0.3s">{{ $row->title }}</h1>
                        <p class="fs-4 mb-4 wow fadeInUp" data-wow-delay="0.5s">{{ $row->description }}</p>
                        <a href="/about" class="btn btn-primary rounded-pill wow fadeInUp" data-wow-delay="0.7s">Get Started</a>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                        <img src="{{ asset('template/img3/foto1.jpg') }}" class="img-fluid w-100 h-100" alt="">
                    </div>
                </div>
@endforeach
            </div>
</section>
@include('layouts.about')

@include('layouts.skill')

@include('layouts.certificate')

@include('layouts.project')

@include('layouts.contact')

<!-- Footer Start -->
<div id="custom-footer" class="container-fluid footer py-3  bg-white wow fadeIn" data-wow-delay="0.2s">

    <div class="container py-3">
        <div class="row g-3">
            <div class="col-md-6 col-lg-3 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="mb-3 text-dark" style="font-weight: 600;">Quick Links</h4>
                    <a href="/about" class="text-secondary mb-2" style="font-weight: 400;">About Me</a>
                    <a href="/skill" class="text-secondary mb-2" style="font-weight: 400;">My Skill</a>
                    <a href="/certificate" class="text-secondary mb-2" style="font-weight: 400;">My Certificate</a>
                    <a href="/projek" class="text-secondary" style="font-weight: 400;">My Project</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="mb-3 text-dark" style="font-weight: 600;">My Expertise</h4>
                    <a href="#" class="text-secondary mb-2" style="font-weight: 400;">Web Development</a>
                    <a href="#" class="text-secondary mb-2" style="font-weight: 400;">Web Design</a>
                    <a href="#" class="text-secondary mb-2" style="font-weight: 400;">Marketing</a>
                    <a href="#" class="text-secondary" style="font-weight: 400;">Game Development</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="mb-3 text-dark" style="font-weight: 600;">Follow Me</h4>
                    <div class="d-flex align-items-center mb-2">
                        <a class="btn-square btn btn-primary rounded-circle mx-1" href="https://www.instagram.com/dmoon.nda" target="_blank" style="font-size: 16px;">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="btn-square btn btn-danger rounded-circle mx-1" href="https://www.youtube.com/channel/your-channel-id" target="_blank" style="font-size: 16px;">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a class="btn-square btn btn-success rounded-circle mx-1" href="https://wa.me/089669033001" target="_blank" style="font-size: 16px;">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="mb-3 text-dark" style="font-weight: 600;">Find Me On Map</h4>
                    <a href="https://maps.app.goo.gl/3ZLTPyD4sYe2hTWt6" class="text-secondary" target="_blank" style="font-weight: 400;">
                        <i class="fas fa-map-marker-alt me-2"></i>View Location on Google Maps
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<style>
.hero-header img {
    border-radius: 15px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    object-fit: cover;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.hero-header h1 {
    font-size: 2.5rem; /* Ukuran teks lebih kecil */
}

.hero-header .col-lg-6:last-child {
    background: linear-gradient(135deg, #f0f4f8, #ffffff);
    padding: 20px;
    border-radius: 15px;
}
</style>