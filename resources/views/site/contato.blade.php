<section class="bg-secondary py-5">
    <div class="container pt-5 pb-lg-4 pb-xl-5">

        <div class="row pt-md-2 pt-lg-5 pb-2 pb-md-4">
            <div class="col-xxl-4 col-xl-5 col-lg-6 pt-3 mt-3">
                <h1 class="h3 mb-2">Vamos trazer sua empresa para o futuro?</h1>
                <h2 class="display-1 text-gradient-primary pb-sm-2 pb-md-3 mb-3">Contato</h2>
                <div class="nav d-block lead pt-lg-5">
                    <a href="https://api.whatsapp.com/send?phone=5547999227879"
                        class="nav-link nav-link-rodape fw-normal p-0 mb-4">
                        47 9 9922-7879 (whatsapp)
                    </a>
                </div>
            </div>        
            <div class="col-lg-6 offset-xl-1 offset-xxl-2 pt-3 pt-md-4 pt-lg-3 mt-3">
                @isset($mensagem)
                    <div class="alert alert-warning" role="alert">
                        Mensagem enviada com sucesso, em breve entraremos em contato!
                    </div>                
                @endisset
                <form class="needs-validation" novalidate="" method="POST" action="{{route('envio-form')}}">
                    @csrf
                    <div class="row g-4">
                        <div class="col-sm-6">
                            <label for="fn" class="form-label fs-base">Nome completo</label>
                            <input type="text" class="form-control form-control-lg" id="fn" required="" name="nome">
                            <div class="invalid-feedback">Nome completo obrigatório!</div>
                        </div>
                        <div class="col-sm-6">
                            <label for="email" class="form-label fs-base">Email</label>
                            <input type="email" class="form-control form-control-lg" id="email" required="" name="email">
                            <div class="invalid-feedback">Email obrigatório!</div>
                        </div>
                        <div class="col-12 pb-2">
                            <label for="message" class="form-label fs-base">Mensagem</label>
                            <textarea class="form-control form-control-lg" id="message" rows="3" required="" name="mensagem"></textarea>
                            <div class="invalid-feedback">Mensagem obrigatória!</div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-lg btn-primary w-100 w-sm-auto" id="bt-form">Enviar Mensagem</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
