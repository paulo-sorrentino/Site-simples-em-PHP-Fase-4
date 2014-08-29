<?php
require_once 'app/bd_config.php';

function listarConteudo($pagina) {
    try {
        $conexao = new \PDO(DSN, USER, PASS);
    } catch (\PDOException $e) {
        die("Error código: " . $e->getCode() . ": " . $e->getMessage());
    }

    $sql = "select * from conteudo where pagina = '{$pagina}'";
    $stmt = $conexao->prepare($sql);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
};

function pesquisar() {
    if (isset($_POST['pesquisa']) && !empty($_POST['pesquisa'])){
        $keyword = utf8_decode($_POST['pesquisa']);
        try {
            $conexao = new \PDO(DSN, USER, PASS);
        } catch (\PDOException $e) {
            die("Error código: " . $e->getCode() . ": " . $e->getMessage());
        }

        $sql = "select * from conteudo where conteudo like '%{$keyword}%' or titulo like '%{$keyword}%'";
        $stmt = $conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"])) {
    return false;
}

$paginas = array('home', 'empresa', 'produtos', 'servicos', 'contato','conexao','pesquisa');

$route = function () use ($paginas) {

    $rota = parse_url('http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
    $path = str_replace('/', '', $rota['path']);

    if ($path) {
        if (in_array($path, $paginas)) {
            if (file_exists('includes/' . $path . '.php')) {
                $go = $path;
            }
        } else {
            header('HTTP/1.0 404 Not Found');
            $go = '404';
        }
    } else {
        $go = 'home';
    }

    require_once 'includes/' . $go . '.php';
};

