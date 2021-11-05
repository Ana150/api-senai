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

if ($acao == "readId") {
    $cod_pessoa = $_REQUEST["cod_pessoa"];
    readId($cod_pessoa, $conn);
}

if ($acao == "create") {
    $nome = $_REQUEST['nome'];
    $sobrenome = $_REQUEST['sobrenome'];
    $email = $_REQUEST['email'];
    $celular = $_REQUEST['celular'];
    $fotografia = $_REQUEST['fotografia'];

    create($nome, $sobrenome, $email, $celular, $fotografia, $conn);
}

if ($acao == "update") {
    $cod_pessoa = $_REQUEST['cod_pessoa'];
    $nome = $_REQUEST['nome'];
    $sobrenome = $_REQUEST['sobrenome'];
    $email = $_REQUEST['email'];
    $celular = $_REQUEST['celular'];
    $fotografia = $_REQUEST['fotografia'];

    update($cod_pessoa, $nome, $sobrenome, $email, $celular, $fotografia, $conn);
}

if ($acao == "delete") {
    $cod_pessoa = $_REQUEST['cod_pessoa'];

    delete($cod_pessoa, $conn);
}
?>