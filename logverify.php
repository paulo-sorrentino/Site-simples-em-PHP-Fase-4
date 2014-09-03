<?php
require_once 'app/init.php';

if (isset($_POST['logar'])) {
    $userarr = filter_input_array(INPUT_POST, $_POST);
    $user = getUsuario($userarr['usuario']);

    if ($user && password_verify($userarr['senha'], $user['senha'])) {
        $_SESSION['user'] = $userarr['usuario'];
        $_SESSION['logado'] = true;
        header('Location: /');
    } else {
        unset($_SESSION['user']);
        $_SESSION['logado'] = false;
        $_SESSION['mensagem'] = 'Falha no login. Tente novamente.';
        header('Location: /login');;
    }
}

if (isset($_GET['action']) && $_GET['action'] == 'logoff') {
    $_SESSION['logado'] = false;
    header('Location: /');
}
