<?php
    $query_postagens = "SELECT * FROM posts WHERE id_usuario = $user->id and ativo = 1 ORDER BY id DESC";
    $consulta = mysqli_query($conexao, $query_postagens);

    if(mysqli_num_rows($consulta) <= 0 ){
        echo "<p class='fs-5'>Não foi encontrada nenhuma postagem referente ao seu perfil...</p>";
    }else{
        while($post = mysqli_fetch_object($consulta)):

            $query_interesse = "SELECT * FROM interesse_usuarios_post WHERE id_post = $post->id and interesse = 2";
            $consulta_interese = mysqli_query($conexao_aux, $query_interesse);
            

            $query_interesse1 = "SELECT * FROM interesse_usuarios_post WHERE id_post = $post->id and interesse = 2";
            $consulta_interese1 = mysqli_query($conexao_aux1, $query_interesse1);

            if($post->ativo == 1){
                if($post->tipo_post == 0 OR $post->tipo_post == 1){
                    $aux = array('Doação', 'Pedido');
                    $tipo_post = $aux[$post->tipo_post];
                }
                echo "
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
                                <a href='./index.php?pag=postagens_feitas'>
                                    <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Fechar</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <form action='  class='mt-3 ' id='form_post'  method='post'>

                <!--Bloco que armazena as postagens-->
                <div class='row align-items-center BackgroundThemeDivResponsive p-2 mt-3 FontTextGeneral ' id='PostDoacao '>

                    <div class='col-12'>
                        <div class='row '>
                            <div class='col-12 mt-2 AlingHeaderAltPost '>
                                <p class='fs-3 d-block MarginTitleAltPost'>Alterar postagem</p>

                                <!--Dropdown da opção de compartilhamento e denuncia-->
                                <div class='MarginDropdownIntEnd'>

                                    <div class='btn-group dropdown'>

                                        <button type='button' class='btn  text-white BackgroundTheme  me-2 dropdown ButtonRadius' data-bs-toggle='dropdown' aria-expanded='false' data-bs-auto-close='inside' id='DropdownInt' title='Clique para ver o endereço'>
                                            Interessados
                                        </button>

                                        <ul class='dropdown-menu BGColorDropdownInt WidthDropdownInt' aria-labelledby='DropdownInt'>
                                    
                                       "
                                        ;
                                        if(mysqli_num_rows($consulta_interese) == 0){
                                                echo " <li class='dropdown-item align-items-center BGColorDropdownInt text-dark d-flex'>
                                                    <p class='quebra-texto'>Ainda não há ninguem interessado na sua postagem...</p>
                                                </li>";
                                        }else{
                                            while($interesse = mysqli_fetch_object($consulta_interese)):
                                                $query_interesse_dados = "SELECT * FROM usuarios WHERE id = ".$interesse->id_usuario;
                                                $consulta_user_interesse = mysqli_query($conexao_aux2, $query_interesse_dados);
                                                while($user_interesse = mysqli_fetch_object($consulta_user_interesse)):
                                                    
                                                    echo"
                                                    <li class='dropdown-item align-items-center BGColorDropdownInt text-dark d-flex  justify-content-between  fs-5'>
                                                    
                                                        <button class='btn d-flex align-items-center dropdown text-truncate'  type='button' data-bs-toggle='collapse' data-bs-target='#collapseIntDoacao$user_interesse->id' aria-expanded='false' aria-controls='collapseIntDoacao$user_interesse->id'>
                                                            <div class='flex-shrink-0 ' >
                                                                <img src='./frontend/imagens/ProfilePhoto.png' class='d-inline ProfilePhotoInt' alt='...'>
                                                                <p class='d-inline'>$user_interesse->nome</p> 
                                                            </div>
                                                        </button>
    
                                                    </li>";
                                                endwhile;    
                                            endwhile;
                                        }
                                       
                                        echo"    
                                        </ul>


                                    </div>

                                    <div class='btn-group '>
                                        <div class='form-check  form-switch'>
                                            <input class='form-check-input' type='checkbox' id='excluir_post' value='2' name='excluir_post'>
                                            <label class='form-check-label' for='excluir_post' >Excluir</label>
                                        </div>

                                    </div>
                                </div>     
                            </div>
                            
                            <div class='row  ' >
                            ";
                            while($interesse_dados = mysqli_fetch_object($consulta_interese1)):
                                $query_interesse_dados1 = "SELECT * FROM usuarios WHERE id = $interesse_dados->id_usuario";
                                $user_dados = mysqli_query($conexao_aux3, $query_interesse_dados1);
                                while($user_interesse_dados = mysqli_fetch_object($user_dados)):
                                    echo"
                                    <div class='col-12 mb-2 collapse collapseIntDoacao' id='collapseIntDoacao$user_interesse_dados->id'>
                                        <div class='card card-body'>

                                            <p class='fs-4 mb-2'>Endereço de UserName:</p>

                                            <div class='ms-2 fs-5'>
                                                <p class='fw-light'></p>
                                                <p class=' fw-light ms-1'>$user_interesse_dados->rua, $user_interesse_dados->numero, $user_interesse_dados->bairro</p>
                                                <p class=' fw-light ms-1'>CEP $user_interesse_dados->cep</p>
                                                <p class=' fw-light ms-1'>$user_interesse_dados->cidade, $user_interesse_dados->estado</p>
                                            </div>

                                            <p class='fs-4 mb-2'>Contato:</p>

                                            <div class='ms-2 fs-5'>
                                                <p class='fw-light'></p>
                                                <p class=' fw-light ms-1'>$user_interesse_dados->contato</p>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                    ";
                                endwhile;
                            endwhile;
                            echo" 
                            </div>
                        </div>
                  

                        
                            <div class='row '>

                                <div class='col-12  BackgroundNewPost'>

                                    <div class=' align-items-center BackgroundThemeDivResponsive FontTextGeneral'> <!--Linha os itens, background e fonte do texto-->
                                    
                                        <!--Aba para criar o post-->
                                            <div class='row'>

                                                <div class='col-12'><!--Título da aba-->

                                                    <input type='hidden' name='id_usuario' value='$post->id_usuario' id='id_usuario'>

                                                    <input type='hidden' name='id_post' value='$post->id' id='id_post'>
                                                    
                                                    <input type='hidden' name='grupo' value='postagens'>

                                                    <input type='hidden' name='acao' value='editar_postagem'>

                                                    <input type='reset' class='btn btn-warning d-none' value='Limpar' id='btn_limpar'>

                                                    <input type='hidden' id='ativa_modal' data-bs-toggle='modal' data-bs-target='#modal'>

                                                </div>

                                                <div class='col-4 mb-2'>

                                                    <h4 class='DisplayDescription ms-3'>Imagem:</h4> 

                                                    <input type='file' class='form-control DisplayBtnMidia w-50  d-inline'  name='upload_arquivo' id='upload_arquivo'  multiple='multiple' onchange='loadFile(event)'>

                                                </div>
                                                <div class='col-8'>

                                                    <h4 class='DisplayDescription ms-3'>Descrição:</h4> 

                                                </div>

                                                <div class='col-4'>

                                                    <img class='img_new_post img-fluid ms-3' id='img_new'src='./frontend/imagens/postagens/$post->arquivo'>

                                                </div>

                                                <!--Descrição do post, imagem-->
                                                    <div class='col-4 '>
                                                        
                                                        <textarea class='form-control text-wrap mt-1 WidthTextarea mb-2 w-75 w-100' rows='9' id='TextBodyPost' maxlength='250' name='descricao_postagem' id='descricao_postagem' >$post->descricao</textarea> 
                                                        
                                                    </div>
                                                    <!--Animais referentes a postagem, tipo de postagem-->
                                                    <div class='col-3 WidthColGeneralResponsive2'>
                
                                                    <h4 class='mt-3 d-inline'>contato:</h4>
                
                                                    <input type='text' class='form-control d-inline w-75' name='contato' value='$user->contato' maxlength='11'>

                                                        <!---Animal relacionado-->
                                                            <div class='containerGeneral'>

                                                                    <h4 class='mt-3 d-inline'>Animais</h4>
                                                                    
                                                                    <!--Bloco de opções-->
                                                                        <ul class='list-group w-25 list-group-horizontal' > 
                                                                        
                                                                            <li class='list-group-item'> 
                                                                            
                                                                                <div class='form-check form-switch'>
                                                                                    <input class='form-check-input' type='checkbox' id='CheckBoxCachorro' value='1' name='checked_cachorro' "; 
                                                                                    if(!empty($post->interesse_cachorro)){
                                                                                        echo 'checked';
                                                                                    } echo " >
                                                                                    <label class='form-check-label' for='CheckBoxCachorro' >Cachorro</label>
                                                                                </div>
                                                                                
                                                                                <div class='form-check form-switch'>
                                                                                    <input class='form-check-input' type='checkbox' id='CheckBoxGato' value='1' name='checked_gato' "; if(!empty($post->interesse_gato)){
                                                                                        echo 'checked';
                                                                                    } echo " >
                                                                                    <label class='form-check-label' for='CheckBoxGato' >Gato</label>
                                                                                </div>

                                                                            </li>
                                                                        
                                                                        </ul>
                                                                        
                                                                    <!--Fim do bloco--> 
                                                            </div>
                                                        
                                                        <!--Tipo da postagem-->
                                                            <div class='containerGeneral2 mt-2'>
                                                            
                                                                <h4 class='mt-3 d-inline'>Tipo de postagem</h4>

                                                                    <div class='ms-3'>
                                                                        
                                                                        <div class='form-check  form-switch'>
                                                                            <input class='form-check-input' type='checkbox' id='CheckBoxDoação' value='2' name='CheckBoxDoação'
                                                                            "; 
                                                                            if($post->tipo_post == 0){
                                                                                echo 'checked';
                                                                            } echo " >
                                                                            <label class='form-check-label' for='CheckBoxDoação' >Doação</label>
                                                                        </div>
                                                                        <div class='form-check form-switch'>
                                                                            <input class='form-check-input' type='checkbox' id='CheckBoxPedido' value='1' name='CheckBoxPedido'
                                                                            "; 
                                                                            if($post->tipo_post == 1){
                                                                                echo 'checked';
                                                                            } echo " >
                                                                            <label class='form-check-label' for='CheckBoxPedido'>Pedido</label>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                
                                                            </div>
                                                    </div>
                                            </div>
                                        <!--Botão de compartilhamento-->
                                            <div class='me-3 DisplayDivTextArea'>

                                                <input  class='btn ButtonRadius BackgroundThemeE1B1B8 float-end me-2 mb-3' type='submit' id='SalvarBtn' value='Salvar'>
                                                    
                                                
                                            </div>

                                    </div>

                                </div>
                            </div>
                        </form>
                            
                        
                    </div>
                    
                    <hr>
                    
            ";
            }
        endwhile;
    }
?>
  