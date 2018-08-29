<?php
include_once "Base.php";

class DALClientes extends Base {
  public function __construct() {
    parent::__construct();
  }
  
  public function retornarTodos() {
    $produtos = array();

    foreach($linhas = $this->Read('clientes', []) as $linha) {
      $produto = new Clientes($linha["ID"], $linha["Nome"], $linha["Telefone"], $linha["Cidade"], $linha["Estado"], $linha["Endereco"], $linha["CPFouCNPJ"], $linha["Email"]);
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

    foreach($linhas = $this->Read('clientes', [], ['id'], [$id]) as $linha) {
      $clientes = new Clientes($linha["ID"], $linha["Nome"], $linha["Telefone"], $linha["Cidade"], $linha["Estado"], $linha["Endereco"], $linha["CPFouCNPJ"], $linha["Email"]);
    }

    return $clientes;
  }

  public function adicionar($cliente) {
    $this->Create('clientes', array_keys(array_filter((array)$cliente)), array_values(array_filter(get_object_vars($cliente))));
  }

  public function atualizar($clientes) {
    $arrayDiff = array_diff((array)$clientes, (array)$this->retornar($clientes->ID));

    if (!empty($arrayDiff)) {
      $this->Update('clientes', array_keys(array_filter($arrayDiff)), array_values(array_filter($arrayDiff)), ["ID"], [$clientes->ID]);
    }
  }
  
  public function remover($clientes) {
    $this->Delete('clientes', ["ID"], [$clientes->ID]);
  }
}
?>