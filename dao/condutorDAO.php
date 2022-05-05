<?php

//require_once("model/conexao.php");
require_once $_SERVER['DOCUMENT_ROOT'].'/itel/model/conexao.php';

class CondutorDAO {

    private $mysqli;

    public function __construct() {   
        $this->mysqli = Banco::getInstance()->getConnection();
    }

    public function salvar($condutor) {

        $stmt = $this->mysqli->prepare("INSERT INTO condutor (nome, data_nascimento, num_bi, sexo)
                                        VALUES (?,?,?,?)"); 
        
        if($stmt == FALSE) 
			printf("Error: %s.\n", $this->mysqli->error);
        else {
            $nome = $condutor->getNome();
            $data_nascimento = $condutor->getDataNascimento();
            $num_bi = $condutor->getNumBI();
            $sexo = $condutor->getSexo();
            $stmt->bind_param('ssss', $nome, $data_nascimento, $num_bi, $sexo);
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

    public function getCondutores() {
        $query = $this->mysqli->query("SELECT * FROM condutor");
        while ($row = $query->fetch_assoc()) {
           $result[] = $row;
        }
        return $result;
    }

    public function deletar($id) {
        if($this->mysqli->query("DELETE FROM condutor WHERE pk_condutor = ".$id.";") == TRUE) {
            return true;
        }
        else return false;
    }

    public function getByPk($id) {
        $query = $this->mysqli->query("SELECT * FROM condutor WHERE pk_condutor = ".$id.";");
        if($query->num_rows == 0) 
			return false;
        else 
			return $query->fetch_assoc();
    }
}

?>