<?php 
    session_start();
//acessando o BD
require_once('./libs/conecta.php');
$GLOBALS['interesse_gato'] = 'interesse_gato';
$GLOBALS['interesse_cachorro'] = 'interesse_cachorro';

function aux($auxiliar){
	if(isset($_POST[$auxiliar]))
	{
		return $auxiliar = addslashes($_POST[$auxiliar]);
	}
}
	
	switch ($_POST['acao']) {
		
	
		case 'cadastrar':
			

			function aux_animal($auxiliar){
				if(isset($_POST[$auxiliar]))
				{
					return $auxiliar = addslashes($_POST[$auxiliar]);
				}
			}
			$aux_array = array('rua_usuario', 'nmr_residencia_usuario', 'bairro_usuario', 'cidade_usuario', 'estado_usuario','cep_usuario', 'contato', 'email_usuario', 'nome_usuario');

			function verificador($aux_argum){
				$vazio = 1;
				if(empty($_POST['interesse_cachorro']) AND empty($_POST['interesse_gato'])){
					return 0;
				}else{
					for($i = 0; $i < count($aux_argum); $i++){
						if(empty($_POST[$aux_argum[$i]])){
							 $vazio = 0;
							 break;
						}else{
							continue;
						}
					}
					if($vazio != 0){
						return 1;
					}else{
						return 0;
					}
				}
				
			}
			// salvando novo usuario:
			if(verificador($aux_array) == 1){
	

				$rua = addslashes($_POST['rua_usuario']);
				$nmr_residencia = addslashes($_POST['nmr_residencia_usuario']);
				$bairro = addslashes($_POST['bairro_usuario']);
				$cidade = addslashes($_POST['cidade_usuario']);
				$estado = addslashes($_POST['estado_usuario']);
				$cep = addslashes($_POST['cep_usuario']);

				$contato = addslashes($_POST['contato']);

				$email = addslashes($_POST['email_usuario']);
				$nome = addslashes($_POST['nome_usuario']);
				$senha = base64_encode(addslashes($_POST['senha_usuario'])); // criptografia basica
				$data_cadastro = date('Y-m-d');
				$hora_cadastro = date('H:i:s');
				
				$_SESSION['email_cad'] = $email;
		        $_SESSION['senha_cad'] = $senha;

				#Se o retorno for maior do que zero, diz que já existe um.
				$sql = mysqli_query($conexao, "SELECT * FROM usuarios WHERE email = '{$email}'") or print mysqli_error($conexao);
				
				if(mysqli_num_rows($sql) > 0){ 
					echo 'Ja existe um usuário cadastrado com este email, por favor utilize outro ou faça login'; 
				}else {
				   $key = rand(1000,9999);
				    $GLOBALS['codigo'] = $key;

					$sql = 'INSERT INTO usuarios (email, nome, senha, interesse_cachorro, interesse_gato, rua, numero, bairro, cidade, estado, cep, contato,ativo,  data_cadastro, hora_cadastro, codigo) VALUES ("'.$email.'", "'.$nome.'", "'.$senha.'", "'.aux_animal($GLOBALS['interesse_cachorro']).'", "'.aux_animal($GLOBALS['interesse_gato']).'","'.$rua.'","'.$nmr_residencia.'","'.$bairro.'","'.$cidade.'","'.$estado.'","'.$cep.'","'.$contato.'",0, "'.$data_cadastro.'", "'.$hora_cadastro.'","'.$GLOBALS['codigo'].'")';
					$resultado = mysqli_query($conexao, $sql);
					if (!$resultado) { // Caso tenha dado erro:
						echo 'Erro ao salvar novo cadastro: ' . mysqli_error($conexao);
					}else{
						if(mail($email,"Código de verificação: ", $GLOBALS['codigo'])){
					    	$_SESSION['email_cad'] = $email;
					        $_SESSION['senha_cad'] = $senha;
							echo "
							<script language='javascript' type='text/javascript'>
							alert('Verifique seu email para validar o cadastro!.');window.location
							.href='../index.php?pag=confirmacao'
						  </script>";
						}else{
					     	unset ($_SESSION['email_login']);
						    unset ($_SESSION['senha_login']);
							echo "Falha ao enviar código.";
						}
					}

				}
			}else{
				echo "Por favor preeencha todos os campos do formulário...";
			}
				
			
		break;
		
		case 'confirmacao':
		    $sql = "SELECT * FROM usuarios WHERE email ='{$_SESSION['email_cad']}'";
		    $consulta = mysqli_query($conexao, $sql);
		    
		    $consulta_object = mysqli_fetch_object($consulta);
			$codigo = addslashes($_POST['InputCod']);

			if($codigo == $consulta_object->codigo){
			    
				 $sql = "UPDATE usuarios SET ativo = 1 WHERE email = '{$_SESSION['email_cad']}'";
		        $consulta = mysqli_query($conexao_aux, $sql);
		        
		        if(!$consulta){
		            echo 0 .mysqli_error($conexao_aux);
		        }else{
		            echo 1;
		        }
			    
			}else{
				echo 0 ;
			}
		break;
		case 'troca_Senha':
	
			$senha = base64_encode(addslashes($_POST['InputSenha']));
	        $senha1 = base64_encode(addslashes($_POST['InputSenha1']));
			if($senha == $senha1){
			    $sql_troca =  "UPDATE usuarios SET senha = '{$senha}' WHERE email = '{$_SESSION['email_red']}'";
			    $troca = mysqli_query($conexao_aux5, $sql_troca);
			    
			    if(!$troca){
			        echo 0;
			    }else{
			    	echo 1;
			    }
			    
			}else{
				echo 0;
			}
		break;
		case 'redefinicao_cod':
		    $sql = "SELECT * FROM usuarios WHERE email ='{$_SESSION['email_red']}'";
		    $consulta = mysqli_query($conexao, $sql);
		    
		    $consulta_object = mysqli_fetch_object($consulta);
			$codigo = addslashes($_POST['InputCod']);

			if($codigo == $consulta_object->codigo){
			    
				echo 1;
			    
			}else{
				echo 0;
			}
		break;
		case 'redefinicao':
	        $key = rand(1000,9999);
		    $codigo = $key;
		    
		    $email = $_POST['InputEmail'];
		    $_SESSION['email_red'] = $email;
		    
		    $sql_aux = "SELECT * FROM usuarios WHERE email ='{$email}'";
		    
		    $consulta_aux = mysqli_query($conexao_aux, $sql_aux);
		    if(mysqli_num_rows($consulta_aux) > 0 ){
		         $sql = "UPDATE usuarios SET codigo = '{$codigo}' WHERE email = '{$email}'";
    		    $consulta = mysqli_query($conexao, $sql);
    		   
    		    
    		    if(!$consulta){
    		        echo "erro".mysqli_error($consulta);
    		    }else{
    		        	if(mail($email,"Código de verificação: ",$codigo)){
					        
							echo 1;
						}else{
					     	unset ($_SESSION['email_red']);
							echo "Falha ao enviar código.";
						}
    		    }
		    }else{
		        echo "Email não encontrado...";
		    }
	       
		    
	    break;
		
	
		case 'listar_usuarios':
			// listando os usuarios ativos:
			$sql = 'SELECT * FROM usuarios WHERE ativo = 1;';
			$resultado = mysqli_query($conexao, $sql);
			if (!$resultado) { // Caso tenha dado erro:
				echo 'Erro ao listar usuários: ' . mysqli_error($conexao);
				return; // encerra execução
			}
			$resposta = ''; // variavel que retornaremos ao frontend
			if (mysqli_num_rows($resultado) > 0) { // se há registros:
				while($row = mysqli_fetch_assoc($resultado)) {
					// montando as linhas da tabela, já formatando a data para BR
					$resposta .= '
						<tr>
						  <td>'.$row['id'].'</td>
						  <td>'.$row['nome'].'</td>
						  <td>'.$row['email'].'</td>
						  <td>'. date("d/m/Y", strtotime($row['data_cadastro'])).'</td>
						  <td>'.$row['hora_cadastro'].'</td>
						  <td>
							  [<a href="index.php?pag=editar_usuario&id='.$row['id'].'" title="Editar">editar</a>]
							  [<a href="#" onClick="removerUsuario('.$row['id'].', $(this));" title="Remover">excluir</a>]
						  </td>
						</tr>
					';
				}
				echo $resposta; // retornando ao frontend		
			}else{
				// caso nao retorne dados:
				echo 0;
			}
		break;
			
		case 'detalhes_usuario':
			// pegando dados do usuario pelo ID:
			$sql = 'SELECT * FROM usuarios WHERE id = ' . addslashes($_POST['id_usuario']);
			$resultado = mysqli_query($conexao, $sql);
			$resposta = [];
			if (mysqli_num_rows($resultado) > 0) { // se há registros:
				while($row = mysqli_fetch_assoc($resultado)) {
					// montando a resposta:
					$resposta = array(
						'nome_usuario' => $row['nome'],
						'email_usuario' => $row['email'],
						'senha_usuario' => base64_decode($row['senha']) // decriptografando a senha
					);
				}
			}
			echo json_encode($resposta); // retornando ao frontend convertendo o array resposta legível ao ajax
		break;
			
		case 'atualizar_usuario':
			$pasta = "../frontend/imagens/foto_perfil/";

			function aux_animal($auxiliar){
				if(isset($_POST[$auxiliar]))
				{
					return $auxiliar = addslashes($_POST[$auxiliar]);
				}
			}
			$aux_array = array('InputRua', 'InputNumero', 'InputBairro', 'InputCidade', 'InputEstado','InputCep', 'contato_usuario', 'email_usuario', 'nome_usuario');

			function verificador($aux_argum){
				$vazio = 2;
				if(empty($_POST['interesse_cachorro']) AND empty($_POST['interesse_gato'])){
					return $vazio;
				}else{
					for($i = 0; $i < count($aux_argum); $i++){
						if(empty($_POST[$aux_argum[$i]])){
							 return $vazio;
						}else{
							continue;
						}
					}
					return $vazio = $vazio + 1;
				}
				
			}
            if(verificador($aux_array) == 3){
				$id = base64_decode($_POST['id']);

				$senha_atual = addslashes($_POST['senha_atual']);
				$nova_senha_0 =addslashes($_POST['nova_senha_0']);
				$nova_senha_1 = addslashes($_POST['nova_senha_1']); 

				$email = addslashes($_POST['email_usuario']);
				$nome = addslashes($_POST['nome_usuario']);
				$contato = addslashes($_POST['contato_usuario']);

				$rua = addslashes($_POST['InputRua']);
				$numero = addslashes($_POST['InputNumero']);
				$bairro = addslashes($_POST['InputBairro']);
				$cidade = addslashes($_POST['InputCidade']);
				$estado = addslashes($_POST['InputEstado']);
				$cep = addslashes($_POST['InputCep']);
				
				$data_atualizacao = date('Y-m-d');
				$hora_atualizacao = date('H:i:s');

				$sql_atualizar_usuario = "SELECT * FROM usuarios WHERE id =".$id;
				$consulta_user = mysqli_query($conexao, $sql_atualizar_usuario);

				if ($_FILES['upload_img']['tmp_name']!=''){

					$arquivos = $_FILES['upload_img'];
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
							if(!empty($senha_atual) OR !empty($nova_senha_0) OR !empty($nova_senha_1)){
								if(empty($senha_atual) OR empty($nova_senha_0) OR empty($nova_senha_1)){
									if($nova_senha_0 == $nova_senha_1){
										if($nova_senha_0 == base64_decode($user->senha) ){
											
											$sql = 'UPDATE usuarios SET email = "'.$email.'", nome = "'.$nome.'", senha = "'.$nova_senha_0.'",foto ="'.$nome_atual.'", interesse_cachorro="'.aux_animal($GLOBALS['interesse_cachorro']).'",  interesse_gato="'.aux_animal($GLOBALS['interesse_gato']).'",rua = "'.$rua.'",numero = "'.$numero.'",bairro = "'.$bairro.'",cidade = "'.$cidade.'",estado = "'.$estado.'", contato = "'.$contato.'",cep = "'.$cep.'", data_atualizacao = "'.$data_atualizacao.'", hora_atualizacao = "'.$hora_atualizacao.'" WHERE id = '.$id.' AND ativo = 1';
											$resultado = mysqli_query($conexao, $sql);
											if (!$resultado) { // Caso tenha dado erro:
												echo 'Erro ao salvar novo cadastro: ' . mysqli_error($conexao);
											}else{
												echo 1;
											}
										}else{
											echo "Sua nova senha não pode ser igual a anterior...";
										}
									}else{
										echo "As duas senhas não coincidem...";
									}
								}else{
									echo "Para trocar a sua senha é necessário preencher os três campos do formulário...";
								}
							}else{

								$sql = 'UPDATE usuarios SET email = "'.$email.'", nome = "'.$nome.'",foto ="'.$nome_atual.'", interesse_cachorro="'.aux_animal($GLOBALS['interesse_cachorro']).'",  interesse_gato="'.aux_animal($GLOBALS['interesse_gato']).'",rua = "'.$rua.'",numero = "'.$numero.'",bairro = "'.$bairro.'",cidade = "'.$cidade.'",estado = "'.$estado.'", contato = "'.$contato.'",cep = "'.$cep.'", data_atualizacao = "'.$data_atualizacao.'", hora_atualizacao = "'.$hora_atualizacao.'" WHERE id = '.$id.' AND ativo = 1';
								$resultado = mysqli_query($conexao, $sql);
								if (!$resultado) { // Caso tenha dado erro:
									echo 'Erro ao salvar novo cadastro: ' . mysqli_error($conexao);
								}else{
									echo 1;
								}
							}
						}
					}
				}else{

					if(!empty($senha_atual) OR !empty($nova_senha_0) OR !empty($nova_senha_1)){
						if(!empty($senha_atual) AND !empty($nova_senha_0) AND !empty($nova_senha_1)){
							if($nova_senha_0 == $nova_senha_1){
								if($nova_senha_0 != base64_decode($user->senha) ){
								    $nova_senha =  base64_encode($nova_senha_0);
									
									$sql = 'UPDATE usuarios SET email = "'.$email.'", nome = "'.$nome.'", senha = "'.$nova_senha.'", interesse_cachorro="'.aux_animal($GLOBALS['interesse_cachorro']).'",  interesse_gato="'.aux_animal($GLOBALS['interesse_gato']).'",rua = "'.$rua.'",numero = "'.$numero.'",bairro = "'.$bairro.'",cidade = "'.$cidade.'",estado = "'.$estado.'", contato = "'.$contato.'",cep = "'.$cep.'", data_atualizacao = "'.$data_atualizacao.'", hora_atualizacao = "'.$hora_atualizacao.'" WHERE id = '.$id.' AND ativo = 1';
									$resultado = mysqli_query($conexao, $sql);
									if (!$resultado) { // Caso tenha dado erro:
										echo 'Erro ao salvar novo cadastro: ' . mysqli_error($conexao);
									}else{
										echo 1;
									}
								}else{
									echo "Sua nova senha não pode ser igual a anterior...";
								}
							}else{
								echo "As duas senhas não coincidem...";
							}
						}else{
							echo "Para trocar a sua senha é necessário preencher os três campos do formulário...";
						}
					}else{
						$sql = 'UPDATE usuarios SET email = "'.$email.'", nome = "'.$nome.'", interesse_cachorro="'.aux_animal($GLOBALS['interesse_cachorro']).'",  interesse_gato="'.aux_animal($GLOBALS['interesse_gato']).'",rua = "'.$rua.'",numero = "'.$numero.'",bairro = "'.$bairro.'",cidade = "'.$cidade.'",estado = "'.$estado.'", contato = "'.$contato.'",cep = "'.$cep.'", data_atualizacao = "'.$data_atualizacao.'", hora_atualizacao = "'.$hora_atualizacao.'" WHERE id = '.$id.' AND ativo = 1';
						$resultado = mysqli_query($conexao, $sql);
						if (!$resultado) { // Caso tenha dado erro:
							echo 'Erro ao salvar novo cadastro: ' . mysqli_error($conexao);
						}else{
							echo 1;
						}
					}
				}

				
			}else{
				echo "Todos os campos devem ser minimante preenchidos, menos o de alteração de senha caso não seja desejada a alterção...";
			}
			
		break;
	
		case 'excluir_usuario':
			// inabilitar usuario pelo ID:
			$id = addslashes($_POST['id_usuario']);
			$data_exclusao = date('Y-m-d');
			$hora_exclusao = date('H:i:s');
			$sql = 'UPDATE usuarios SET ativo = 0, data_exclusao = "'.$data_exclusao.'", hora_exclusao = "'.$hora_exclusao.'" WHERE id = '.$id.';';
			$resultado = mysqli_query($conexao, $sql);
			if (!$resultado) { // Caso tenha dado erro:
				echo 'Erro ao remover usuário: ' . mysqli_error($conexao);
				return; // encerra execução
			}else{
				echo 1; // deu tudo certo
			}
		break;

		case 'login':
			
			if(empty(addslashes($_POST['email_login'])) AND empty(base64_encode(addslashes($_POST['senha_login'])))){
				echo "<script language='javascript' type='text/javascript'>
				alert('Por favor, preencha todos os campos do formulário...');window.location
				.href='../index.php?pag=index'</script>";
			}else{
				$email = addslashes($_POST['email_login']);
				$senha = base64_encode(addslashes($_POST['senha_login']));

				$sql = mysqli_query($conexao, "SELECT * FROM usuarios WHERE email = '{$email}'") or print mysqli_error($conexao);
				
				if(mysqli_num_rows($sql) > 0){
					$login = "SELECT * FROM usuarios WHERE email = '{$email}' AND senha = '{$senha}' AND ativo = 1" ;
					$conectar = mysqli_query($conexao, $login);

					
					if(mysqli_num_rows($conectar) <= 0)
					{
						unset ($_SESSION['email_login']);
						unset ($_SESSION['senha_login']);
						echo "<script language='javascript' type='text/javascript'>
							alert('Email ou senha incorretos...');window.location
							.href='../index.php?pag=index'</script>";
							die();

					}
					else{
						$_SESSION['email_login'] = $email;
						$_SESSION['senha_login'] = $senha;
						header('Location:../index.php?pag=home');
					}

				}else{
					echo "<script language='javascript' type='text/javascript'>
							alert('email não encontrado, por favor tente novamente ou crie uma conta nova...');window.location
							.href='../index.php?pag=index'
						  </script>";
				}
			}
		break;	


		default:
			// code...
		break;
	}