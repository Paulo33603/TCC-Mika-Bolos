<!DOCTYPE html>

<html>
    <head>
        <title>Personalização</title>
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
        include 'verificalogin.php'; 
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
        
        <main class="container my-2 pt-5">
            
            
            <div class="row my-1">
                <div class="col-md-4 col-sm-12 my-3"> <hr style="border-color:#b21f2d"><hr style="border-color:#b21f2d"> </div>

                <div class="col-md-4 col-sm-12 my-2" style="text-align: center; font-family:'LoveStory'; font-size: 50px; color: #b21f2d">
                    <p> PERSONALIZAÇÃO </p>
                </div>

                <div class="col-md-4 col-sm-12 my-3"> <hr style="border-color:#b21f2d"><hr style="border-color:#b21f2d"> </div>
            </div>
            
                     
            
            
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-danger progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 45%"></div>
            </div>
            
            
            <h2> Escolha o recheio da sua preferência: </h2>
            <div class="row">
                
               
                
                
                <div class="col-md-2 col-sm-4 mb-5">
                    <div class="card h-100" style=" border: 0">
                        <button type="button" class="btn btn-outline-danger">
                            
                        <img class="card-img-top" src="img/personalizacao/recheios/DoceDeLeite.jpg" style=" border-radius: 10%" width="150px" height="200px" alt="Imagem de capa do card">
                        </button>
                        <div class="card-body">
                            <h3 class="card-title text-center" style="text-align: center; font-family:'LoveStory'; font-size: 32px; color: #b21f2d"> DOCE DE LEITE </h3>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-2 col-sm-4 mb-5">
                    <div class="card h-100" style=" border: 0">
                        <button type="button" class="btn btn-outline-danger">
                            
                        <img class="card-img-top" src="img/personalizacao/recheios/abacaxi com coco.jpg" style=" border-radius: 10%" width="150px" height="200px" alt="Imagem de capa do card">
                        </button>
                        <div class="card-body">
                            <h3 class="card-title text-center" style="text-align: center; font-family:'LoveStory'; font-size: 32px; color: #b21f2d"> ABACAXI COM COCO </h3>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-2 col-sm-4 mb-5">
                    <div class="card h-100" style=" border: 0">
                        <button type="button" class="btn btn-outline-danger">
                         
                        <img class="card-img-top" src="img/personalizacao/recheios/beijinho.jpg" style=" border-radius: 10%" width="150px" height="200px" alt="Imagem de capa do card">
                        </button>
                        <div class="card-body">
                            <h3 class="card-title text-center" style="text-align: center; font-family:'LoveStory'; font-size: 32px; color: #b21f2d"> BEIJINHO </h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 mb-5">
                    <div class="card h-100" style=" border: 0">
                        <button type="button" class="btn btn-outline-danger">
                            
                        <img class="card-img-top" src="img/personalizacao/recheios/churros.jpg" style=" border-radius: 10%" width="150px" height="200px" alt="Imagem de capa do card">
                        </button>
                        <div class="card-body">
                            <h3 class="card-title text-center" style="text-align: center; font-family:'LoveStory'; font-size: 32px; color: #b21f2d"> CHURROS </h3>
                        </div>
                    </div>
                </div>
            
                <div class="col-md-2 col-sm-4 mb-5">
                    <div class="card h-100" style=" border: 0">
                        <button type="button" class="btn btn-outline-danger">
                          
                        <img class="card-img-top" src="img/personalizacao/recheios/floresta branca.jpg" style=" border-radius: 10%" width="150px" height="200px" alt="Imagem de capa do card">
                        </button>
                        <div class="card-body">
                            <h3 class="card-title text-center" style="text-align: center; font-family:'LoveStory'; font-size: 32px; color: #b21f2d"> FLORESTA BRANCA </h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 mb-5">
                    <div class="card h-100" style=" border: 0">
                        <button type="button" class="btn btn-outline-danger">
                           
                        <img class="card-img-top" src="img/personalizacao/recheios/floresta negra.jpg" style=" border-radius: 10%" width="150px" height="200px" alt="Imagem de capa do card">
                        </button>
                        <div class="card-body">
                            <h3 class="card-title text-center" style="text-align: center; font-family:'LoveStory'; font-size: 32px; color: #b21f2d"> FLORESTA NEGRA </h3>
                        </div>                        
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 mb-5">
                    <div class="card h-100" style=" border: 0">
                        <button type="button" class="btn btn-outline-danger">
                          
                        <img class="card-img-top" src="img/personalizacao/recheios/leite condensado.jpg" style=" border-radius: 10%" width="150px" height="200px" alt="Imagem de capa do card">
                        </button>
                        <div class="card-body">
                            <h3 class="card-title text-center" style="text-align: center; font-family:'LoveStory'; font-size: 32px; color: #b21f2d"> LEITE CONDENSADO </h3>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-2 col-sm-4 mb-5">
                    <div class="card h-100" style=" border: 0">
                        <button type="button" class="btn btn-outline-danger">
                           
                        <img class="card-img-top" src="img/personalizacao/recheios/merrengue.jpg" style=" border-radius: 10%" width="150px" height="200px" alt="Imagem de capa do card">
                        </button>
                        <div class="card-body">
                            <h3 class="card-title text-center" style="text-align: center; font-family:'LoveStory'; font-size: 31px; color: #b21f2d"> MERENGUE </h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 mb-5">
                    <div class="card h-100" style=" border: 0">
                        <button type="button" class="btn btn-outline-danger">
                            
                        <img class="card-img-top" src="img/personalizacao/recheios/paçoca.jpg" style=" border-radius: 10%" width="150px" height="200px" alt="Imagem de capa do card">
                        </button>
                        <div class="card-body">
                            <h3 class="card-title text-center" style="text-align: center; font-family:'LoveStory'; font-size: 32px; color: #b21f2d"> PAÇOCA </h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 mb-5">
                    <div class="card h-100" style=" border: 0">
                        <button type="button" class="btn btn-outline-danger">
                            
                        <img class="card-img-top" src="img/personalizacao/recheios/prestigio.jpg" style=" border-radius: 10%" width="150px" height="200px" alt="Imagem de capa do card">
                        </button>
                        <div class="card-body">
                            <h3 class="card-title text-center" style="text-align: center; font-family:'LoveStory'; font-size: 32px; color: #b21f2d"> PRESTÍGIO </h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 mb-5">
                    <div class="card h-100" style=" border: 0">
                        <button type="button" class="btn btn-outline-danger">
                            
                        <img class="card-img-top" src="img/personalizacao/recheios/sensação.jpg" style=" border-radius: 10%" width="150px" height="200px" alt="Imagem de capa do card">
                        </button>
                        <div class="card-body">
                            <h3 class="card-title text-center" style="text-align: center; font-family:'LoveStory'; font-size: 32px; color: #b21f2d"> SENSAÇÃO </h3>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-2 col-sm-4 mb-5">
                    <div class="card h-100" style=" border: 0">
                        <button type="button" class="btn btn-outline-danger">
                           
                        <img class="card-img-top" src="img/personalizacao/recheios/trufado de chocolate.jpg" style=" border-radius: 10%" width="150px" height="200px" alt="Imagem de capa do card">
                        </button>
                        <div class="card-body">
                            <h3 class="card-title text-center" style="text-align: center; font-family:'LoveStory'; font-size: 32px; color: #b21f2d"> TRUFADO DE CHOCOLATE </h3>
                        </div>
                    </div>
                </div>               
                
            </div>
            
            <h2> Ou insira outro recheio desejado: </h2>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-2" type="search" placeholder="" aria-label="Search">
                <!-- <button class="btn btn-outline my-2 my-sm-0" type="submit">Buscar</button> -->
            </form>
        
            
            <center><a href="personalizacao4.php" class="btn btn-outline-danger mt-2"> Continuar </a></center>
         
            
        </main>


<?php
include ('includes/footer.php');
?>  





    </body>
</html>
