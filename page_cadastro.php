<!--Conteudo-->
<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form action="" id="formCadastro" method="post">
                        <div class="col-lg-6">
                            <fieldset>
                                <legend>Dados Pessoais</legend>
                                <div class="form-group">
                                    <label for="nome">Nome:</label>
                                    <input type="text" id="nome" class="form-control" name="nome"
                                    placeholder="Digite seu Nome" required>
                                </div>
                                <div class="form-group">
                                    <label for="dn">Data de Nascimento:</label>
                                    <input type="text" id="dn" class="form-control" name="dn"
                                    placeholder="Digite sua Data de Nascimento" required>
                                </div>
                                <div class="form-group">
                                    <label for="cpf">CPF:</label>
                                    <input type="text" id="cpf" class="form-control" name="cpf"
                                    placeholder="Digite seu CPF" required>
                                </div>
                                <div class="form-group">
                                    <label for="site">Site:</label>
                                    <input type="text" id="site" class="form-control" name="site"
                                    placeholder="Digite a URL do seu Site" >
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-lg-6">
                            <fieldset>
                                <legend>Dados de Login</legend>
                                <div class="form-group">
                                    <label for="email">E-mail:</label>
                                    <input type="text" id="email" class="form-control" name="email"
                                    placeholder="Digite seu E-mail" required>
                                </div>
                                <div class="form-group">
                                    <label for="senha">Senha:</label>
                                    <input type="password" id="senha" class="form-control" name="senha"
                                    placeholder="Digite sua Senha" required>
                                </div>
                                <div class="form-group">
                                    <label for="csenha">Confirmar senha:</label>
                                    <input type="password" id="csenha" class="form-control" name="csenha"
                                    placeholder="Digite Novamente sua Senha" required>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="robo" id="robo" aria-label="" required>
                                    <label for="robo">Marque para provar que não é um Robo</label>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                                </div>
                            </fieldset>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once("include/js.php");?>
<!--Conteudo-->