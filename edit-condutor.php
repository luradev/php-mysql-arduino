<?php
    require_once("controller/condutorController.php");
    $ct_condutor = new CondutorController();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Condutor</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Card-Carousel-1.css">
    <link rel="stylesheet" href="assets/css/Card-Carousel.css">
    <link rel="stylesheet" href="assets/css/Highlight-Clean.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-lg bg-white portfolio-navbar gradient">
        <div class="container"><a class="navbar-brand logo" href="index.html">Accident-Track</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navbarNav"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="veiculo.html">Registrar Veículo</a></li>
                    <li class="nav-item"><a class="nav-link active" href="condutor.html">Registrar Condutor</a></li>
                    <li class="nav-item"><a class="nav-link" href="acidentes.html">Acidentes</a></li>
                    <li class="nav-item"><a class="nav-link" href="dashboard.html">Dashboard</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page hire-me-page">
        <section class="portfolio-block hire-me">
            <div class="container">
                <div class="heading">
                    <h2>EDITAR CONDUTOR</h2>
                </div>
                
                <?php $condutor = $ct_condutor->getByPk($_GET['pkCondutor']); ?>

                <form method="post" action="controller/condutorController.php?action=update">
                    <input type="hidden" value="<?php echo $condutor['pk_condutor'] ?>" name="pk" />
                    <div class="mb-3"><label class="form-label" for="nome">Nome</label><input value="<?php echo $condutor['nome'] ?>" class="form-control" type="text" name="nome" id="nome"></div>
                    <div class="mb-3"><label class="form-label" for="sexo">Sexo</label><select class="form-select" name="sexo" id="sexo">
                            <optgroup label="Selecione o gênero">
                                <option value="M" selected="">Masculino</option>
                                <option value="F">Feminino</option>                                
                            </optgroup>
                        </select></div>
                    <div class="mb-3"><label class="form-label" for="data_nascimento">Data de Nascimento</label><input value="<?php echo $condutor['data_nascimento'] ?>" class="form-control" name="data_nascimento" id="data_nascimento" type="date"></div>
                    <div class="mb-3"><label class="form-label" for="num_bi">BI</label><input value="<?php echo $condutor['num_bi'] ?>" class="form-control" type="text" name="num_bi" id="bi"></div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col"><button class="btn btn-primary d-block w-100" id="btn_salvar" type="submit">Salvar</button></div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>
    <footer class="page-footer" style="background: var(--bs-dark);">
        <div class="container">
            <div class="links"><a href="#" style="color: var(--bs-white);">Quem somos</a><a href="#" style="color: var(--bs-white);">Contactos</a><a href="#" style="color: var(--bs-white);">Projetos</a></div>
            <div class="social-icons"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-instagram-outline"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a></div>
        </div>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/Card-Carousel.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>