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
                                    <h3 class="fs-lg fw-bold text-body mb-2">Bee Basic</h3>
                                    <h4 class="h3 lh-1 mb-0">
                                        <span class="text-body fs-sm fw-normal">Ideial para pequenos negócios</span>
                                    </h4>
                                </div>
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
                            <a href="#contato" class="btn btn-outline-primary w-100">Peça uma demonstração</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-1 shadow-primary shadow-dark-mode-none p-xxl-3"
                        style="min-width: 18rem;">
                        <div class="card-body">
                            <div class="d-flex align-items-center pb-2 pb-md-3 mb-4">
                                <div class="flex-shrink-0 rounded-3"
                                    style="background-color: rgba(255,255,255, .1);">
                                    <img src="assets/img/landing/saas-1/pricing/standard.png" width="84"
                                        alt="Icon">
                                </div>
                                <div class="ps-4">
                                    <h3 class="fs-lg fw-bold text-light opacity-70 mb-2">Bee Standard</h3>
                                    <h4 class="h3 text-light lh-1 mb-0">
                                        <span class="fs-sm fw-normal opacity-70">Ideal para médias empresas</span>
                                    </h4>
                                </div>
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
                            <a href="#contato" class="btn btn-outline-primary w-100">Peça uma demonstração</a>
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
                                    <h3 class="fs-lg fw-bold text-body mb-2">Bee Ultimate</h3>
                                    <h4 class="h3 lh-1 mb-0">
                                        <span class="text-body fs-sm fw-normal">Ideal para grandes empresa</span>
                                    </h4>
                                </div>
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
                            <a href="#contato" class="btn btn-outline-primary w-100">Peça uma demonstração</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a id="depoimentos"></a>
    </div>
</section>
