<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/itel/model/conexao.php';

class VeiculoDAO {

    private $mysqli;

    public function __construct() {   
        $this->mysqli = Banco::getInstance()->getConnection();
    }

    public function salvar($veiculo) {

        $stmt = $this->mysqli->prepare("INSERT INTO veiculo (matricula, num_motor, num_quadro, cor, fk_condutor, combustivel, lotacao, fk_modelo)
                                        VALUES (?,?,?,?,?,?,?,?)"); 
        
        if($stmt == FALSE) 
			printf("Error: %s.\n", $this->mysqli->error);
        else {
            $matricula = $veiculo->getMatricula();
            $num_motor = $veiculo->getNumMotor();
            $num_quadro = $veiculo->getNumQuadro();
            $cor = $veiculo->getCor();
			$condutor = $veiculo->getCondutor();
			$combustivel = $veiculo->getCombustivel();
			$lotacao = $veiculo->getLotacao();
			$modelo = $veiculo->getModelo();
            $stmt->bind_param('ssssssii', $matricula, $num_motor, $num_quadro, $cor, $condutor, $combustivel, $lotacao, $modelo);
            return $stmt->execute();
        }
    }

    public function update($condutor) {

        $stmt = $this->mysqli->prepare("UPDATE condutor SET nome = ?, data_nascimento = ? , num_bi = ?, sexo = ?
                                        WHERE pk_condutor = ?");
        
        if($stmt == FALSE) printf("Error: %s.\n", $this->mysqli->error);
        else {
            $nome = $condutor->getNome();
            $data_nascimento = $condutor->getDataNascimento();
            $num_bi = $condutor->getNumBI();
            $sexo = $condutor->getSexo();
            $id = $condutor->getPk();
            echo $id . '';
            $stmt->bind_param('ssssi', $nome, $data_nascimento, $num_bi, $sexo, $id);
            return $stmt->execute();
        }
    }

    public function getVeiculos() {
        $query = $this->mysqli->query("SELECT * FROM veiculo");
        while ($row = $query->fetch_assoc()) {
           $result[] = $row;
        }
        return $result;
    }

    public function getAllVeiculos() {
        $sql = "SELECT ve.pk_veiculo, mo.nome as modelo, ve.matricula, ve.cor, ve.lotacao, co.nome as condutor_nome
        from veiculo ve
        INNER JOIN condutor co
        ON ve.fk_condutor = co.pk_condutor
        INNER JOIN modelo mo
        ON ve.fk_modelo = mo.pk_modelo";

        $query = $this->mysqli->query($sql);
        while ($row = $query->fetch_assoc()) {
           $result[] = $row;
        }
        return $result;
    }

    public function deletar($id) {
        if($this->mysqli->query("DELETE FROM veiculo WHERE pk_veiculo = ".$id.";") == TRUE) {
            return true;
        }
        else return false;
    }

    public function getById($id) {
        $query = $this->mysqli->query("SELECT * FROM condutor WHERE pk_condutor = ".$id.";");
        if($query->num_rows == 0) 
			return false;
        else 
			return $query->fetch_assoc();
    }
}

?>