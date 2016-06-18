<?php
if(isset($_POST['enviar'])):
    echo "\n<!--Scripts-->\n<script>\n";
    echo "$(document).ready(function()
    {
        $(\"#myModal\").modal(\"show\");
    });";
    echo "\n</script>\n<!--Scripts-->\n";
endif;
?>
<!--Conteudo-->
<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-8">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form action=""  method="post" id="formCont">
                            <div class="form-group">
                                <label for="nome">Nome:</label>
                                <input type="text" id="nome" class="form-control" name="nome" placeholder="Digite seu Nome">
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail:</label>
                                <input type="text" id="email" class="form-control" name="email" placeholder="Digite seu E-mail">
                            </div>
                            <div class="form-group">
                                <label for="site">Web site:</label>
                                <input type="text" id="site" class="form-control" name="site"
                                       placeholder="Digite a URL do seu Site">
                            </div>
                            <div class="form-group">
                                <label for="assunto">Assunto:</label>
                                <select name="assunto" id="assunto" class="form-control">
                                    <option value="" selected disabled>Selecione uma opção</option>
                                    <option value="servicos">Serviços</option>
                                    <option value="cursos">Cursos</option>
                                    <option value="sugestoes">Sugestões</option>
                                    <option value="reclamacoes">Reclamações</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="msg">Comentário:</label>
                                <textarea class="form-control" id="msg" name="msg" cols="30" rows="5"
                                          placeholder="Deixe um Comentário"></textarea>
                            </div>
                            <!-- Button trigger modal -->
                            <button
                                <?php
                                if(isset($_POST['enviar'])):
                                    echo "type=\"button\"";
                                else:
                                    echo "type=\"submit\"";
                                endif;
                                ?> name="enviar" class="btn btn-primary " >
                                Enviar
                            </button>
                            <!-- Modal -->
                            <div class="modal fade bs-example-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog modal-sm" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <h4 class="cent pm0">Contato</h4>
                                        </div>
                                        <div class="modal-body">
                                            <?php
                                            $mail="guilhermenepomuceno46@gmail.com";
                                            $nome=isset($_POST['nome'])?$_POST['nome']:"";
                                            $email=isset($_POST['email'])?$_POST['email']:"";
                                            $site=isset($_POST['site'])?$_POST['site']:"";
                                            $ass=isset($_POST['assunto'])?$_POST['assunto']:"";
                                            $msg=isset($_POST['msg'])?$_POST['msg']:"";
                                            $headers='<br>Para: '.$mail.
                                                '<br>E-mail: '. $email .
                                                '<br>Web-Site: '. $site .
                                                '<br>Usuario: '. $nome .
                                                '<br>X-Mailer: PHP/'.phpversion();
                                            $msg="<h1>$ass</h1><br>".$msg.$headers;
                                            if(@mail($mail,$ass,$msg)):
                                                echo "<p>Email Enviado Com Sucesso!</p>";
                                            else:
                                                echo "<p>Erro ao Enviar</p>";
                                            endif;
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Modal-->
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <fieldset>
                            <legend>
                                <h1 class="cent pm0">Contato Direto</h1>
                            </legend>
                            <fieldset>
                                <legend>
                                    <h2 class="cent pm0">Desenvolvedor Nº1</h2>
                                </legend>
                                <p>Nome:<strong>Guilherme Nepomuceno de Carvalho</strong></p>
                                <p>Email:<strong>guilhermenepomuceno46@gmail.com</strong></p>
                                <p>Facebook:<strong>facebook.com/guikar741</strong></p>
                            </fieldset>
                            <fieldset>
                                <legend>
                                    <h2 class="cent pm0">Desenvolvedor Nº2</h2>
                                </legend>
                                <p>Nome:<strong>Jemerson Santos</strong></p>
                                <p>Email:<strong>samjheymerson@gmail.com</strong></p>
                                <p>Facebook:<strong>facebook.com/jemerson.santos.77</strong></p>
                            </fieldset>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once("include/js.php");?>
<!--Conteudo-->