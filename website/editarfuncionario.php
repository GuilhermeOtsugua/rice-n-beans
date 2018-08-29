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

            include $_SERVER['DOCUMENT_ROOT'] . "/dal/DALFuncionarios.php";
            include $_SERVER['DOCUMENT_ROOT'] . "/modelo/funcionarios.php";
                    
            $dalfuncionarios = new DALFuncionarios();
            $eisto = $dalfuncionarios->retornar($_GET['ID']);
        ?>

            <h1>Editar Funcionário</h1>
            <form action="../editarfuncionario_conexao.php" id="editar" class="janela" method="post">
                    ID: <input type="text" name="ID" placeholder="ID" title="ID" value="<?php echo $eisto->ID ?>" readonly/><br/>
                    Nome: <input type="text" name="Nome" placeholder="Nome" title="Nome" maxlength="50" value="<?php echo $eisto->Nome ?>" /><br/>
                    Telefone: <input type="text" name="Telefone" placeholder="Telefone" title="Telefone" maxlength="20" value="<?php echo $eisto->Telefone?>" /><br/>
                    Identidade: <input type="text" name="Identidade" placeholder="Identidade" title="Identidade" maxlength="20" value="<?php echo $eisto->Identidade?>" /><br/>
                    CLT: <input type="text" name="CLT" placeholder="CLT" title="CLT" maxlength="30" value="<?php echo $eisto->CLT?>" /><br/>
                    Salario: <input type="text" name="Salario" placeholder="Salario" title="Salario" maxlength="15" value="<?php echo $eisto->Salario?>" /><br/>
                    Motorista: <input type="text" name="Motorista" placeholder="Motorista" title="Motorista" maxlength="1" value="<?php echo $eisto->Motorista?>" /><br/>
                    Tecnico: <input type="text" name="Tecnico" placeholder="Tecnico" title="Tecnico" maxlength="1" value="<?php echo $eisto->Tecnico?>" /><br/>
                    Observação: <input type="text" name="Observacao" placeholder="Observacao" title="Observacao" maxlength="200" value="<?php echo $eisto->Observacao?>" /><br/>
                    <br/>

                    <input type="submit" name="button" value="Editar"/>
            </form>
        </main>
    </body>
</html>