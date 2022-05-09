<?php

//require_once("model/conexao.php");
require_once $_SERVER['DOCUMENT_ROOT'].'/itel/model/conexao.php';

class IotDAO {

    private $mysqli;

    public function __construct() {   
        $this->mysqli = Banco::getInstance()->getConnection();
    }
    
    public function getIots() {
        $query = $this->mysqli->query("SELECT * FROM iotsinistro");
        while ($row = $query->fetch_assoc()) {
           $result[] = $row;
        }
        return $result;
    }

    
    public function getById($id) {
        $query = $this->mysqli->query("SELECT * FROM marca WHERE pk_marca = ".$id.";");
        if($query->num_rows == 0) 
			return false;
        else 
			return $query->fetch_assoc();
    }
}

?>