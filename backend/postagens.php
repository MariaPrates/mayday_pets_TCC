<?php 
session_start();

$email = $_SESSION['email_login'];
	
//acessando o BD
require_once('./libs/conecta.php');
	
	switch ($_POST['acao']) {
		
		case 'CriarPostagem':

			function aux($auxiliar){
				if(isset($_POST[$auxiliar]))
				{
					return $auxiliar = addslashes($_POST[$auxiliar]);
				}
			}

			//diretório para salvar as imagens
				$pasta = "../frontend/imagens/postagens/";

				if(!is_dir($pasta)){ 
					echo "Pasta $diretorio nao existe";
				}else{    
					if(trim($_POST['descricao_postagem']) != ''){
							if(isset($_POST['checked_cachorro']) OR isset($_POST['checked_gato'] )){
								if(isset($_POST['CheckBoxDoação']) XOR isset($_POST['CheckBoxPedido']) ){
									if (isset($_FILES['upload_arquivo'])){
										$arquivos = $_FILES['upload_arquivo'];
												$tamanho_imagem = $arquivos['size'];

												$tamanho = round($tamanho_imagem / 1024);

												$permitidos = array(".jpg",".jpeg",".png", ".bmp");

												$nome_imagem = $arquivos['name']; 
												$ext = strtolower(strrchr($nome_imagem,"."));

												if($tamanho < 8192){ //se imagem for até 1MB envia
													$nome_atual = md5(uniqid(time())).$ext; //nome que dará a imagem
													$tmp = $arquivos['tmp_name']; //caminho temporário da imagem
									
													/* se enviar a foto, insere o nome da foto no banco de dados */
														if(move_uploaded_file($tmp,$pasta.$nome_atual)){

															$checked_cachorro = 'checked_cachorro';
															$checked_gato = 'checked_gato';

															$tipo = (isset($_POST['CheckBoxDoação'])) ? 1 : 0;
															$tipo = ($tipo == 0 && isset($_POST['CheckBoxPedido'])) ? 1 : $tipo;
															$id_usuario = addslashes($_POST['id_usuario']);
															$descricao = addslashes($_POST['descricao_postagem']);
															$data_cadastro = date('Y-m-d');
															$hora_cadastro = date('H:i:s');
															
															$sql = ' INSERT INTO posts (id_usuario, descricao, tipo_post, interesse_cachorro, interesse_gato, arquivo,data_cadastro, hora_cadastro) VALUES ("'.$id_usuario.'", "'.$descricao.'", "'.$tipo.'","'.aux($checked_cachorro).'","'.aux($checked_gato).'","'.$nome_atual.'","'.$data_cadastro.'", "'.$hora_cadastro.'")';

															$resultado = mysqli_query($conexao, $sql);
															if (!$resultado) { // Caso tenha dado erro:
																echo 'Erro ao criar sua postagem: ' . mysqli_error($conexao);
															}else{
																echo 1;
															}
														}else{
															echo "Falha ao enviar a imagem...";
														}
														
												}else{
													echo "A imagem deve ser de no máximo 8MB";
												}
									}else{
										echo "Escolha uma imagem...";
									}
										
								}else{
									echo "É necessário escolher UM tipo de postagem..";
								}
							
							}else{
								echo "É necessário selecionar ao menos um de animal relacionado...";
							}
						} else{
							echo "Faça uma descrição do que será anunciado...";
						}
						
					}
						
						

				// diretório de destino do arquivo
			

		break;
		
		case 'editar_postagem':
		    
		    function aux($auxiliar){
				if(isset($_POST[$auxiliar]))
				{
					return $auxiliar = addslashes($_POST[$auxiliar]);
				}
			}
			//diretório para salvar as imagens
			$pasta = "../frontend/imagens/postagens/";

			if(!is_dir($pasta)){ 
				echo "Pasta $diretorio nao existe";
			}else{ 
				if(isset($_POST['excluir_post'])){
					$checked_cachorro = 'checked_cachorro';
					$checked_gato = 'checked_gato';

					$tipo = (isset($_POST['CheckBoxDoação'])) ? 2 : 0;
					$tipo = ($tipo == 0 && isset($_POST['CheckBoxPedido'])) ? 1 : $tipo;
					$id_usuario = addslashes($_POST['id_usuario']);
					$id = addslashes($_POST['id_post']);
					$descricao = addslashes($_POST['descricao_postagem']);
					$excluir = addslashes($_POST['excluir_post']);
					$data_atualizacao = date('Y-m-d');
					$hora_atualizacao = date('H:i:s');
					
					$sql = 'UPDATE posts set descricao = "'.$descricao.'",tipo_post = "'.$tipo.'", interesse_cachorro = "'.aux($checked_cachorro).'",interesse_gato = "'.aux($checked_gato).'",ativo = "'.$excluir.'", data_atualizacao = "'.$data_atualizacao.'", hora_atualizacao =  "'.$hora_atualizacao.'"  WHERE id = '.$id.' AND id_usuario =  '.$id_usuario.'';

					$resultado = mysqli_query($conexao, $sql);
					if (!$resultado) { // Caso tenha dado erro:
						echo 'Erro ao criar sua postagem: ' . mysqli_error($conexao);
					}else{
						echo "Postagem excluida...";
						die();
					}
				}else{
					if(trim($_POST['descricao_postagem']) != ''){
						if(isset($_POST['checked_cachorro']) OR isset($_POST['checked_gato'] )){
							if(isset($_POST['CheckBoxDoação']) XOR isset($_POST['CheckBoxPedido']) ){
								if (!empty($_FILES['upload_arquivo'])){
									$arquivos = $_FILES['upload_arquivo'];
									$tamanho_imagem = $arquivos['size'];
	
									$tamanho = round($tamanho_imagem / 1024);
	
									$permitidos = array(".jpg",".jpeg",".png", ".bmp");
	
									$nome_imagem = $arquivos['name']; 
									$ext = strtolower(strrchr($nome_imagem,"."));
	
									if($tamanho > 0){
										if($tamanho <= 5120){
											$nome_atual = md5(uniqid(time())).$ext; //nome que dará a imagem
											$tmp = $arquivos['tmp_name']; //caminho temporário da imagem
						
										/* se enviar a foto, insere o nome da foto no banco de dados */
											if(move_uploaded_file($tmp,$pasta.$nome_atual)){
	
												$checked_cachorro = 'checked_cachorro';
												$checked_gato = 'checked_gato';
	
												$tipo = (isset($_POST['CheckBoxDoação'])) ? 2 : 0;
												$tipo = ($tipo == 0 && isset($_POST['CheckBoxPedido'])) ? 1 : $tipo;
												$id_usuario = addslashes($_POST['id_usuario']);
												$id = addslashes($_POST['id_post']);
												$descricao = addslashes($_POST['descricao_postagem']);
												$data_atualizacao = date('Y-m-d');
												$hora_atualizacao = date('H:i:s');
												
												$sql = 'UPDATE posts set descricao = "'.$descricao.'",tipo_post = "'.$tipo.'", interesse_cachorro = "'.aux($checked_cachorro).'",interesse_gato = "'.aux($checked_gato).'",arquivo = "'.$nome_atual.'", data_atualizacao = "'.$data_atualizacao.'", hora_atualizacao =  "'.$hora_atualizacao.'"  WHERE id = '.$id.' AND id_usuario =  '.$id_usuario.' AND ativo = 1';
	
												$resultado = mysqli_query($conexao, $sql);
												if (!$resultado) { // Caso tenha dado erro:
													echo 'Erro ao criar sua postagem: ' . mysqli_error($conexao);
												}else{
													echo 1;
												}
											}else{
												echo "Falha ao enviar a imagem...";
											}
										}else{
											echo "O arquivo deve ter até 5MB...";
										} //se imagem for até 1MB envia
										
											
									}else{
										
										$checked_cachorro = 'checked_cachorro';
										$checked_gato = 'checked_gato';
	
										$tipo = (isset($_POST['CheckBoxDoação'])) ? 2 : 0;
										$tipo = ($tipo == 0 && isset($_POST['CheckBoxPedido'])) ? 1 : $tipo;
										$id_usuario = addslashes($_POST['id_usuario']);
										$id = addslashes($_POST['id_post']);
										$descricao = addslashes($_POST['descricao_postagem']);
										$data_atualizacao = date('Y-m-d');
										$hora_atualizacao = date('H:i:s');
										
										$sql = 'UPDATE posts set descricao = "'.$descricao.'",tipo_post = "'.$tipo.'", interesse_cachorro = "'.aux($checked_cachorro).'",interesse_gato = "'.aux($checked_gato).'", data_atualizacao = "'.$data_atualizacao.'", hora_atualizacao =  "'.$hora_atualizacao.'"  WHERE id = '.$id.' AND id_usuario =  '.$id_usuario.' AND ativo = 1';
	
										$resultado = mysqli_query($conexao, $sql);
										if (!$resultado) { // Caso tenha dado erro:
											echo 'Erro ao criar sua postagem: ' . mysqli_error($conexao);
										}else{
											echo 1;
										}
									}
								}else{
									
								}
									
							}else{
								echo "É necessário escolher UM tipo de postagem..";
							}
						
						}else{
							echo "É necessário selecionar ao menos um de animal relacionado...";
						}
					} else{
						echo "Faça uma descrição do que será anunciado...";
					}

					
				}   
					
			}

			// diretório de destino do arquivo
		
		break;

		case 'interesse':
			$id_usuario = base64_decode(addslashes($_POST['id_usuario']));
			$id_post = base64_decode(addslashes($_POST['id_post']));
			if(addslashes($_POST['id_interesse']) == 2 OR addslashes($_POST['id_interesse']) == 1){
				$interesse = addslashes($_POST['id_interesse']);

				$sql_verfica_post = "SELECT * FROM interesse_usuarios_post  WHERE id_post =".$id_post." AND id_usuario = ".$id_usuario;
				
				$verficia = mysqli_query($conexao_aux3, $sql_verfica_post);

				if(mysqli_num_rows($verficia) <= 0){
					$interesse = addslashes($_POST['id_interesse']);
					$data_cadastro = date('Y-m-d');
					$hora_cadastro = date('H:i:s');

					$sql_interesse = 'INSERT INTO interesse_usuarios_post (id_usuario, id_post, interesse, data_cadastro, hora_cadastro) VALUES ("'.$id_usuario.'", "'.$id_post.'","'.$interesse.'", "'.$data_cadastro.'", "'.$hora_cadastro.'" ) ';

					$sql_conecta_interesse = mysqli_query($conexao_aux2, $sql_interesse);
					if (!$sql_conecta_interesse) { // Caso tenha dado erro
						echo "erro";
						
					}else if($interesse == 2){
						echo 0;
					}else{
						echo 1;
					}
				}else{
					$interesse = addslashes($_POST['id_interesse']);
					$data_atualizacao = date('Y-m-d');
					$hora_atualizacao = date('H:i:s');

					$sql_interesse = 'UPDATE interesse_usuarios_post set id_usuario = "'.$id_usuario.'",id_post = "'.$id_post.'", interesse = "'.$interesse.'", data_atualizacao = "'.$data_atualizacao.'", hora_atualizacao =  "'.$hora_atualizacao.'"  WHERE id_post = '.$id_post.' AND id_usuario =  '.$id_usuario.' ';


					$sql_conecta_interesse = mysqli_query($conexao_aux2, $sql_interesse);
					if (!$sql_conecta_interesse) { // Caso tenha dado erro:
						echo "erro";
						
					}else if($interesse == 1){
						echo 1;
					}else{
						echo 0;
					}
				}
				
			}else{
				echo "Valor do input interesse está incorreto...";
			}

		break;

		case 'redirecionamento':
		
			if(empty($_POST['id_usuario']) AND empty($_POST['id_post'])){
				echo "erro fofa";
				
			}else{
				$_SESSION['id_usuario_denuncia'] = addslashes($_POST['id_usuario']);
				$_SESSION['id_post_denuncia'] = addslashes($_POST['id_post']);
				echo 1;
			}
		break;

		case 'denunciar_envio':

			function aux($auxiliar){
				if(isset($_POST[$auxiliar]))
				{
					return $auxiliar = addslashes($_POST[$auxiliar]);
				}
			}

			$aux_ver = array('CheckBoxCunhoSexual','CheckBoxAnimal','CheckBoxFake','CheckBoxViolencia');
			$contador = 0;
			if($contador == 0){
				for($i = 0; $i < count($aux_ver); $i++){
					if(empty($_POST[$aux_ver[$i]])){
						$contador += 1;
					}else{
						continue;
					}
				}
				if($contador == 4){
					$txt_1 = "É necessário selecionar ao menos um tipo de infração...\n";
					echo $txt_1;
				}
				if(empty(addslashes($_POST['descricao']))){
					$txt_2 = "Faça uma descrição do ocorrido...";
					echo $txt_2;
				}
			}
			if($contador != 4 AND !empty(addslashes($_POST['descricao']))){
				$descricao = addslashes($_POST['descricao']);

				$id_usuario = addslashes($_POST['id_usuario']);
				$id_post = addslashes($_POST['id_post']);

				$data_cadastro = date('Y-m-d');
				$hora_cadastro = date('H:i:s');
																

				$sql = ' INSERT INTO denuncia (id_usuario, id_post, descricao, sexual, animal, fake, violencia, data_cadastro, hora_cadastro) VALUES ("'.$id_usuario.'", "'.$id_post.'", "'.$descricao.'", "'.aux($aux_ver[0]).'","'.aux($aux_ver[1]).'","'.aux($aux_ver[2]).'","'.aux($aux_ver[3]).'","'.$data_cadastro.'", "'.$hora_cadastro.'")';

				$resultado = mysqli_query($conexao, $sql);

				if (!$resultado) { // Caso tenha dado erro:
					echo 'Erro ao denúnciar: ' . mysqli_error($conexao);
				}else{
					echo 1;
				}
			}else{
				echo "";
			}
			
			
		break;

		default:
			// code...
		break;
	}