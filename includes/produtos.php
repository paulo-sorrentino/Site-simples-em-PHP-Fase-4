<?php
$pagina = listarConteudo('produtos');
?>
<div class="page-header">
    <h1>Produtos</h1>
</div>

<div class="container text-center">
    <div class="row">
    <?php
    foreach($pagina as $conteudo) {

        echo "<div class=\"col-sm-4\" id=\"{$conteudo['id_conteudo']}\">";
            echo "<img class=\"img-circle produto-img\" src=\"img/{$conteudo['imagem']}\" alt=\"{$conteudo['titulo']}\">";

            echo utf8_encode("<h2>{$conteudo['titulo']}</h2>");

            echo utf8_encode("<p>{$conteudo['conteudo']}</p>");

            echo "<p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Detalhes »</a></p>";
        echo "</div>";

        }?>
    </div>
</div>