       
<!DOCTYPE html>

<html>
    <head>
        <title>Contatos</title>
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
                color: white;  
                height:50px    
            }

            body{
                background-image: url(img/fundocontato.jpg);
                background-repeat: ;
                background-size: 200%;
            }

        </style>  
        <?php
        include ('includes/navbar.php');
        ?>

        <main class="container my-2 pt-5" style="height:100%">

            <div class="row my-1">

                <div class="col-md-4 col-sm-12 my-3"> <hr style="border-color:white"><hr style="border-color:white"> </div>

                <div class="col-md-4 col-sm-12 text-center my-2">
                    <p id="titulo">CONTATO</p>
                </div>

                <div class="col-md-4 col-sm-12 my-3"> <hr style="border-color:white"><hr style="border-color:white"> </div>

            </div>
            
            <form method="POST" action="includes/conexao2.php">
            
                <div class="row my-5">

                    <div class="col-md-6 col-sm-12 my-2">
                        <input style="border: 2px solid #c82333" type="text" class="form-control" placeholder="Nome" name="nome"><br>
                        <input style="border: 2px solid #c82333" type="text" class="form-control" placeholder="Email" name="email"><br>
                        <input style="border: 2px solid #c82333" type="text" class="form-control" placeholder="Telefone" name="telefone"><br>
                        <input style="border: 2px solid #c82333" type="text" class="form-control" placeholder="Cidade" name="cidade">
                    </div>

                    <div class="col-md-6 col-sm-12 my-2">
                        <textarea style="border: 2px solid #c82333; height: 100%" class="form-control" placeholder="Mensagem" name="mensagem"></textarea>

                    </div>
                    
                </div>


                <div class="row">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                        <center>
                        <input type="submit" class="btn btn-danger" value="Enviar" name="enviar"> 
                        <input type="reset" class="btn btn-danger" value="Redefinir" name="limpar">
                        <a href="index.php"><input type="button" value="Voltar" class="btn btn-danger"></a>
                        </center>
                    </div>
                     <div class="col-md-4">
                    </div>
                </div>
            
                
            <div class="row">
                    <div class="col-md-3 col-sm-12">
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <hr>
                        <center>                                                        
                                <a href="https://www.facebook.com/bolosdaMika/"> <img src="img/facebook.png" alt="Facebook Empresa" style="height: 45px"/></a>
                                &nbsp;
                                <a href="#"><img src="img/instagram.png" alt="Instagram Empresa" style="height: 45px"/></a>                            
                        </center>
                    </div>
                     <div class="col-md-3 col-sm-12">
                    </div>
                </div>    
            </form>
        </main>

        <?php
        include ('includes/footer.php');
        ?> 

    </body>
</html>
