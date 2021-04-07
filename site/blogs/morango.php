<!DOCTYPE html>
<html>
    <head>
        <title>Bolo de Morango</title>
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
                    <p> Bolo de Morango </p>
                </div>

                <div class="col-md-4 col-sm-12 my-3"> <hr style="border-color:#b21f2d"><hr style="border-color:#b21f2d"> </div>
            </div>
            
            
            
            
            <div class="row">
                <div class="col-md-3">
                    
                </div>
                <div class="col-md-6">
                <img src="../img/morango.jpg" alt=""class="text-center" style="width: 100%;height: 300px; border-radius: 5% 5% 5% 5%; border: 2px solid #b21f2d;"/>
                </div>
                <div class="col-md-3">
                    
                </div>
           </div>
            
            <div class="row">
                <div class="col-md-12">
                    <br>
                    <h2 class="text-center">Ingredientes</h2><br>
                </div>
            </div>
                <div class="row">
                    <div class="col-md-4">
                        <b class="ml-4">Massa:</b><br>
                        <ul>
                            <li>2 ovos</li>
                            <li>1 xícara (chá) de água</li>
                            <li>2 xícara (chá) de açúcar</li>
                            <li>2 xícaras (chá) de farinha de trigo</li>
                            <li>1 colher de sopa de fermento em pó</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <b class="ml-4">Recheio:</b><br>
                        <ul>
                            <li>1 gema de ovo</li>
                            <li>1 lata de leite condensado</li>
                            <li>A mesma medida da lata de leite</li>
                            <li>1 colher de sopa bem cheia de maisena</li>
                            <li>12 morangos grandes cortados em cubinhos</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <b class="ml-4">Cobertura:</b><br>
                        <ul>
                            <li>Chantilly de sua preferência</li>
                            <li>Morangos partidos ao meio</li>
                        </ul>
                    </div>
                </div>
            
            <div class='row'>
                <div class="col-md-12">
                    <br>
                    <h2 class="text-center">Modo de preparo</h2><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <b>Bolo:</b><br>
                    <b>1.</b>  Bata na batedeira os ovos com a água até formar um creme espumante.<br>
                    <b>2.</b>  Acrescente, aos poucos, o açúcar e a farinha de trigo, sem parar de bater.<br>
                    <b>3.</b>  Bata por mais 5 minutos.<br>
                    <b>4.</b>  Desligue a batedeira e acrescente o fermento.<br>
                    <b>5.</b>  Misture delicadamente com uma colher.<br>
                    <b>6.</b>  Leve o forno para assar em forma untada com manteiga e farinha, por aproximadamente 40 minutos, ou até dourar.<br>
                    <b>7.</b>  Reserve.<br>
                </div>
                <div class="col-md-4">
                    <b>Recheio</b><br>
                    <b>8.</b>  Leve ao fogo brando todos os ingredientes, dissolvendo a maisena no leite antes de levar à panela.<br>
                    <b>9.</b>  Assim que engrossar, deixe cozinhar por mais 2 minutos, desligue e reserve.<br>
                </div>
                <div class="col-md-4">
                    <b>Montagem</b><br>
                    <b>10.</b>  Parta o bolo ao meio, com o auxílio de uma faca ou linha de costura.<br>
                    <b>11.</b>  Regue as duas metades do bolo com suco de sua preferência ou guaraná, até que fique bem molhadinho.<br>
                    <b>11.</b>  Espalhe o recheio, coloque a outra metade do bolo por cima, pressionando e passando uma faca na lateral para remover o excesso de recheio.<br>
                    <b>11.</b>  Cubra com chantilly e decore com os morangos partidos ao meio.<br>
                    <b>11.</b>  Leve à geladeira por 2 horas.<br>
                </div>
            </div>
            <center><a href="../blog.php" class="btn btn-outline-danger mt-5">Voltar para o Blog</a></center>
        </main>
        <?php
        include ('../includes/footer.php');
        ?>
    </body>
</html>