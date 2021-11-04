<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Method: GET, POST");
header("Content-Type: application/json");

include("connection.php");
include("crud.php");

$acao = $_REQUEST["acao"];

if ($acao == "read") {
    read($conn);
}

if ($acao == "create") {
    $nome = $_REQUEST['nome'];
    $sobrenome = $_REQUEST['sobrenome'];
    $email = $_REQUEST['email'];
    $celular = $_REQUEST['celular'];
    $fotografia = $_REQUEST['fotografia'];

    create($nome, $sobrenome, $email, $celular, $fotografia, $conn);
}
?>