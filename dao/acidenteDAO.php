<?php

//require_once("model/conexao.php");
require_once $_SERVER['DOCUMENT_ROOT'].'/itel/model/conexao.php';

class AcidenteDAO {

    private $mysqli;

    public function __construct() {   
        $this->mysqli = Banco::getInstance()->getConnection();
    }    
    
    public function update($acidente) {

        $stmt = $this->mysqli->prepare("UPDATE acidente SET visto = ?");
        
        if($stmt == FALSE) printf("Error: %s.\n", $this->mysqli->error);
        else {
            $visto = $acidente->getVisto();            
            $stmt->bind_param('i', $visto);
            return $stmt->execute();
        }
    }
	
	public function getAcidentes() {
        $sql = "SELECT mo.nome, ve.matricula, ac.data_acidente, ac.localizacao
                FROM acidente ac
                INNER JOIN iotsinistro io
                ON ac.fk_iotsinistro = io.id
                INNER JOIN veiculo ve
                ON io.id = ve.fk_iotsinistro
                INNER JOIN modelo mo 
                ON mo.pk_modelo = ve.fk_modelo
                ORDER BY ac.data_acidente DESC 
                ";
        $query = $this->mysqli->query($sql);
        while ($row = $query->fetch_assoc()) {
           $result[] = $row;
        }
        return $result;
    }
    
    public function getTotalAcidentes() {
        $sql = "SELECT *
                FROM acidente ac                
                ";
        $query = $this->mysqli->query($sql);
        $rw = mysqli_num_rows($query);
        if($rw > 0){
            return $rw;    
        }

        return 0;        
    }

    public function getAcidentesRecentes() {
        $sql = "SELECT *
                FROM acidente ac
                WHERE ac.visto = 0                
                ";
        $query = $this->mysqli->query($sql);
        $rw = mysqli_num_rows($query);
        if($rw > 0){
            return $rw;    
        }

        return 0; 
    }
    
}

?>