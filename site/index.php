
<!DOCTYPE html>

<html>
    <head>
        <title>Bolos Da Mika</title>
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
                color: #b21f2d;  
                height:50px    
            }

            body{
                background-color: 
            }

            .scrollspySite{
                position: relative;
                overflow: auto; 
                height: 450px

            }

            .sombra{
                text-shadow: 10px 0px 10px black;
            }

        </style>




        <?php
        include ('includes/navbar.php');
        ?>



        <!-- Page Content -->

        <div class="container-fluid">
            <!-- Heading Row -->
            <div class="row align-items-center mt-1">
                <div class="col-lg-12">
                    <div id="carouselSite" class="carousel slide carousel-fade" data-ride="carousel">

                        <!-- INDICADORES -->
                        <ol class="carousel-indicators">
                            <li data-target="#carouselSite" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselSite" data-slide-to="1"></li>
                            <li data-target="#carouselSite" data-slide-to="2"></li>
                        </ol>
                        <!-- INDICADORES -->

                        <!-- CAROUSEL IMAGES -->
                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <img src="img/carousel1.jpg" class="img-fluid d-block">

                                <div class="carousel-caption d-none d-md-block">
                                    <h1 class="sombra">Personalize seu próprio bolo!</h1>
                                    <a href="login.php"><button class="btn btn-danger">Personalizar</button></a>
                                </div>

                            </div>

                            <div class="carousel-item">
                                <img src="img/carousel2.jpg" class="img-fluid d-block">

                                <div class="carousel-caption d-none d-md-block">
                                    <h1 class="sombra">Temos uma grande variedade de bolos!</h1>
                                    <a href="catalogo.php"><button class="btn btn-danger">Catálogo</button></a>
                                </div>

                            </div>

                            <div class="carousel-item">
                                <img src="img/carousel3.jpg" class="img-fluid d-block">

                                <div class="carousel-caption d-none d-md-block">
                                    <h1 class="sombra">Venha nos conhecer!</h1>
                                    <a href="sobre.php"><button class="btn btn-danger">Sobre</button></a>
                                </div>

                            </div>

                        </div>
                        <!-- CAROUSEL IMAGES -->

                        <!-- Avançar/Voltar -->
                        <a class="carousel-control-prev" href="#carouselSite" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                            <span class="sr-only">Anterior</span>
                        </a>

                        <a class="carousel-control-next" href="#carouselSite" role="button" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                            <span class="sr-only">Avançar</span>
                        </a>
                        <!-- Avançar/Voltar -->

                    </div>
                </div> 







                <!-- /.col-md-4 -->
            </div>
        </div>
        <div class="container">
            <!-- /.row -->

            <!-- Call to Action Well -->
            <div class="row my-1">
                <div class="col-md-4 col-sm-12 my-3"> <hr style="border-color:#b21f2d""><hr style="border-color:#b21f2d"> </div>

                <div class="col-md-4 col-sm-12 my-2" style="text-align: center; font-family:'LoveStory'; font-size: 50px; color: #b21f2d">
                    <p> DESTAQUES </p>
                </div>

                <div class="col-md-4 col-sm-12 my-3"> <hr style="border-color:#b21f2d"><hr style="border-color:#b21f2d"> </div>
            </div>

            <!-- Content Row -->
            <div class="row">
                <div class="col-md-4 col-sm-12 mb-5">
                    <div class="card h-100" style=" border: 0">
                        <img class="card-img-top" src="img/catalogo/19.jpg" style=" border-radius: 5% 5% 5% 5%; border: 2px solid #b21f2d;" width="150px" height="200px" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h3 class="card-title text-center"> Merengue </h3>
                            <p class="card-text text-center"> Bolo branco, recheio de mousse de leite em pó com morango e mousse de leite em pó, 
                                                              cobertura de mousse branco, raspas de chocolate branco, leite em pó e morango.
                                                              Contém glúten e lactose. Alérgicos: contém farinha de trigo, leite e derivados e ovo. 
                                                              Pode conter amendoim, amêndoa, castanha de caju, castanha do Pará e avelã. </p>
                        </div>
                        <div class="card">
                            <a href="login.php" class="btn btn-outline-danger"> Encomendar </a>
                        </div>
                    </div>
                </div>
                <!-- /.col-md-4 -->
                <div class="col-md-4 col-sm-12 mb-5">
                    <div class="card h-100" style=" border: 0">
                        <img class="card-img-top" src="img/catalogo/20.jpg" style=" border-radius: 5% 5% 5% 5%; border: 2px solid #b21f2d;" width="150px" height="200px" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h3 class="card-title text-center"> Morango </h3>
                            <p class="card-text text-center"> Bolo branco, recheio de mousse branca com morangos e Moça Base Sabor Morango, 
                                                              cobertura de mousse branca, raspas de chocolate branco, Moça Base Sabor Morango e morangos.
                                                              Contém glúten e lactose. Alérgicos: contém farinha de trigo, leite e derivados e ovo. 
                                                              Pode conter amendoim, amêndoa, castanha de caju, castanha do Pará e avelã. </p>
                        </div>
                        <div class="card">
                            <a href="login.php" class="btn btn-outline-danger"> Encomendar </a>
                        </div>
                    </div>
                </div>
                <!-- /.col-md-4 -->
                
                <div class="col-md-4 col-sm-12 mb-5">
                    <div class="card h-100" style=" border: 0">
                        <img class="card-img-top" src="img/catalogo/21.jpg" style=" border-radius: 5% 5% 5% 5%; border: 2px solid #b21f2d;" width="150px" height="200px" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h3 class="card-title text-center"> Mousse de chocolate </h3>
                            <p class="card-text text-center"> Mousse de chocolate, cobertura de raspas de chocolate preto com cerejas(opcional).
                                                              Contém glúten e lactose. Alérgicos: contém farinha de trigo, leite e derivados e ovo. 
                                                              Pode conter amendoim, amêndoa, castanha de caju, castanha do Pará e avelã. </p>
                        </div>
                        <div class="card">
                            <a href="login.php" class="btn btn-outline-danger"> Encomendar </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col-md-4 -->





            <div class="row my-1">
                <div class="col-md-4 col-sm-12 my-3"> <hr style="border-color:#b21f2d"><hr style="border-color:#b21f2d""> </div>

                <div class="col-md-4 col-sm-12 my-2" style="text-align: center; font-family:'LoveStory'; font-size: 50px; color: #b21f2d">
                    <p> LOCALIZAÇÃO </p>
                </div>

                <div class="col-md-4 col-sm-12 my-3"> <hr style="border-color:#b21f2d"><hr style="border-color:#b21f2d"> </div>
            </div>

            <!-- Localização -->
            <div  class="row mb-1" style="height:450px;">
                <div class="col-12">
                    <iframe style="height: 100%; width: 100%; border: 1px solid #000" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001.1895958742757!2d-46.70392267661556!3d-23.37190004037785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cee52f7e9b5453%3A0x21ee5cf5bb512fdb!2sRua%20Otto%20Dalchau%2C%20166%20-%20Parque%20Sao%20Rafael%2C%20Caieiras%20-%20SP%2C%2007700-000!5e1!3m2!1spt-BR!2sbr!4v1571072803821!5m2!1spt-BR!2sbr" frameborder="0"></iframe>
                </div>
            </div>
            <!-- Localização -->






        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <?php
    include ('includes/footer.php');
    ?>


    <script src="js/popper.min.js" type="text/javascript"></script>
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>
