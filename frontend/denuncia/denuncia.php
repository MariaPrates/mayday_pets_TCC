<?php
session_start();
require_once './backend/libs/conecta.php';

// Se novo usuario:
$acao = 'CriarPostagem';

if((!isset ($_SESSION['email_login']) == true) and (!isset ($_SESSION['senha_login']) == true))
{
  header('location:index.php');
  }

$logado = $_SESSION['email_login'];

$sql_home = "SELECT * FROM usuarios WHERE email = '{$_SESSION['email_login']}'";

$sql_conecta = mysqli_query($conexao, $sql_home);
    
while($user = mysqli_fetch_object($sql_conecta)):

    $sql_post = "SELECT * FROM posts WHERE id = '{$_SESSION['id_post_denuncia']}'";

    $sql_post1 = mysqli_query($conexao_aux1, $sql_post);

    while($post = mysqli_fetch_object($sql_post1)):
        $sql_user = "SELECT * FROM usuarios WHERE id = $post->id_usuario";

        $sql_user1 = mysqli_query($conexao_aux2, $sql_user);

        while($user_dados = mysqli_fetch_object($sql_user1)):

        echo "
        <!DOCTYPE html>
        <html lang='PT-br'>
            
            <head>
                <meta charset='UTF-8'>
                <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>

                <script type='text/javascript' src='./frontend/assets/js/jquery.js'></script>
                <script type='text/javascript' src='./frontend/assets/js/bootstrap.js'></script>

                <link rel='stylesheet' href='./frontend/assets/css/bootstrap.css'>
                <link rel='stylesheet' href='./frontend/CSS/Denuncia/style.css'>

                <link rel='shortcut icon' href='./frontend/imagens/logo.png' >
                
                <title> Denúncia - MayDay Pet's</title>
            </head>

            <body>";
                    require_once('./frontend/header/header.php');
                    echo"
                    
                    <!--Container do corpo-->
                    <div class='container-fluid'>
                            <!-- Criar novos posts-->
                                <div class='modal fade' id='modal' tabindex='-1'>
                                    <div class='modal-dialog'>
                                        <div class='modal-content'>
                                            <div class='modal-header'>
                                                <h5 class='modal-title' id='exampleModalLabel'>Atenção</h5>
                                            
                                                <span aria-hidden='true'>&times;</span>
                                                </button>
                                            </div>
                                            <div class='modal-body' id='resultado_processamento'>
                                                <!-- Preenchido apos processamento do Ajax -->
                                            </div>
                                            <div class='modal-footer'>
                                            <a id='redirecionamento_backend'> 
                                                <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Fechar</button>
                                            </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        <!--Configurações-->
                        <form action='' class='row mt-3' id='form_denuncia' method='POST'>
                                
                        <div class='col-12'>
                                <div class='BackgroundThemeE1B1B8 me-1 ms-1 rounded DisplayDenuncia'>
                                    <div class='ms-3 mb-3'>
                                        <p class='fs-2'>Denúnciar postagem de $user_dados->nome </p>
                                    </div>  
                                    <div class='ms-5'>
                                        <!---Animal relacionado-->
                                        <div class='containerGeneral'>

                                            <input type='hidden' name='id_usuario' value='".$_SESSION['id_usuario_denuncia']."' id='id_usuario'>

                                            <input type='hidden' name='id_post' value='".$_SESSION['id_post_denuncia']."' id='id_usuario'>
                                            
                                            <input type='hidden' name='grupo' value='postagens'>

                                            <input type='hidden' name='acao' value='denunciar_envio'>

                                            <input type='reset' class='btn btn-warning d-none' value='Limpar' id='btn_limpar'>

                                            <input type='hidden' id='ativa_modal' data-bs-toggle='modal' data-bs-target='#modal'>

                                            <h4 class='mt-3 d-inline'>Infração:</h4>
                                            
                                            <!--Bloco de opções-->
                                                <ul class='list-group list-group-horizontal' > 
                                                    <li class='list-group-item'> 
                                                        <div class='form-check form-switch'>
                                                            <input class='form-check-input' type='checkbox' id='CheckBoxCunhoSexual' value='1' name='CheckBoxCunhoSexual'>
                                                            <label class='form-check-label' for='CheckBoxCunhoSexual' >Cunho sexual</label>
                                                        </div>
                                                        <div class='form-check form-switch'>
                                                            <input class='form-check-input' type='checkbox' id='CheckBoxAnimal' value='2' name='CheckBoxAnimal'>
                                                            <label class='form-check-label' for='CheckBoxAnimal'>Animal selecionado não  tem relação com a postagem</label>
                                                        </div>
                                                    </li>
                                                    <li class='list-group-item' >
                                                        <div class='form-check form-switch'>
                                                            <input class='form-check-input' type='checkbox' id='CheckBoxFake' value='3' name='CheckBoxFake'>
                                                            <label class='form-check-label' for='CheckBoxFake'>Doação/Pedido falso</label>                    
                                                        </div>
                                                        <div class='form-check form-switch'>
                                                            <input class='form-check-input' type='checkbox' id='CheckBoxViolencia' value='4' name='CheckBoxViolencia'>
                                                            <label class='form-check-label' for='CheckBoxViolencia'>Insitação a violência</label>
                                                        </div>
                                                    </li>
                                                </ul>

                                                <!--Bloco de escolher outro animal e salvar alterações-->
                                                    <input type='text' class='form-control w-75' id='descricao' placeholder='Explique a situação' maxlength='250' name='descricao'>
                                                <!--Fim do bloco-->

                                                <button type='submit' class='btn btn-danger ButtonRadius  text-white mb-2 me-2 mt-2 float-end' type='submit' id='denuncia_btn'>
                                                    Denúnciar
                                                </button>

                                            <!--Fim do bloco--> 
                                        </div>
                                    </div>
                                </div>
                        </div>
                        
                        </form>

                </div>
                
                    <!--Fim do container-->

                <!--Scripts que linkam com  o JavaScript do Bootstrap 5-->
                <script src='./frontend/JS/denuncia/123.js'></script>
            </body>
        </html>";
        endwhile;    
    endwhile;
endwhile;
?>