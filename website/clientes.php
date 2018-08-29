<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8"/>
        <!-- possível css aqui --> <link rel="stylesheet" type="text/css" href="/website/other.css"/>
        <!-- possível js aqui --> 
        <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
        <title>Clientes</title>
    </head>
    <body>
        <header>
            <h1><u><a style="color: white;" href="/index.php">SISTEMA SPRINT 1</a></u></h1><a href="/website/clientes.php"><h1 id="activado" >Clientes</h1></a><a href="/website/funcionarios.php"><h1>Funcionários</h1></a>
        </header>

            <h1 style="font-size: 40pt;">Clientes <a href="adicionarcliente.php"><button style="font-size: 15pt;">Adicionar</button></a></h1>

            <table>
                <tr>
                    <td><h3>ID</h3></td><td><h3>Nome</h3></td><td><h3>Telefone</h3></td><td><h3>Cidade</h3></td><td><h3>Estado</h3></td><td><h3>Endereço</h3></td><td><h3>CPF/CNPJ</h3></td><td><h3>E-mail</h3></td><td><h3>Ações</h3></td>
                </tr>
                <?php
                    include $_SERVER['DOCUMENT_ROOT'] . "/dal/DALClientes.php";
                    include $_SERVER['DOCUMENT_ROOT'] . "/modelo/clientes.php";

                    $dalcliente = new DALClientes();
                    $eisto = $dalcliente->retornartodos();
                    
                    for($i = 1; $i < sizeof($eisto); $i++) {
                        echo('<tr>');
                        echo '<td>' . $eisto[$i]->ID . '</td>' . '<td>' . $eisto[$i]->Nome . '</td>' . '<td>' . $eisto[$i]->Telefone . '</td>' . '<td>' . $eisto[$i]->Cidade . '</td>' . '<td>' . $eisto[$i]->Estado . '</td>' . '<td>' . $eisto[$i]->Endereco . '</td>' . '<td>' . $eisto[$i]->CPFouCNPJ . '</td>' . '<td>' . $eisto[$i]->Email . '</td>' . '<td><a href="editarcliente.php?ID=' . $eisto[$i]->ID . '">Editar</a> <a href="../excluircliente_conexao.php?ID=' . $eisto[$i]->ID . '">Excluir</a></td>';
                        echo('</tr>');
                    }
                ?>
            </table>
            <?php
            ?>
    </body>
</html>