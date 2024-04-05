<header class="header navbar navbar-expand-lg position-absolute navbar-sticky">
    <div class="container px-3">
        <a href="{{route('home')}}" class="navbar-brand pe-3">
            <img src="assets/img/logo-2.png" width="200" alt="Beeapp">
        </a>
        <div id="navbarNav" class="offcanvas offcanvas-end">
            <div class="offcanvas-header border-bottom">
                <h5 class="offcanvas-title">Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="#conheca" class="nav-link nav-link-rodape">Conheça o Beeapp</a>
                    </li>
                    <li class="nav-item">
                        <a href="#planos" class="nav-link nav-link-rodape">Planos</a>
                    </li>
                    <li class="nav-item">
                        <a href="#depoimentos" class="nav-link nav-link-rodape">Depoimentos</a>
                    </li>
                </ul>
            </div>
            <div class="offcanvas-header border-top">
                <a href="{{config('APP_URL')}}#contato"
                    class="btn btn-primary w-100" rel="noopener">
                    Fale Conosco
                </a>
            </div>
        </div>
        <button type="button" class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a href="#contato"
            class="btn btn-primary btn-sm fs-sm rounded d-none d-lg-inline-flex"
            rel="noopener">
            Fale Conosco
        </a>
    </div>
</header>