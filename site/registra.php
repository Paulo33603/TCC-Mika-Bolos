<!DOCTYPE html>

<html>
    <head>
        <title>Registrar-se</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="icon" href="img/logo.png" type="image/x-icon" />

        <!-- LINKS -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
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
                height:50px;
            }

            body{
                background-image: url(img/fundocontato.jpg);
            }

        </style>

        <?php
            include ('includes/navbar.php');
        ?>

        <main class="container">

            <div class="row my-2 pt-5">

                <div class="col-md-4 col-sm-12 my-3"> <hr style="border-color:white"><hr style="border-color:white"> </div>

                <div class="col-md-4 col-sm-12 text-center my-2">
                    <p id="titulo">CADASTRO</p>
                </div>

                <div class="col-md-4 col-sm-12 my-3"> <hr style="border-color:white"><hr style="border-color:white"> </div>

            </div>

            <br>

            <form id="frmCadastroCliente" method='POST' data-toggle="validator" role="form">
                <div class="row">
                     <div class="col-md-2"></div>
                    <div  class="col-md-8 col-sm-12">
                        <div  class="form-group">
                            <input style="border: 2px solid #c82333; border-radius: 10px;" type="text" placeholder="Nome:*" name="nome" class="form-control" required>
                            <div class="help-block with-errors"></div>
                        </div>
                         <div class="col-md-2"></div>
                    </div>
                </div>

                <div class="row">
                     <div class="col-md-2"></div>
                    <div class="col-md-8 col-sm-12">
                        <div  class='form-group'>
                            <input style="border: 2px solid #c82333; border-radius: 10px;" type="text" placeholder="CPF:*" name="cpf" class="form-control" required>
                            <div class="help-block with-errors"></div>
                        </div>
                         <div class="col-md-2"></div>
                    </div>
                </div>

                <div class="row">
                     <div class="col-md-2"></div>
                    <div  class='col-md-8 col-sm-12'>
                        <div class="form-group">
                            <input style="border: 2px solid #c82333; border-radius: 10px;" type="number" placeholder="Cep:" name="cep" class="form-control" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                     <div class="col-md-2"></div>
                </div>
                
                <div class="row">
                     <div class="col-md-2"></div>
                    <div  class='col-md-8 col-sm-12'>
                        <div class="form-group">
                            <input style="border: 2px solid #c82333; border-radius: 10px;" placeholder="E-Mail:" type="text" name="email" class="form-control" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                     <div class="col-md-2"></div>
                </div>

                <div class="row">
                     <div class="col-md-2"></div>
                    <div class='col-md-8 col-sm-12'>
                        <div class="form-group">
                            <input style="border: 2px solid #c82333; border-radius: 10px;" placeholder="Senha:" id="txt_senha" type="password" name="senha" class="form-control" data-minlength="6" data-minlength-error="Mínimo de 6 caracteres" data-required-error="Este campo é obrigatório" required>
                            <div class="help-block with-errors"></div>
                        </div>
                         <div class="col-md-2"></div>
                    </div>
                </div>

                <div class="row">
                     <div class="col-md-2"></div>
                    <div class='col-md-8 col-sm-12'>
                        <div class="form-group">
                            <input style="border: 2px solid #c82333; border-radius: 10px;" placeholder="Confirmar Senha:" data-match="#txt_senha" data-match-error="As senhas não conferem" type="password" name="conf_senha" class="form-control" required>
                            <div class="help-block with-errors"></div>
                        </div>
                         <div class="col-md-2"></div>
                    </div>
                </div>

                <br>
                <br>
                <div id="alertRetorno" class="alert" style="display: none;" role="alert"></div>
                <center>
                <div class='row'>
                    <div class="col-md-12 col-sm-12 mb-3">
                        <input type="submit" value="Enviar cadastro" class="btn btn-danger">
                        <input type="reset" value="Limpar" class="btn btn-danger ml-2">
                        <a href="login.php"><input type="button" value="Voltar ao login" class="btn btn-danger ml-2"></a>
                    </div>
                </div>
                </center>
            </form>
        </main>
        <?php
            include ('includes/footer.php');
        ?>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/popper.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/validator.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/registra.js"></script>
    </body>
</html>