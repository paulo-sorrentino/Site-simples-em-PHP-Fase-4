<?php
$pagina = listarConteudo('servicos');
?>
<div class="page-header">
    <h1>Serviços</h1>
</div>

<?php
foreach ($pagina as $conteudo) {
    echo "<div class=\"row\" id=\"{$conteudo['id_conteudo']}\">";
    echo "<div class=\"col-md-9\">";
    echo utf8_encode("<h3>{$conteudo['titulo']}</h3>");
    echo utf8_encode("<p>{$conteudo['conteudo']}</p>");
    echo '</div>';
    echo '<div class="col-md-3" >';
    echo "<img class=\"img-responsive\" src = \"img/{$conteudo['imagem']}\" >";
    echo '</div>';
    echo '</div>';
}

?>
