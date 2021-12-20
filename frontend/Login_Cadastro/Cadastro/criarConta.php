
<?php

$pagina = $_GET['pag']; // pegando a pagina atual (novo ou editar usuario)
// Se novo usuario:
$acao = 'cadastrar';
$id_usuario = '';
if ($pagina == 'editar_usuario') { // se editar usuario
	$id_usuario = $_GET['id'];
	$acao = 'atualizar_usuario';
}

?>


    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script type="text/javascript" src="./frontend/assets/js/jquery.js"></script>
	    <script type="text/javascript" src="./frontend/assets/js/bootstrap.js"></script>

        <link rel="stylesheet" href="./frontend/assets/css/bootstrap.css">
        <link rel="stylesheet" href="./frontend/CSS/Telas_Login/style.css">

        <link rel="shortcut icon" href="./frontend/imagens/logo.png" >

        <title>MayDayPet's - Criação de conta</title>
    </head>
    <body class="BackgroundTheme">
        <div class="container-fluid ">
           
            <div class="row">

                <div class="col-12 d-flex justify-content-center  text-center">

                    <p > 
                        <img src="./frontend/imagens/logo.png" alt="" class="img-fluid WidthLogo displayLogoResponsive1  me-2">
                        <span class="WidthMayday text-white display-4 justify-content-start "> 
                            <img src="./frontend/imagens/logo.png" alt="" class="img-fluid WidthLogo displayLogoResponsive2  me-2 mt-2">
                            MayDay Pet's
                            <span class=" fst-italic  text-white display-6 DisplayFunction">Cadastrar-se</span>
                        </span>
                        
                    </p>
                
                </div>

                <div class="col-5 row-padding WidthCol-5">
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
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <div>

                        <form class="MarginTopIndexLogo BackgroundThemeE1B1B8 p-3 rounded" id="form_novo_usuario" action="#" method="POST" name="form_novo_usuario">

                            <input type="hidden" name="id_usuario" value="<?=$id_usuario?>" id="id_usuario">
                            <input type="hidden" name="grupo" value="usuarios">
                            <input type="hidden" name="acao" value="<?=$acao?>">

                            <h4 class='mb-2'>Endereço:</h4>

                            <div class="form-floating mb-3 ">
                                <input type="text" name="rua_usuario" id="rua_usuario" class="form-control" placeholder="Digite o nome da sua rua..." maxlength="150" required>
                                <label for="nome_usuario">Digite o nome da sua rua.</label>
                            </div>

                            <div class="form-floating mb-3 ">
                                <input type="text" name="nmr_residencia_usuario" id="nmr_residencia_usuario" class="form-control" placeholder="Digite o número da sua residência..." maxlength="10" required>
                                <label for="nome_usuario">Digite o número da sua residência.</label>
                            </div>

                            <div class="form-floating mb-3 ">
                                <input type="text" name="bairro_usuario" id="bairro_usuario" class="form-control" placeholder="Insira seu bairro..." maxlength="150" required>
                                <label for="nome_usuario">Digite o nome do seu bairro.</label>
                            </div>

                            <div class="form-floating mb-3 ">
                                <input type="text" name="cidade_usuario" id="cidade_usuario" class="form-control" placeholder="Insira sua cidade..." maxlength="50" required>
                                <label for="nome_usuario">Digite o nome da sua cidade.</label>
                            </div>

                            <div class="form-floating mb-3 ">
                                <input type="text" name="estado_usuario" id="estado_usuario" class="form-control" placeholder="Digite o nome do seu estado..." required>
                                <label for="nome_usuario" maxlength="50">Digite o nome do seu estado.</label>
                            </div>

                            <div class="form-floating mb-3 ">
                                <input type="text" name="cep_usuario" id="cep_usuario" class="form-control" placeholder="Insira seu CEP..." maxlength="20" required>
                                <label for="nome_usuario">Digite seu CEP.</label>
                            </div>

                            <h4 class='mt-3 mb-2'>Dados pessoais:</h4>

                            <div class="form-floating mb-3 ">
                                <input type="text" name="nome_usuario" id="nome_usuario" class="form-control" placeholder="Insira seu nome aqui..." required>
                                <label for="nome_usuario">Insira seu nome.</label>
                            </div>

                            <div class="form-floating mb-3 ">
                                <input type="text" name="contato" id="contato" class="form-control" placeholder="Insira um número de contato aqui..." required>
                                <label for="contato">Número de contato.</label>
                            </div>

                            <div class="form-floating mb-3 ">
                                <input type="email" name="email_usuario" id="email_usuario" class="form-control" placeholder="Insira seu e-mail aqui..." required>
                                <label for="email_usuario">Insira um email.</label>
                            </div>

                            <div class="form-floating mb-3 ">
                                <input type="password" name="senha_usuario" id="senha_usuario" class="form-control" placeholder="Insira sua senha aqui..." required>
                                <label for="senha_usuario">Insira uma senha</label>
                            </div>

                            <h4>Animal de interesse:</h4>
                            
                            <div class="d-flex">
                                <div class="form-check form-switch ms-3">
                                    <input class="form-check-input" type="checkbox" id="CheckBoxCachorro" value="2" name="interesse_cachorro">
                                    <label class="form-check-label" for="CheckBoxCachorro" >Cachorro</label>
                                </div>
                                <div class="form-check form-switch ms-2">
                                    <input class="form-check-input" type="checkbox" id="CheckBoxGato" value="2" name="interesse_gato">
                                    <label class="form-check-label" for="CheckBoxGato">Gato</label>
                                </div>
                            </div>
                            


                            <input type="submit" class="btn BackgroundThemebtn ButtonRadius p-2 mt-3 text-white" value="Confirmar" id="btn_salvar_usuario">


                            <a href="./index.php" class="btn BackgroundThemebtn ButtonRadius p-2 mt-3 ms-2" type="submit" id="FazerLogin">
                                <p class="d-inline text-white">Voltar</p> 
                            </a>

                            <input type="hidden" id="ativa_modal" data-bs-toggle="modal" data-bs-target="#modal">

                            <input type="reset" class="btn btn-warning d-none" value="Limpar" id="btn_limpar">

                        </form>
                        <script src="./frontend/JS/CriarConta/script.js"></script>
                                                    
                    </div>
                </div>
            </div>
        </div>    

    </body>
   