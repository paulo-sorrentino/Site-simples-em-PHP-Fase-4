<div class="page-header">
    <h1>Gerenciador de conteúdo</h1>
</div>

<div class="row">

    <div class="col-md-10">
        <?php
        if (!$_POST) {
            if (isset($_GET) && isset($_GET['pagina'])) {

                if (!$pagina = getConteudo(filter_var($_GET['pagina'], FILTER_SANITIZE_NUMBER_INT))) {

                    echo 'Conteúdo inexistente';

                } else {
                    ?>

                    <form role="form" class="form-horizontal" method="post" action="editor">
                        <fieldset>
                            <input type="hidden" name="id_conteudo" value="<?php echo $pagina['id_conteudo']; ?>">
                            <div class="form-group">
                                <label for="titulo" class="col-lg-2 control-label">Título</label>


                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <div class="input-group-addon"><span class="glyphicon glyphicon-arrow-right"></span>
                                        </div>
                                        <input type="text" name="titulo" class="form-control" id="titulo"
                                               required="required"
                                               value="<?php echo utf8_encode($pagina['titulo']); ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="pagina" class="col-lg-2 control-label">Página</label>

                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <div class="input-group-addon"><span
                                                class="glyphicon glyphicon-file"></span></div>
                                        <input type="pagina" name="pagina" class="form-control" id="pagina"
                                               required="required"
                                               value="<?php echo utf8_encode($pagina['pagina']); ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="imagem" class="col-lg-2 control-label">Imagem</label>

                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <div class="input-group-addon"><span
                                                class="glyphicon glyphicon-picture"></span>
                                        </div>
                                        <input type="text" name="imagem" class="form-control" id="imagem"
                                               required="required"
                                               value="<?php echo utf8_encode($pagina['imagem']); ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="mensagem" class="col-lg-2 control-label">Conteúdo</label>

                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <div class="input-group-addon"><span class="glyphicon glyphicon-comment"></span>
                                        </div>
                                        <textarea id="editor1" class="form-control" name="conteudo"
                                                  placeholder="Sua mensagem" rows="5"
                                                  required="required"><?php echo utf8_encode($pagina['conteudo']); ?></textarea>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary pull-right"><span
                                    class="glyphicon glyphicon-floppy-disk"></span>
                                Salvar
                            </button>

                        </fieldset>
                    </form>

                <?php
                }
            } else {
                $paginas = listarTudo();
                ?>
        <h5>Clique no título de uma página para editar seu conteúdo.</h5>
        <table class="table table-striped table-hover ">
            <thead>
            <tr>
                <th>Id</th>
                <th>Título</th>
                <th>Resumo do Conteúdo</th>
                <th>Página</th>
            </tr>
            </thead>
            <tbody>

            <?php

                foreach ($paginas as $pagina) {
                    echo '<tr>';
                    echo '<td>' . $pagina['id_conteudo'] . '</td>';
                    echo utf8_encode('<td><a href="?pagina=' . $pagina['id_conteudo'] . '">' . $pagina['titulo']. '</a></td>');
                    echo utf8_encode('<td>' . substr($pagina['conteudo'],0,100) . '...</td>');
                    echo '<td>' . $pagina['pagina'] . '</td>';
                    echo '</tr>';
                }

            ?>
            </tbody>
        </table>
                <?php
            }
        } else {
            ?>
            <div class="alert alert-success">
                <h4><span class="glyphicon glyphicon-thumbs-up"></span> Obrigado!</h4>

                <p>
                    <?php
                    $id = (int) $_POST['id_conteudo'];

                    $dados = array(
                        'titulo' => filter_var($_POST['titulo'], FILTER_SANITIZE_STRING),
                        'conteudo' => filter_var($_POST['conteudo'], FILTER_SANITIZE_STRING),
                        'pagina' => filter_var($_POST['pagina'], FILTER_SANITIZE_STRING),
                        'imagem' => filter_var($_POST['imagem'], FILTER_SANITIZE_STRING)
                    );

                    var_dump($dados);

                    if (atualizar($dados, $id)) {
                        echo 'Dados enviados com sucesso!';
                    } else {
                        echo 'Não foi possível gravar os dados!';
                    }
                    ?>
                </p>
            </div>
            <hr>
        <?php
        }
        ?>
    </div>

    <div class="col-md-2">
        <h5>Hello!</h5>

        <div class="well">
            <small>
                Área para edição do conteúdo do site.
            </small>
        </div>
    </div>

</div>