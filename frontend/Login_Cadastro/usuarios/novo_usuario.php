<?php

$pagina = $_GET['pag']; // pegando a pagina atual (novo ou editar usuario)
// Se novo usuario:
$titulo = 'Cadastrar usuário';
$acao = 'salvar_usuario';
$id_usuario = '';
if ($pagina == 'editar_usuario') { // se editar usuario
	$titulo = 'Editar usuário';
	$id_usuario = $_GET['id'];
	$acao = 'atualizar_usuario';
}

?>
<!-- Código que manipula tela de Cadastro de Usuário -->

	<main role="main" class="container">
		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Atenção</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body" id="resultado_processamento">
		        <!-- Preenchido apos processamento do Ajax -->
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
		      </div>
		    </div>
		  </div>
		</div>


	</main>

	<?php
		include("../Cadastro/criarConta.php");
	?>

	<script type="text/javascript">

		// Executar ao carregar a pagina:
	    $(document).ready(function(){
	    	if ($("#id_usuario").val() != '') { // se existe valor no ID, é atualização
	    		// pegando dados do usuario em questão:
	    		let formData = new FormData();
		    	formData.append('destino', 'usuarios');
		    	formData.append('acao', 'detalhes_usuario');
		    	formData.append('id_usuario', $("#id_usuario").val());
		        $.ajax({
		            type: 'POST',
		            url: "../../../backend/acao.php",
		            data: formData,
		            contentType: false,
		            processData: false,
		            success: function(retorno_backend) {
		            	// decodificando o retorno do PHP transformando-o em array:
		            	let retorno = JSON.parse(retorno_backend); 
		            	$("#nome_usuario").val(retorno['nome_usuario']); // preenchendo conforme as posições
		            	$("#email_usuario").val(retorno['email_usuario']);
		            	$("#senha_usuario").val(retorno['senha_usuario']);
		            }
		        });

	    	}
	    	
	    });

	    // Executar ao salvar:
		$('#form_novo_usuario').submit(function(e){ // ao enviar o form
			e.preventDefault(); // interrompemos o envio padrão, para que faça o q segue abaixo:
			$.ajax({
	            type: 'POST',
	            url: "../../../backend/acao.php",
	            data: $(this).serialize(), // pegando todos os campos do form
	            processData: false,
	            beforeSend: function(){
	            	$("#form_novo_usuario :input").prop('disabled', true);
					$('#btn_salvar_usuario').val('Processando...');
				},

	            success: function(retorno_backend) {
	            	$("#form_novo_usuario :input").prop('disabled', false);
					$('#btn_salvar_usuario').val('Salvar');
					if (retorno_backend == 1) {
						$('#resultado_processamento').html('Processado com sucesso.');
						$('#btn_limpar').click();
					}else{
						$('#resultado_processamento').html(retorno_backend); // Mostra a mensagem de erro
					}
					$('#ativa_modal').click();
	            }
	        });
		});
	</script>