<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8"/>
        <!-- possível css aqui --> <link rel="stylesheet" type="text/css" href="/website/other.css"/>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
        <script>
            function check() {
                    document.getElementById('2').checked = false;
            }
            function check2() {
                    document.getElementById('1').checked = false;
            }
        </script>
        <title>Adicionar Clientes</title>
    </head>
    <body>
        <header>
            <a href="javascript:history.back()"><img src="../imagens/seta.png" id="setaretorno"></a>
        </header>
        <main>
            <h1>
                Adicionar Cliente
            </h1>
            <form action="../adicionarcliente_conexao.php" id="adicionar" class="janela" method="post">
                    Nome: <input type="text" name="Nome" placeholder="Nome" title="Nome" maxlength="50" /><br/>
                    Telefone: <input type="text" name="Telefone" placeholder="Telefone" title="Telefone" maxlength="20" /><br/>
                    Cidade: <input type="text" name="Cidade" placeholder="Cidade" title="Cidade" maxlength="30" /><br/>
                    Estado: <input type="text" name="Estado" placeholder="Estado" title="Estado" maxlength="2" /><br/>
                    Endereço: <input type="text" name="Endereço" placeholder="Endereço" title="Endereço" maxlength="100" /><br/>
                    <input type="radio" id="1" checked=true onclick="check();"/> CPF <input type="radio" id="2" onclick="check2();"/> CNPJ: <input type="text" name="CPFouCNPJ" placeholder="CPF/CNPJ" title="CPF/CNPJ" maxlength="30" /><br/>
                    E-mail: <input type="text" name="Email" placeholder="Email" title="Email" maxlength="50" /><br/>
                    <br/>
                    <input type="submit" name="button" value="Adicionar"/>
            </form>
        </main>
    </body>
</html>