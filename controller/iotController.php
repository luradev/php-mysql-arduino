<?php

//require_once("dao/condutorDAO.php");
//require_once("model/condutor.php");

require_once $_SERVER['DOCUMENT_ROOT'].'/itel/dao/iotDAO.php';


class IotController {

    private $iotDao;	

    public function __construct() {
        $this->iotDao = new IotDAO();
    }
    
    public function listar() {
        //$lista_condutores = $this->condutorDao->getCondutores();
		$row = $this->iotDao->getIots();
				
		return $row;
    }       

}



?>