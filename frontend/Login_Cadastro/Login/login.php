<?php

$acao = 'login';

?>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="./frontend/assets/css/bootstrap.css">

        <script type="text/javascript" src="./frontend/assets/js/jquery.js"></script>
	    <script type="text/javascript" src="./frontend/assets/js/bootstrap.js"></script>

        <link rel="shortcut icon" href="./frontend/imagens/logo.png" >
        <link rel="stylesheet" href="./frontend/CSS/Telas_Login/index/123.css">
        <title>MayDayPet's - Login</title>
    </head>
    <body class="BackgroundTheme">
        <div class="container-fluid ">
            <div class="row">

                <div class="col-12 d-flex justify-content-center text-center mt-3">

                    <p > 
                        <img src="./frontend/imagens/logo.png" alt="" class="img-fluid WidthLogo displayLogoResponsive1  me-2">
                        <span class="WidthMayday text-white display-4 justify-content-start "> 
                            <img src="./frontend/imagens/logo.png" alt="" class="img-fluid WidthLogo displayLogoResponsive2  me-2">
                            MayDay Pet's
                            <span class=" fst-italic text-white display-6 DisplayFunction">Faça login ou crie uma conta.</span>
                        </span>
                        
                    </p>
                
                </div>

                <div class="col-5 row-padding WidthCol-5 mt-3">
                   
                    <form action="./backend/usuarios.php"  id="form_login" action="#" method="POST" name="form_login">

                        <input type="hidden" name="grupo" value="usuarios">
                        <input type="hidden" name="acao" value="<?=$acao?>">

                        <div class=" BackgroundThemeE1B1B8 p-3 rounded display-inline-body">
                            <div class="form-floating mb-3 ">
                                <input type="email" class="form-control" id="email_login" placeholder="Insira seu email." name="email_login">
                                <label for="InputEmail">Email</label>
                            </div>

                            <div class="form-floating">
                                <input type="password" class="form-control" id="senha_login" placeholder="Sua senha." name="senha_login">
                                <label for="InputSenha">Senha</label>
                            </div>
                            
                            <button class="btn BackgroundThemebtn ButtonRadius  mt-3  width-a" type="submit" id="FazerLogin">
                                <h4 class="d-inline text-white ms-1 me-1">Entrar</h4> 
                            </button>


                            <a href="./index.php?pag=cadastro" class="btn BackgroundThemebtn ButtonRadius  mt-3 width-a" type="button">
                                <h4 class="d-inline text-white ms-1 me-1">Cadastrar-se</h4> 
                            </a>

                            <a href="./index.php?pag=redefinicao" class="text-decoration-none ForgotPassword font_import float-end mt-4 me-2">
                                <h5>Esqueceu a senha?</h5>
                            </a>
                        </div>
                          
                    </form>
                </div>
            </div>
        </div>    
