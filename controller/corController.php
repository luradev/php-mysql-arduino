<?php

//require_once("dao/condutorDAO.php");
//require_once("model/condutor.php");

require_once $_SERVER['DOCUMENT_ROOT'].'/itel/dao/corDAO.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/itel/model/cor.php';

class CorController {

    private $corDao;	

    public function __construct() {
        $this->corDao = new CorDAO();
    }
    
    public function listar() {
        //$lista_condutores = $this->condutorDao->getCondutores();
		$row = $this->corDao->getCores();
				
		return $row;
    }       

}



?>