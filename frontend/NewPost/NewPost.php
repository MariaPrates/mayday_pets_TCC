<?php

require_once('./backend/libs/conecta.php');

        echo "

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
                        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Fechar</button>
                    </div>
                </div>
            </div>
        </div>

        <form action=''  class='row mt-3 collapse' id='form_novo_post'  method='post' enctype='multipart/form-data'>

                <div class='col-12  BackgroundNewPost'>

                    <div class=' align-items-center BackgroundThemeDivResponsive FontTextGeneral'> <!--Linha os itens, background e fonte do texto-->
                    
                        <!--Aba para criar o post-->
                            <div class='row'>

                                <div class='col-12'><!--Título da aba-->
                                    <p class='fs-3 ms-4 mt-3'>Criar nova postagem:</p>

                                    <input type='hidden' name='id_usuario' value='$user->id' id='id_usuario'>
                                    
                                    <input type='hidden' name='grupo' value='postagens'>

                                    <input type='hidden' name='acao' value='CriarPostagem'>

                                    <input type='reset' class='btn btn-warning d-none' value='Limpar' id='btn_limpar'>

                                    <input type='hidden' id='ativa_modal' data-bs-toggle='modal' data-bs-target='#modal'>

                                </div>
                                <div class='col-4 mb-2 col-width'  id='img_responsive'>

                                    <h4 class='DisplayDescription ms-2'>Imagem:</h4> 

                                    <input type='file' class='form-control DisplayBtnMidia w-50  d-inline'  name='upload_arquivo' id='upload_arquivo'  multiple='multiple' onchange='loadFile(event)'>
                                    <img class='img_new_post img-fluid ' id='img_new'>
                                </div>
                                <div class='col-4 col-width'>

                                    <h4 class='DisplayDescription ms-2 space_50'>Descrição:</h4> 

                                    <textarea class='form-control text-wrap mt-1 WidthTextarea mb-2 w-75 w-100' rows='9' id='TextBodyPost' maxlength='250' name='descricao_postagem' id='descricao_postagem' ></textarea> 

                                </div>

                              

                                
                                <!--Animais referentes a postagem, tipo de postagem-->
                                    <div class='col-4 WidthColGeneralResponsive2 space_50'>

                                        <h4 class='mt-3 d-inline ms-2'>contato:</h4>

                                        <input type='text' class='form-control d-inline ' name='contato' value='$user->contato' maxlength='11'>

                                        <!---Animal relacionado-->
                                            <div class='containerGeneral'>

                                                    <h4 class='mt-3 ms-2 d-inline'>Animais</h4>
                                                    
                                                    <!--Bloco de opções-->
                                                        <ul class='list-group w-25 list-group-horizontal' > 
                                                            <li class='list-group-item'> 
                                                                <div class='form-check form-switch'>
                                                                    <input class='form-check-input' type='checkbox' id='CheckBoxCachorro' value='1' name='checked_cachorro'>
                                                                    <label class='form-check-label' for='CheckBoxCachorro' >Cachorro</label>
                                                                </div>
                                                                <div class='form-check form-switch'>
                                                                    <input class='form-check-input' type='checkbox' id='CheckBoxGato' value='1' name='checked_gato'>
                                                                    <label class='form-check-label' for='CheckBoxGato'>Gato</label>
                                                                </div>
                                                            </li>
                                                        
                                                        </ul>
                                                        
                                                    <!--Fim do bloco--> 
                                            </div>
                                        
                                        <!--Tipo da postagem-->
                                            <div class='containerGeneral2 mt-2'>
                                            
                                                <h4 class='mt-3 d-inline ms-2'>Tipo de postagem</h4>

                                                    <div class='ms-3'>
                                                        
                                                        <div class='form-check  form-switch'>
                                                            <input class='form-check-input' type='checkbox' id='CheckBoxDoação' value='0' name='CheckBoxDoação'>
                                                            <label class='form-check-label' for='CheckBoxDoação' >Doação</label>
                                                        </div>
                                                        <div class='form-check form-switch'>
                                                            <input class='form-check-input' type='checkbox' id='CheckBoxPedido' value='1' name='CheckBoxPedido'>
                                                            <label class='form-check-label' for='CheckBoxPedido'>Pedido</label>
                                                        </div>
                                                        
                                                    </div>
                                                
                                            </div>
                                    </div>
                            </div>
                        <!--Botão de compartilhamento-->
                            <div class='me-3 DisplayDivTextArea'>

                                <input  class='btn ButtonRadius BackgroundThemeE1B1B8 float-end me-2 mb-3' type='submit' id='CompartilharBtn' value='Compartilhar'>
                                    
                                
                            </div>

                    </div>

                </div>

        </form>";

?>                            