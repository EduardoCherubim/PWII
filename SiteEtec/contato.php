<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
        }
        div {
            margin-top: 1%;
        }
        .mensagem{
            width: 300px;
            height: 150px;
        }
        .centro{
            align-items: center;
            padding-left: 600px;
            position:relative;
            top: 30%;
            width: 99%;
        }
        .texto{
            border-radius: 15px;
        }
        .mensagem{
            border-radius: 7px;
        }
    </style>
    
</head>
<body>
        <?php include'header.php'?>

        <div class="centro">
            <form action="salvarContato.php" method="post">
                <div>
                    <label class="etiqueta">Nome</label>
                    <input class="texto" type="text" name="txNome" />
                </div>

                <div>
                    <label class="etiqueta">E-mail</label>
                    <input class="texto" type="email" name="txEmail" />
                </div>

                <div>
                    <label class="etiqueta">Assunto</label>
                    <input class="texto" type="text" name="txAssunto" />
                </div>

                <div>
                    <label class="etiqueta">Mensagem</label> <br>
                    <textarea class="mensagem" name="txMensagem"> </textarea>
                </div>

                <div>
                    <input class="butao" type="submit" value="enviar">
                </div>
            </form>
        </div>
        <?php include('footer.php');?>
</body>
</html>