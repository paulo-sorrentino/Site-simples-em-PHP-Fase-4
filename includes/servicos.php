<?php
$pagina = listarConteudo('servicos');
?>
<div class="page-header">
    <h1>Serviços</h1>
</div>
<div class="row">
    <?php
    foreach($pagina as $conteudo) {
    echo '<div class="col-sm-4">';
    echo "<h3>{$conteudo['titulo']}</h3>";
        echo "<p>{$conteudo['conteudo']}</p>";
    echo '</div >';
    echo '<div class="col-sm-2" >';
        echo "<img class=\"img-responsive\" src = \"img/{$conteudo['imagem']}\" >";
    echo '</div>';
    }
    ?>
</div>