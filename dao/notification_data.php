<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/itel/model/conexao.php';

$mysqli = Banco::getInstance()->getConnection();

$sql = "SELECT * FROM notificacao";
$result = $mysqli->query($sql);

$rw = mysqli_num_rows($result);
echo ' '.$rw;

$mysqli->close();

?>