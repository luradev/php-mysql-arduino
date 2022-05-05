<?php
/* @var Database $db */
require "header.php";

require_once("controller/veiculoController.php");
$bean = new VeiculoController();

?>

<main class="page projects-page">
    <section class="portfolio-block projects-cards">
        <div class="container">
            <div class="heading">
                <h2>LISTA DE VEICULOS</h2>
            </div>

            <div>
                <a href="add-veiculo.php" style="float:left;"><button class="btn btn-success"><i class="fas fa-plus"></i> Novo</button></a>
            </div>

            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <br />
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

                                    <a href="edit-veiculo.php?pkVeiculo=<?php echo $veiculo['pk_veiculo'] ?>">
                                        <button class="btn btn-primary mr-2">
                                            <i class="fa fa-pencil text-white" aria-hidden="true"></i>
                                        </button>
                                    </a>


                                    <a href="veiculos.php?action=excluir&id=<?php echo $veiculo['pk_veiculo'] ?>" onclick="confirm('Desejas realmente eliminar este registo?')">
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