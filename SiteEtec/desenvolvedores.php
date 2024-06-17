<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desenvolvedores</title>
    <link rel="stylesheet" href="css/estilo.css">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
        }
        h1 {
            text-align: center;
        }
        .centro {
            text-align: center;
            padding-bottom: 40px;
        }
        .card {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            width: 60%;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }

        .container {
            padding: 2px 16px;
        }

        .nav-link{
            color:white;
        }

    </style>
</head>
<body>
    <?php include'header.php'?>

    <div class="container text-center">
        <div class="row">
            <div class="col">
                <div class="card">
                    <img src="images/dev" width=100%>
                    <div class="container">
                        <h4><b>Eduardo Cherubim</b></h4> 
                        <p>Estudante Escola Técnica Estadual de Guaianazes, Cursando Desenvolvimento de Sistemas</p> 
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="images/dev.png" width=100%>
                    <div class="container">
                        <h4><b>Lucas Olyntho</b></h4> 
                        <p>Estudante Escola Técnica Estadual de Guaianazes, Cursando Desenvolvimento de Sistemas</p> 
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="images/dev" width=100%>
                    <div class="container">
                        <h4><b>Carlos Alexandre</b></h4> 
                        <p>Estudante Escola Técnica Estadual de Guaianazes, Cursando Desenvolvimento de Sistemas</p> 
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="images/dev" width=100%>
                    <div class="container">
                        <h4><b>Kaue Rodrigues</b></h4> 
                        <p>Estudante Escola Técnica Estadual de Guaianazes, Cursando Desenvolvimento de Sistemas</p> 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include'footer.php'?>
</body>
</html>