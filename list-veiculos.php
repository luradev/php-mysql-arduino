<?php
	require_once("controller/veiculoController.php");
	$bean = new VeiculoController();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Veiculos</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
    <link rel="stylesheet" href="assets/fontawesome-free-5.15.4/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Card-Carousel-1.css">
    <link rel="stylesheet" href="assets/css/Card-Carousel.css">
    <link rel="stylesheet" href="assets/css/Highlight-Clean.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" integrity="sha384-ejwKkLla8gPP8t2u0eQyL0Q/4ItcnyveF505U0NIobD/SMsNyXrLti6CWaD0L52l" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-lg bg-white portfolio-navbar gradient">
        <div class="container"><a class="navbar-brand logo" href="#">&nbsp;<i class="fa fa-car"></i>&nbsp; Accident-Track<br></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navbarNav"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="veiculo.html">Registrar Veículo</a></li>
                    <li class="nav-item"><a class="nav-link" href="condutor.html">Registrar Condutor</a></li>
                    <li class="nav-item"><a class="nav-link" href="acidentes.html">Acidentes</a></li>
                    <li class="nav-item"><a class="nav-link" href="dashboard.html">Dashboard</a></li>
					
                </ul>
            </div>
        </div>
    </nav>
    <main class="page projects-page">
        <section class="portfolio-block projects-cards">
            <div class="container">
                <div class="heading">
                    <h2>LISTA DE VEICULOS</h2>
                </div>
				
				<div >
					<a href="add-veiculo.php" style="float:left;"><button class="btn btn-success"><i class="fas fa-plus"></i>+ Novo</button></a>					
				</div>
                
				<div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
					<br/>
                    <table class="table table-striped table my-0" id="dataTable">
                        <thead>
                            <tr>
                                <th>Matricula</th>
                                <th>Modelo</th>
                                <th>Cor</th>
                                <th>Condutor</th>
                                <th>Opções</th>
                            </tr>
                        </thead>
                        <tbody>
							<?php 
							$veiculos = $bean->listarTodos();
							foreach ($veiculos as $veiculo) : ?>
								<tr>
									<td><?php echo $veiculo['matricula']; ?></td>
									<td><?php echo $veiculo['modelo']; ?></td>
									<td><?php echo $veiculo['cor']; ?></td>
									<td><?php echo $veiculo['condutor_nome']; ?></td>
									<td>
										<button class="btn btn-primary mr-2">
											<a href="edit.php?editId=<?php echo $veiculo['pk_veiculo'] ?>">
												<i class="fa fa-pencil text-white" aria-hidden="true"></i>
											</a>
										</button>
										
										<a href="list-veiculos.php?action=excluir&id=<?php echo $veiculo['pk_veiculo'] ?>" onclick="confirm('Desejas realmente eliminar este registo?')">
											<button class="btn btn-danger"></button>
											<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
										</a>
										
								</td>
								</tr>
							<?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr></tr>
                        </tfoot>
                    </table>
                </div>
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
    <script src="assets/js/Card-Carousel.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>   
    <script src="assets/js/theme.js"></script>
</body>

</html>