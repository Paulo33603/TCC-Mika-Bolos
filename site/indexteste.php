<?php
include_once("../controller/noticia.controller.php");
?>


<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title> TV + Esportes</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <!-- Custom fonts for this template -->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"/>

        <!-- Custom styles for this template -->
        <link href="css/clean-blog.min.css" rel="stylesheet" type="text/css"/>

    </head>

    <body>

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="index.php"> TV + Esportes</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="sobre.php">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contato.php">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Page Header -->
        <header class="masthead">
            <div class="overlay"> 
                <img src="../img/img.jpg" width="100%" height="100%" alt=""/>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <div class="site-heading">
                            <h1> TV + Esportes</h1>
                            <span class="subheading"> Um lugar aonde informação é prioridade! </span>
                        </div>
                    </div>
                </div>
            </div>
        </header>


        <!-- Main Content -->
        <div class="container">

            <h2 class="btn-dark">Últimas Noticias</h2>






            <div class="row">
                <?php foreach ($not->Consultar() as $linhas): ?>

                    <div class="col-4 my-2">
                        <div class="card h-100" style=" border: 0; border-color: black">
                            <h3><?php echo $linhas->titulo; ?></h3>
                            <img align="center" style=" border-radius: 5%" src="../view/arquivos/<?php echo $linhas->imagem; ?>" width="349" height="200">
                            <?php $texto = $linhas->texto; ?>
                            <p><?php echo substr($texto, 0, 50) . "..."; ?></p>

                            <div class="card">                       
                                <a class="btn btn-outline-dark" href="noticias.php?codnoticia=<?php echo $linhas->codnoticia; ?>&acao=dados_not">Veja mais >></a>
                            </div>
                        </div>
                    </div>

                <?php endforeach ?>
            </div>





        </div>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <ul class="list-inline text-center">
                            <li class="list-inline-item">
                                <a href="#">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <p class="copyright text-muted">Copyright &copy; Your Website 2019</p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js" type="text/javascript"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>

        <!-- Custom scripts for this template -->
        <script src="../js/clean-blog.min.js"></script>

    </body>

</html>



















<!--
<?php
include_once("../controller/noticia.controller.php");
?>
<!DOCTYPE html>
<html>
<head>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <title>Site de Noticias</title>
</head>

<body>
<div class="container">
<div class="hero-unit" >
    <div class="imagem"> 
        <img src="../img/img.jpg" alt=""/>
        <h1> TV Mais Esportes! </h1>
        <p> Todo o conteúdo sobre esportes, você só encontra aqui!!! <span style="color: red;"></span> </p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Leia Mais >></a></p>
    </div>
</div>

<h2 class="btn-danger">Últimas Noticias</h2>

<div class="row">
<?php foreach ($not->Consultar() as $linhas): ?>

                    <div class="span4">
                            <h3><?php echo $linhas->titulo; ?></h3>
                            <img align="center" src="../view/arquivos/<?php echo $linhas->imagem; ?>" width="150" height="100">
    <?php $texto = $linhas->texto; ?>
                            <p><?php echo substr($texto, 0, 50) . "..."; ?></p>

                            <p><a class="btn" href="noticias.php?codnoticia=<?php echo $linhas->codnoticia; ?>&acao=dados_not">Veja mais >></a></p>
                    </div>

<?php endforeach ?>
</div>
</div>

</body>
</html>

-->