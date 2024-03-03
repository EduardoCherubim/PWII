<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresa</title>
</head>
<body>
    <?php 
    $salario = 500;
    $aumento = 7.5;
    $valor = ($salario * $aumento)/100;
      
    $funcionario = $salario + $valor;
    echo 'Com o aumento o funcionario receberá '.$funcionario
    ?>
</body>
</html>
