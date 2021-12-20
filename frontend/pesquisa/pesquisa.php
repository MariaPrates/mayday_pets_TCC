<!DOCTYPE html>
<html lang="PT-br">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script type="text/javascript" src="./frontend/assets/js/jquery.js"></script>
	    <script type="text/javascript" src="./frontend/assets/js/bootstrap.js"></script>

        <link rel="stylesheet" href="./frontend/assets/css/bootstrap.css">
        <link rel="stylesheet" href="../CSS/pesquisa/style.css">
        
        <title> Pesquisa MayDay Pet's</title>
    </head>

    <body>
     
        <!--Header navbar-->  
            <nav class="navbar sticky-top navbar-expand-lg BackgroundTheme ">
                <div class="container-fluid ">
                    
                    <!--Logo e nome do site-->
                        <a class="navbar-brand text-white" href="../home/home.html">
                            <img src="../imagens/logo.png" class="img-fluid Logo ms-2" alt="Logo" title="Home">
                            <h3 class=" d-inline ms-2 fs-2">MayDay Pet's</h3> 
                        </a>

                    <!--Aba para pesquisa-->
                        <form class="input-group InputSearch" action="" id="SearchFormNav">
                            <input class="form-control SearchBorder  "  type="search" placeholder="Pesquisa" aria-label="Search">
                            <button type="submit" class="btn SearchBorder BackgroundThemeInteresse" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-search text-white" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                </svg>
                            </button>
                        </form>
                    
                    <!--Botão que mostra as opções de funcionalidade do site, em telas pequenas-->
                        <button class="navbar-toggler btn text-white DisplayResponsiveNavbar" type="button" data-bs-toggle="collapse" data-bs-target="#ItensHeader" aria-controls="ItensHeader" aria-expanded="false" aria-label="Toggle navigation">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list text-white" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                            </svg>
                        </button>

                    <!--Ícones do header-->
                        <div class="collapse navbar-collapse " id="ItensHeader">
                            <ul class="navbar-nav align-items-center">

                                <!--Ícone de telefone-->
                                    <li class="nav-item">
                                            
                                        <div class="btn-group dropdown  ">
                                            <button class=" btn dropdown text-decoration-none ColorF4F4F4 "  id="dropdownContato"  data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" title="Contato">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-telephone " viewBox="0 0 16 16">
                                                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                                </svg>
                                            </button>
                                            <ul class="dropdown-menu E9CAC6Style position-absolute "aria-labelledby="dropdownContato">
                                                <li>
                                                    <p class="dropdown-item mb-auto mt-auto align-content-center " >
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-at" viewBox="0 0 16 16">
                                                            <path d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907S8.308 9.84 7.371 9.84c-.895 0-1.442-.725-1.442-1.914z"/>
                                                        </svg>
                                                        EmailContato@teste.com
                                                    </p>
                                                </li>
                                            </ul>
                                        </div>
                                
                                    </li>
                            
                                <!--  Ícone de notificações-->
                                    <li class="nav-item">
                                    
                                        <div class="btn-group dropdown ">

                                            <button class=" btn dropdown text-decoration-none ColorF4F4F4 " type="button" id="dropdownMenuClickableInside"  data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false"  title="Notificações">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-bell " viewBox="0 0 16 16">
                                                    <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
                                                </svg>
                                            </button>

                                            <ul class="dropdown-menu DropdownStyleeWidth position-absolute E9CAC6Style" aria-labelledby="dropdownMenuClickableInside">

                                                <li >
                                                    <button class="btn dropdown-item TextNotification position-static">
                                                        <img src="../imagens/ProfilePhoto.png" class="align-start ProfilePhotoNotification" alt="...">
                                                        <p class="d-inline "> UserName te enviou uma mensagem</p>
                                                    </button>
                                                </li>

                                                <li>
                                                    <button class=" btn dropdown-item TextNotification">
                                                        <img src="../imagens/ProfilePhoto.png" class="align-start ProfilePhotoNotification d-inline" alt="...">
                                                        <p class="d-inline ">UserName interagiu com seu post de oferta</p>
                                                    </button>
                                                </li>

                                                <li>
                                                    <button class=" btn dropdown-item TextNotification">
                                                        <img src="../imagens/ProfilePhoto.png" class="align-start ProfilePhotoNotification d-inline" alt="...">
                                                        <p class="d-inline "> UserName interagiu com seu post de pedido</p>
                                                    </button>
                                                </li>
                                            
                                            </ul>
                                        </div>
                                
                                    </li>

                                <!--Ícone de fazer post-->
                                    <li class="nav-item">
                                        
                                        <a href="../NewPost/NewPost.html" class="btn  ColorF4F4F4" type="button" id="NewPost"  title="Fazer postagem">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" fill="currentColor" class="bi bi-plus-lg " viewBox="0 0 16 16">
                                                <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z"/>
                                            </svg>
                                        </a>
                                
                                    </li> 

                                <!--Ver postagens feitas-->
                                    <li class="nav-item">

                                        <a href="../PostFeitos/PostFeitos.html" class="btn ColorF4F4F4" type="button" id="NewPost"  title="Postagens feitas" >
                                            <svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" fill="currentColor" class="bi bi-box-arrow-in-down" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M3.5 6a.5.5 0 0 0-.5.5v8a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-8a.5.5 0 0 0-.5-.5h-2a.5.5 0 0 1 0-1h2A1.5 1.5 0 0 1 14 6.5v8a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 14.5v-8A1.5 1.5 0 0 1 3.5 5h2a.5.5 0 0 1 0 1h-2z"/>
                                                <path fill-rule="evenodd" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                                            </svg>
                                        </a>
                                        
                                    </li>

                                <!--Ícone de interesses-->
                                    <li class="nav-item">
                                        
                                        <a href="../PostInt/PostINt.html" class=" btn ColorF4F4F4 " title="Postagens de interesse" id="Interesses" >
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-box-seam " viewBox="0 0 16 16">
                                                <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"/>
                                            </svg>
                                        </a>
                            
                                    </li>

                                <!--Ícone de configurações-->
                                    <li class="nav-item">
                                        
                                        <a href="../configuracoes/configuracoes.html" class=" btn ColorF4F4F4 " type="button"  title="configurações" id="IconSetting" >

                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-gear " viewBox="0 0 16 16">
                                                <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                                                <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                                            </svg>
                                        </a>
                        
                                    </li>

                                <!--ícone de logout-->
                                    <li class="nav-item" id="LogoutNavbar">
                                    
                                        <button class="btn ColorF4F4F4" title="Sair">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="43" height="43" fill="currentColor" class="bi bi-box-arrow-in-right " viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                                                <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                                            </svg>
                                        </button> 
                                        
                                    </li>

                            </ul>
                            
                        </div>
                        
                        <a class="btn" data-bs-toggle="offcanvas" href="#offcanvasHeader" role="button" aria-controls="offcanvasHeader" id="HeaderResponsiveBtn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list text-white" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                            </svg>
                        </a>

                        <div class="offcanvas offcanvas-end BackgroundThemeE1B1B8 multi-collapse-NewPost multi-collapse-PostFeito multi-collapse-PostInt multi-collapse-Settings multi-collapse-MsgChat" data-bs-backdrop="false"   data-bs-scroll="true" tabindex="-1" id="offcanvasHeader" aria-labelledby="offcanvasHeaderleLabel">

                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title text-white" id="offcanvasHeaderleLabel">O que deseja fazer?</h5>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            
                            <div class="offcanvas-body ">
                            <!--Ícone de telefone-->
                            <div class="dropdown">
                                <button class=" btn dropdown text-decoration-none ColorF4F4F4 d-flex w-100"  id="dropdownContato1"  data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" title="Contato">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-telephone " viewBox="0 0 16 16">
                                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                    </svg>
                                    <p class="d-inline fs-3 ms-3">Contato</p>
                                    
                                </button>

                                <ul class="dropdown-menu E9CAC6Style position-absolute" aria-labelledby="dropdownContato1">
                                    <li>
                                        <p class="dropdown-item mb-auto mt-auto align-content-center " >
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-at" viewBox="0 0 16 16">
                                                <path d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907S8.308 9.84 7.371 9.84c-.895 0-1.442-.725-1.442-1.914z"/>
                                            </svg>
                                            EmailContato@teste.com
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        
                            <!-- Ícone de notificações-->
                                <div class="btn-group dropdown w-100">

                                    <button class=" btn dropdown text-decoration-none ColorF4F4F4  d-flex" type="button" id="dropdownMenuClickableInside"  data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false"  title="Notificações">
                                    
                                        
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-bell " viewBox="0 0 16 16">
                                            <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
                                        </svg> 
                                        
                                        <p class="d-inline fs-3 ms-3">Notificações </p>
                                    </button>

                                    <ul class="dropdown-menu DropdownStyleeWidth position-absolute E9CAC6Style" aria-labelledby="dropdownMenuClickableInside">

                                        <li >
                                            <button class="btn dropdown-item TextNotification position-static">
                                                <img src="../imagens/ProfilePhoto.png" class="align-start ProfilePhotoNotification" alt="...">
                                                <p class="d-inline "> UserName te enviou uma mensagem</p>
                                            </button>
                                        </li>

                                        <li>
                                            <button class=" btn dropdown-item TextNotification">
                                                <img src="../imagens/ProfilePhoto.png" class="align-start ProfilePhotoNotification d-inline" alt="...">
                                                <p class="d-inline ">UserName interagiu com seu post de oferta</p>
                                            </button>
                                        </li>

                                        <li>
                                            <button class=" btn dropdown-item TextNotification">
                                                <img src="../imagens/ProfilePhoto.png" class="align-start ProfilePhotoNotification d-inline" alt="...">
                                                <p class="d-inline "> UserName interagiu com seu post de pedido</p>
                                            </button>
                                        </li>
                                    
                                    </ul>

                                </div>

                            <!--Ícone de mensagens-->
                                <button class="btn text-decoration-none ColorF4F4F4 d-flex w-100"  type="button" id="NewPost"  title="Fazer postagem" data-bs-toggle="collapse" data-bs-target=".multi-collapse-MsgChat" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-chat-square-text" viewBox="0 0 16 16">
                                        <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                        <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                                    </svg>
                                    <p class="d-inline fs-3 ms-3">mensagens</p>
                                </button>
                                
                            <!--Ícone de fazer post-->
                                <a href="../NewPost/NewPost.html" class="btn  ColorF4F4F4 d-flex w-100 " type="button" id="NewPost"  title="Fazer postagem" >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" fill="currentColor" class="bi bi-plus-lg " viewBox="0 0 16 16">
                                        <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z"/>
                                    </svg>
                                    <p class="d-inline fs-3 ms-3">Criar postagem</p>
                                </a>


                            <!--Ver postagens feitas-->
                                <a href="../PostFeitos/PostFeitos.html" class="btn ColorF4F4F4 d-flex w-100" type="button" id="NewPost"  title="Postagens feitas" >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" fill="currentColor" class="bi bi-box-arrow-in-down" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M3.5 6a.5.5 0 0 0-.5.5v8a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-8a.5.5 0 0 0-.5-.5h-2a.5.5 0 0 1 0-1h2A1.5 1.5 0 0 1 14 6.5v8a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 14.5v-8A1.5 1.5 0 0 1 3.5 5h2a.5.5 0 0 1 0 1h-2z"/>
                                        <path fill-rule="evenodd" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                                    </svg>
                                    <p class="d-inline fs-3 ms-3">Postagens feitas</p>
                                </a>
                                

                            <!--Ícone de interesses-->
                                <a href="../PostInt/PostINt.html" class=" btn ColorF4F4F4 d-flex w-100" title="Postagens de interesse" id="Interesses" >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-box-seam " viewBox="0 0 16 16">
                                        <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"/>
                                    </svg>
                                    <p class="d-inline fs-3 ms-3">Postagens de interesse</p>
                                </a>
                    

                            <!--Ícone de configurações-->
                                <a href="../configuracoes/configuracoes.html" class=" btn ColorF4F4F4 d-flex w-100" type="button"  title="configurações" id="IconSetting" >

                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-gear " viewBox="0 0 16 16">
                                        <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                                        <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                                    </svg>
                                    <p class="d-inline fs-3 ms-3">configurações</p>
                                </a>
                

                            <!--ícone de logout-->
                                <button class="btn ColorF4F4F4 d-flex w-100" title="Sair">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="currentColor" class="bi bi-box-arrow-in-right " viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                                        <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                                    </svg>
                                    <p class="d-inline fs-3 ms-3">Sair</p>
                                </button> 
                                    
                            </div>
                        </div>
                </div>
                
            </nav>
        <!--Fim navbar-->

            <!--Container do corpo-->
                <div class="container-fluid">

                    <!--Feed-->
                    <div class="row " id="MarginFeedFullScreen">
                                            
                        <div class="col-6" id="PostFeed"> 
                            <!--Bloco da postagem-->

                                <!--Bloco do username, tipo de postagem e do botão de interesse-->
                                    <div class=" MediaBackground">
                                        <div class="d-flex justify-content-between align-items-center">

                                            <div>
                                                <img src="../imagens/ProfilePhoto.png" class="d-inline ProfilePhoto" alt="...">

                                                <p class="d-inline fs-5">
                                                    UserName
                                                </p>

                                                <p class="d-inline fs-6">
                                                    Doação
                                                </p>
                                            </div>

                                            <div>
                                            <!--Dropdown da opção de compartilhamento e denuncia-->
                                                <div class="dropend">

                                                    <a class=" testejs btn ms-4 text-decoration-none ButtonRadius text-white BackgroundTheme" id="InteresseButton">
                                                        Interesse
                                                    </a>

                                                    <button class="btn  dropdown" type="button" id="dropdownMenuOptionsPost" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false"> <!--Icon do dropdown-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="currentColor" class="bi bi-justify" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
                                                        </svg>
                                                    </button>

                                                    <!--Opções do dropdown-->
                                                        <ul class="dropdown-menu E9CAC6Style text-center" aria-labelledby="dropdownMenuOptionsPost" id="Dropdown">

                                                            <div id="DisplayNoneInteresseLi">
                                                                <li id="DisplayNoneInteresseLi PaddingLi "> 
                                                                    <button class="btn dropdown-item" id="">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-suit-heart" viewBox="0 0 16 16">
                                                                            <path d="m8 6.236-.894-1.789c-.222-.443-.607-1.08-1.152-1.595C5.418 2.345 4.776 2 4 2 2.324 2 1 3.326 1 4.92c0 1.211.554 2.066 1.868 3.37.337.334.721.695 1.146 1.093C5.122 10.423 6.5 11.717 8 13.447c1.5-1.73 2.878-3.024 3.986-4.064.425-.398.81-.76 1.146-1.093C14.446 6.986 15 6.131 15 4.92 15 3.326 13.676 2 12 2c-.777 0-1.418.345-1.954.852-.545.515-.93 1.152-1.152 1.595L8 6.236zm.392 8.292a.513.513 0 0 1-.784 0c-1.601-1.902-3.05-3.262-4.243-4.381C1.3 8.208 0 6.989 0 4.92 0 2.755 1.79 1 4 1c1.6 0 2.719 1.05 3.404 2.008.26.365.458.716.596.992a7.55 7.55 0 0 1 .596-.992C9.281 2.049 10.4 1 12 1c2.21 0 4 1.755 4 3.92 0 2.069-1.3 3.288-3.365 5.227-1.193 1.12-2.642 2.48-4.243 4.38z"/>
                                                                        </svg>
                                                                        Interessado
                                                                    </button>
                                                                </li>
                                                            </div>
                                                            <div id="DisplayBtnMensagesUserPost">
                                                                <li  id="PaddingLi">
                                                                    <button class="btn dropdown-item" type="button" id="BtnMensagesUserPost" data-bs-toggle="collapse" data-bs-target=".multi-collapse-ChatPost" aria-expanded="false" aria-controls="ChatMensagesGeneral ">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
                                                                            <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
                                                                            </svg>
                                                                        Mensagem
                                                                    </button>
                                                                </li>
                                                            </div>
                                                        
                                                            <div id="DisplayBtnMensagesUserPostResponsive">
                                                                <li id="PaddingLi">
                                                                    <button class="btn dropdown-item" type="button" id="BtnMensagesUserPostResponsive" data-bs-toggle="collapse" data-bs-target=".multi-collapse-ChatPostResponsive" aria-expanded="false" aria-controls="ChatMensagesGeneral BtnMensagesAbaDown">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
                                                                            <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
                                                                            </svg>
                                                                        Mensagem
                                                                    </button>
                                                                </li>
                                                            </div>

                                                            <li  id="PaddingLi">
                                                                <button class="btn dropdown-item">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-link-45deg me-1 mb-1 MarginIcon" viewBox="0 0 16 16">
                                                                        <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z"/>
                                                                        <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z"/>
                                                                    </svg>
                                                                    Compartilhar
                                                                </button>
                                                            </li>

                                                            <li  id="PaddingLi">
                                                                <a href="../denuncia/denuncia.html" class="btn dropdown-item"  id="BtnDenuncia" >
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-diamond me-2 mb-1" viewBox="0 0 16 16">
                                                                        <path d="M6.95.435c.58-.58 1.52-.58 2.1 0l6.515 6.516c.58.58.58 1.519 0 2.098L9.05 15.565c-.58.58-1.519.58-2.098 0L.435 9.05a1.482 1.482 0 0 1 0-2.098L6.95.435zm1.4.7a.495.495 0 0 0-.7 0L1.134 7.65a.495.495 0 0 0 0 .7l6.516 6.516a.495.495 0 0 0 .7 0l6.516-6.516a.495.495 0 0 0 0-.7L8.35 1.134z"/>
                                                                        <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"/>
                                                                    </svg>
                                                                    Denunciar    
                                                                </a>
                                                            </li>

                                                        </ul>
                                        
                                                </div>
                                            </div>
                                        
                                        </div>
                                        
                                        <!--Imagem do post e descrição-->
                                            <div class="p-2">

                                                <a href="" class="  float-start img-fluid me-3 mb-3"  data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" id="PostBodyFeedStructureImg">
                                                </a>

                                                <!--Bloco da imagem do post e da descrição-->   
                                                    <div class="d-flex">
                                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus..
                                                    </div>
                                                
                                                    <a href="" class=" float-start img-fluid me-3 mb-3" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" id="PostBodyFeedStructureImgResponsive">
                                                    </a>
                                                <!--Fim do bloco-->

                                            </div>

                                    </div>

                                <hr>
                            
                        </div>

                        
                        <div class="col-6" id="PostFeed"> 
                            <!--Bloco da postagem-->

                                <!--Bloco do username, tipo de postagem e do botão de interesse-->
                                    <div class=" MediaBackground">
                                        <div class="d-flex justify-content-between align-items-center">

                                            <div>
                                                <img src="../imagens/ProfilePhoto.png" class="d-inline ProfilePhoto" alt="...">

                                                <p class="d-inline fs-5">
                                                    UserName
                                                </p>

                                                <p class="d-inline fs-6">
                                                    Doação
                                                </p>
                                            </div>

                                            <div>
                                            <!--Dropdown da opção de compartilhamento e denuncia-->
                                                <div class="dropend">

                                                    <a class=" testejs btn ms-4 text-decoration-none ButtonRadius text-white BackgroundTheme" id="InteresseButton">
                                                        Interesse
                                                    </a>

                                                    <button class="btn  dropdown" type="button" id="dropdownMenuOptionsPost" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false"> <!--Icon do dropdown-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="currentColor" class="bi bi-justify" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
                                                        </svg>
                                                    </button>

                                                    <!--Opções do dropdown-->
                                                        <ul class="dropdown-menu E9CAC6Style text-center" aria-labelledby="dropdownMenuOptionsPost" id="Dropdown">

                                                            <div id="DisplayNoneInteresseLi">
                                                                <li id="DisplayNoneInteresseLi PaddingLi "> 
                                                                    <button class="btn dropdown-item" id="">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-suit-heart" viewBox="0 0 16 16">
                                                                            <path d="m8 6.236-.894-1.789c-.222-.443-.607-1.08-1.152-1.595C5.418 2.345 4.776 2 4 2 2.324 2 1 3.326 1 4.92c0 1.211.554 2.066 1.868 3.37.337.334.721.695 1.146 1.093C5.122 10.423 6.5 11.717 8 13.447c1.5-1.73 2.878-3.024 3.986-4.064.425-.398.81-.76 1.146-1.093C14.446 6.986 15 6.131 15 4.92 15 3.326 13.676 2 12 2c-.777 0-1.418.345-1.954.852-.545.515-.93 1.152-1.152 1.595L8 6.236zm.392 8.292a.513.513 0 0 1-.784 0c-1.601-1.902-3.05-3.262-4.243-4.381C1.3 8.208 0 6.989 0 4.92 0 2.755 1.79 1 4 1c1.6 0 2.719 1.05 3.404 2.008.26.365.458.716.596.992a7.55 7.55 0 0 1 .596-.992C9.281 2.049 10.4 1 12 1c2.21 0 4 1.755 4 3.92 0 2.069-1.3 3.288-3.365 5.227-1.193 1.12-2.642 2.48-4.243 4.38z"/>
                                                                        </svg>
                                                                        Interessado
                                                                    </button>
                                                                </li>
                                                            </div>
                                                            <div id="DisplayBtnMensagesUserPost">
                                                                <li  id="PaddingLi">
                                                                    <button class="btn dropdown-item" type="button" id="BtnMensagesUserPost" data-bs-toggle="collapse" data-bs-target=".multi-collapse-ChatPost" aria-expanded="false" aria-controls="ChatMensagesGeneral ">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
                                                                            <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
                                                                            </svg>
                                                                        Mensagem
                                                                    </button>
                                                                </li>
                                                            </div>
                                                        
                                                            <div id="DisplayBtnMensagesUserPostResponsive">
                                                                <li id="PaddingLi">
                                                                    <button class="btn dropdown-item" type="button" id="BtnMensagesUserPostResponsive" data-bs-toggle="collapse" data-bs-target=".multi-collapse-ChatPostResponsive" aria-expanded="false" aria-controls="ChatMensagesGeneral BtnMensagesAbaDown">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
                                                                            <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
                                                                            </svg>
                                                                        Mensagem
                                                                    </button>
                                                                </li>
                                                            </div>

                                                            <li  id="PaddingLi">
                                                                <button class="btn dropdown-item">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-link-45deg me-1 mb-1 MarginIcon" viewBox="0 0 16 16">
                                                                        <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z"/>
                                                                        <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z"/>
                                                                    </svg>
                                                                    Compartilhar
                                                                </button>
                                                            </li>

                                                            <li  id="PaddingLi">
                                                                <a href="../denuncia/denuncia.html" class="btn dropdown-item"  id="BtnDenuncia" >
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-diamond me-2 mb-1" viewBox="0 0 16 16">
                                                                        <path d="M6.95.435c.58-.58 1.52-.58 2.1 0l6.515 6.516c.58.58.58 1.519 0 2.098L9.05 15.565c-.58.58-1.519.58-2.098 0L.435 9.05a1.482 1.482 0 0 1 0-2.098L6.95.435zm1.4.7a.495.495 0 0 0-.7 0L1.134 7.65a.495.495 0 0 0 0 .7l6.516 6.516a.495.495 0 0 0 .7 0l6.516-6.516a.495.495 0 0 0 0-.7L8.35 1.134z"/>
                                                                        <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"/>
                                                                    </svg>
                                                                    Denunciar    
                                                                </a>
                                                            </li>

                                                        </ul>
                                        
                                                </div>
                                            </div>
                                        
                                        </div>
                                        
                                        <!--Imagem do post e descrição-->
                                            <div class="p-2">

                                                <a href="" class="  float-start img-fluid me-3 mb-3"  data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" id="PostBodyFeedStructureImg">
                                                </a>

                                                <!--Bloco da imagem do post e da descrição-->   
                                                    <div class="d-flex">
                                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus..
                                                    </div>
                                                
                                                    <a href="" class=" float-start img-fluid me-3 mb-3" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" id="PostBodyFeedStructureImgResponsive">
                                                    </a>
                                                <!--Fim do bloco-->

                                            </div>

                                    </div>

                                <hr>
                            
                        </div>


                    </div>

                </div>
            <!--Fim do container-->

        <!--Scripts que linkam com  o JavaScript do Bootstrap 5-->
             <script async src="../JS/pesquisa/script.js"></script>

    </body>
</html>