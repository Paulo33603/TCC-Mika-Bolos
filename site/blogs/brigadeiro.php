<!DOCTYPE html>
<html>
    <head>
        <title>Bolo de Brigadeiro</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="img/logo.png" type="image/x-icon" />
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        
        <link rel="icon" href="../img/logo.png" type="image/x-icon" />
        
        <script src="../js/popper.min.js" type="text/javascript"></script>
        <script src="../js/jquery.min.js" type="text/javascript"></script>
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body>
        <?php
        include ('../includes/navbarreceitas.php');
        ?>
        <style>
            @font-face{
                font-family:'LoveStory';
                src: url("fontes/Love_Story_Rough.ttf");
            }

            #titulo{
                font-family:'fontes/LoveStory';
                font-size: 50px;
                color: white;  
                height:50px    
            }

            body{
                background-color: wheat
            }
        </style>
        <main class="container my-2 pt-5" style="background-color: white; height: 100%">
            
            <div class="row">
                <div class="col-md-4 col-sm-12 my-3"> <hr style="border-color:#b21f2d"><hr style="border-color:#b21f2d""> </div>

                <div class="col-md-4 col-sm-12 my-2" style="text-align: center; font-family:'LoveStory'; font-size: 50px; color: #b21f2d">
                    <p> Bolo de Brigadeiro </p>
                </div>

                <div class="col-md-4 col-sm-12 my-3"> <hr style="border-color:#b21f2d"><hr style="border-color:#b21f2d"> </div>
            </div>
            
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                     <div class="card h-100" style=" border: 0">
                <img src="../img/brigadeiro.jpg" alt=""class="text-center" style="width: 100%;height: 300px; border-radius: 5% 5% 5% 5%; border: 2px solid #b21f2d;"/>
                     </div>
                </div>
                <div class="col-md-3">
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <br>
                    <h2 class="text-center">Ingredientes</h2><br>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Massa:</b><br>
                        <ul>
                            <li>5 ovos</li>
                            <li>1 xícara (chá) de açúcar</li>
                            <li>1 xícara (chá) de leite</li>
                            <li>2 xícaras (chá) de farinha de trigo</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <br>
                        <ul>
                            <li>1/2 (chá) de chocolate em pó</li>
                            <li>1 colher (sopa) de fermento químico em pó</li>
                        </ul>    
                    </div>
                    <div class="col-md-4">
                        <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cobertura e recheio:</b><br>
                        <ul>
                            <li>2 latas de Leite Condensado</li>
                            <li>2 colheres(sopa) de manteiga</li>
                            <li>meia xícara (chá) de chocolate em pó</li>
                            <li>meia xícara (chá) de chocolate granulado</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class='row'>
                <div class="col-md-12">
                    <br>
                    <h2 class="text-center">Modo de preparo</h2><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <b>Bolo:</b><br>
                    <b>1.</b>Bata na batedeira, as claras em neve bem firme. Junte as gemas, uma a uma, e acrescente o açúcar.
                    Despeje o leite aos poucos, sem parar de bater. Incorpore, por fim, delicadamente a farinha peneirada com o
                    Chocolate em Pó e o fermento. Despeje em uma fôrma redonda (28 cm de diâmetro) untada e enfarinhada e leve
                    para assar em forno quente (200º C) por aproximadamente 40 minutos. Deixe esfriar e corte-o ao meio. <br>
                </div>
                <div class="col-md-6">
                    <b>Recheio e cobertura:</b><br>
                    <b>2.</b> Leve o LEITE CONDENSADO, a MANTEIGA e o Chocolate em Pó ao fogo,
                    mexendo sempre. Quando ferver, abaixe o fogo e deixe cozinhar, sem parar de mexer,
                    por cerca de 6 minutos ou até formar um creme consistente.
                    Cubra uma metade do bolo com este creme, arrume a outra metade,
                    espalhe o restante do brigadeiro com uma espátula ou faca e espalhe
                    o chocolate granulado em toda a superfície. Leve para gelar e sirva.<br>
                </div>
            </div>
            <center><a href="../blog.php" class="btn btn-outline-danger mt-5">Voltar para o Blog</a></center>
        </main>
        <?php
        include ('../includes/footer.php');
        ?>
    </body>
</html>