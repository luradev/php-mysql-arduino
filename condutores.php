<?php
/* @var Database $db */
require "header.php";
include 'controller/condutorController.php';

?>

<main class="page projects-page">
    <section class="portfolio-block projects-cards">
        <div class="container">
            <div class="heading">
                <h2>LISTA DE CONDUTORES</h2>
            </div>
	
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table my-0" id="dataTable">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Sexo</th>
                            <th>Nº do Bilhete de Identidade</th>
                            <th>Data de Nascimento</th>
                            <th>Opções</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($condutorDao->getCondutores() as $condutor) : ?>
								<tr>
									<td><?php echo $condutor['nome']; ?></td>
									<td><?php echo $condutor['sexo']; ?></td>
									<td><?php echo $condutor['num_bi']; ?></td>
									<td><?php echo $condutor['data_nascimento']; ?></td>
									<td>$</td>
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
/* @var Database $db */
require "footer.php";
?>