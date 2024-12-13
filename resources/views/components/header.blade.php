<x-navbar>
 
</x-navbar>

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