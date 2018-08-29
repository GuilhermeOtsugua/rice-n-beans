<?php
error_reporting(-1);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

include $_SERVER['DOCUMENT_ROOT'] . "/dal/DALClientes.php";
include $_SERVER['DOCUMENT_ROOT'] . "/modelo/clientes.php";

$dalcliente = new DALClientes();
$modelocliente = new Clientes($_POST['ID'], $_POST['Nome'], $_POST['Telefone'], $_POST['Cidade'], $_POST['Estado'], $_POST['Endereço'], $_POST['CPFouCNPJ'], $_POST['Email']);

$dalcliente->atualizar($modelocliente);

header("Location:website/clientes.php");
?>