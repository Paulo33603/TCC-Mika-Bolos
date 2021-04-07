 <?php
    session_start();
 ?>  

<!DOCTYPE html>

<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="icon" href="img/logo.png" type="image/x-icon" />

        <!-- LINKS -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/popper.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!-- LINKS -->
    </head>
    <body>

        <style>

            @font-face{
                font-family:'LoveStory';
                src: url("fontes/Love_Story_Rough.ttf");
            }

            #titulo{
                font-family:'LoveStory';
                font-size: 50px;
                color: white;  
                height:50px    
            }

            body{
                background-image: url(img/fundocontato.jpg);
            }

        </style>

        <?php
        include ('includes/navbar.php');
        ?>

        


        <main class="container">

            <div class="row my-2 pt-5">

                <div class="col-md-4 col-sm-12 my-3"> <hr style="border-color:white"><hr style="border-color:white"> </div>

                <div class="col-md-4 col-sm-12 text-center my-2">
                    <p id="titulo">LOGIN</p>
                </div>

                <div class="col-md-4 col-sm-12 my-3"> <hr style="border-color:white"><hr style="border-color:white"> </div>

            </div>


            <br><br>

            <form name="loginform" method="POST" action="userauthentication.php">
                <div class="row">

                    <div class="col-2"></div>
                    <div  class='col-md-8 col-sm-12'>
                        <input style="border: 2px solid #c82333;  border-radius: 10px;" type="text" name="email" placeholder="Email:" class="form-control">
                    </div>
                    <div class="col-2"></div>
                </div>

                <br>

                <div class="row">

                    <div class="col-md-2"></div>
                    <div  class='col-md-8 col-sm-12'>
                        <input style="border: 2px solid #c82333;  border-radius: 10px;" type="password" 
                        placeholder="Senha:" name="senha" class="form-control">
                        
                        <br>
                        <a href="recuperar.php" class="text-light">Esqueceu sua senha?</a>
                    </div>
                    <div class="col-md-2"></div>

                </div>

                <br>

                <div class="row">

                    <div class='col-md-4 col-sm-12'></div>
                    <div class='col-md-4 col-sm-12'>
                        <center>
                            <input class="btn btn-danger" type="submit" value="Entrar" name="entrar">
                            &nbsp;&nbsp;&nbsp;
                            <input type="reset" value="Limpar" class="btn btn-danger">
                        </center>
                    </div>
                    <div  class='col-md-4 col-sm-12'></div>

                </div>

            </form>  


            <br><br>
            <div class='row'>
                <div class="col-md-12 col-sm-12">
                    <center>
                        <p>Não possui cadastro? <a href="registra.php" class="text-light">Cadastre-se</a></p>
                    </center>
                </div>                    
            </div>

        </main>

        <?php
        include ('includes/footer.php');
        ?>
    </body>
</html>