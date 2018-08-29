<?php
include_once "Base.php";

class DALFuncionarios extends Base {
  public function __construct() {
    parent::__construct();
  }
  
  public function retornarTodos() {
    $produtos = array();

    foreach($linhas = $this->Read('funcionarios', []) as $linha) {
      $produto = new Funcionarios($linha["ID"], $linha["Nome"], $linha["Telefone"], $linha["Identidade"], $linha["CLT"], $linha["Salario"], $linha["Motorista"], $linha["Tecnico"], $linha["Observacao"]);
      array_push($produtos, $produto);
    }
    //var_dump($produtos);
    return count($produtos) < 2 ? $produtos[0] : $produtos;
  }

  /*
  public function retornarPor() {
    $clientes = array();

    foreach($linhas = $this->Read('clientes', [], [''], ['']) as $linha) {
      $ Cliente = intval($value["id"]);
      $produto = new Produto($idProduto);
      array_push($clientes, $produto);
    }

    return count($clientes) < 2 ? $clientes[0] : $clientes;
  }*/

  public function retornar($id) {
    $clientes;

    foreach($linhas = $this->Read('funcionarios', [], ['ID'], [$id]) as $linha) {
      $clientes = new Funcionarios($linha["ID"], $linha["Nome"], $linha["Telefone"], $linha["Identidade"], $linha["CLT"], $linha["Salario"], $linha["Motorista"], $linha["Tecnico"],$linha["Observacao"]);
    }

    return $clientes;
  }

  public function adicionar($cliente) {
    $this->Create('funcionarios', array_keys(array_filter((array)$cliente)), array_values(array_filter(get_object_vars($cliente))));
  }

  public function atualizar($clientes) {
    $arrayDiff = array_diff((array)$clientes, (array)$this->retornar($clientes->ID));

    if (!empty($arrayDiff)) {
      $this->Update('funcionarios', array_keys(array_filter($arrayDiff)), array_values(array_filter($arrayDiff)), ["ID"], [$clientes->ID]);
    }
  }
  
  public function remover($clientes) {
    $this->Delete('funcionarios', ["ID"], [$clientes->ID]);
  }
}
?>