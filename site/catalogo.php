<?php
include_once("../controller/noticia.controller.php");
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Catálogo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="img/logo.png" type="image/x-icon" />

        <!-- LINKS -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/popper.min.js" type="text/javascript"></script>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!-- LINKS -->

    </head>
    <body>
        <!-- MENU NAVBAR -->
        <?php
        include 'includes/navbar.php';
        ?>
        <!-- MENU NAVBAR -->

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
                background-image:  ;
                background-repeat: no-repeat;
                background-size: 100%;
            }

        </style>

        <!-- MENU NAVBAR -->   
        <main class="container my-2 pt-5">
            
            <div class="row my-1">
                <div class="col-md-4 col-sm-12 my-3"> <hr style="border-color:#b21f2d"><hr style="border-color:#b21f2d"> </div>

                <div class="col-md-4 col-sm-12 my-2" style="text-align: center; font-family:'LoveStory'; font-size: 50px; color: #b21f2d">
                    <p> CATÁLOGO </p>
                </div>

                <div class="col-md-4 col-sm-12 my-3"> <hr style="border-color:#b21f2d"><hr style="border-color:#b21f2d"> </div>
            </div>



            <!-- Content Row -->
            <div class="row">
                <?php foreach ($not->Consultar() as $linhas): ?>
                <div class="col-md-4 col-sm-6 mb-5">
                    <div class="card h-100" style=" border: 0">
                        
                        <img align="center" style=" border-radius: 5%" src="../view/arquivos/<?php echo $linhas->imagem; ?>" width="349" height="200">
                        <div class="card-body">
                            <h3><?php echo $linhas->titulo; ?></h3>
                            <?php $texto = $linhas->texto; ?>
                            <p><?php echo substr($texto, 0, 50) . "..."; ?></p>
                            
                        </div>
                        <div class="card">
                            <a href="login.php" class="btn btn-outline-danger"> Encomendar </a>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
               
            </div>

        </main>


<?php
include ('includes/footer.php');
?>  





    </body>
</html>