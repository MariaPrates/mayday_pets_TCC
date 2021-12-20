<?php

session_start();
require_once "./backend/libs/conecta.php";

if((!isset ($_SESSION['email_login']) == true) and (!isset ($_SESSION['senha_login']) == true))
{
  header('location:index.php');
  }

$logado = $_SESSION['email_login'];

$sql_home = "SELECT * FROM usuarios WHERE email = '{$_SESSION['email_login']}'";

$sql_conecta = mysqli_query($conexao, $sql_home);

?>


<html lang='PT-br'>
    
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>


        <script type="text/javascript" src="./frontend/assets/js/jquery.js"></script>
        <script type="text/javascript" src="./frontend/assets/js/bootstrap.js"></script>

        <link rel="stylesheet" href="./frontend/assets/css/bootstrap.css">
        <link rel='stylesheet' href='./frontend/CSS/configuracao/style.css'>

        <link rel="shortcut icon" href="./frontend/imagens/logo.png" >
        
        <title>Configurações - MayDay Pet's</title>
    </head>

    <body>
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
     
      <?php
    while($user = mysqli_fetch_object($sql_conecta)):
        require_once('./frontend/header/header.php');

     
      $id_criptografia = base64_encode($user->id);
            echo "
           <div class='container-fluid'>

                <!--Configurações-->
                <form action='' class='row mt-3' id='form_configuracao' method='POST' name='form_configuracao'>
                        
                    <div class='col-12 row-padding mb-5'>

                        <div class=' BackgroundThemeE1B1B8'>

                            <div class='row ms-2 me-2'>

                                <!--Bloco da foto de perfil e animais de interesse-->
                                    <div class='col-6 WidthColSettings'>
                                        <div class='p-1 mt-3 E9CAC6Style'>

                                            <h4 class='ms-4 mt-2'>Dados Pessoais:</h4>";

                                            if(empty($user->foto)){
                                                echo "
                                                <img src='./frontend/imagens/ProfilePhoto.png' alt='' class='mb-1 img-fluid profilephotostruct d-inline'>";  
                                            }else{
                                                echo "<img src='./frontend/imagens/foto_perfil/$user->foto' alt='' class='mb-1 img-fluid profilephotostruct d-inline'>";  
                                            }

                                            echo"

                                            <input class='form-control w-50 d-inline' type='file' id='upload_img' name='upload_img'>

                                            <input type='hidden' id='grupo' name='grupo' value='usuarios'>
                                            <input type='hidden' id='acao' name='acao' value='atualizar_usuario'>
                                            <input type='hidden' id='id' name='id' value='$id_criptografia'>


                                            <input type='text' class='form-control w-100 mb-3 d-inline' id='nome_usuario' name='nome_usuario' placeholder='Seu nome...' value='";echo strip_tags($user->nome); echo"'>

                                            <input type='email' class='form-control w-100 mb-3 d-inline' id='email_usuario'  name='email_usuario' placeholder='Seu email...' value='";echo strip_tags($user->email); echo"'>

                                            <input type='text' class='form-control w-100 mb-3 d-inline' id='contato_usuario'  name='contato_usuario' placeholder='Seu número...' value='";echo strip_tags($user->contato); echo"'>


                                        </div>

                                        <p></p> <!--Quebra  de linha-->
                                        
                                        <!--Bloco de redefinição de senha-->
                                            <div class='p-3 mt-3 mb-3 E9CAC6Style'>

                                                <label class='form-label mt-3 ms-2'><h5>Redefinição de senha:</h5></label>

                                                    <input type='password' class='form-control WidrhInputsPassword InputPassSettings' id='senha_atual' placeholder='Digite a sua senha atual...' name='senha_atual'>

                                                    <input type='password' class='form-control WidrhInputsPassword InputPassSettings' id='nova_senha_0' placeholder='Defina uma senha...' name='nova_senha_0'>

                                                    <input type='password' class='form-control WidrhInputsPassword InputPassSettings' id='nova_senha_1' placeholder='repita a senha...' name='nova_senha_1'>

                                         </div>

                                    </div>
                                <!--Fim do bloco -->

                                <!--Bloco de configuração de endereço e senha-->
                                    <div class='col-6 WidthColSettings'>
                                        
                                            <!--Bloco de endereço-->

                                                <div class='p-3 mt-3 E9CAC6Style'>
                                                    <label class='form-label mt-3 ms-2'><h5>Seu endereço:</h5></label>

                                                        <!--Rua-->
                                                            <input type='text' class='form-control w-100 mb-3 d-inline' id='InputRua' name='InputRua' value='";echo strip_tags($user->rua); echo"'>

                                                        <!--Número-->
                                                            <input type='number' class='form-control d-inline w-100 mb-3' id='InputNumero'  name='InputNumero' value='";echo strip_tags($user->numero); echo"'>

                                                        <!--Bairro-->
                                                            <input type='text' class='form-control  w-100 mb-3' id='InputBairro'  name='InputBairro'  value='";echo strip_tags($user->bairro); echo"'>

                                                        <!--Município-->
                                                            <input type='text' class='form-control w-100 mb-3 d-inline' id='InputCidade'  name='InputCidade'  value='";echo strip_tags($user->cidade); echo"'>

                                                        <!--Estado-->
                                                            <input type='text' class='form-control  w-100 mb-3' id='InputEstado'  name='InputEstado'  value='";echo strip_tags($user->estado); echo"'>

                                                        <!--Estado-->
                                                            <input type='text' class='form-control  w-100 mb-3' id='InputCep'  name='InputCep'  value='";echo strip_tags($user->cep); echo"'>    
                                                        
                                                        
                                                </div>
                                                <div class=' mt-3 p-1  E9CAC6Style'>

                                                <!--Bloco da seleção de animais-->
                                                <label class='form-label mt-3 ms-2'><h5>Animais de interesse:</h5></label>
    
                                                    <!--Bloco de opções-->
                                                        <ul class='list-group w-100  list-group-horizontal ListGroupSettings' > 
    
                                                            <li class='list-group-item E9CAC6Style'> 
                                                                <div class='form-check form-switch'>
                                                                    <input class='form-check-input' type='checkbox' id='CheckBoxCachorro' value='2' name='interesse_cachorro' "; 
                                                                    if(!empty($user->interesse_cachorro)){
                                                                        echo 'checked';
                                                                    } echo " >
                                                                    <label class='form-check-label' for='CheckBoxCachorro' >Cachorro</label>
                                                                </div>
                                                                
                                                                <div class='form-check form-switch'>
                                                                    <input class='form-check-input' type='checkbox' id='CheckBoxGato' value='2' name='interesse_gato' "; 
                                                                    if(!empty($user->interesse_gato)){
                                                                        echo 'checked';
                                                                    } echo " >
                                                                    <label class='form-check-label' for='CheckBoxGato' >Gato</label>
                                                                </div>
                                                            </li>
    
                                                        </ul>
                                                        
                                            </div>
                                            
                                            <!--Botão de enviar-->
                                                <input type='submit' class='btn ButtonRadius E9CAC6Style mb-3 mt-3 p-3 float-end ' id='SalvarBtn'  value='Salvar'>
                                                <input type='hidden' id='ativa_modal' data-bs-toggle='modal' data-bs-target='#modal'>
                                            
                                    
                                    </div>
                                <!--Fim do bloco-->   
                                
                            </div>
                             
                        </div>

                    </div>
                
            </form>
            <script src='./frontend/JS/configuracoes/script1.js'></script>

           </div>
            ";
        ?>

        <!--Scripts que linkam com  o JavaScript do Bootstrap 5-->
             
            

    </body>
</html>

<?php
endwhile;
?>
