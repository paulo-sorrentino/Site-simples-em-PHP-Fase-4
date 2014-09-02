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
    <div class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Navegação</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">SSPhp</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav" id="main-nav">
                    <li><a href="home"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                    <li><a href="empresa"><span class="glyphicon glyphicon-briefcase"></span> Empresa</a></li>
                    <li><a href="produtos"><span class="glyphicon glyphicon-shopping-cart"></span> Produtos</a></li>
                    <li><a href="servicos"><span class="glyphicon glyphicon-list-alt"></span> Serviços</a></li>
                    <li><a href="contato"><span class="glyphicon glyphicon-envelope"></span> Contato</a></li>

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes"><span class="glyphicon glyphicon-cog"></span> Gerenciar<span class="caret"></span></a>
                        <ul class="dropdown-menu" aria-labelledby="themes">
                            <li><a href="#">Lista</a></li>
                            <li class="divider"></li>
                            <li>

                                <!-- Button trigger modal -->
                                <a href="#" data-toggle="modal" data-target="#login">
                                    Login
                                </a>

                            </li>

                            <li><a href="#">Item</a></li>
                        </ul>
                    </li>

                </ul>

                <form class="navbar-form navbar-right" method="post" action="pesquisa">
                    <div class="input-group">
                        <input type="text" class="form-control col-lg-8" name="pesquisa" placeholder="Pesquisar"
                               value="<?php echo(isset($_POST['pesquisa']) ? $_POST['pesquisa'] : ''); ?>">
                        <span class="input-group-btn">
                        <button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
                            </span>
                    </div>
                </form>
            </div>
            <!-- collapse -->
        </div>
    </div>

    <!-- Corpo -->
    <div class="container">

        <?php $route(); ?>

        <div class="footer footer-main">
            Todos os direitos reservados - <?php echo date('Y'); ?>
        </div>
    </div>
    <!-- Fim do Corpo -->

    <!-- Modal -->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                            aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Autenticação</h4>
                </div>
                <div class="modal-body">

                    <form class="form-signin" role="form" method="post" action="">
                        <input type="text" name="usuario" class="form-control" placeholder="Usuário" required autofocus>
                        <input type="password" name="senha" class="form-control" placeholder="Senha" required>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary" type="submit">Login</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/ckeditor/ckeditor.js"></script>
    <script src="js/custom.js"></script>

    </body>
</head>
</html>