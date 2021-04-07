<!DOCTYPE html>
<html>
    <head>
        <title>Bolo de Prestigio</title>
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
        <!-- MENU NAVBAR -->
        <?php
        include ('../includes/navbarreceitas.php');
        ?>
        <style>
            @font-face{
                font-family:'LoveStory';
                src: url("fontes/Love_Story_Rough.ttf");
            }

            #titulo{
                font-family:'../fontes/LoveStory';
                font-size: 50px;
                color: white;  
                height:50px    
            }

        </style>
        <main class="container my-2 pt-5">
            <div class="container">
                
                <div class="row">

                    <div class="col-md-6">
                        <div class="card h-100" style=" border: 0">
                        <img src="../img/imgblog1.png" alt="" style="width: 100%; height: 100%; float: left; border-radius: 5% 5% 5% 5%; border: 2px solid #b21f2d;"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100" style=" border: 0">
                        <h2 class="text-center">Histórico da confeitaria</h2>
                        <p class="text-justify">A historia da confeitaria teve inicio anteriormente ao século 1 a.C., entretanto,
                            os doces produzidos não possuíam a forma que têm hoje,além de não serem produzidos
                            com os mesmos ingredientes.</p>
                        <p class="text-justify">A partir de 900 d.C. os europeus passaram a ter contato com o açúcar extraído da cana
                            , que era importado das terras árabes, anteriormente a essa data, o sabor doce conferido após
                            pratos vinha de frutas ou do mel.</p>
                        <p class="text-justify">Em 1747, foi descoberto a possibilidade de extrair o açúcar da beterraba, isto possibilitou
                            a queda nos preços do açúcar, fazendo com que as confeitarias autônomas ploriferassem 
                            por toda a Euroupa e não mais se concentrassem nas cortes.</p>
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-12 mb-5"><br>
                        <div class="card h-100" style=" border: 0">
                        <h2 class="text-center">Confeitaria no Brasil</h2>
                        <p class="text-justify">A história da confeitaria no Brasil surgiu sob o contexto de miscigenação de pocos e culturas
                            somados aos ingredientes típicos brasileiros,oferecendo uma gama de variedades no ramo. A cultura 
                            europeia chegou ao país durante o século XVI, com a chamada expansão marítima, e fortaleceu-se no decorrer 
                            do século XIX, com a vinda da família real para as terras brasileiras. Posteriormente à Segunda Guerra Mundial (1939 - 1945),
                            a área, não só da confeitaria, mas também da tecnologia acentuou seu desenvolvimento; atualmente, é comum encontrar confeitarias
                            com alto padrão tecnológico, que se destacam no mercado com um diferencial qualitativo.</p>
                        </div>
                    </div>
                </div>
            </div>
            <center>  <a href="../blog.php" class="btn btn-outline-danger">Voltar para o Blog</a></center>
        </main>
        <?php
        include ('../includes/footer.php');
        ?>
    </body>
</html>