<?php
    require "header.php";
	require_once("controller/acidenteController.php");
	$bean = new AcidenteController();
?>

    <main class="page projects-page">
        <section class="portfolio-block projects-cards">
            <div class="container">
                <div class="heading">
                    <h2>ACIDENTES RECENTES</h2>
                </div>							
                
				<div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
					<br/>
                    <table class="table table-striped table my-0" id="dataTable">
                        <thead>
                            <tr>
                                <th>Veiculo</th>
                                <th>Matricula</th>
                                <th>Data-Acidente</th>
                                
                            </tr>
                        </thead>
                        <tbody>
							<?php 
							$acidentes = $bean->listar();
							foreach ($acidentes as $acidente) : ?>
								<tr>
									<td><?php echo $acidente['nome']; ?></td>
									<td><?php echo $acidente['matricula']; ?></td>
									<td><?php echo $acidente['data_acidente']; ?></td>
									
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

<?php
require "footer.php";
?>
    