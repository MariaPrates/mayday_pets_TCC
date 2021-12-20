<?php

// Se nao encontrar pagina, força redirecionamento a tela inicial:
$pagina = (isset($_GET['pag'])) ? $_GET['pag'] : 'index';


$pagina_nao_encontrada = '
	<main role="main" class="container text-center">
		<h1 class="mt-5">404 - Rota inexistente</h1>
		<p class="lead">Página não encontrada.</p>
	</main>
';


switch($pagina){
	case 'index':
		require_once("./frontend/Login_Cadastro/Login/login.php");
	break;

	case 'cadastro':
		require_once('./frontend/Login_Cadastro/Cadastro/criarConta.php');
	break;
	case 'cadastro':
		require_once('./frontend/Login_Cadastro/Cadastro/criarConta.php');
	break;

	case 'redefinir_senha';
		require_once('./frontend/Login_Cadastro/Redefinicao/redefinicaoSenha.php');
	break;
	case 'confirmacao';
		require_once('./frontend/Login_Cadastro/confirmacao/confirmacao.php');
	break;
	case 'confirma_senha';
		require_once('./frontend/Login_Cadastro/Redefinicao/confirmacao.php');
	break;

	case 'editar_usuario':
		require_once('usuarios/novo_usuario.php');
	break;

	case 'home':
		require_once('./frontend/home/home.php');
	break;
	case 'denuncia':
		require_once('./frontend/denuncia/denuncia.php');
	break;
	case 'redefinicao':
		require_once('./frontend/Login_Cadastro/Redefinicao/redefinicao.php');
	break;
	case 'configuracao':
		require_once('./frontend/configuracoes/configuracoes.php');
	break;
	case 'postagens_feitas':
		require_once('./frontend/PostFeitos/PostFeitos.php');
	break;
	case 'post_interesse':
		require_once('./frontend/PostInt/PostInt.php');
	break;


	default:
		echo $pagina_nao_encontrada; // exibe página 404
	break;	
}

?>

<?php
//require_once 'rodape.php';
?>


		


