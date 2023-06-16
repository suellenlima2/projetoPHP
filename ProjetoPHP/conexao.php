<?php

$host = "localhost";
$bancodedados = "giraudeoportunidades";
$user = "root";
$password = "@Suellen08112005";

$conexao = new mysqli($host, $user, $password, $bancodedados);

if ($conexao->connect_errno) {
    echo "Falha na conexão: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;

}// else {
  //  echo "Conexão realizada com sucesso!";
//}

?>