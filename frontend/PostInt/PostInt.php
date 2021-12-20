<?php
session_start();

require_once "./backend/libs/conecta.php";

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
?>

<!DOCTYPE html>
<html lang="PT-br">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="./frontend/assets/css/bootstrap.css">
        <link rel="stylesheet" href="./frontend/CSS/PostInt/style.css">

        <link rel="shortcut icon" href="./frontend/imagens/logo.png" >
        
        <title>Postagens de interesse- MayDay Pet's</title>
    </head>

    <body>
     
       <?php
            require_once("./frontend/header/header.php");
       ?>

            <div class="container-fluid">

                <!--Publicações de interesse -->
                <form action="" class="mt-3 " id="GroupInteresse">
                    
                    <div class="row ">

                        <!--Bloco dos tipos-->
                            <div class="col-2 mb-2 me-1 WidthColBtnInt row-padding" >

                                <a class="btn btnpadding ButtonRadius BackgroundTheme text-white float-end " id="PostsIntDoacao" data-bs-toggle="collapse" data-bs-target=".multi-collapse-IntDoacao" aria-expanded="false" aria-controls="PostDoacaoInteresse SetaUpInt SetaDownInt" style="padding: 0rem;"> <!--Tag que muda o display com o JS das postagens tipo doação-->

                                    <h6 class="d-inline ms-2"> Doações 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-arrow-up-short collapse multi-collapse-IntDoacao " viewBox="0 0 16 16" id="SetaUpInt">
                                            <path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z"/>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-arrow-down-short collapse show multi-collapse-IntDoacao " viewBox="0 0 16 16"id="SetaDownInt" >
                                            <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z"/>
                                        </svg>
                                    </h6>

                                </a> <!--Fim da tag-->

                            </div>

                            <div class="col-2 mb-3 WidthColBtnInt row-padding">

                                <a class="btn btnpadding ButtonRadius BackgroundTheme text-white " id="PostsIntPedido" data-bs-toggle="collapse" data-bs-target=".multi-collapse-IntPedido" aria-expanded="false" aria-controls="PostPedidosInteresse SetaUpInt1 SetaDownInt1" style="padding: 0rem;">  <!--Tag que muda o display com o JS das postagens tipo pedido-->
                                    
                                    <h6 class="d-inline ms-2"> Pedidos 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-arrow-up-short collapse multi-collapse-IntPedido"  viewBox="0 0 16 16" id="SetaUpInt1">
                                            <path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z"/>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-arrow-down-short collapse show multi-collapse-IntPedido " viewBox="0 0 16 16" id="SetaDownInt1">
                                            <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z"/>
                                        </svg>
                                    </h6>

                                </a> <!--Fim do tag-->

                            </div>
                        <!--Fim fo bloco-->

                    </div>

                    <!--Bloco geral que tem os posts do tipo Doação-->
                        <div class="row collapse multi-collapse-IntDoacao" id="PostDoacaoInteresse">
                            
                            <?php
                                require_once("./frontend/PostInt/interesse_doacao.php");
                            ?>

                        </div>
                    <!--Fim do bloco da row-->

                   <!--Bloco geral que tem os posts do tipo Doação-->
                   <div class="row collapse multi-collapse-IntPedido" id="PostPedidoInteresse">
                            
                            <?php
                                require_once("./frontend/PostInt/interesse_pedido.php");
                            ?>


                        </div>
                    <!--Fim do bloco da row-->
                </form>
            </div>


            <script type="text/javascript" src="./frontend/assets/js/jquery.js"></script>
            <script type="text/javascript" src="./frontend/assets/js/bootstrap.js"></script>

            <script src="./frontend/JS/PostInt/script.js"></script>
        <!--Scripts que linkam com  o JavaScript do Bootstrap 5-->
            
    </body>
</html>

<?php
 endwhile;
?>