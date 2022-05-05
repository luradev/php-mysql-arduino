<?php

//require_once("model/conexao.php");
require_once $_SERVER['DOCUMENT_ROOT'].'/itel/model/conexao.php';

class ModeloDAO {

    private $mysqli;

    public function __construct() {   
        $this->mysqli = Banco::getInstance()->getConnection();
    }    
    
	
	public function getModelosByMarca($marca) {
        $query = $this->mysqli->query("SELECT * FROM modelo WHERE fk_marca = $marca");
        while ($row = $query->fetch_assoc()) {
           $result[] = $row;
        }
        return $result;
    }    
    
}

?>