<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/itel/model/conexao.php';

class VeiculoDAO {

    private $mysqli;

    public function __construct() {   
        $this->mysqli = Banco::getInstance()->getConnection();
    }

    public function salvar($veiculo) {
        
        $query = "INSERT INTO veiculo (matricula, num_motor, num_quadro, cor, fk_condutor, combustivel, lotacao, fk_modelo, fk_iotsinistro)
        VALUES (?,?,?,?,?,?,?,?,?)";

        $stmt = $this->mysqli->prepare($query); 
        
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
            $iotsinistro = $veiculo->getIotsinistro();
            $stmt->bind_param('ssssssiii', $matricula, $num_motor, $num_quadro, $cor, $condutor, $combustivel, $lotacao, $modelo, $iotsinistro);
            return $stmt->execute();
        }
    }

    public function update($veiculo) {

        $query = "UPDATE veiculo SET matricula = ?, num_motor = ? , num_quadro = ?, cor = ?, combustivel = ?, lotacao = ?, fk_modelo = ?, fk_iotsinistro = ?
        WHERE pk_condutor = ?";
        
        $stmt = $this->mysqli->prepare($query);
        
        if($stmt == FALSE) printf("Error: %s.\n", $this->mysqli->error);
        else {
            $matricula = $veiculo->getMatricula();
            $num_motor = $veiculo->getNumMotor();
            $num_quadro = $veiculo->getNumQuadro();
            $cor = $veiculo->getCor();
			$condutor = $veiculo->getCondutor();
			$combustivel = $veiculo->getCombustivel();
			$lotacao = $veiculo->getLotacao();
			$modelo = $veiculo->getModelo();
            $iotsinistro = $veiculo->getIotsinistro();
            $id = $veiculo->getPk();
            //echo $id . '';
            $stmt->bind_param('sssssiiiii', $matricula, $num_motor, $num_quadro, $cor, $combustivel, $lotacao, $condutor, $modelo, $iotsinistro, $id);
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

    /*
    public function getByPk($id) {
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
    }*/

    
    public function getByPk($id) {
        $query = $this->mysqli->query("SELECT * FROM veiculo WHERE pk_veiculo = ".$id.";");
        if($query->num_rows == 0) 
			return false;
        else 
			return $query->fetch_assoc();
    }
    
}

?>