<?php

//require_once("dao/condutorDAO.php");
//require_once("model/condutor.php");

require_once $_SERVER['DOCUMENT_ROOT'].'/itel/dao/acidenteDAO.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/itel/model/acidente.php';

class AcidenteController {

    private $acidenteDao;
	public $lista_acidente;

    public function __construct() {
        $this->acidenteDao = new AcidenteDAO();
    }    

    public function update($visto) {

        $acidente = new Acidente();
        $acidente->setVisto($visto);
        
        if($this->acidenteDao->update($acidente)) {
            //echo "<script>alert('Registro editado com sucesso!');document.location='../view/index.php'</script>";
        }else{
            echo "<script>alert('Erro ao atualizar registro!');history.back()</script>";
        }
        
    }

    public function listar() {
        
		$row = $this->acidenteDao->getAcidentes();
        $this->update(1);

		return $row;
    }    

    public function getByPk($id) {
        $result = $this->condutorDao->getByPk($id);
        return $result;
    }    

}


$AcidenteController = new AcidenteController();

if(isset($_GET['action']) && $_GET['action'] == 'salvar') {
    //$AcidenteController->salvar();
}

else if(isset($_GET['action']) && $_GET['action'] == 'update') {
    //$AcidenteController->update();
}

else if(isset($_GET['action']) && $_GET['action'] == 'excluir') {
    $id = $_GET["id"];
    //$AcidenteController->deletar($id);
}

?>