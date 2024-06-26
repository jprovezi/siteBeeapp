<!-- Depoimentos -->
<section class="bg-secondary py-5">
    <div class="container py-2 py-md-3 py-lg-4 py-xl-5">
        <div class="row row-cols-1 row-cols-md-2 gx-3 gx-lg-4">
            <div class="col-md-6 mb-3 mb-md-0">
                <div class="card border-0 h-100 p-xl-4" style="background-color: #052042;">
                    <div class="card-body">
                        <h2 class="display-1 text-light">+ de 5.000</h2>
                        <p class="lead fw-medium text-light">
                            Usuários ativos suportado por nossos <span style="color: #ffc800;">servidores de alta potência</span>, oferecendo velocidade superior e segurança inigualável. Estamos em atualização constante da nossa plataforma!
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card border-0 shadow-sm p-4 p-xxl-5">
                    <div class="d-flex justify-content-between pb-4 mb-2">
                        <span class="btn btn-icon btn-primary btn-lg shadow-primary pe-none">
                            <i class="bx bxs-quote-left"></i>
                        </span>
                        <div class="d-flex">
                            <button type="button" id="testimonials-prev" class="btn btn-prev btn-icon btn-sm me-2"
                                aria-label="Previous">
                                <i class="bx bx-chevron-left"></i>
                            </button>
                            <button type="button" id="testimonials-next" class="btn btn-next btn-icon btn-sm ms-2"
                                aria-label="Next">
                                <i class="bx bx-chevron-right"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Slider -->
                    <div class="swiper mx-0 mb-md-n2 mb-xxl-n3"
                        data-swiper-options='{
                        "spaceBetween": 24,
                        "loop": true,
                        "pagination": {
                        "el": ".swiper-pagination",
                        "clickable": true
                        },
                        "navigation": {
                        "prevEl": "#testimonials-prev",
                        "nextEl": "#testimonials-next"
                        }
                    }'>
                        <div class="swiper-wrapper">

                            <!-- Item -->
                            @foreach ($depoimentos as $depoimento)
                                <div class="swiper-slide h-auto">
                                    <figure class="card h-100 position-relative border-0 bg-transparent">
                                        <blockquote class="card-body p-0 mb-0">
                                            <p class="fs-lg mb-0">{{$depoimento["depoimento"]}}</p>
                                        </blockquote>
                                        <figcaption class="card-footer border-0 d-flex align-items-center w-100 pb-2">
                                            <img src="assets/img/depoimentos/{{$depoimento["img"]}}" width="60" class="rounded-circle"
                                                alt="Annette Black">
                                            <div class="ps-3">
                                                <h6 class="fw-semibold lh-base mb-0">{{$depoimento["nome"]}}</h6>
                                                <span class="fs-sm text-muted">{{$depoimento["funcao"]}}</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            @endforeach
                        </div>

                        <!-- Pagination (bullets) -->
                        <div class="swiper-pagination position-relative mt-5"></div>
                    </div>
                </div>
            </div>
        </div>
        <a id="contato"></a>
    </div>
</section>
