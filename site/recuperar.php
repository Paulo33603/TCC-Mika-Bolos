
<html>
    <head>
        <title>Recuperar senha</title>
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
            
            body{
                background-image: url(img/fundocontato.jpg);
            }

        </style>

        <?php
        include ('includes/navbar.php');
        ?>

        <div class="container-fluid">
            <div class="row" style="height:100px;">
                <div class="col-md-12"></div>
            </div>

            <div class="row" style="height: 250px">
                <div class="col-md-3"></div>

                <div class="col-md-6" style="background-color: #dc3545; border-radius:25px  " >

                    <h5 class="mt-4 text-light">Recupere sua conta</h5>
                    <hr style="border-color:white">
                    <p class="mt-4 text-light">Insira seu email para recuperação de senha.</p>
                    <input type="text" name="Email" placeholder="Digite seu Email" class="form-control" />
                    <br>
                   
                    <button class="btn btn-outline-light ml-1" type="submit" style="float:right;">Enviar</button>
                    <a href="login.php" class="btn btn-outline-light" style="float: right;">Voltar</a>
                </div> 

                <div class="col-md-3"></div>
            </div>
            
            <div class="row" style="height:100px;">
                <div class="col-md-12"></div>
            </div>

        </div>


        <?php
        include ('includes/footer.php');
        ?>

    </body>
</html>
