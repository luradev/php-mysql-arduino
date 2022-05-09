<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/itel/model/conexao.php';

$mysqli = Banco::getInstance()->getConnection();

$sql = "SELECT * FROM acidente WHERE visto = 0";
$result = $mysqli->query($sql);

$rw = mysqli_num_rows($result);
if($rw > 0){
    echo "<span>".' '.$rw."</span>";
}

$mysqli->close();

?>