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

            <div class="row my-5">

                <div class="col-4 my-3"> <hr style="border-color:white"><hr style="border-color:white"> </div>

                <div class="col-4 text-center">
                    <h1 class="btn" style="font-size: 70px; text-align: center">Contato</h1>
                </div>

                <div class="col-4 my-3"> <hr style="border-color:white"><hr style="border-color:white"> </div>

            </div>

        <main class="container my-2" style="height:600px;">

           
            <form method="POST">
                <div class="row my-5">

                    <div class="col-md-6 col-sm-12 my-2">
                        <input style="border: 2px solid #000000" type="text" class="form-control" placeholder="Nome" name="nome"><br>
                        <input style="border: 2px solid #000000" type="text" class="form-control" placeholder="Email" name="email"><br>
                        <input style="border: 2px solid #000000" type="text" class="form-control" placeholder="Telefone" name="telefone"><br>
                        <input style="border: 2px solid #000000" type="text" class="form-control" placeholder="Cidade" name="cidade">
                    </div>

                    <div class="col-md-6 col-sm-12 my-2">
                        <textarea style="border: 2px solid #000000; height: 100%" class="form-control" placeholder="Mensagem" name="mensagem"></textarea>

                    </div>

                </div>


                <center>
                    <input type="submit" class="btn btn-dark" value="Enviar" name="enviar"> 
                    <input type="reset" class="btn btn-dark" value="Redefinir" name="limpar">
                    <a href="index.php"><input type="button" value="Voltar" class="btn btn-dark"></a>
                </center>      
                <hr>
                
            </form>
        </main>

     

 
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

