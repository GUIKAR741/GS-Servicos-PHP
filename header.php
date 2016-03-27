<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo gera_titulos();?></title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/jquery2.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="img/logomenor.jpg" type="image/ico">
</head>
<body class="cor">
<div class="container">
    <!--Menu-->
    <div class="row">
        <div class="col-lg-12">
            <nav class="navbar navbar-default navi">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand">
                            Acesse <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="?p=home">
                                    <span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home
                                </a>
                            </li>
                            <li>
                                <a href="?p=quemSomos">
                                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Quem Somos
                                </a>
                            </li>
                            <li>
                                <a href="?p=servicos">
                                    <span class=" glyphicon glyphicon-list-alt" aria-hidden="true"></span> Serviços
                                </a>
                            </li>
                            <li>
                                <a href="?p=contato">
                                    <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> Contato
                                </a>
                            </li>
                            <li>
                                <a href="?p=login">
                                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Login
                                </a>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>
    </div>
    <!--Fecha Menu-->
    <!--Logo&Pesquiza-->
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-9">
                    <img class="img" src="img/logo.jpg" alt="logo">
                </div>
                <div class="col-lg-3 busca">
                    <form class="navbar-form navbar-left" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Pesquise...">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary" type="submit">
                                                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                            </button>
                                        </span>
                        </div><!-- /input-group -->
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--Fecha Logo&Pesquiza-->