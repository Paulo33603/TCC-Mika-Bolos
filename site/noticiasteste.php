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
  <nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" style="color: black" href="index.php"> TV + Esportes</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" style="color: black" href="index.php">Home</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" style="color: black" href="sobre.php">Sobre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color: black" href="contato.php">Contato</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <header class="">
    
    
  </header>
  
  
  
  <br>
  <div class="container pt-5">
      
      <h1 class="btn-dark" style="font-size: 70px; text-align: center"><?php echo $not->titulo; ?></h1>
    <div class="row" >
            
        <div class="col-2">
            
        </div>
        <div class="col-8">
			
			<img align="center" width="730" height="300" src="../view/arquivos/<?php echo $not->imagem; ?>">
			
			<p class="text-justify"><?php echo $not->texto; ?></p>

    </div>
        <div class="col-2">
            
        </div>
    </div>
    </div>
  
  
  


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

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Site de Noticias</title>
</head>

<body>
<div class="container">

<div class="mx-auto" style="width: 100%; height: 300px; background-color: #F2F2F2; padding: 10px;">

		<div>
			<h3><?php echo $not->titulo; ?></h3>
			<img align="center" width="500" height="200" src="../view/arquivos/<?php echo $not->imagem; ?>">
			
			<p><?php echo $not->texto; ?></p>

		</div>
</div>
</div>

</body>
</html>

-->