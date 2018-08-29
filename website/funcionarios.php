<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8"/>
        <!-- possível css aqui --> <link rel="stylesheet" type="text/css" href="/website/other.css"/>
        <!-- possível js aqui --> 
        <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
        <title>Funcionários</title>
    </head>
    <body>
        <header>
            <h1><u><a style="color: white;" href="/index.php">SISTEMA SPRINT 1</a></u></h1><a href="/website/clientes.php"><h1  >Clientes</h1></a><a href="/website/funcionarios.php"><h1 id="activado">Funcionários</h1></a>
        </header>

            <h1 style="font-size: 40pt;">Funcionários <a href="adicionarfuncionario.php"><button style="font-size: 15pt;">Adicionar</button></a></h1>

            <table>
                <tr>
                    <td><h3>ID</h3></td><td><h3>Nome</h3></td><td><h3>Telefone</h3></td><td><h3>Identidade</h3></td><td><h3>CLT</h3></td><td><h3>Salario</h3></td><td><h3>Motorista</h3></td><td><h3>Técnico</h3></td><td><h3>Observação</h3></td><td><h3>Ações</h3></td>
                </tr>
                <?php
                    include $_SERVER['DOCUMENT_ROOT'] . "/dal/DALFuncionarios.php";
                    include $_SERVER['DOCUMENT_ROOT'] . "/modelo/funcionarios.php";
                    
                    $dalfuncionarios = new DALFuncionarios();
                    $eisto = $dalfuncionarios->retornartodos();
                    
                    for($i = 1; $i < sizeof($eisto); $i++) {
                        echo('<tr>');
                        echo '<td>' . $eisto[$i]->ID . '</td>' . '<td>' . $eisto[$i]->Nome . '</td>' . '<td>' . $eisto[$i]->Telefone . '</td>' . '<td>' . $eisto[$i]->Identidade . '</td>' . '<td>' . $eisto[$i]->CLT . '</td>' . '<td>' . $eisto[$i]->Salario . '</td>' . '<td>' . $eisto[$i]->Motorista . '</td>' . '<td>' . $eisto[$i]->Tecnico . '</td>' . '<td>' . $eisto[$i]->Observacao . '</td>' . '<td><a href="editarfuncionario.php?ID=' . $eisto[$i]->ID . '">Editar</a> <a href="../excluirfuncionario_conexao.php?ID=' . $eisto[$i]->ID . '">Excluir</a></td>';
                        echo('</tr>');
                    }
                ?>
            </table>
            <?php
            ?>
    </body>
</html>