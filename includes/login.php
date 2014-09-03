<div class="page-header">
    <h1>Acesso à Área Restrita</h1>
</div>
<div class="row">

    <div class="col-md-6">

        <form class="form-signin" role="form" method="post" action="logverify.php">
            <h2 class="form-signin-heading">Autenticação</h2>
            <input type="text" name="usuario" class="form-control" placeholder="Usuário" required autofocus>
            <input type="password" name="senha" class="form-control" placeholder="Senha" required>
            <input name="logar" class="btn btn-primary btn-block" type="submit" value="Login">
        </form>
    </div>

    <div class="col-md-6">
        <?php
        if (isset($_SESSION['mensagem'])) {
            echo '<div class="alert alert-dismissable alert-danger">';
            echo '<button type="button" class="close" data-dismiss="alert">×</button>';
            echo '<strong>Aviso!</strong><br>' . $_SESSION['mensagem'];
            echo '</div>';
            unset($_SESSION['mensagem']);
        }

        ?>

    </div>

</div>