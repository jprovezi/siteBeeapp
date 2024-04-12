<!-- Dashboard -->
<section class="container pt-3 pt-md-4 pt-lg-5 pb-2 mt-lg-2 mt-xl-4">
    <div class="row align-items-center">

        <div class="col align-self-center" data-rellax-percentage="0.5" data-rellax-speed="-0.6"
            data-disable-parallax-down="lg" style="margin: -80px 0 100px 0;">

            <!-- Video button on top of the image -->
            <div class="position-relative bg-size-cover bg-position-center py-5"
                style="background-image: url(assets/img/landing/software-agency-1/beeapp.jpg);">
                <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-60"></span>
                <div class="position-relative text-center zindex-5 px-3 py-4 py-sm-5 my-lg-5">
                    <a href="https://www.youtube.com/watch?v=A2xHTUAs0g8"
                        class="btn btn-video btn-icon bg-white btn-xl mb-2" data-bs-toggle="video"
                        aria-label="Play video">
                        <i class="bx bx-play"></i>
                    </a>
                    <div class="fs-sm text-white opacity-75">Assistir apresentação da Beeapp em vídeo</div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="bg-secondary py-5">
    <div class="container my-2 py-md-2 py-lg-5">
        <div class="row">
            <div class="col-xl-4 col-md-5 text-center text-md-start pb-2 pb-md-0 mb-4 mb-md-0">
                <img src="assets/img/portfolio/courses/funcionalidades.png" class="rounded-2 mb-4">
                <h2 class="pb-3 mb-1 mb-lg-2">Funcionalidades da Plataforma Beeapp</h2>
                <p class="fs-lg pb-3 mb-2 mb-lg-3">Recursos poderosos que podemos oferecer a sua empresa</p>
                <a href="#contato" class="btn btn-primary">Peça um teste grátis</a>
            </div>
            <div class="col-md-7 offset-xl-1">
                <div class="accordion" id="funcionalidades">
  
                    @foreach ($funcionalidades as $i => $funcionalidade)
                        <div class="accordion-item border-0 rounded-3 shadow-sm m-2">
                            <h2 class="accordion-header" id="q6-heading">
                                <button class="accordion-button shadow-none rounded-3 collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#q{{ $i }}"
                                    aria-expanded="false" aria-controls="q6">
                                    <i class='bx bx-check-circle'></i>
                                    <span class="ms-4">{{ $funcionalidade['titulo'] }}</span>
                                </button>
                            </h2>
                            <div id="q{{ $i }}" class="accordion-collapse collapse"
                                aria-labelledby="q6-heading" data-bs-parent="#funcionalidades">
                                <div class="accordion-body fs-sm pt-0">
                                    <p>{{ $funcionalidade['texto'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
  
                </div>
            </div>
        </div>
    </div>
  </section>

<section class="py-5">
    <div class="container my-2 py-md-2 py-lg-5">
        <div class="row">
            <div class="col-xl-4 col-md-5 text-center text-md-start pb-2 pb-md-0 mb-4 mb-md-0">
                <img src="assets/img/portfolio/courses/beneficios.png" class="rounded-2 mb-4">
                <h2 class="pb-3 mb-1 mb-lg-2">Benefícios de Utilizar a Beeapp</h2>
                <p class="fs-lg pb-3 mb-2 mb-lg-3">O que sua empresa ganha, ao utilizar a nossa ferramenta.</p>
                <a href="#contato" class="btn btn-primary">Peça um teste grátis</a>
            </div>
            <div class="col-md-7 offset-xl-1">
                <div class="accordion" id="beneficios">

                    @foreach ($beneficios as $i => $beneficio)
                        <div class="accordion-item border-0 rounded-3 shadow-sm m-2">
                            <h2 class="accordion-header" id="q6-heading">
                                <button class="accordion-button shadow-none rounded-3 collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#b{{ $i }}"
                                    aria-expanded="false" aria-controls="q6">
                                    <i class='bx bx-check-circle'></i>
                                    <span class="ms-4">{{ $beneficio['titulo'] }}</span>
                                </button>
                            </h2>
                            <div id="b{{ $i }}" class="accordion-collapse collapse"
                                aria-labelledby="q6-heading" data-bs-parent="#beneficios">
                                <div class="accordion-body fs-sm pt-0">
                                    <p>{{ $beneficio['texto'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-secondary py-5">
    <div class="container my-2 py-md-2 py-lg-5">
        <div class="row">
            <div class="col-xl-4 col-md-5 text-center text-md-start pb-2 pb-md-0 mb-4 mb-md-0">
                <img src="assets/img/portfolio/courses/transformacoes.png" class="rounded-2 mb-4">
                <h2 class="pb-3 mb-1 mb-lg-2">Transformações geradas aos nossos clientes</h2>
                <p class="fs-lg pb-3 mb-2 mb-lg-3">Conheça algumas mudanças que a plataforma Beeapp gera em nossos clientes</p>
                <a href="#contato" class="btn btn-primary">Peça um teste grátis</a>
            </div>
            <div class="col-md-7 offset-xl-1">
                <div class="accordion" id="transformacoes">

                    @foreach ($transformacoes as $i => $transformacao)
                        <div class="accordion-item border-0 rounded-3 shadow-sm m-2">
                            <h2 class="accordion-header" id="q6-heading">
                                <button class="accordion-button shadow-none rounded-3 collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#t{{ $i }}"
                                    aria-expanded="false" aria-controls="q6">
                                    <i class='bx bx-check-circle'></i>
                                    <span class="ms-4">{{ $transformacao['titulo'] }}</span>
                                </button>
                            </h2>
                            <div id="t{{ $i }}" class="accordion-collapse collapse"
                                aria-labelledby="q6-heading" data-bs-parent="#transformacoes">
                                <div class="accordion-body fs-sm pt-0">
                                    <p>{{ $transformacao['texto'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Use cases (Tabs) -->
<section class="container pt-5 pb-2 mt-3 mt-sm-4 mt-xl-5">
    <h2 class="h1 text-center pb-3 pb-lg-4">Um pouco mais do Beeapp</h2>

    <!-- Nav tabs -->
    <ul class="nav nav-tabs flex-nowrap justify-content-lg-center overflow-auto pb-2 mb-3 mb-lg-4" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link text-nowrap active" id="project-management-tab" data-bs-toggle="tab"
                data-bs-target="#project-management" type="button" role="tab" aria-controls="project-management"
                aria-selected="true">
                <i class="bx bxs-file-doc fs-lg opacity-60 me-2"></i>
                Documentos
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link text-nowrap" id="remote-work-tab" data-bs-toggle="tab" data-bs-target="#remote-work"
                type="button" role="tab" aria-controls="remote-work" aria-selected="false">
                <i class="bx bx-task fs-lg opacity-60 me-2"></i>
                Tarefas
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link text-nowrap" id="product-release-tab" data-bs-toggle="tab"
                data-bs-target="#product-release" type="button" role="tab" aria-controls="product-release"
                aria-selected="false">
                <i class="bx bx-like fs-lg opacity-60 me-2"></i>
                Feedbacks
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link text-nowrap" id="campaign-planning-tab" data-bs-toggle="tab"
                data-bs-target="#campaign-planning" type="button" role="tab" aria-controls="campaign-planning"
                aria-selected="false">
                <i class="bx bx-bar-chart-alt-2 fs-lg opacity-60 me-2"></i>
                avaliações
            </button>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content bg-secondary rounded-3 py-4">

        <!-- Project Management -->
        <div class="tab-pane fade show active" id="project-management" role="tabpanel"
            aria-labelledby="project-management-tab">
            <div class="row align-items-center pt-3 pt-sm-4 pt-md-0 px-3 px-sm-4 px-lg-0">
                <div class="col-lg-4 col-md-5 offset-lg-1 text-center text-md-start">
                    <h3 class="mb-lg-4">Gestão de documentos</h3>
                    <p>
                        Com o BeeApp, a gestão de <span class="texto-destaque">documentos em sua empresa se torna
                            padronizada, segura e otimizada</span>, assegurando o compartilhamento apropriado com os
                        departamentos e cargos específicos de seus colaboradores. Adicionalmente, o aplicativo oferece
                        recursos avançados de controle de versionamento e realiza backups diários dos dados, garantindo
                        a integridade e a disponibilidade das informações.
                    </p>
                </div>
                <div class="col-lg-6 col-md-7 mt-md-4">
                    <img src="assets/img/landing/saas-1/use-cases/01.png" class="d-block my-lg-2 mx-auto me-md-0"
                        width="595" alt="Image">
                </div>
            </div>
        </div>

        <!-- Remote Work -->
        <div class="tab-pane fade" id="remote-work" role="tabpanel" aria-labelledby="remote-work-tab">
            <div class="row align-items-center pt-3 pb-2 pb-sm-3 pt-sm-4 pt-md-0 px-3 px-sm-4 px-lg-0">
                <div class="col-lg-4 col-md-5 offset-lg-1 text-center text-md-start">
                    <h3 class="mb-lg-4">Gestão de tarefas</h3>
                    <p>
                        Nossa ferramenta avançada de gerenciamento de tarefas é projetada para permitir que sua empresa
                        <span class="texto-destaque">mantenha um controle rigoroso sobre a execução de
                            atividades</span>, seja de forma individual ou em equipe. Ela facilita o processo ao
                        notificar todos os participantes envolvidos, assegurando assim uma comunicação eficaz e
                        aumentando a produtividade.
                    </p>
                </div>
                <div class="col-lg-6 col-md-7 mt-md-4">
                    <img src="assets/img/landing/saas-1/use-cases/02.png" class="d-block my-lg-2 mx-auto me-md-0"
                        width="502" alt="Image">
                </div>
            </div>
        </div>

        <!-- Product Release -->
        <div class="tab-pane fade" id="product-release" role="tabpanel" aria-labelledby="product-release-tab">
            <div class="row align-items-center pt-3 pt-sm-4 pt-md-0 px-3 pe-sm-4 pe-md-0 ps-sm-4 ps-lg-0">
                <div class="col-lg-4 col-md-5 offset-lg-1 text-center text-md-start">
                    <h3 class="mb-lg-4">Feedback individuais</h3>
                    <p>
                        Através de feedbacks personalizados, seus usuários não apenas recebem informações relevantes,
                        mas <span class="texto-destaque">você também é notificado quando essas informações foram
                            acessadas</span>. Além disso, eles têm a oportunidade de fornecer suas próprias impressões e
                        informações de volta à empresa.
                    </p>
                </div>
                <div class="col-lg-6 col-md-7 mt-n3 mt-md-1">
                    <img src="assets/img/landing/saas-1/use-cases/03.png" class="d-block mb-lg-2 mx-auto me-md-0"
                        width="525" alt="Image">
                </div>
            </div>
        </div>

        <!-- Campaign Planning -->
        <div class="tab-pane fade" id="campaign-planning" role="tabpanel" aria-labelledby="campaign-planning-tab">
            <div class="row align-items-center pt-3 pt-sm-4 pt-md-0 px-3 pe-sm-4 pe-md-0 ps-sm-4 ps-lg-0">
                <div class="col-lg-4 col-md-5 offset-lg-1 text-center text-md-start">
                    <h3 class="mb-lg-4">Avaliações individuais</h3>
                    <p>
                        O BeeApp oferece funcionalidades avançadas para a <span class="texto-destaque">geração de
                            relatórios individuais da sua equipe, apresentando métricas completamente
                            personalizadas</span> de acordo com as especificidades do seu negócio. Com essa ferramenta,
                        é possível identificar os membros com os melhores e os piores desempenhos, permitindo assim uma
                        organização mais eficaz e direcionada da sua empresa.
                    </p>
                </div>
                <div class="col-lg-6 col-md-7 mt-n3 mt-md-1">
                    <img src="assets/img/landing/saas-1/use-cases/04.png" class="d-block mb-lg-2 mx-auto me-md-0"
                        width="545" alt="Image">
                </div>
            </div>
        </div>
    </div>
    <a id="planos"></a>
</section>
