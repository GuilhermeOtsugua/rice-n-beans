<?php
error_reporting(-1);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

include $_SERVER['DOCUMENT_ROOT'] . "/dal/DALFuncionarios.php";
include $_SERVER['DOCUMENT_ROOT'] . "/modelo/Funcionarios.php";

$dalfuncionario = new DALFuncionarios();
$modelofuncionario = new Funcionarios(null, $_POST["Nome"], $_POST["Telefone"], $_POST["Identidade"], $_POST["CLT"], $_POST["Salario"], $_POST["Motorista"], $_POST["Tecnico"], $_POST["Observacao"]);

$dalfuncionario->adicionar($modelofuncionario);

header("Location:website/funcionarios.php");
?>