<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8"/>
        <!-- possível css aqui --> <link rel="stylesheet" type="text/css" href="/website/other.css"/>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
        <title>Editar Cliente</title>
    </head>
    <body>
        <header>
            <a href="javascript:history.back()"><img src="../imagens/seta.png" id="setaretorno"></a>
        </header>
        <main>
        <?php
            //Includes dos outros arquivos
            //error_reporting(-1);
            //ini_set('display_errors', 1);
            //ini_set('display_startup_errors', 1);

            include $_SERVER['DOCUMENT_ROOT'] . "/dal/DALClientes.php";
            include $_SERVER['DOCUMENT_ROOT'] . "/modelo/clientes.php";

            $dalcliente = new DALClientes();
            $modelocliente = $dalcliente->retornar($_GET['ID']);
        ?>

            <h1>Editar Cliente</h1>
            <form action="../editarcliente_conexao.php" id="editar" class="janela" method="post">
                    ID: <input type="text" name="ID" placeholder="ID" title="ID" value="<?php echo $modelocliente->ID ?>" readonly/><br/>
                    Nome: <input type="text" name="Nome" placeholder="Nome" title="Nome" maxlength="50" value="<?php echo $modelocliente->Nome ?>" /><br/>
                    Telefone: <input type="text" name="Telefone" placeholder="Telefone" title="Telefone" maxlength="20" value="<?php echo $modelocliente->Telefone?>" /><br/>
                    Cidade: <input type="text" name="Cidade" placeholder="Cidade" title="Cidade" maxlength="30" value="<?php echo $modelocliente->Cidade?>" /><br/>
                    Estado: <input type="text" name="Estado" placeholder="Estado" title="Estado" maxlength="2" value="<?php echo $modelocliente->Estado?>" /><br/>
                    Endereço: <input type="text" name="Endereço" placeholder="Endereço" title="Endereço" maxlength="100" value="<?php echo $modelocliente->Endereco?>" /><br/>
                    CPF ou CNPJ: <input type="text" name="CPFouCNPJ" placeholder="CPF/CNPJ" title="CPF/CNPJ" maxlength="30" value="<?php echo $modelocliente->CPFouCNPJ?>" /><br/>
                    E-mail: <input type="text" name="Email" placeholder="Email" title="Email" maxlength="50" value="<?php echo $modelocliente->Email?>" /><br/>
                    <br/>

                    <input type="submit" name="button" value="Editar"/>
            </form>
        </main>
    </body>
</html>