<?php

class Condutor {
    
	private $pk;
    private $nome;
    private $data_nascimento;
    private $num_bi;
    private $sexo;
	

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

    public function setDataNascimento($data_nascimento) {
        $this->data_nascimento = $data_nascimento;
    } 

    public function getDataNascimento() {
        return $this->data_nascimento;
    }

    public function setNumBI($num_bi) {
        $this->num_bi = $num_bi;
    } 

    public function getNumBI() {
        return $this->num_bi;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
    } 

    public function getSexo() {
        return $this->sexo;
    }
}

?>