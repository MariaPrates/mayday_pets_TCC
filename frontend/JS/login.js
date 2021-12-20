
	    // Executar ao salvar:
		$('#form_login').submit(function(e){ // ao enviar o form
			e.preventDefault(); // interrompemos o envio padrão, para que faça o q segue abaixo:
			$.ajax({
	            type: 'POST',
	            url: "./backend/acao.php",
	            data: $(this).serialize(), // pegando todos os campos do form
	            processData: false,
	            beforeSend: function(){
	            	$("#form_login :input").prop('disabled', true);
					$('#btn_salvar_usuario').val('Processando...');
				},

	            success: function(retorno_backend) {
	            	$("#form_login :input").prop('disabled', false);
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
