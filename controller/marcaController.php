<?php

//require_once("dao/condutorDAO.php");
//require_once("model/condutor.php");

require_once $_SERVER['DOCUMENT_ROOT'].'/itel/dao/marcaDAO.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/itel/model/marca.php';

class MarcaController {

    private $marcaDao;
	public $lista_marca;

    public function __construct() {
        $this->marcaDao = new MarcaDAO();
    }


    public function salvar() {

        $condutor = new Condutor();
        $condutor->setNome($_POST['nome']);
        $condutor->setDataNascimento($_POST['data_nascimento']);
        $condutor->setSexo($_POST['sexo']);
        $condutor->setNumBI($_POST['num_bi']);
        if($this->condutorDao->salvar($condutor)) {
            echo "<script>alert('Registro incluído com sucesso!');document.location='../condutor.html'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!');history.back()</script>";
        }
        
    }

    public function listar() {
        //$lista_condutores = $this->condutorDao->getCondutores();
		$row = $this->marcaDao->getMarcas();
		
		/*
		$row = $this->condutorDao->getCondutores();
        foreach ($row as $value){
            echo "<tr>";
            echo "<th>".$value['id'] ."</th>";
            echo "<td>".$value['nome'] ."</td>";
            echo "<td>".$value['data_nascimento'] ."</td>";
            echo "<td>".$value['cpf'] ."</td>";
            echo "<td>".$value['ocupacao'] ."</td>";
            echo "<td><a class='btn btn-warning' href='editar_pessoa.php?id=".$value['id']."'>Editar</a>
                      <a class='btn btn-danger' href='../controller/CondutorController.php?action=excluir&id=".$value['id']."'>Excluir</a></td>";
            echo "</tr>";
        }	
		*/
		return $row;
    }

    public function deletar($id) {
        $this->condutorDao->deletar($id);
        echo "<script>alert('Registro deletado com sucesso!');document.location='lista-condutores.php'</script>";
    }

    public function getByPk($id) {
        $result = $this->condutorDao->getByPk($id);
        return $result;
    }

    public function update() {

        $condutor = new Condutor();
        $condutor->setPk($_POST['id']);
        $condutor->setNome($_POST['nome']);
        $condutor->setDataNascimento($_POST['data_nascimento']);
        $condutor->setSexo($_POST['sexo']);
        $condutor->setNumBI($_POST['num_bi']);
        if($this->pessoaDao->update($condutor)) {
            echo "<script>alert('Registro editado com sucesso!');document.location='../view/index.php'</script>";
        }else{
            echo "<script>alert('Erro ao atualizar registro!');history.back()</script>";
        }
        
    }

}


$MarcaController = new MarcaController();

if(isset($_GET['action']) && $_GET['action'] == 'salvar') {
    $CondutorController->salvar();
}

else if(isset($_GET['action']) && $_GET['action'] == 'update') {
    $CondutorController->update();
}

else if(isset($_GET['action']) && $_GET['action'] == 'excluir') {
    $id = $_GET["id"];
    $CondutorController->deletar($id);
}

?>