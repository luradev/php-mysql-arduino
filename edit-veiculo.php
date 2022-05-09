<?php
    require "header.php";
	require_once("controller/condutorController.php");
	require_once("controller/marcaController.php");
	require_once("controller/corController.php");
    require_once("controller/veiculoController.php");
    require_once("controller/iotController.php");
	
	$ct_marca = new MarcaController();
	$ct_condutor = new CondutorController();
	$ct_cor = new CorController();
    $ct_veiculo = new VeiculoController();
    $ct_iot = new IotController();
?>


    <main class="page hire-me-page">
        <section class="portfolio-block hire-me">
            <div class="container">
                <div class="heading">
                    <h2>EDITAR VEÍCULO</h2>
                </div>

                <?php $veiculo = $ct_veiculo->getByPk($_GET['pkVeiculo']); ?>

                <form method="post" action="controller/veiculoController.php?action=update">
                    <div class="mb-3">
                        <div class="row">
                        <input type="hidden" value="<?php echo $veiculo['pk_veiculo'] ?>" name="pk_veiculo" />
                            <div class="col-md-6"><label class="form-label" for="hire-date">Marca</label>
                                
								<select class="form-select" name="marca" id="marca-dropdown">
                                    <option value="">Selecione a marca</option>
									<?php 
										$marcas = $ct_marca->listar();
										foreach($marcas as $marca) : ?>
											<option value="<?php echo $marca['pk_marca']; ?>"><?php echo $marca['nome']; ?></option>                                        
									<?php endforeach; ?>
                                    
                                </select>
							</div>
                            <div class="col-md-6 button"><label class="form-label">Modelo</label>
								<!-- <input type="hidden" id="modeloId" name="modeloId" value=""> -->
								
								<select class="form-select" name="modelo" id="modelo-dropdown">
                                    
                                </select>
							</div>
                        </div>
                    </div>
                    <div class="mb-3"><label class="form-label" for="matricula">Matrícula</label><input value="<?php echo $veiculo['matricula'] ?>" class="form-control" type="text" name="matricula" id="matricula"></div>
                    <div class="mb-3"><label class="form-label" for="num_motor">Nº do Motor</label><input value="<?php echo $veiculo['num_motor'] ?>" class="form-control" type="text" name="num_motor" id="num_motor"></div>
                    <div class="mb-3"><label class="form-label" for="num_quadro">Nº do Quadro</label><input value="<?php echo $veiculo['num_quadro'] ?>" class="form-control" type="text" name="num_quadro" id="num_quadro"></div>
                    <div class="mb-3"><label class="form-label" for="cor">Cor</label><select class="form-select" name="cor" id="cor">
                            <optgroup label="Selecione a cor">
							<?php
								$cores = $ct_cor->listar();
								foreach($cores as $cor): ?>
									<option value="<?php echo $cor['nome'] ?>"><?php echo $cor['nome'] ?></option>
                            <?php endforeach ?>                           
                            </optgroup>
                        </select></div>
                    <div class="mb-3"><label class="form-label" for="email">Condutor</label><select class="form-select" name="condutor" id="condutor">
                            <optgroup label="Selecione o condutor">
                                <!-- <option value="1" selected="">João</option> -->                                
							<?php 
								$condutores = $ct_condutor->listar();
								foreach ($condutores as $condutor) : ?>
									<option value="<?php echo $condutor['pk_condutor']; ?>"><?php echo $condutor['nome']; ?></option>
                            <?php endforeach; ?>
                            </optgroup>
                        </select></div>
                    
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-md-6"><label class="form-label" for="hire-date">Combustível</label><select class="form-select" name="combustivel" id="combustivel">
                                    <optgroup label="Selecione o combustível">
                                        <option value="Gasolina" <?php if($veiculo['combustivel'] == 'Gasolina'){ echo 'selected'; } ?> >Gasolina</option>
                                        <option value="Gasóleo" <?php if($veiculo['combustivel'] == 'Gasóleo'){ echo 'selected'; } ?> >Gasóleo</option>                                        
                                    </optgroup>
                                </select></div>
                            <div class="col-md-6 button"><label class="form-label">Lotação</label><input value="<?php echo $veiculo['lotacao'] ?>" class="form-control" type="text" name="lotacao" id="lotacao"></div>
                        </div>
                    </div>

                    <div class="mb-3"><label class="form-label" for="esp32">Esp32</label><select class="form-select" name="esp32" id="esp32">
                            <optgroup label="Selecione o dispositivo">
                                <!-- <option value="1" selected="">João</option> -->                                
							<?php 
								$iots = $ct_iot->listar();
								foreach ($iots as $iot) : ?>
									<option value="<?php echo $iot['id']; ?>"><?php echo $iot['id']; ?></option>
                            <?php endforeach; ?>
                            </optgroup>
                        </select>
                    </div>

                    <!--
					<div class="mb-3"><label class="form-label" for="message">Data de Emissão</label><input class="form-control" id="data_emissao" type="date"></div>
                    -->
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
	<script src="assets/js/jquery-3.6.0.min.js"></script>
	
	<script>
        $(document).ready(function() {            
            $('#marca-dropdown').on('change', function() {
                var marca_id = this.value;
                $.ajax({
                    url: "controller/modeloController.php",
                    type: "POST",
                    data: {
                        marca_id: marca_id
                    },
                    cache: false,
                    success: function(result){
                        $("#modelo-dropdown").html(result);						
                    }
                });
            });
        });
		/*
		$(document).ready(function() {            
            $('#modelo-dropdown').on('change', function() {
                var modelo_id = this.value;
                $("#modeloId").val(modelo_id);
            });
        });
		*/
    </script>
	
</body>

</html>