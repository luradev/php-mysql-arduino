<?php
require "header.php";

require_once("controller/condutorController.php");
$bean = new CondutorController();

?>

<main class="page projects-page">
    <section class="portfolio-block projects-cards">
        <div class="container">
            <div class="heading">
                <h2>LISTA DE CONDUTORES</h2>
            </div>

            <div>
                <a href="add-condutor.php" style="float:left;"><button class="btn btn-success"><i class="fas fa-plus"></i> Novo</button></a>
            </div>

            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <br />
                <table class="table table-striped table my-0" id="dataTable">
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
                        <?php
                        $condutores = $bean->listar();
                        foreach ($condutores as $condutor) : ?>
                            <tr>
                                <td><?php echo $condutor['nome']; ?></td>
                                <td><?php echo $condutor['sexo']; ?></td>
                                <td><?php echo $condutor['num_bi']; ?></td>
                                <td><?php echo $condutor['data_nascimento']; ?></td>
                                <td>
                                    <!--
                                    <a href="edit-condutor.php?pkCondutor=<?php echo $condutor['pk_condutor'] ?>">
                                        <button class="btn btn-primary mr-2">
                                            <i class="fa fa-pencil text-white" aria-hidden="true"></i>
                                        </button>
                                    </a>
                                    -->
                                    <a href="edit-condutor.php?pkCondutor=<?php echo $condutor['pk_condutor'] ?>" style="float:left;"><button class="btn btn-primary"><i class="fa fa-pencil"></i></button></a>

                                    <a href="lista-condutores.php?action=excluir&id=<?php echo $condutor['pk_condutor'] ?>" onclick="confirm('Desejas realmente eliminar este registo?')">
                                        <button class="btn btn-danger">
                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                        </button>
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

<?php
require "footer.php";
?>