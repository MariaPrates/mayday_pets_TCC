<?php 
    $query_postagens = "SELECT * FROM interesse_usuarios_post  WHERE  interesse = 2 AND id_usuario = ".$user->id;
    $consulta = mysqli_query($conexao_aux4, $query_postagens);
    if(mysqli_num_rows($consulta)){
        while($interessado = mysqli_fetch_object($consulta)):
            $query_postagens = "SELECT 	usuarios.nome, usuarios.contato, usuarios.foto, posts.* FROM usuarios  INNER JOIN posts ON posts.id = $interessado->id_post and posts.ativo = 1 and posts.tipo_post = 0 ORDER BY posts.id DESC";
            
            $connsulta_postagem = mysqli_query($conexao_aux5, $query_postagens);
            if(mysqli_num_rows($connsulta_postagem) > 0 ){

                while($post = mysqli_fetch_object($connsulta_postagem)):
                    $id_post_criptografia = base64_encode( $post->id);
                    $id_usuario_criptografia = base64_encode($user->id);
        
        
                    $contador = 0;
                    $contador = $post->id + 1;
                        if($post->ativo == 1){
                            echo "
                            <div class='col-6 row-padding' id='PostFeed'> 
                            <!--Bloco da postagem-->
        
                                <!--Bloco do username, tipo de postagem e do botão de interesse-->
                                <div class='MediaBackground w-100'>
                                    
                                        
                                <div class='align-middle w-100 show collapse-horizontal multi-collapse$post->id' id='collapseHeaderDados$contador'>
                                <img class=' ms-1 profilephotostruct'style='background-image: url(./frontend/imagens/foto_perfil/$post->foto);'>    
                                    <div class='d-inline-block align-items-center w-75'>
                                                
                                        <p class='fs-5 d-table-row text-truncate'>
                                        ";echo strip_tags($post->nome); echo"
                                        </p>
                                    
                                        <p class='d-inline fs-6'>
                                            ";
                                            if($post->tipo_post == 1 OR $post->tipo_post == 0){
                                                $aux = array('Doação', 'Pedido');
                                                echo $aux[$post->tipo_post];
                                            }
                                            echo"
                                        </p>
                                        ";
                                        if(!empty($post->interesse_cachorro)){
                                                
                                            echo "<p class='d-inline'>
                                                    cachorro
                                                </p>";
                                        }
                                        if(!empty($post->interesse_gato)){
                                                
                                            echo "<p class='d-inline'>
                                                    gato
                                                </p>";
                                        }
                                        echo "
                                        <a href='' class=' float-end mt-1 me-1 ms-1' data-bs-toggle='collapse' data-bs-target='.multi-collapse$post->id' aria-expanded='false' aria-controls='collapseHeader$post->id collapseHeaderDados$contador'>
                                            <svg xmlns='http://www.w3.org/2000/svg' width='30' height='30' fill='currentColor' class='bi bi-arrow-left-circle-fill' viewBox='0 0 16 16'>
                                                <path d='M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5'/>
                                            </svg>
                                        </a>
                                        
                                            
                                    </div>
                                </div>
                            <div class='d-flex align-items-center'>
                                <div class='w-100 collapse collapse-horizontal multi-collapse$post->id' id='collapseHeader$post->id'>  
                                    <div style='min-height: 20px;' class=' float-end'>
                                        <div class='collapse collapse-horizontal multi-collapse$post->id' id='collapseHeader$post->id'>
                                            <a href='' class='me-1 mt-2 ms-1 float-start' data-bs-toggle='collapse' data-bs-target='.multi-collapse$post->id' aria-expanded='false' aria-controls='collapseHeader$post->id collapseHeaderDados$contador'>
                                                <svg xmlns='http://www.w3.org/2000/svg' width='30' height='30' fill='currentColor' class='bi bi-arrow-right-circle-fill' viewBox='0 0 16 16'>
                                                    <path d='M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z'/>
                                                </svg>
                                            </a>
                                            ";if($user->id != $post->id_usuario){
                                            if($post_usuario_interesse = mysqli_fetch_object($consulta)){
        
                                                if($post_usuario_interesse->interesse == 1 AND $post_usuario_interesse->id_usuario == $user->id AND $post_usuario_interesse->id_post == $post->id ){
                                                    echo"
                                                    <form action='' method='POST' class='d-inline' id='form_interesse'>
                                                        <input type='hidden' id='InteresseButton' name='InteresseButton' value='0'>
                                                        <input type='hidden' id='acao' name='acao' value='interesse'>
                                                        <input type='hidden' id='grupo' name='grupo' value='postagens'>
                                                        <input type='hidden' id='id_post' name='id_post' value='$id_post_criptografia'>
                                                        <input type='hidden' id='id_usuario' name='id_usuario' value='$id_usuario_criptografia'>
                                                        <input type='hidden' id='id_interesse' name='id_interesse' value='3'>
                                                        
                                                        <input type='submit' class='interesse_auxiliar btn ms-4 text-decoration-none ButtonRadius text-white BackgroundThemeE1B1B8' name='interesse_auxiliar' id='interesse_auxiliar' value='Interessado' >
                                                    </form>";
                                                }else{
                                                    echo"
                                                    <form action='' method='POST' class='d-inline' id='form_interesse'>
                                                        <input type='hidden' id='InteresseButton' name='InteresseButton' value='0'>
                                                        <input type='hidden' id='acao' name='acao' value='interesse'>
                                                        <input type='hidden' id='grupo' name='grupo' value='postagens'>
                                                        <input type='hidden' id='id_post' name='id_post' value='$id_post_criptografia'>
                                                        <input type='hidden' id='id_usuario' name='id_usuario' value='$id_usuario_criptografia'>
                                                        <input type='hidden' id='id_interesse' name='id_interesse' value='1'>
                                                        
                                                        <input type='submit' class='interesse_auxiliar btn ms-4 text-decoration-none ButtonRadius text-white BackgroundThemeE1B1B8' name='interesse_auxiliar' id='interesse_auxiliar' value='Interesse'>
                                                    </form>";
                                                }
                                            }else{
                                                echo"
                                                <form action='' method='POST' class='d-inline' id='form_interesse'>
                                                    <input type='hidden' id='InteresseButton' name='InteresseButton' value='2'>
                                                    <input type='hidden' id='acao' name='acao' value='interesse'>
                                                    <input type='hidden' id='grupo' name='grupo' value='postagens'>
                                                    <input type='hidden' id='id_post' name='id_post' value='$id_post_criptografia'>
                                                    <input type='hidden' id='id_usuario' name='id_usuario' value='$id_usuario_criptografia'>
                                                    <input type='hidden' id='id_interesse' name='id_interesse' value='2'>
                                                    
                                                    <input type='submit' class='interesse_auxiliar btn ms-4 text-decoration-none ButtonRadius text-white BackgroundThemeE1B1B8' name='interesse_auxiliar' id='interesse_auxiliar' value='Interesse'>
                                                </form>";
                                            }
                                            echo"
                                            <a href='./index.php?pag=denuncia' class='btn text-danger' type='button' id='dropdownMenuOptionsPost' title='Denúnciar'> 
                                                <svg xmlns='http://www.w3.org/2000/svg' width='32' height='32' fill='currentColor' class='bi bi-exclamation-lg' viewBox='0 0 16 16'>
                                                    <path d='M7.005 3.1a1 1 0 1 1 1.99 0l-.388 6.35a.61.61 0 0 1-1.214 0L7.005 3.1ZM7 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z'/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        
                                ";
                        echo "
        
                            <!--Dropdown da opção de compartilhamento e denuncia-->
        
                                
                    ";}
                    
                    
                        
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
                echo "<p>Você ainda não se interessou por nenhuma postagem do tipo doação...</p>";
            }
        endwhile;
    }else{
        echo "<p>Você ainda não se interessou por nenhuma postagem do tipo doação...</p>";
    }
   
    ?>