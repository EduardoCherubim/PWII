<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Exercicio1</title>
</head>
<body>
    <h1>Exercicio1</h1>
    <br>
    <h6>Triangulo-1</h6>
    <h6>Quadrado-2</h6>
    <h6>Circulo-3</h6>
    <h6>Losango-4</h6>
    <?php



    $v=4;
    
    if($v==1){
      echo "<br> <p>Triangulo</p> <img src='image/transferir.png'";
    }
    

    else if($v==2){
    echo "<br> <p>Quadrado</p> <img src='image/images.png'";
    }

   else if($v==3){
    echo "<br> <p>Circulo</p> <img src='image/NOOSSA.png'";
   }

   else if($v==4){
    echo "<br> <p>Losango</p> <img src='image/losan.png'";
   }

   else{
    echo "Valor inválido";
   }

    ?>

    <a href="./index.php">Voltar</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
