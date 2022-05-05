<?php
    require "header.php";
    require_once("controller/condutorController.php");
    $ct_condutor = new CondutorController();
?>

    <main class="page hire-me-page">
        <section class="portfolio-block hire-me">
            <div class="container">
                <div class="heading">
                    <h2>EDITAR CONDUTOR</h2>
                </div>
                
                <?php $condutor = $ct_condutor->getByPk($_GET['pkCondutor']); ?>

                <form method="post" action="controller/condutorController.php?action=update">
                    <input type="hidden" value="<?php echo $condutor['pk_condutor'] ?>" name="pk_condutor" />
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
    
    <?php
require "footer.php";
?>