<?php 
    $query_postagens = "SELECT * FROM interesse_usuarios_post  WHERE id_usuario = $user->id  AND interesse = 1 ORDER BY id_post DESC";
   
    $consulta = mysqli_query($conexao_aux4, $query_postagens);
    if(mysqli_num_rows($consulta) > 0){
        while($interessado = mysqli_fetch_object($consulta)):
        
            $query_postagens = "SELECT 	usuarios.nome, usuarios.contato, usuarios.foto, posts.* FROM usuarios  INNER JOIN posts ON usuarios.id = posts.id_usuario and posts.id = ".$interessado->id_post." and posts.ativo = 1 and posts.tipo_post = 1 ORDER BY posts.id DESC";
    
            $connsulta_postagem = mysqli_query($conexao_aux5, $query_postagens);
            if(mysqli_num_rows($connsulta_postagem) > 0 ){
    
                while($post = mysqli_fetch_object($connsulta_postagem)):
    
                    $contador = 0;
                    $contador = $post->id + 1;
                    $id_post_criptografia = base64_encode( $post->id);
                    $id_usuario_criptografia = base64_encode($user->id);
                   
                    if($post->ativo == 1 AND $user->id != $post->id_usuario){
         
                                if($interessado->interesse == 1 AND $interessado->id_usuario == $user->id AND $interessado->id_post == $post->id ){
                                        $interesse_aux = array();
                                        $interesse_aux[0] = "
                                        <form action='' method='POST' class='display-mobile-responsive0 mt-1 float-end' id='form_interesse'>
                                            <input type='hidden' id='InteresseButton' name='InteresseButton' value='0'>
                                            <input type='hidden' id='acao' name='acao' value='interesse'>
                                            <input type='hidden' id='grupo' name='grupo' value='postagens'>
                                            <input type='hidden' id='id_post' name='id_post' value='$id_post_criptografia'>
                                            <input type='hidden' id='id_usuario' name='id_usuario' value='$id_usuario_criptografia'>
                                            <input type='hidden' id='id_interesse' name='id_interesse' value='2'>
                                            
                                            <input type='button' class='interesse_auxiliar btn ms-4 text-decoration-none ButtonRadius text-white  BackgroundThemeinteressado' name='interesse_auxiliar' id='interesse_auxiliar' value='Interessado' >
                                        </form>";
                                        $interesse_aux[1] = "
                                        <form action='' method='POST' class='display-mobile-responsive1 float-end' id='form_interesse'>
                                            <input type='hidden' id='InteresseButton' name='InteresseButton' value='0'>
                                            <input type='hidden' id='acao' name='acao' value='interesse'>
                                            <input type='hidden' id='grupo' name='grupo' value='postagens'>
                                            <input type='hidden' id='id_post' name='id_post' value='$id_post_criptografia'>
                                            <input type='hidden' id='id_usuario' name='id_usuario' value='$id_usuario_criptografia'>
                                            <input type='hidden' id='id_interesse' name='id_interesse' value='2'>
                                            
                                            <input type='button' class='interesse_auxiliar btn ms-4 text-decoration-none ButtonRadius text-white  BackgroundThemeinteressado' name='interesse_auxiliar' id='interesse_auxiliar' value='Interessado' >
                                        </form>";
                                }
                       
                    
                    echo "
                    <div class='col-6' id='PostFeed'> 
                    <!--Bloco da postagem-->
        
                        <!--Bloco do username, tipo de postagem e do botão de interesse-->
                            <div class='MediaBackground w-100'>
                            
                                    <div class='align-middle w-100 show collapse-horizontal multi-collapse$post->id' id='collapseHeaderDados$contador'>
                                    ";
        
                                        if(empty($post->foto)){
                                            echo "<img class='d-inline ms-1 mt-1 profilephotostruct'style='background-image: url(./frontend/imagens/ProfilePhoto.png);'>";  
                                        }else{
                                            echo "<img class='d-inline ms-1 mt-1 profilephotostruct'style='background-image: url(./frontend/imagens/foto_perfil/$post->foto);'>";  
                                        }
        
                                    echo "
                                    
                                        <div class='d-inline-block align-items-center w-75'>
                                           
                                                <p class='fs-5  text-truncate mb-0'>
                                            ";echo strip_tags($post->nome); echo"</p>
                                           
                                            <div class='d-inline-block'>";
                                                
                                                if($post->interesse_cachorro == 1){
                                                        
                                                    echo "<p class='d-inline'>
                                                            cachorro
                                                        </p>";
                                                }
                                                if($post->interesse_gato == 1){
                                                        
                                                    echo "<p class='d-inline'>
                                                            gato
                                                        </p>";
                                                }
                                                echo"
                                                <p class=' fs-6'>
                                                    ";
                                                    if($post->tipo_post == 1 OR $post->tipo_post == 0){
                                                        $aux = array('Doação', 'Pedido');
                                                        echo $aux[$post->tipo_post];
                                                    }
                                                    echo"
                                                </p>
                                            </div>
                                            <div class='d-inline'>
                                           
                                      
                                            ";
                                            if($user->id != $post->id_usuario){
                                                echo "
                                                <form action=''  class='d-inline' id='form_denunciar'  method='post'>
        
                                                <input type='hidden' name='id_usuario' value='$user->id' id='id_usuario'>
        
        
                                                    <input type='hidden' name='id_post' value='$post->id' id='id_post'>
                                                    
                                                    <input type='hidden' name='grupo' value='postagens'>
        
                                                    <input type='hidden' name='acao' value='redirecionamento'>
        
                                                    <button type='submit'class='btn text-danger float-end' type='button' id='denuncia' title='Denúnciar' > 
                                                        <svg xmlns='http://www.w3.org/2000/svg' width='32' height='32' fill='currentColor' class='bi bi-exclamation-lg' viewBox='0 0 16 16'>
                                                            <path d='M7.005 3.1a1 1 0 1 1 1.99 0l-.388 6.35a.61.61 0 0 1-1.214 0L7.005 3.1ZM7 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z'/>
                                                        </svg>
                                                    </button>
                                                </form>
                                                    <a href='' class='display-collapse-btn float-end mt-1 me-1 ms-1 float-start' data-bs-toggle='collapse' data-bs-target='.multi-collapse$post->id' aria-expanded='false' aria-controls='collapseHeader$post->id collapseHeaderDados$contador' >
                                                        <svg xmlns='http://www.w3.org/2000/svg' width='30' height='30' fill='currentColor' class='bi bi-arrow-left-circle-fill' viewBox='0 0 16 16'>
                                                            <path d='M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5'/>
                                                        </svg>
                                                    </a>".$interesse_aux[1];
                                            }
                                            echo" 
                                            </div>   
                                        </div>
                                    </div>
                                <div class='d-flex align-items-center'>
                               
                                    <div class='w-100 collapse collapse-horizontal multi-collapse$post->id' id='collapseHeader$post->id'>  
                                        <div style='min-height: 20px;' class=' float-end'>
                                            <div class='collapse collapse-horizontal multi-collapse$post->id' id='collapseHeader$post->id'>
                                               
                                                ";
                                                if($user->id != $post->id_usuario){
                                                    echo "
                                                    <a href='' class='me-1 mt-2 ms-1 float-start' data-bs-toggle='collapse' data-bs-target='.multi-collapse$post->id' aria-expanded='false' aria-controls='collapseHeader$post->id collapseHeaderDados$contador'>
                                                        <svg xmlns='http://www.w3.org/2000/svg' width='30' height='30' fill='currentColor' class='bi bi-arrow-right-circle-fill' viewBox='0 0 16 16'>
                                                            <path d='M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z'/>
                                                        </svg>
                                                    </a>
                                                    <form action=''  class='d-inline' id='form_denunciar'  method='POST'>
        
                                                        <input type='hidden' name='id_usuario' value='$user->id' id='id_usuario'>
        
                                                        <input type='hidden' name='id_post' value='$post->id' id='id_post'>
                                                        
                                                        <input type='hidden' name='grupo' value='postagens'>
        
                                                        <input type='hidden' name='acao' value='redirecionamento'>
        
                                                        <button  class='btn text-danger float-end' type='button' id='denuncia' title='Denúnciar' type='submit'> 
                                                            <svg xmlns='http://www.w3.org/2000/svg' width='32' height='32' fill='currentColor' class='bi bi-exclamation-lg' viewBox='0 0 16 16'>
                                                                <path d='M7.005 3.1a1 1 0 1 1 1.99 0l-.388 6.35a.61.61 0 0 1-1.214 0L7.005 3.1ZM7 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z'/>
                                                            </svg>
                                                        </button>
                                                    </form>
                                                       ". $interesse_aux[0];
                                                }
                                                echo"  
                                                
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                               
                                    ";
                            echo "
        
                                <!--Dropdown da opção de compartilhamento e denuncia-->
                                    
                          ";
                            
                                    echo"
                                <!--Imagem do post e descrição-->
                                    <div class='p-2'>
        
                                        <a href='' class='imgPost   me-3 mb-3'  data-bs-toggle='collapse' href='#collapseExample' role='button' aria-expanded='false' aria-controls='collapseExample' style='background-image: url(./frontend/imagens/postagens/$post->arquivo)'; >
                                        </a>
        
                                    </div>
                                        
        
                                        <!--Bloco da imagem do post e da descrição-->   
                                            <div class='d-flex ms-1 me-1' style='word-break: break-word;'>
                                            ";echo strip_tags($post->descricao); echo"
                                            </div>
                                        
                                        <!--Fim do bloco-->
        
                            </div>
                        <hr>
                    
                    </div>";
                }else{
                    continue;
                }
                endwhile;  
            }else{
                echo "<div class='col-12'>
                <p>Você ainda não se interessou por nenhuma postagem do tipo pedido...</p>
                </div>";
            }      
        endwhile;
    }else{
        echo "<div class='col-12'>
        <p>Você ainda não se interessou por nenhuma postagem do tipo pedido...</p>
        </div>";
    }
  
    ?>