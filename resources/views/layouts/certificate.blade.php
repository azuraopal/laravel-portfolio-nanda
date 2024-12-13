<section id="certificate">
    <div class="container-fluid service py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <h1 class="display-5 fw-bold mb-4 text-uppercase text-primary position-relative">
                    My Certificates
                    <span class="underline"></span>
                </h1>
            </div>

            <div class="row g-4 justify-content-start">
                @foreach ($certificate as $row)
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item bg-white rounded p-4 position-relative shadow-lg d-flex flex-column">
                            <div class="service-icon p-3 rounded-circle bg-light shadow-sm mx-auto">
                                <i class="fas fa-file-pdf text-danger fs-2"></i>
                            </div>
                            <h4 class="mt-4 text-center">{{ $row->name }}</h4>
                            <p class="text-muted mb-1 text-center">
                                <strong>Issued At:</strong> {{ $row->issued_at }}
                            </p>
                            <p class="text-muted mb-3 text-center">
                                <strong>Issued By:</strong> {{ $row->issued_by }}
                            </p>
                            <a href="{{ Storage::url('certificates/' . $row->file) }}" 
                               target="_blank" 
                               class="btn btn-gradient rounded-pill py-2 px-4 mt-3 d-block mx-auto text-center">View Certificate</a>
                            <div class="decorative-bg"></div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- Custom CSS -->
<style>
    /* Font Family */
    body {
        font-family: 'Poppins', sans-serif;
    }

    /* Header Styling */
    h1 {
        position: relative;
        font-weight: bold;
    }

    .underline {
        content: "";
        display: block;
        width: 50px;
        height: 4px;
        background-color: #28a745;
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
    }

    /* Button Styling */
    .btn-gradient {
        background: linear-gradient(45deg, #28a745, #218838);
        color: #fff;
        border: none;
        transition: all 0.3s ease;
    }

    .btn-gradient:hover {
        background: linear-gradient(45deg, #218838, #28a745);
        transform: translateY(-3px);
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
    }

    /* Card Styling */
    .service-item {
        box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        overflow: hidden;
        border-radius: 15px;
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .service-item:hover {
        transform: scale(1.05);
        box-shadow: 0px 15px 25px rgba(0, 0, 0, 0.2);
    }

    .service-icon {
        width: 70px;
        height: 70px;
        line-height: 70px;
        text-align: center;
        font-size: 2rem;
        background-color: #f8f9fa;
    }

    /* Decorative Background */
    .service-item .decorative-bg {
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(40, 167, 69, 0.1), rgba(33, 136, 56, 0.05));
        transform: rotate(45deg);
        z-index: -1;
    }

    /* Flexbox Layout */
    .service-item .d-flex {
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .service-item .d-flex .service-icon {
        margin-bottom: 20px;
    }
</style>

<!-- Import Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

<!-- Font Awesome Kit -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
