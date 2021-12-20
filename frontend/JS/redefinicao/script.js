
	    // Executar ao salvar:
		$('#form_redefinicao').submit(function(e){ // ao enviar o form
			e.preventDefault(); // interrompemos o envio padrão, para que faça o q segue abaixo:
			$.ajax({
	            type: 'POST',
	            url: "./backend/acao.php",
	            data: $(this).serialize(), // pegando todos os campos do form
	            processData: false,
	            beforeSend: function(){
	            	$("#form_redefinicao :input").prop('disabled', true);
					$('#verifica').val('Processando...');
				},

	            success: function(retorno_backend) {
	            	$("#form_redefinicao :input").prop('disabled', false);
					$('#verifica').val('Processando...');
					if (retorno_backend == 1) {
				    	$('#verifica').val('Confirmar');
						$('#resultado_processamento').html('Enviamos um código de confirmação para o seu email');
						$('#ativa_modal').click();
					}else{
					    $('#verifica').val('Confirmar');
				    	$('#InformaCerto').html("O email inserido não foi encontrado em nenhum cadastro, por favor tente novamente ou crie uma conta");
						$('#resultado_processamento').html(retorno_backend); // Mostra a mensagem de erro
					}
					
	            }
	        });
		});
