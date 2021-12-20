<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="./frontend/assets/css/bootstrap.css">

        <script type="text/javascript" src="./frontend/assets/js/jquery.js"></script>
	    <script type="text/javascript" src="./frontend/assets/js/bootstrap.js"></script>

        <link rel="shortcut icon" href="./frontend/imagens/logo.png" >

        <link rel="stylesheet" href="./frontend/CSS/Telas_Login/style.css">
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
                    <a href="./index.php?pag=index">
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
                            <img src="../imagens/logo.png" alt="" class="img-fluid WidthLogo displayLogoResponsive2  me-2">
                            MayDay Pet's
                            <span class=" fst-italic text-white display-6 DisplayFunction">Confirmação de usuário.</span>
                        </span>
                        
                    </p>
                
                </div>
                <div class="col-5 WidthCol-5">
                   
                    <form id="form_confirmacao" action="#" method="POST" name="form_confirmacao">

                        <div class="MarginTopIndexLogo BackgroundThemeE1B1B8 p-3 rounded">
                            <input type="hidden" name="grupo" value="usuarios">
                            <input type="hidden" name="acao" value="confirmacao">


                            <div class="form-floating mb-3 ">
                                <input type="text" class="form-control" name="InputCod" id="InputCod" placeholder="Digite aqui o código que foi mandado para seu e-mail">
                                <label for="InputCod">Digite aqui o código que foi mandado para seu e-mail</label>
                            </div>
                            <p class="text-white" id="InformaCerto"></p>

                            <button class="btn BackgroundThemebtn ButtonRadius p-2 mt-3" type="submit" id="corfirmar_codigo">
                                <h5 class="d-inline text-white">Confirmar</h5> 
                            </button>

                            <a href="./index.php?pag=index" class="btn BackgroundThemebtn ButtonRadius p-2 mt-3 ms-2" type="submit" id="FazerLogin">
                                <h5 class="d-inline text-white">Voltar</h5> 
                            </a>
                              <input type='hidden' id='ativa_modal' data-bs-toggle='modal' data-bs-target='#modal'>


                        </div>
                          
                    </form>
                </div>
            </div>
        </div>    
        <script src="./frontend/JS/confirmacao/confirmacao.js"></script>

    </body>
</html>