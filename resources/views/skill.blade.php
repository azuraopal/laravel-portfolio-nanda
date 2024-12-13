<!--<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">

<x-layout>
    <div class="container-fluid service py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <h1 class="display-4 fw-bold mb-4 text-uppercase text-primary" style="font-family: 'Poppins', sans-serif;">
                    My Skill
                </h1>
                <p class="text-muted mb-0" style="font-size: 1.1rem; line-height: 1.6; font-family: 'Roboto', sans-serif;">
                    Saya memiliki keahlian di bidang pengembangan web dan desain yang dapat membantu Anda menciptakan solusi kreatif dan fungsional untuk kebutuhan Anda.
                </p>
            </div>

            <!-- Skill Cards Wrapper 
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                @foreach ($skill as $row)
                    <div class="col">
                        <div class="service-item text-center bg-white shadow-sm rounded p-4" style="font-family: 'Roboto', sans-serif;">
                            <!-- Gambar besar di atas 
                            <img src="{{ asset('storage/' . $row->image) }}" alt="JavaScript Banner" class="img-fluid mb-4" style="max-height: 200px; object-fit: cover;">

                            <!-- Judul 
                            <h4 class="mb-3 fw-semibold" style="font-family: 'Poppins', sans-serif;">{{ $row->title }}</h4>

                            <!-- Deskripsi 
                            <p class="text-muted" style="font-size: 0.95rem;">
                                {{ $row->description }}
                            </p>

                            <!-- Tombol 
                            <a href="#" class="btn btn-warning rounded-pill py-2 px-4 fw-medium">Learn More</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
