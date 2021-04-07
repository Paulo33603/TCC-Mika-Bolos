
<!DOCTYPE html>

<html>
    <head>
        <title>Sobre a empresa</title>
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

    <body style="background-color: wheat">

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

        <?php
        include ('includes/navbar.php');
        ?>

        <div class="container my-2 pt-5">
            <div class="row mt-2">
                <div class="col-md-4 col-sm-12 my-3"> <hr style="border-color:#b21f2d"><hr style="border-color:#b21f2d"> </div>

                <div class="col-md-4 col-sm-12 my-2" style="text-align: center; font-family:'LoveStory'; font-size: 50px; color: #b21f2d">
                    <p> SOBRE A EMPRESA </p>
                </div>

                <div class="col-md-4 col-sm-12 my-3"> <hr style="border-color:#b21f2d"><hr style="border-color:#b21f2d"> </div>
            </div>
        </div>


        <div class="container mb-3" style="background-color:white;height: 100% ">

            <div class="row">

                <div class="col-md-6 col-sm-12 mt-3">
                    <div class="card h-100" style=" border: 0">
                    <img src="img/sobre/Padaria-Confeitaria.jpg" width="100%" height="100%" alt="Imagem ilustrativa" style="border-radius: 20px"/>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12 mt-3 text-center">
                    <div class="card h-100" style=" border: 0">
                    <h1>A Mika Bolos</h1>
                    <strong>História</strong>
                    <p class="lead">fundada  em 2 de maio de 2015, por Helenilda de Lira Lima, a empresa "Bolos da Mika" conquistou seus clientes através da produção de bolos de alta qualidade.
                        A vantagem dos produtos oferecidos, é que eles podem ser personalizados, desta maneira fica muito mais fácil agradar aos desejos dos clientes, já que está é a missão principal da empresa.
                    </p>
                    <p class="lead">Começando a empresa em casa,fazendo emcomendas de bolos sozinha, ela foi crescendo e ganhando a confiança de sua clientela com o passar do tempo. </p>
                    </div>
                </div>

            </div>
            <br>
            <br>
            <div class="row">
                
                <div class="col-md-6 col-sm-12 mt-3 text-center">
                    <div class="card h-100" style=" border: 0">
                    <strong>Atualmente</strong>
                    <p class="lead">Durante sua trajetória, a empresa bolos da Mika, aprimorou seus produtos e expandiu seus recursos para a criação dos bolos, sempre pensando na qualidade com a qual o produto será entregue ao cliente.
                        Atualmente, a empresa se estabeleceu e conquistou os consumidores que já adquiriram seus produtos.</p> 
                    <p class="lead"> plano para o futuro é expandir o alcance de atendimento, bem como a variedade de produtos e expansão no catálogo de bolos e novos doces a oferecer.</p>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12">
                   <div class="card h-100" style=" border: 0">
                       <img src="img/sobre/unicornio.jpg" width="100%" height="100%" alt="Imagem ilustrativa" style="border-radius: 20px"/>
                   </div>
                </div>
            </div>

        </div>


        <?php
        include ('includes/footer.php');
        ?>
    </body>
</html>
