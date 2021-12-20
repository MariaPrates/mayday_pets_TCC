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

<html lang="PT-br">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script type="text/javascript" src="./frontend/assets/js/"></script>

        <link rel="stylesheet" href="./frontend/assets/css/bootstrap.css">
        <link rel="stylesheet" href="./frontend/CSS/home/style1234.css">

        <link rel="shortcut icon" href="./frontend/imagens/logo.png" >
        
        <title>Inicio - MayDay Pet's</title>
    </head>

    <body>
     
       <?php
            require_once("./frontend/header/header.php");
       ?>

            <!--Container do corpo-->
                <div class="container-fluid ">

                <!--Chats / aba de conversas
                    <div class="row PositionMensages">
                        <div class="col-12 PaddinHighCol-12">
                            <div class="Container-general DisplayBtnMensagesReponsive">

                                //Botões para mostrar os chats e as mensagens
                                    <button class="btn BtnMensage p-3 text-center collapse show  multi-collapse-Chat multi-collapse-ChatDownBtn multi-collapse-ChatInt multi-collapse-ChatBtnIntDoacao multi-collapse-ChatBtnIntPedido  multi-collapse-UserIntDoacao multi-collapse-UserIntPedido multi-collapse-ChatPost" id="BtnMensagesAba" data-bs-toggle="collapse" data-bs-target=".multi-collapse-Mensages" aria-expanded="false" aria-controls="AbaMensagens ChatMensagesGeneral">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-chat-square-text mt-2 " viewBox="0 0 16 16" >
                                            <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                            <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                                        </svg>
                                    </button>
                               
                            </div>
                            
                        </div>
                        <div class="col-12 PaddinHighCol-12">
                            <div class="Container-general">

                                 //Aba onde mostra as conversas
                                    <div class="AbaNotificationMensages collapse multi-collapse-Mensages multi-collapse-ChatInt multi-collapse-ChatBtnIntDoacao multi-collapse-ChatBtnIntPedido multi-collapse-UserIntDoacao multi-collapse-UserIntPedido multi-collapse-MsgChat multi-collapse-Chat multi-collapse-ChatDownBtn" id="AbaMensagens">

                                        <a class=" d-block FontTextGeneral text-decoration-none text-dark p-2 HoverLinkMensages " id="ChooseChat"  data-bs-toggle="collapse" data-bs-target=".multi-collapse-Chat" aria-expanded="false" aria-controls="ChatMensagesGeneral  ">
                                            <div class="flex-shrink-0">
                                                <img src="./frontend/imagens/ProfilePhoto.png" alt="..." class="ProfilePhotoNotificationMensages">
                                                <h5 class="d-inline">UserName</h5><p class="d-inline ms-2">01/02</p>
                                            </div>
                                            <div class="flex-grow-1 TextConfiguration">
                                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus..
                                            </div>
                                            <hr class="HrDisplay">
                                        </a>

                                        <a class=" d-block FontTextGeneral text-decoration-none text-dark p-2 HoverLinkMensages " id="ChooseChat"  data-bs-toggle="collapse" data-bs-target=".multi-collapse-Chat" aria-expanded="false" aria-controls=" ChatMensagesGeneral BtnMensagesAba">
                                            <div class="flex-shrink-0">
                                                <img src="./frontend/imagens/ProfilePhoto.png" alt="..." class="ProfilePhotoNotificationMensages">
                                                <h5 class="d-inline">UserName</h5><p class="d-inline ms-2">01/02</p>
                                            </div>
                                            <div class="flex-grow-1 TextConfiguration">
                                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus..
                                            </div>
                                            <hr class="HrDisplay">
                                        </a>
                                        <a class=" d-block FontTextGeneral text-decoration-none text-dark p-2 HoverLinkMensages " id="ChooseChat"  data-bs-toggle="collapse" data-bs-target=".multi-collapse-Chat" aria-expanded="false" aria-controls=" ChatMensagesGeneral BtnMensagesAba">
                                            <div class="flex-shrink-0">
                                                <img src="./frontend/imagens/ProfilePhoto.png" alt="..." class="ProfilePhotoNotificationMensages">
                                                <h5 class="d-inline">UserName</h5><p class="d-inline ms-2">01/02</p>
                                            </div>
                                            <div class="flex-grow-1 TextConfiguration">
                                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus..
                                            </div>
                                            <hr class="HrDisplay">
                                        </a>
                                        <a class=" d-block FontTextGeneral text-decoration-none text-dark p-2 HoverLinkMensages " id="ChooseChat"  data-bs-toggle="collapse" data-bs-target=".multi-collapse-Chat" aria-expanded="false" aria-controls=" ChatMensagesGeneral BtnMensagesAba">
                                            <div class="flex-shrink-0">
                                                <img src="./frontend/imagens/ProfilePhoto.png" alt="..." class="ProfilePhotoNotificationMensages">
                                                <h5 class="d-inline">UserName</h5><p class="d-inline ms-2">01/02</p>
                                            </div>
                                            <div class="flex-grow-1 TextConfiguration">
                                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus..
                                            </div>
                                            <hr class="HrDisplay">
                                        </a>

                                    </div>

                            </div>
                        </div>
                        
                    
                    </div>

                Chat de mensagens
                    <form class="row PositionMensages " id="ChatMensagesGeneral">
                      
                        <div class="col-12 BtnMensageCol">
                            <div class="Container-general DisplayBtnMensagesReponsive">

                                   <button class=" btn BtnMensage  text-center collapse multi-collapse-Chat multi-collapse-ChatDownBtn multi-collapse-ChatBtn  multi-collapse-ChatBtnResponsive multi-collapse-ChatInt multi-collapse-ChatBtnIntDoacao multi-collapse-ChatBtnIntPedido multi-collapse-UserIntDoacao multi-collapse-UserIntPedido multi-collapse-ChatPost multi-collapse-ChatPostResponsive" id="BtnMensagesAbaDown " data-bs-toggle="collapse" data-bs-target=".multi-collapse-ChatDownBtn" aria-expanded="false" aria-controls="ChatMensagesGeneral BtnMensagesAba" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z"/>
                                        </svg>
                                    </button>

                            </div>
                        </div>

                        <div class="col-12 PaddinCol-12 collapse multi-collapse-Chat multi-collapse-ChatDownBtn  multi-collapse-ChatBtnResponsive multi-collapse-ChatInt multi-collapse-ChatBtnIntDoacao multi-collapse-ChatBtnIntPedido  multi-collapse-UserIntDoacao multi-collapse-ChatPost multi-collapse-UserIntPedido multi-collapse-ChatPostResponsive">
                            <div class="Container-general-chat BackgroundThemeE1B1B8 BtnMensagesAbaDownResponsive">

                                //Header do chat
                                    <div class="d-flex align-items-center justify-content-between  BackgroundThemeE1B1B8 ">
                                        <div>
                                            <img src="./frontend/imagens/ProfilePhoto.png" alt="..." class="ProfilePhotoChatMensage">
                                            <h5 class="d-inline">UserName</h5> 
                                        </div>
                                        

                                        
                                        <div class="align-items-center d-flex">
                                               <div class="dropdown">

                                                //Botão para excluir o chat
                                                    <button class="btn text-decoration-none dropdown text-dark " type="button" id="DropdownTrash1" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                        </svg>
                                                    </button>

                                                    <ul class="dropdown-menu bg-danger" aria-labelledby="DropdownTrash1">
                                                        <li>
                                                            <button class="btn dropdown-item bg-danger text-white">Excluir permanentemente</button>
                                                        </li>
                                                    </ul>

                                                <button class=" btn BtnMensageResponsive  text-center collapse multi-collapse-Chat multi-collapse-ChatDownBtn multi-collapse-ChatBtn  multi-collapse-ChatBtnResponsive multi-collapse-ChatInt multi-collapse-ChatBtnIntDoacao multi-collapse-ChatBtnIntPedido multi-collapse-UserIntDoacao multi-collapse-UserIntPedido multi-collapse-ChatPost multi-collapse-ChatPostResponsive" id="BtnMensagesAbaDownResponsive " data-bs-toggle="collapse" data-bs-target=".multi-collapse-ChatDownBtn" aria-expanded="false" aria-controls="ChatMensagesGeneral BtnMensagesAba">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="36" fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z"/>
                                                    </svg>
                                                </button>
                                            </div>
                                        
                                        </div>

                                     
                                    </div>

                                //Aba das mensagens do chat
                                    <div class="ChatMensages p-3" id="ScrollChat">
                                        <div class="row">

                                            <div class="col-12">
                                                <p class=" float-end  data text-center w-100"> 01/02/2021</p> 
                                            </div>
                                            <div class="col-12">
                                                <p class=" float-end  MensagemEnviada p-2 text-wrap">  Olá</p> 
                                            </div>
                                            <div class="col-12">
                                                <p class=" float-start MensagemRecebida p-2 text-wrap">Olá</p>   
                                            </div>
                                            <div class="col-12">
                                                <p class=" float-start MensagemRecebida p-2 text-wrap">tudo bem? vi que você se interessou pelo meui post sobre a caminha pra cachorro</p>   
                                            </div>
                                            <div class="col-12">
                                                <p class=" float-end  MensagemEnviada p-2 text-wrap"> Tudo, sim estou realmente precisando de uma, agora que começou o inverno meu dog precisa de uma e infelizmente estou sem dim suficiente pra comprar, você poderia fazer o orçamento para ver quianto sairia o frete?</p> 
                                            </div>
                                            <div class="col-12">
                                                <p class=" float-start MensagemRecebida p-2 text-wrap">Claro, assim que eu chegar em casa eu vejo quanto sairia pra mandar pelos correios</p>   
                                            </div>

                                        </div>
                                    </div>

                                //Aba para mandar nova mensagem   
                                    <div class="row mb-2 mt-2">
                                        <div class="col-9">
                                            <input type="text" class="ms-2 form-control " id="MensageSend" placeholder="Digite uma mensagem"></input>
                                        </div>
                                        <div class="col-3">
                                            <button class="btn btn-dark" type="submit">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                                </svg>
                                            </button>
                                        </div>
                                        
                                    </div>

                            </div>
                        </div>
                        
                        
                    </form>

                -->
                <!--Carrosel e feed-->    
                    <div class="row collapse show multi-collapse-Settings multi-collapse-MsgChat multi-collapse-ChatBtnResponsive multi-collapse-ChatPostResponsive mt-3" >
                        <div class="col-12 align-items-center">

                            <!--Aba de pesquisapara telas pequenas
                                <form action="" >
                                    <div class="row " id="SearchFormFeed">
                                        <div class="col-12">
                                            <div class="input-group mb-3 me-3">
                                                <input type="text" class="form-control SearchBorder" placeholder="Pesquisa" aria-label="Search">
                                                <button type="submit" class="btn SearchBorder BackgroundThemeInteresse" type="button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-search text-white" viewBox="0 0 16 16">
                                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            //Carossel
                                <div class="row " id="CarroselMedia">
                                    <div class="col-12">
        
                                        //Bloco que tem o carrossel
                                            <div id="carouselHeader" class="carousel slide" data-bs-ride="carousel">
                                                
                                                //Posições do carrossel
                                                    <div class="carousel-indicators">
        
                                                        <button type="button" data-bs-target="#carouselHeader" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>

                                                        <button type="button" data-bs-target="#carouselHeader" data-bs-slide-to="1" aria-label="Slide 2"></button>

                                                        <button type="button" data-bs-target="#carouselHeader" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                                
                                                    </div>
            
                                                //Imagens
                                                    <div class="carousel-inner">
            
                                                        Imagens do 1° slide
                                                            <div div class="carousel-item active">
                                                                <div class="row">

                                                                    <div class="col-4" id="WidthColCarosel">
                                                                        <button class="btn">
                                                                            <img src="./frontend/imagens/imgExample.png" class="rounded-3 d-block w-100 img-fluid bg-danger " alt="...">
                                                                        </button>
                                                                    </div>
                                                                    <div class="col-4" id="WidthColCarosel">
                                                                        <button class="btn">
                                                                            <img src="./frontend/imagens/imgExample.png" class="rounded-3 d-block w-100 img-fluid bg-danger" alt="...">
                                                                        </button>                                    
                                                                    </div>
                                                                    <div class="col-4" id="DisplayCarousel">
                                                                        <button class="btn">
                                                                            <img src="./frontend/imagens/imgExample.png" class="rounded-3 d-block w-100 img-fluid bg-danger " alt="...">
                                                                        </button>                                    
                                                                    </div>

                                                                </div>
                                                            </div>
            
                                                        //Imagens do 2° slide
                                                            <div div class="carousel-item ">
                                                                <div class="row">

                                                                    <div class="col-4" id="WidthColCarosel">
                                                                        <button class="btn">
                                                                            <img src="./frontend/imagens/imgExample.png" class="rounded-3 d-block w-100 img-fluid bg-danger" alt="...">
                                                                        </button>                                    
                                                                    </div>
                                                                    <div class="col-4" id="WidthColCarosel">
                                                                        <button class="btn">
                                                                            <img src="./frontend/imagens/imgExample.png" class="rounded-3 d-block w-100 img-fluid bg-danger " alt="...">
                                                                        </button>                                   
                                                                    </div>
                                                                    <div class="col-4" id="DisplayCarousel">
                                                                        <button class="btn">
                                                                            <img src="./frontend/imagens/imgExample.png" class="rounded-3 d-block w-100 img-fluid bg-danger" alt="...">
                                                                        </button>                                    
                                                                    </div>

                                                                </div>
                                                            </div>
            
                                                        //Imagens do 3° slide
                                                            <div div class="carousel-item ">
                                                                <div class="row">

                                                                    <div class="col-4" id="WidthColCarosel">
                                                                        <button class="btn">
                                                                            <img src="../frontend/imagens/imgExample.png" class="rounded-3 d-block w-100 img-fluid bg-danger" alt="...">
                                                                        </button>                                    
                                                                    </div>
                                                                    <div class="col-4" id="WidthColCarosel">
                                                                        <button class="btn">
                                                                            <img src="./frontend/imagens/imgExample.png" class="rounded-3 d-block w-100 img-fluid bg-danger" alt="...">
                                                                        </button>                                    
                                                                    </div>
                                                                    <div class="col-4" id="DisplayCarousel">
                                                                        <button class="btn">
                                                                            <img src="./frontend/imagens/imgExample.png" class="rounded-3 d-block w-100 img-fluid bg-danger" alt="...">
                                                                        </button>                                    
                                                                    </div>
                                                                </div>
            
                                                            </div>
                                                    </div>

                                            //Botões de prox e ant
        
                                                //Botão de anterior
                                                    <button class="carousel-control-prev ButtonControlPrev d-flex" type="button" data-bs-target="#carouselHeader" data-bs-slide="prev">
        
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
                                                        </svg>
                                                        <span class="visually-hidden">Previous</span>
        
                                                    </button>
        
                                                //Botão de próximo
                                                    <button class="carousel-control-next ButtonControlNext" type="button" data-bs-target="#carouselHeader" data-bs-slide="next">
        
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
                                                        </svg>
                                                        <span class="visually-hidden">Next</span>
        
                                                    </button>

                                            </div>
        
                                    </div>
                                
                                </div>
                            -->
                            
                        </div>
                    </div>    
                        <?php
                            require_once("./frontend/NewPost/NewPost.php");
                        ?>

                            <div class="d-flex mb-3 justify-content-end">
                                <a class="btn text-decoration-none ButtonRadiusNewPost BackgroundThemeE1B1B8 "  data-bs-toggle="collapse" href="#form_novo_post" role="button" aria-expanded="false" aria-controls="form_novo_post">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                                    </svg>
                                </a>
                            </div>
                            

                        <?php
                            require_once("./frontend/home/feed.php");
                        ?>

               
                    </div>

                </div>    

        <!--Scripts que linkam com  o JavaScript do Bootstrap 5-->

            <script type="text/javascript" src="./frontend/assets/js/bootstrap.js"></script>

            <script type="text/javascript" src="./frontend/assets/js/jquery.js"></script>
            <script src="./frontend/JS/home/script2.js"></script>


    </body>
</html>

<?php
    endwhile;
?>