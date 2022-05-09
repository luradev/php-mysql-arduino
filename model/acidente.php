<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/itel/model/veiculo.php';

class Acidente {
    
	private $pk;
    private $data_acidente;
    private $localizacao;
    private $visto;
    private $descricao;
    private $fkVeiculo;    
	
	public function __construct(){
		$this->fkVeiculo = new Veiculo();
	}

	public function setPk($pk) {
        $this->pk = $pk;
    } 

    public function getPk() {
        return $this->pk;
    }
	
    public function setDataAcidente($data_acidente) {
        $this->nome = $data_acidente;
    } 

    public function getDataAcidente() {
        return $this->data_acidente;
    }

    public function setLocalizacao($localizacao) {        
		$this->localizacao = $localizacao;
    } 

    public function getLocalizacao() {
        return $this->localizacao;
    }

    public function setVisto($visto) {        
		$this->visto = $visto;
    } 

    public function getVisto() {
        return $this->visto;
    }

    public function setDescricao($descricao) {        
		$this->descricao = $descricao;
    } 

    public function getDescricao() {
        return $this->descricao;
    }

    public function setFkVeiculo($fkVeiculo) {        
		$this->fkVeiculo->setPk($fkVeiculo);
    } 

    public function getFkVeiculo() {
        return $this->fkVeiculo;
    }
    
}

?>