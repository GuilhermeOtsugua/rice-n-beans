<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8"/>
        <!-- possível css aqui --> <link rel="stylesheet" type="text/css" href="/website/other.css"/>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
        <script>
           
        </script>
        <title>Adicionar Clientes</title>
    </head>
    <body>
        <header>
            <a href="javascript:history.back()"><img src="../imagens/seta.png" id="setaretorno"></a>
        </header>
        <main>
            <h1>
                Adicionar Funcionário
            </h1>
            <form action="../adicionarfuncionario_conexao.php" id="adicionar" class="janela" method="post">
                    Nome: <input type="text" name="Nome" placeholder="Nome" title="Nome" maxlength="50" /><br/>
                    Telefone: <input type="text" name="Telefone" placeholder="Telefone" title="Telefone" maxlength="20" /><br/>
                    Identidade: <input type="text" name="Identidade" placeholder="Identidade" title="Identidade" maxlength="20" /><br/>
                    CLT: <input type="text" name="CLT" placeholder="CLT" title="CLT" maxlength="30" /><br/>
                    Salário: <input type="text" name="Salario" placeholder="Salario" title="Salario" maxlength="15" /><br/>
                    Motorista: <input type="text" name="Motorista" placeholder="Motorista" title="Motorista" maxlength="1" /><br/>
                    Tecnico: <input type="text" name="Tecnico" placeholder="Tecnico" title="Tecnico" maxlength="1" /><br/>
                    Observação: <input type="text" name="Observacao" placeholder="Observacao" title="Observacao" maxlength="200" /><br/>
                    <br/>
                    <input type="submit" name="button" value="Adicionar"/>
            </form>
        </main>
    </body>
</html>