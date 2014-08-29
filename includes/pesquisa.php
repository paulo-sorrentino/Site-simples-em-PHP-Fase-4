<?php
$pagina = pesquisar();
?>
<div class="page-header">
    <h3>Resultado da pesquisa</h3>
</div>
<div class="row">
    <div class="col-sm-4">

        <?php
        if ($pagina && isset($_POST)) {
            echo '<ul>';
            foreach ($pagina as $resultado) {
                echo utf8_encode("<li><a href=\"{$resultado['pagina']}#{$resultado['id_conteudo']}\"><strong>{$resultado['titulo']}</strong></a></li>");
            }
            echo '</ul>';
        } else {
            echo "<h2>Nenhum resultado.</h2>";
        }
        ?>

    </div>
</div>