<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio2</title>
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