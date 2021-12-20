<?php
switch ($_POST['grupo']) { // destino = tabela que haverá interação
	case 'usuarios':
		// Se o destino for "clientes", importa o arquivo com o processamento dele
		require_once('usuarios.php');
		
		break;
	
	case 'postagens':
		// Se o destino for "clientes", importa o arquivo com o processamento dele
		require_once('postagens.php');
		
		break;
		
	// 	break;
	
	default:
		// code...
		break;
}