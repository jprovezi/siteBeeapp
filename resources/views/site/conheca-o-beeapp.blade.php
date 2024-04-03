<section class="container">
    <h2 class="h1 text-center pb-4 pb-lg-5">Porque escolher o Beeapp</h2>
    <div class="row">
        @foreach ($porqueEscolheres as $porqueEscolher)
            <div class="col-lg-3 col-md-4 col-sm-6 text-center pb-md-2 mb-3 mb-lg-4">
                <div class="d-inline-block bg-secondary rounded-circle p-3 mb-4">
                    <i class='{{$porqueEscolher["icone"]}} icone-escolher'></i>
                </div>
                <h3 class="h5 pb-1 mb-2">{{$porqueEscolher["titulo"]}}</h3>
                <p class="fs-sm">{{$porqueEscolher["texto"]}}</p>
            </div>            
        @endforeach
    </div>
</section>

<!-- Dashboard -->
<section class="container pt-3 pt-md-4 pt-lg-5 pb-2 mt-lg-2 mt-xl-4">
    <div class="row align-items-center">
        <div class="rellax col-md-7" data-rellax-percentage="0.5" data-rellax-speed="-0.6" data-disable-parallax-down="lg" style="margin: -20px 0 0 0;">
            <iframe width="100%" height="450" src="https://www.youtube.com/embed/A2xHTUAs0g8?si=Gz7__WP5C-xSFv3y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        <div class="rellax col-md-5 col-xl-4 offset-xl-1 d-flex d-sm-block flex-column" data-rellax-percentage="0.5"
            data-rellax-speed="0.8" data-disable-parallax-down="lg">
            <h2 class="pb-3 pt-2 pt-md-0">Benefícios gerados aos clientes</h2>
            <ul class="list-unstyled pb-2">
                @foreach ($beneficios as $beneficio)
                    <li class="d-flex align-items-center pb-1 mb-2">
                        <i class="bx bx-check-circle text-primary fs-xl me-2"></i>
                        {{ $beneficio }}
                    </li>
                @endforeach
            </ul>
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
                        Com o BeeApp, a gestão de <span class="texto-destaque">documentos em sua empresa se torna padronizada, segura e otimizada</span>, assegurando o compartilhamento apropriado com os departamentos e cargos específicos de seus colaboradores. Adicionalmente, o aplicativo oferece recursos avançados de controle de versionamento e realiza backups diários dos dados, garantindo a integridade e a disponibilidade das informações.
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
                        Nossa ferramenta avançada de gerenciamento de tarefas é projetada para permitir que sua empresa <span class="texto-destaque">mantenha um controle rigoroso sobre a execução de atividades</span>, seja de forma individual ou em equipe. Ela facilita o processo ao notificar todos os participantes envolvidos, assegurando assim uma comunicação eficaz e aumentando a produtividade.
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
                        Através de feedbacks personalizados, seus usuários não apenas recebem informações relevantes, mas <span class="texto-destaque">você também é notificado quando essas informações foram acessadas</span>. Além disso, eles têm a oportunidade de fornecer suas próprias impressões e informações de volta à empresa.                        
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
                        O BeeApp oferece funcionalidades avançadas para a <span class="texto-destaque">geração de relatórios individuais da sua equipe, apresentando métricas completamente personalizadas</span> de acordo com as especificidades do seu negócio. Com essa ferramenta, é possível identificar os membros com os melhores e os piores desempenhos, permitindo assim uma organização mais eficaz e direcionada da sua empresa.                        
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
