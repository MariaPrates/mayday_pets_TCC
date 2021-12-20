
<!-- Código que manipula tela de Listagem de Usuários Cadastrados -->

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
	    <input type="hidden" id="ativa_modal" data-toggle="modal" data-target="#exampleModal">

		<h4 class="text-center">Listagem de usuários</h4>
		<div id="sem_registros" class="text-center mt-3">
			<p>Sem registros a exibir.</p>			
		</div>
		<div id="tabela_lista_usuarios" style="display: none;" class="mt-3">
			<table class="table table-sm">
			  <thead>
			    <tr>
			      <th scope="col">ID</th>
			      <th scope="col">Nome</th>
			      <th scope="col">E-mail</th>
			      <th scope="col">Data Cadastro</th>
			      <th scope="col">Hora Cadastro</th>
			      <th scope="col">Ações</th>
			    </tr>
			  </thead>
			  <tbody id="registros_usuarios">
			    <!-- Preenchido via Ajax -->
			  </tbody>
			</table>
		</div>

	</main>

	<script type="text/javascript">
		// Executar ao carregar a pagina:
	    $(document).ready(function(){
	    	let formData = new FormData();
	    	formData.append('destino', 'usuarios');
	    	formData.append('acao', 'listar_usuarios');
	        $.ajax({
	            type: 'POST',
	            url: "../backend/acao.php",
	            data: formData,
	            contentType: false,
	            processData: false,
	            success: function(retorno_backend) {
	            	if (retorno_backend != 0) {
	            		 // preenchendo as linhas da tabela com o que vier do backend:
	            		$('#registros_usuarios').html(retorno_backend);
	            		$('#sem_registros').hide(); // ocultando mensagem padrão
	            		$('#tabela_lista_usuarios').show(); // mostrando a tabela com os dados
	            	}
	            }
	        });
	    });

	    // Executar ao clicar em excluir:
	    function removerUsuario(id_usuario, linha){ // ao enviar o form
	    	let formData = new FormData();
	    	formData.append('destino', 'usuarios');
	    	formData.append('acao', 'excluir_usuario');
	    	formData.append('id_usuario', id_usuario);
			$.ajax({
	            type: 'POST',
	            url: "../backend/acao.php",
	            data: formData,
	            contentType: false,
	            processData: false,
	            success: function(retorno_backend) {
					if (retorno_backend == 1) { // removeu o contato, exibimos mensagem e eliminamos a linha
						$('#resultado_processamento').html('Removido com sucesso.');

						linha.parent().parent().remove()
					}else{
						$('#resultado_processamento').html(retorno_backend); // Mostra a mensagem de erro
					}
					$('#ativa_modal').click();
	            }
	        });
		};

	</script>