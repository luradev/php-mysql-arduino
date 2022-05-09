<?php
require "header.php";
?>
<header class="text-center text-white masthead" style="background: url(&quot;assets/img/asphalt.jpg&quot;), url(&quot;https://cdn.bootstrapstudio.io/placeholders/1400x800.png&quot;);background-size: cover, auto;height: 476px;padding-bottom: 0px;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto position-relative">
                <h1 class="mb-5" style="padding: 45px;">Sistema de Controlo de Viaturas Acidentadas e Roubadas</h1>
            </div>
            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto position-relative">
                <form>
                    <div class="row">
                        <div class="col-12 col-md-9 mb-2 mb-md-0"><input class="form-control form-control-lg" type="email" placeholder="Digite a matrícula do seu veículo..."></div>
                        <div class="col-12 col-md-3"><button class="btn btn-primary btn-lg" type="button">Pesquisar</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</header>
<main class="page lanidng-page">
    <section class="portfolio-block call-to-action border-bottom">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center content">
                <h3>O seu veículo ainda não foi registrado?</h3>
                <a href="add-veiculo.php">
                    <button class="btn btn-outline-primary btn-lg" href="veiculo.html" type="button">Registre</button>
                </a>
            </div>
        </div>
    </section>
    <section class="portfolio-block skills">
        <div class="container">
            <div class="heading">
                <h2>SERVIÇOS</h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card special-skill-item border-0">
                        <div class="card-header bg-transparent border-0"><i class="icon ion-ios-location-outline"></i></div>
                        <div class="card-body">
                            <h3 class="card-title">Localização da Ocorrência</h3>
                            <p class="card-text">O Sistema de Monitoramento de Veículos Acidentados permite localizar o lugar exato da ocorrência do acidente.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card special-skill-item border-0">
                        <div class="card-header bg-transparent border-0"><i class="icon ion-android-notifications-none"></i></div>
                        <div class="card-body">
                            <h3 class="card-title">Notificação da Ocorrência</h3>
                            <p class="card-text">O Sistema de Monitoramento de Veículos Acidentados permite notificar de imediato os Serviços de Viação e Trânsito sobre o acidente.<br><br></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card special-skill-item border-0">
                        <div class="card-header bg-transparent border-0"><i class="icon ion-ios-pie-outline"></i></div>
                        <div class="card-body">
                            <h3 class="card-title">Dados Estatítisco</h3>
                            <p class="card-text">O Sistema de Monitoramento de Veículos Acidentados apresenta um quadro estatístico de acidentes no ao redor do país.<br><br></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<section class="highlight-clean" style="background: url(&quot;assets/img/text-banner.png&quot;) no-repeat;height: 719px;background-size: cover;padding: 186px 0px;">
    <div class="container">
        <div class="intro">
            <h2 class="text-center" style="color: var(--bs-white);"></h2>
            <p class="text-center"></p>
        </div>
        <div class="buttons"><a class="btn btn-primary" role="button" href="dashboard.php" style="font-size: 16px;">CONSULTAR</a></div>
    </div>
</section>
<section class="portfolio-block projects-cards">
    <div class="container">
        <div class="heading">
            <h2>ACIDENTES RECENTES</h2>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="card border-0"><a href="#"><img class="card-img-top scale-on-hover" src="assets/img/nature/sinistralidade-empresa-1.jpg" alt="Card Image" style="background: url(&quot;https://cdn.bootstrapstudio.io/placeholders/1400x800.png&quot;);height: 185.9px;"></a>
                    <div class="card-body">
                        <h6><a href="#">Veículo: LD-11-11-AA</a></h6>
                        <p class="text-muted card-text">Acidente ocorrido no dia dd/MM/aaaa. Na Estrada Nacional nº 100.<br></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card border-0"><a href="#"><img class="card-img-top scale-on-hover" src="assets/img/nature/sinistralidade-empresa-2.jpg" alt="Card Image" style="height: 185.7px;"></a>
                    <div class="card-body">
                        <h6><a href="#">Veículo: LD-00-00-AA</a></h6>
                        <p class="text-muted card-text">Acidente ocorrido no dia dd/MM/aaaa. Na Estrada Nacional nº 100.<br></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card border-0"><a href="#"><img class="card-img-top scale-on-hover" src="assets/img/nature/sinistralidade-empresa-3.jpg" alt="Card Image" style="height: 185.4px;"></a>
                    <div class="card-body">
                        <h6><a href="#">Veículo: LD-22-22-AA</a></h6>
                        <p class="text-muted card-text">Acidente ocorrido no dia dd/MM/aaaa. Na Estrada Nacional nº 100.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require "footer.php";
?>