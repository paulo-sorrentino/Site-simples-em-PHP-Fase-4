<?php
require 'app/init.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Site Simples usando Php">
    <meta name="author" content="Vinicius Sorrentino">
    <title>Simples Site em PHp - Vinicius Sorrentino</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <body>
    <!-- Barra de navegação -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Navegação</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home">SSPhp</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav" id="main-nav">
                    <li><a href="home"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                    <li><a href="empresa"><span class="glyphicon glyphicon-briefcase"></span> Empresa</a></li>
                    <li><a href="produtos"><span class="glyphicon glyphicon-shopping-cart"></span> Produtos</a></li>
                    <li><a href="servicos"><span class="glyphicon glyphicon-list-alt"></span> Serviços</a></li>
                    <li><a href="contato"><span class="glyphicon glyphicon-envelope"></span> Contato</a></li>
                </ul>
            </div>
            <!-- collapse -->
        </div>
    </div>

    <!-- Corpo -->
    <div class="container">

        <?php $route();?>

        <div class="footer footer-main">
            Todos os direitos reservados - <?php echo date('Y'); ?>
        </div>
    </div>
    <!-- Fim do Corpo -->

    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    </body>
</head>
</html>