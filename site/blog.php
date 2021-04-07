<!DOCTYPE html>
<html>
    <head>
        <title>Blog</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="img/logo.png" type="image/x-icon" />
    </head>
    <body>

        <?php
        include 'includes/navbar.php';
        ?>

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

        </style>
        <main class="container my-2 pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12 my-3"> <hr style="border-color:#b21f2d"><hr style="border-color:#b21f2d"> </div>
                    <div class="col-md-4 col-sm-12 my-2" style="text-align: center; font-family:'LoveStory'; font-size: 48px; color: #b21f2d">
                        <p> BLOG BOLOS DA MIKA </p> 
                    </div>
                    <div class="col-md-4 col-sm-12 my-3"> <hr style="border-color:#b21f2d"><hr style="border-color:#b21f2d"> </div>
                </div>
                
             
                
                <!-- Primeira Parte -->
                
                <div class="row">
                    <div class="col-md-6 mb-5">
                        <div class="card h-100" style=" border: 0">
                        
                        <img src="img/imgblog2.png" alt="" style=" height:260px; width: 100%;  border-radius: 5% 5% 5% 5%; border: 2px solid #b21f2d;"/>
                        
                        <div class="card-body">
                            <h3 class="text-center">Histórico das Confeitarias</h3>
                        <p class="text-justify">A historia da confeitaria teve inicio anteriormente ao século 1 a.C., entretanto,
                            os doces produzidos não possuíam a forma que têm hoje, além de não serem produzidos
                            com os mesmos ingredientes</p>
                        
                        </div>
                        
                        <div>
                        <a href='blogs/historia.php' class="btn btn-outline-danger form-control">Ver noticia completa</a>
                        </div>
                        </div>
                    </div>
                    
             
                    <div class="col-md-6 mb-5">
                        <div class="card h-100" style=" border: 0">
                        
                        <img src="img/imgblog3.jpg" alt=""style="height:260px; width: 100%;  border-radius: 5% 5% 5% 5%; border: 2px solid #b21f2d;"/>
                        
                        <div class="card-body">
                            <h3 class="text-center">Desenvolvimento do site</h3>
                        <p class="text-justify">O projeto desenvolvido surgiu a partir da observação da necessidade de otmização do tempo e recurso no ramo empresarial,
                            sendo assim, o primeiro passo foi identificar dentro do empreendimento analisado
                            - as confeitarias - qual era necessidade que urgia para ser sanada</p>
                        </div>
                        
                        <div class="card">
                        <a href='blogs/desenvolvimento.php' class="btn btn-outline-danger form-control">Ver noticia completa</a>
                        </div>
                        </div>
                    </div>
                </div>
                
          
                
                <!-- Segunda Parte -->
        
                <div class="row">
                <div class="col-md-3 col-sm-6 mb-5">
                    <div class="card h-100" style=" border: 0">
                        <img class="card-img-top" src="img/imgblog2.png" style=" border-radius:5% 5% 5% 5%; border: 2px solid #b21f2d;" width="150px" height="145px" alt="Imagem de capa do card">
                        <h5 class="text-center">Bolo de Morango</h5>
                        <div class="card">
                            <a href="blogs/morango.php" class="btn btn-outline-danger"> Ver receita </a>
                        </div>
                    </div>
                </div>
                    
                    <div class="col-md-3 col-sm-6 mb-5">
                    <div class="card h-100" style=" border: 0">
                        <img class="card-img-top" src="img/florestanegra.jpg" style=" border-radius:5% 5% 5% 5%; border: 2px solid #b21f2d;" width="150px" height="145px" alt="Imagem de capa do card">
                        <h5 class="text-center">Bolo de Floresta Negra</h5>
                        <div class="card">
                            <a href="blogs/florestanegra.php" class="btn btn-outline-danger"> Ver receita </a>
                        </div>
                    </div>
                </div>
                    
                <div class="col-md-3 col-sm-6 mb-5">
                    <div class="card h-100" style=" border: 0">
                        <img class="card-img-top" src="img/prestigio.jpg" style=" border-radius:5% 5% 5% 5%; border: 2px solid #b21f2d;" width="150px" height="145px" alt="Imagem de capa do card">
                        <h5 class="text-center">Bolo de Prestigio</h5>
                        <div class="card">
                            <a href="blogs/prestigio.php" class="btn btn-outline-danger"> Ver receita </a>
                        </div>
                    </div>
                </div>
                    
                    <div class="col-md-3 col-sm-6 mb-5">
                    <div class="card h-100" style=" border: 0">
                        <img class="card-img-top" src="img/brigadeiro.jpg" style=" border-radius:5% 5% 5% 5%; border: 2px solid #b21f2d;" width="150px" height="145px" alt="Imagem de capa do card">
                        <h5 class="text-center">Bolo de Brigadeiro</h5>
                        <div class="card">
                            <a href="blogs/brigadeiro.php" class="btn btn-outline-danger"> Ver receita </a>
                        </div>
                    </div>
                </div>
                </div>
                            
                
            </div>
        </div>
    </main>

    <?php
    include ('includes/footer.php');
    ?>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script src="js/popper.min.js" type="text/javascript"></script>
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>