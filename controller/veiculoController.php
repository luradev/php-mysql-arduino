<?php
/*
require_once("../dao/veiculoDAO.php");
require_once("../model/veiculo.php");
require_once("../model/condutor.php");
*/

require_once $_SERVER['DOCUMENT_ROOT'].'/itel/dao/veiculoDAO.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/itel/model/veiculo.php';


class VeiculoController {

    private $veiculoDao;

    public function __construct() {
        $this->veiculoDao = new VeiculoDAO();
    }


    public function salvar() {		
		
        $veiculo = new Veiculo();
		$veiculo->setModelo($_POST['modelo']);
        $veiculo->setMatricula($_POST['matricula']);
        $veiculo->setNumMotor($_POST['num_motor']);
        $veiculo->setNumQuadro($_POST['num_quadro']);
        $veiculo->setCor($_POST['cor']);				
		
		$veiculo->setCondutor($_POST['condutor']);
		$veiculo->setCombustivel($_POST['combustivel']);
		$veiculo->setLotacao($_POST['lotacao']);
						
        if($this->veiculoDao->salvar($veiculo)) {
            echo "<script>alert('Registro incluído com sucesso!');document.location='../add-veiculo.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!');history.back()</script>";
        }
        
    }

    public function listar() {
        $row = $this->veiculoDao->getVeiculos();
        /*
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

    public function listarTodos() {
        $row = $this->veiculoDao->getAllVeiculos();
        	
		return $row;
    }

    public function deletar($id) {
        $this->veiculoDao->deletar($id);
        echo "<script>alert('Registro deletado com sucesso!');document.location='veiculos.php'</script>";
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


$VeiculoController = new VeiculoController();

if(isset($_GET['action']) && $_GET['action'] == 'salvar') {
    $VeiculoController->salvar();
}

else if(isset($_GET['action']) && $_GET['action'] == 'update') {
    $VeiculoController->update();
}

else if(isset($_GET['action']) && $_GET['action'] == 'excluir') {
    $id = $_GET["id"];
    $VeiculoController->deletar($id);
}

?>