<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilologin.css">
</head>
<body>  

<a href="index.php"><img src="images/seta.png" width="35px"><a>
<div class="box">
        <form>
            <fieldset>
                    <legend><b>ENTRAR</b></legend>
                     <br>
                    <div class="inputBox"  method="post">
                    <input type="email" name="txEmail" id="txEmail" class="inputUser" required>
                    <label class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                        <input type="password" name="txSenha" id="txSenha" class="inputUser" required>
                        <label class="labelInput">Senha</label>
                    </div>
                    <br>

            <input type="submit" name="submit" id="submit" value="Enviar" href="index.php"> 
            </fieldset>
        </form>
        <center>
        <a href="cadastro.php" style="color:white">Não tenho cadastro</a>
        </center>
    </div>

</body>
</html>