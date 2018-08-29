<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8"/>
        <!-- possível css aqui --> <link rel="stylesheet" type="text/css" href="/website/other.css"/>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
        <script>
            function funcao() {
                window.location.href = window.location.href + "&confirma=true";
            }
        </script>
        <title>Excluir Cliente</title>
    </head>
    <body>
        <header>
            <a href="javascript:history.back()"><img src="imagens/seta.png" id="setaretorno"></a>
        </header>
        <?php
            error_reporting(-1);
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);

            include $_SERVER['DOCUMENT_ROOT'] . "/dal/DALClientes.php";
            include $_SERVER['DOCUMENT_ROOT'] . "/modelo/clientes.php";

            $dalcliente = new DALClientes();
            $modelocliente = $dalcliente->retornar($_GET['ID']);

            if (isset($_GET['confirma'])) {
                $dalcliente->remover($modelocliente);
                header("Location:website/clientes.php");
            }
        ?>
        <main>
            <h1>Excluir Cliente</h1>
            <?php
            echo $modelocliente->Nome;
            ?>
            <br/><br/>
            <button onclick="funcao();">Confirma</button>
        </main>
    </body>
</html>