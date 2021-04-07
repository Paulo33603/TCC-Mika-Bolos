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
            
                     
            
            
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-danger progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 99%"></div>
            </div>
            
            
            <h2> Digite as observações necessarias: </h2>
            <div class="row">
                
          
                <div class="col-md-6 col-sm-12 my-2">
                    <textarea style="border: 2px solid #c82333; height: 100%" class="form-control" placeholder="Mensagem" name="mensagem"></textarea>
                </div>  
                <div class="col-md-6 col-sm-12 my-2">
                    Neste campo, digite as observações necessarias, tais como, se existe alergia ou intolerância a algum ingrediente
                    específico, se existe preferência a alguma marca de ingredientes específica ou outros detalhes.
                </div>
                
                
            </div>
            
          
            <center><a href="personalizacao7.php" class="btn btn-outline-danger mt-2"> Finalizar </a></center>
         
            
        </main>


<?php
include ('includes/footer.php');
?>  





    </body>
</html>


