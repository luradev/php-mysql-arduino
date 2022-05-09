<?php
require "header.php";
?>

<main class="page hire-me-page">
    <section class="portfolio-block hire-me">
        <div class="container">
            <div class="heading">
                <h2>REGISTRAR CONDUTOR</h2>
            </div>
            <form method="post" action="controller/condutorController.php?action=salvar">
                <div class="mb-3"><label class="form-label" for="email">Nome</label><input class="form-control" type="text" name="nome" id="nome"></div>
                <div class="mb-3"><label class="form-label" for="email">Sexo</label><select class="form-select" name="sexo" id="sexo">
                        <optgroup label="Selecione o gênero">
                            <option value="Masculino" selected="">Masculino</option>
                            <option value="Feminino">Feminino</option>
                        </optgroup>
                    </select></div>
                <div class="mb-3"><label class="form-label" for="message">Data de Nascimento</label><input class="form-control" name="data_nascimento" id="data_nascimento" type="date"></div>
                <div class="mb-3"><label class="form-label" for="email">BI</label><input class="form-control" type="text" name="num_bi" id="bi"></div>
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