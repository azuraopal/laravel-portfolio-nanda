<section id="about">
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
</section>