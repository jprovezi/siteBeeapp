<!-- planos -->
<section class="container py-5 my-md-2 my-lg-4 my-xl-5">
    <h2 class="h1 text-center pb-3 pb-md-4">Planos para pequenas, médias e grandes empresas</h2>
    <div class="price-switch-wrapper mb-n2">
        <div class="table-responsive-xxl pt-md-3">
            <div class="row flex-nowrap pb-4">
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm p-xxl-3" style="min-width: 18rem;">
                        <div class="card-body">
                            <div class="d-flex align-items-center pb-2 pb-md-3 mb-4">
                                <div class="flex-shrink-0 bg-secondary rounded-3">
                                    <img src="assets/img/landing/saas-1/pricing/basic.png" width="84"
                                        alt="Icon">
                                </div>
                                <div class="ps-4">
                                    <h3 class="fs-lg fw-bold text-body mb-2">PLANO IMPULSO</h3>
                                    <h4 class="h3 lh-1 mb-0">
                                        <span class="h6">12x </span>R$297,00 <span class="h6">+ setup</span>
                                    </h4>
                                </div>
                            </div>
                            <div class="d-flex align-items-center pb-2 pb-md-3 mb-4">
                                <p>Perfeito para empresas de pequeno porte e startups, que buscam estruturar suas operações, aprimorar sua gestão e alavancar o crescimento do negócio.</p>
                            </div>
                            <ul class="list-unstyled fs-sm pb-md-3 mb-3">
                                @foreach ($planos["basic"] as $plano)
                                    <li class="d-flex mb-2">
                                        <i class="bx bx-check fs-xl text-primary me-1"></i>
                                        {{$plano}}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="card-footer border-0 pt-0 pb-4">
                            <a href="#contato" class="btn btn-outline-primary w-100">Peça um teste grátis</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-1 shadow-primary shadow-dark-mode-none p-xxl-3"
                        style="min-width: 18rem;">
                        <div class="card-body">
                            <div class="d-flex align-items-center pb-2 pb-md-3 mb-4">
                                <div class="flex-shrink-0 bg-secondary rounded-3">
                                    <img src="assets/img/landing/saas-1/pricing/standard.png" width="84"
                                        alt="Icon">
                                </div>
                                <div class="ps-4">
                                    <h3 class="fs-lg fw-bold text-body mb-2">PLANO CRESCIMENTO</h3>
                                    <h4 class="h3 lh-1 mb-0">
                                        Sob consulta
                                    </h4>
                                </div>
                            </div>
                            <div class="d-flex align-items-center pb-2 pb-md-3 mb-4">
                                <p>Projetado para empresas de médio porte, com necessidade de padronizar e estruturar processos operacionais e de negócios e promover a colaboração efetiva.</p>
                            </div>
                            <ul class="list-unstyled fs-sm pb-md-3 mb-3">
                                @foreach ($planos["standard"] as $plano)
                                    <li class="d-flex mb-2">
                                        <i class="bx bx-check fs-xl text-primary me-1"></i>
                                        {{$plano}}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="card-footer border-0 pt-0 pb-4">
                            <a href="#contato" class="btn btn-outline-primary w-100">Peça um teste grátis</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm p-xxl-3" style="min-width: 18rem;">
                        <div class="card-body">
                            <div class="d-flex align-items-center pb-2 pb-md-3 mb-4">
                                <div class="flex-shrink-0 bg-secondary rounded-3">
                                    <img src="assets/img/landing/saas-1/pricing/ultimate.png" width="84"
                                        alt="Icon">
                                </div>
                                <div class="ps-4">
                                    <h3 class="fs-lg fw-bold text-body mb-2">PLANO EXCELÊNCIA</h3>
                                    <h4 class="h3 lh-1 mb-0">
                                        Sob consulta
                                    </h4>
                                </div>                              
                            </div>
                            <div class="d-flex align-items-center pb-2 pb-md-3 mb-4">
                                <p>Destinado a organizações estabelecidas que desejam uma solução abrangente para otimizar a gestão de processos e maximizar a performance organizacional.</p>
                            </div>                              
                            <ul class="list-unstyled fs-sm pb-md-3 mb-3">
                                @foreach ($planos["ultimate"] as $plano)
                                    <li class="d-flex mb-2">
                                        <i class="bx bx-check fs-xl text-primary me-1"></i>
                                        {{$plano}}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="card-footer border-0 pt-0 pb-4">
                            <a href="#contato" class="btn btn-outline-primary w-100">Peça um teste grátis</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a id="depoimentos"></a>
    </div>
</section>
