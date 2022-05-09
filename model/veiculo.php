<?php

class Veiculo {
    
    private $pk;
    private $matricula;
    private $num_motor;
    private $num_quadro;
    private $cor;
	private $medida_pneu;
	private $cilindrada;
	private $servico;
	private $num_cilindros;
	private $peso_bruto;
	private $tara;
	private $tipo_caixa;
	private $distancia_eixos;
	private $condutor;
	private $combustivel;
	private $modelo;
	private $lotacao;
    private $iotsinistro;
	

    public function setPk($pk) {
        $this->pk = $pk;
    } 

    public function getPk() {
        return $this->pk;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    } 

    public function getMatricula() {
        return $this->matricula;
    }

    public function setNumMotor($num_motor) {
        $this->num_motor = $num_motor;
    } 

    public function getNumMotor() {
        return $this->num_motor;
    }

    public function setNumQuadro($num_quadro) {
        $this->num_quadro = $num_quadro;
    } 

    public function getNumQuadro() {
        return $this->num_quadro;
    }

    public function setCor($cor) {
        $this->cor = $cor;
    } 

    public function getCor() {
        return $this->cor;
    }
	
	public function setCondutor($condutor) {
        $this->condutor = $condutor;
    } 

    public function getCondutor() {
        return $this->condutor;
    }
	
	public function setCombustivel($combustivel) {
        $this->combustivel = $combustivel;
    } 

    public function getCombustivel() {
        return $this->combustivel;
    }
	
	public function setModelo($modelo) {
        $this->modelo = $modelo;
    } 

    public function getModelo() {
        return $this->modelo;
    }
	
	public function setLotacao($lotacao) {
        $this->lotacao = $lotacao;
    } 

    public function getLotacao() {
        return $this->lotacao;
    }

    public function setIotsinistro($iotsinistro) {
        $this->iotsinistro = $iotsinistro;
    } 

    public function getIotsinistro() {
        return $this->iotsinistro;
    }
}

?>