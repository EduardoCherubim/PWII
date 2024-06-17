<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilologin.css">
    <title>Cadastro</title>
</head>
<body>
    <div class="box">
        <form action="salvarCadastro.php" method="post">
            <fieldset>
                <h2>Se cadastre</h2>
                <div class="inputBox">
                    <input type="text" name="txNome" id="txNome" class="inputUser" required>
                    <label class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="email" name="txEmail" id="txEmail" class="inputUser" required>
                    <label class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="txSenha" id="txSenha" class="inputUser" required>
                    <label class="labelInput">Senha</label>
                </div>
                <br>
                <input type="submit" name="submit" id="submit" value="enviar"> 
            </fieldset>
        </form>
    </div>
</body>
</html>