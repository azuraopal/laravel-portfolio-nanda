<section id="skill">
    <div class="container-fluid service py-5 bg-white">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <h1 class="display-4 fw-bold mb-4 text-uppercase text-primary" style="font-family: 'Poppins', sans-serif;">
                    My Skill
                </h1>
                <p class="text-muted mb-0" style="font-size: 1.1rem; line-height: 1.6; font-family: 'Roboto', sans-serif;">
                    Saya memiliki keahlian di bidang pengembangan web dan desain yang dapat membantu Anda menciptakan solusi kreatif dan fungsional untuk kebutuhan Anda.
                </p>
            </div>

            <!-- Skill Cards Wrapper -->
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                @foreach ($skill as $row)
                    <div class="col">
                        <div class="service-item text-center bg-light shadow-sm rounded p-4 h-100 d-flex flex-column justify-content-between" style="font-family: 'Roboto', sans-serif;">
                            <!-- Gambar besar di atas -->
                            <img src="{{ asset('storage/' . $row->image) }}" alt="{{ $row->title }}" class="img-fluid mb-4" style="max-width: 100%; height: 200px; object-fit: contain;">

                            <!-- Judul -->
                            <h4 class="mb-3 fw-semibold" style="font-family: 'Poppins', sans-serif;">
                                {{ $row->title }}
                            </h4>

                            <!-- Deskripsi -->
                            <p class="text-muted mb-4" style="font-size: 0.95rem; line-height: 1.5;">
                                {{ $row->description }}
                            </p>

                            <!-- Tombol -->
                            <a href="#" class="btn btn-warning rounded-pill py-2 px-4 fw-medium align-self-center">
                                Learn More
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
