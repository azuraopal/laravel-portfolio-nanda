<!--<x-layout> 
<div class="my-projects py-5 bg-light">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-5 fw-bold mb-4 text-uppercase text-primary" style="font-family: 'Poppins', sans-serif;">My Project</h1>
            <p class="text-muted mb-0" style="font-family: 'Roboto', sans-serif; font-size: 1rem; line-height: 1.5;">
                Saya memiliki keahlian di bidang pengembangan web dan desain yang dapat membantu Anda menciptakan solusi kreatif dan fungsional untuk kebutuhan Anda.
            </p>
        </div>
        <div class="row gy-4">
        @foreach ($projek as $row)
            <!-- Project Card 
            <div class="col-md-6 col-lg-4">
                <div class="project-card p-4 bg-white rounded shadow-sm" style="font-family: 'Lato', sans-serif;">
                    <h4 class="project-name mb-3 fw-bold" style="font-size: 1.5rem; color: #333;">{{ $row->name }}</h4>
                    <p class="project-description mb-3 text-secondary" style="font-size: 1rem; line-height: 1.6;">{{ $row->description }}</p>
                    <a href="{{ $row->link }}" target="_blank" class="btn btn-primary text-white mb-2">
                        <i class="fas fa-external-link-alt me-2"></i> View Project
                    </a>
                    <p class="project-date text-muted mb-0" style="font-size: 0.875rem;">
                        <i class="far fa-calendar-alt me-2"></i> {{ $row->date }}
                    </p>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</div>-->
<!-- Tambahkan Google Fonts 
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Poppins:wght@400;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">

<!-- Style Tambahan 
<style>
    body {
        font-family: 'Roboto', sans-serif;
    }
    h1, h4 {
        font-family: 'Poppins', sans-serif;
    }
    p {
        font-family: 'Lato', sans-serif;
    }
</style>
</x-layout>
