<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio2</title>
    <style>
        #pares{
            background-color: blue;
            color: white;
            width: 100px;
        }
        #impares{
            background-color: black;
            color: red;
            width: 100px;
        }
    </style>
</head>
<body>
    <?php 
    for($i = 1;$i <= 100;$i++){
        if($i % 2 == 0){
            echo "<p id='pares'>".$i."</p>";
        }else{
            echo "<p id='impares'>".$i."</p>";
        }
    }
    ?>
</body>
</html>
