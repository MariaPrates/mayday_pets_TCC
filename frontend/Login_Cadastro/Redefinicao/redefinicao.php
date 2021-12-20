<!DOCTYPE html>
<html lang="PT-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="./frontend/assets/css/bootstrap.css">
        <link rel="stylesheet" href="./frontend/CSS/Telas_Login/style.css">

        <link rel="shortcut icon" href="./frontend/imagens/logo.png" >

        <title>MayDayPet's - Confirmação</title>
    </head>
    <body class="BackgroundTheme">
         <div class="modal fade" id="modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal">Atenção</h5>
                    
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="resultado_processamento">
                    <!-- Preenchido apos processamento do Ajax -->
                </div>
                <div class="modal-footer">
                    <a href="./index.php?pag=confirma_senha">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
        <div class="container-fluid ">
            <div class="row">

                <div class="col-6 WidthCol-6 align-items-center MarginTopIndexLogo text-center">

                    <p > 
                        <img src="./frontend/imagens/logo.png" alt="" class="img-fluid WidthLogo displayLogoResponsive1  me-2">
                        <span class="WidthMayday text-white display-4 justify-content-start "> 
                            <img src="../frontend/imagens/logo.png" alt="" class="img-fluid WidthLogo displayLogoResponsive2  me-2">
                            MayDay Pet's
                            <span class=" fst-italic text-white display-6 DisplayFunction">Redefinição de senha.</span>
                        </span>
                        
                    </p>
                
                </div>
                <div class="col-5 WidthCol-5">
                   
                    <form action="" id='form_redefinicao' method='POST' name='form_redefinicao'>
                          <input type='hidden' id='grupo' name='grupo' value='usuarios'>
                         <input type='hidden' id='acao' name='acao' value='redefinicao'>

                        <div class="MarginTopIndexLogo BackgroundThemeE1B1B8 p-3 rounded">

                            <div class="form-floating mb-3 ">
                                <input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Insira seu email.">
                                <label for="InputEmail">Email usado no cadastro</label>
                            </div>
                            <p class="text-white" id="InformaCerto"></p>

                            <button class="btn BackgroundThemebtn ButtonRadius p-2 mt-3" type="submit" id="verifica">
                                <h5 class="d-inline text-white">Confirmar</h5> 
                            </button>

                            <a href="./index.php" class="btn BackgroundThemebtn ButtonRadius p-2 mt-3 ms-2" type="submit" id="FazerLogin">
                                <h5 class="d-inline text-white">Voltar</h5> 
                            </a>
                             <input type='hidden' id='ativa_modal' data-bs-toggle='modal' data-bs-target='#modal'>
                                            


                        </div>
                          
                    </form>
                </div>
            </div>
        </div>    

        <script type="text/javascript" src="./frontend/assets/js/jquery.js"></script>
	    <script type="text/javascript" src="./frontend/assets/js/bootstrap.js"></script>

        <script src="./frontend/JS/redefinicao/script.js"></script>
       
    </body>
</html>