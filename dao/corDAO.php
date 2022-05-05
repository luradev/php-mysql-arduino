<?php

//require_once("model/conexao.php");
require_once $_SERVER['DOCUMENT_ROOT'].'/itel/model/conexao.php';

class CorDAO {

    private $mysqli;

    public function __construct() {   
        $this->mysqli = Banco::getInstance()->getConnection();
    }        

    public function getCores() {
        $query = $this->mysqli->query("SELECT * FROM cor ORDER BY nome ASC");
        while ($row = $query->fetch_assoc()) {
           $result[] = $row;
        }
        return $result;
    }
    
}

?>