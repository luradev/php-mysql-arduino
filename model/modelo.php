<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/itel/model/marca.php';

class Modelo {
    
	private $pk;
    private $nome;
    private $fkMarca;    
	
	public function __construct(){
		$this->fkMarca = new Marca();
	}

	public function setPk($pk) {
        $this->pk = $pk;
    } 

    public function getPk() {
        return $this->pk;
    }
	
    public function setNome($nome) {
        $this->nome = $nome;
    } 

    public function getNome() {
        return $this->nome;
    }

    public function setFkMarca($fkMarca) {        
		$this->fkMarca->setPk($fkMarca);
    } 

    public function getFkMarca() {
        return $this->fkMarca;
    }

    
}

?>