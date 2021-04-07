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
        <script src="js_sistema/animacoes.js" type="text/javascript"></script>
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
            
                     
            
            
            
            <div class="row">
                
          
                <div class="col-md-2 col-sm-12 my-2">
                    
                </div>  
                <div class="col-md-8 col-sm-12 my-2">
                    <h1> Vlw, por comprar no Bolos da Mika. Em breve entraremos em contato
                        para ajeitar alguns detalher. Obrigado pela preferência!!! </h1>
                </div>
                <div class="col-md-2 col-sm-12 my-2">
                    
                </div>  
                
                
            </div>
            
          
            <center><a href="index.php" class="btn btn-outline-danger mt-2"> Voltar para página principal </a></center>
         
            
        </main>


<?php
include ('includes/footer.php');
?>  





    </body>
</html>

