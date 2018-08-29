<?php
error_reporting(-1);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

include $_SERVER['DOCUMENT_ROOT'] . "/dal/DALFuncionarios.php";
include $_SERVER['DOCUMENT_ROOT'] . "/modelo/funcionarios.php";
        
$dalfuncionarios = new DALFuncionarios();
$eisto = new Funcionarios($_POST['ID'], $_POST['Nome'], $_POST['Telefone'], $_POST['Identidade'], $_POST['CLT'], $_POST['Salario'], $_POST['Motorista'],$_POST['Tecnico'], $_POST['Observacao']);

$dalfuncionarios->atualizar($eisto);

header("Location:website/funcionarios.php");
?>