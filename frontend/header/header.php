 <!--Header navbar-->  
 <?php echo"
        <nav class='navbar sticky-top navbar-expand-lg BackgroundTheme '>
                <div class='container-fluid '>
                    
                    <!--Logo e nome do site-->
                        <a class='navbar-brand text-white' href='./index.php?pag=home'>
                            <img src='./frontend/imagens/logo.png' class='img-fluid Logo ms-2' alt='Logo' title='Home'>
                            <h3 class=' d-inline ms-2 fs-2 logo_font'>MayDay Pet's</h3> 
                        </a>

                    <!--Aba para pesquisa ///// desativado
                        <form class='input-group InputSearch' action='' id='SearchFormNav'>
                            <input class='form-control SearchBorder  '  type='search' placeholder='Pesquisa' aria-label='Search'>
                            <button type='submit' class='btn SearchBorder BackgroundThemeInteresse' type='button'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='28' height='28' fill='currentColor' class='bi bi-search text-white' viewBox='0 0 16 16'>
                                    <path d='M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z'/>
                                </svg>
                            </button>
                        </form>
                    -->
                    <!--Botão que mostra as opções de funcionalidade do site, em telas pequenas-->
                       

                    <!--Ícones do header-->
                        <div class='collapse navbar-collapse ' id='ItensHeader'>
                            <ul class='navbar-nav align-items-center'>

                                <div class='btn-group'>
                                    <a class='' href='#' role='button' id='dropdownMenuLink' data-bs-toggle='dropdown' aria-expanded='false'>
                                       ";
                                        if(empty($user->foto)){
                                        echo "<img class=' ms-1 mt-1 profilephotostruct'style='background-image: url(./frontend/imagens/ProfilePhoto.png);'>";  
                                        }else{
                                            echo "<img class=' ms-1 mt-1 profilephotostruct'style='background-image: url(./frontend/imagens/foto_perfil/$user->foto);'>";  
                                        }
                                       echo "
                                    </a>
                                    <ul class='dropdown-menu dropdown-menu-start dropdown-menu-lg-end BGColorDropdownInt text-dark'>
                                      <!--Ver postagens feitas-->
                                        <li class='nav-item text-dark'>

                                            <a href='./index.php?pag=postagens_feitas' class='btn'  dropdown-item' type='button' id='NewPost'  title='Postagens feitas' >
                                                Postagens Feitas
                                            </a>

                                        </li>

                                    <!--Ícone de interesses-->
                                        <li class='nav-item text-dark'>

                                            <a href='./index.php?pag=post_interesse' class='btn' title='Postagens de interesse' id='Interesses' >

                                                Interesses

                                            </a>    

                                        </li>
                                    <!--Ícone de configurações-->
                                        <li class='nav-item'>

                                        <a href='./index.php?pag=configuracao' class=' btn  ' type='button'  title='configurações' id='IconSetting' >

                                            Configurações    

                                        </a>

                                        </li>

                                    <!--ícone de logout-->
                                        <li class='nav-item' id='LogoutNavbar'>

                                            <a href='./backend/logout.php' class=' btn  ' type='button'  title='configurações' id='IconSetting' >

                                                Sair    

                                            </a>

                                        </li>
                                </ul>
                                </div>

                            
                        </div>
                        
                        <a class='btn' data-bs-toggle='offcanvas' href='#offcanvasHeader' role='button' aria-controls='offcanvasHeader' id='HeaderResponsiveBtn'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='30' height='30' fill='currentColor' class='bi bi-list text-white' viewBox='0 0 16 16'>
                                <path fill-rule='evenodd' d='M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z'/>
                            </svg>
                        </a>

                        <div class='offcanvas offcanvas-end BackgroundThemeE1B1B8 multi-collapse-NewPost multi-collapse-PostFeito multi-collapse-PostInt multi-collapse-Settings multi-collapse-MsgChat' data-bs-backdrop='false'   data-bs-scroll='true' tabindex='-1' id='offcanvasHeader' aria-labelledby='offcanvasHeaderleLabel'>

                            <div class='offcanvas-header'>
                                <h5 class='offcanvas-title text-white' id='offcanvasHeaderleLabel'>O que deseja fazer?</h5>
                                <button type='button' class='btn-close text-reset' data-bs-dismiss='offcanvas' aria-label='Close'></button>
                            </div>
                            
                            <div class='offcanvas-body '>
                           
                           
                            <!-- Ícone de notificações
                                <div class='btn-group dropdown w-100'>

                                    <button class=' btn dropdown text-decoration-none ColorF4F4F4  d-flex' type='button' id='dropdownMenuClickableInside'  data-bs-toggle='dropdown' data-bs-auto-close='outside' aria-expanded='false'  title='Notificações'>
                                       
                                        
                                        <svg xmlns='http://www.w3.org/2000/svg' width='32' height='32' fill='currentColor' class='bi bi-bell ' viewBox='0 0 16 16'>
                                            <path d='M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z'/>
                                        </svg> 
                                        
                                        <p class='d-inline fs-3 ms-3'>Notificações </p>
                                    </button>

                                    <ul class='dropdown-menu DropdownStyleeWidth position-absolute E9CAC6Style' aria-labelledby='dropdownMenuClickableInside'>

                                        <li >
                                            <button class='btn dropdown-item TextNotification position-static'>
                                                <img src='./frontend/imagens/ProfilePhoto.png' class='align-start ProfilePhotoNotification' alt='...'>
                                                <p class='d-inline '> UserName te enviou uma mensagem</p>
                                            </button>
                                        </li>

                                        <li>
                                            <button class=' btn dropdown-item TextNotification'>
                                                <img src='./frontend/imagens/ProfilePhoto.png' class='align-start ProfilePhotoNotification d-inline' alt='...'>
                                                <p class='d-inline '>UserName interagiu com seu post de oferta</p>
                                            </button>
                                        </li>

                                        <li>
                                            <button class=' btn dropdown-item TextNotification'>
                                                <img src='./frontend/imagens/ProfilePhoto.png' class='align-start ProfilePhotoNotification d-inline' alt='...'>
                                                <p class='d-inline '> UserName interagiu com seu post de pedido</p>
                                            </button>
                                        </li>
                                    
                                    </ul>

                                </div>
                            -->

                            <!--Ícone de mensagens
                                <button class='btn text-decoration-none ColorF4F4F4 d-flex w-100'  type='button' id='NewPost'  title='Fazer postagem' data-bs-toggle='collapse' data-bs-target='.multi-collapse-MsgChat' aria-expanded='false'>
                                    <svg xmlns='http://www.w3.org/2000/svg' width='32' height='32' fill='currentColor' class='bi bi-chat-square-text' viewBox='0 0 16 16'>
                                        <path d='M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z'/>
                                        <path d='M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z'/>
                                    </svg>
                                    <p class='d-inline fs-3 ms-3'>mensagens</p>
                                </button>
                            -->
                                
                            <!--Ícone de fazer post
                                <a href='../NewPost/NewPost.html' class='btn  ColorF4F4F4 d-flex w-100 ' type='button' id='NewPost'  title='Fazer postagem' >
                                    <svg xmlns='http://www.w3.org/2000/svg' width='31' height='31' fill='currentColor' class='bi bi-plus-lg ' viewBox='0 0 16 16'>
                                        <path d='M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z'/>
                                    </svg>
                                    <p class='d-inline fs-3 ms-3'>Criar postagem</p>
                                </a>
                            -->

                            <!--Ver postagens feitas-->
                                <a href='./index.php?pag=postagens_feitas' class='btn ColorF4F4F4 d-flex w-100' type='button' id='NewPost'  title='Postagens feitas' >
                                    <p class='d-inline fs-3 ms-3'>Postagens feitas</p>
                                </a>
                                

                            <!--Ícone de interesses-->
                                <a href='./index.php?pag=post_interesse ' class=' btn ColorF4F4F4 d-flex w-100' title='Postagens de interesse' id='Interesses' >
                                    <p class='d-inline fs-3 ms-3'>Interesses</p>
                                </a>
                    

                            <!--Ícone de configurações-->
                                <a href='./index.php?pag=configuracao' class=' btn ColorF4F4F4 d-flex w-100' type='button'  title='configurações' id='IconSetting' >
                                    <p class='d-inline fs-3 ms-3'>Configurações</p>
                                </a>
                

                            <!--ícone de logout-->
                            <a href='./backend/logout.php' 
                                <button class='btn ColorF4F4F4 d-flex w-100' title='Sair'>
                                    <p class='d-inline fs-3 ms-3'>Sair</p>
                                </button> 
                                </a>
                                    
                            </div>
                        </div>
                </div>
                
            </nav>
        <!--Fim navbar-->";
        ?>