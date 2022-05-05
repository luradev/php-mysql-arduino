<?php

class Marca {
    
	private $pk;
    private $nome;    
	

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
    
}

?>