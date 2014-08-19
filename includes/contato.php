<div class="page-header">
    <h1>Contato</h1>
</div>

<div class="row">

    <div class="col-md-6">
        <?php
        if (!$_POST) {
            ?>

            <form role="form" class="form-horizontal" method="post" action="contato">
                <fieldset>
                    <div class="form-group">
                        <label for="nome" class="col-lg-2 control-label">Nome</label>


                        <div class="col-lg-10">
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                                <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome"
                                       required="required">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-lg-2 control-label">E-mail</label>

                        <div class="col-lg-10">
                            <div class="input-group">
                                <div class="input-group-addon">@</div>
                                <input type="email" name="email" class="form-control" id="email" placeholder="E-mail"
                                       required="required">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="assunto" class="col-lg-2 control-label">Assunto</label>

                        <div class="col-lg-10">
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-share-alt"></span></div>
                                <input type="text" name="assunto" class="form-control" id="assunto"
                                       placeholder="assunto"
                                       required="required">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="mensagem" class="col-lg-2 control-label">Mensagem</label>

                        <div class="col-lg-10">
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-comment"></span></div>
                                <textarea class="form-control" name="mensagem" placeholder="Sua mensagem" rows="5"
                                          required="required"></textarea>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary pull-right"><span
                            class="glyphicon glyphicon-send"></span>
                        Enviar
                    </button>

                </fieldset>
            </form>

        <?php
        } else {
            ?>
            <div class="alert alert-success">
                <h4><span class="glyphicon glyphicon-thumbs-up"></span> Obrigado!</h4>

                <p>
                    Dados enviados com sucesso, abaixo seguem os dados que você enviou:
                </p>
            </div>
            <hr>
            <ul>
                <li><strong>Nome:</strong> <?php echo $_POST['nome']; ?></li>
                <li><strong>E-mail:</strong> <?php echo $_POST['email']; ?></li>
                <li><strong>Assunto:</strong> <?php echo $_POST['assunto']; ?></li>
                <li><strong>Mensagem:</strong> <br><?php echo $_POST['mensagem']; ?></li>
            </ul>

        <?php
        }
        ?>
    </div>

    <div class="col-md-6">
        <h5>Hello!</h5>

        <div class="well">
            <small>
                Donec vitae tristique tellus. Nulla blandit ultricies tortor non feugiat. Donec sodales ac mauris et
                vestibulum. Nullam eget commodo velit. Morbi mollis urna sit amet luctus consectetur. Aenean blandit
                volutpat dolor eget ornare. Aenean vitae neque ut tellus fringilla varius quis non ligula.
            </small>
        </div>
    </div>

</div>