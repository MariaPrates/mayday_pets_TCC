
	    // Executar ao salvar:
		$('#form_confirmacao_red').submit(function(e){ // ao enviar o form
			e.preventDefault(); // interrompemos o envio padrão, para que faça o q segue abaixo:
			$.ajax({
	            type: 'POST',
	            url: "./backend/acao.php",
	            data: $(this).serialize(), // pegando todos os campos do form
	            processData: false,
	            beforeSend: function(){
	            	$("#form_confirmacao_red :input").prop('disabled', true);
					$('#corfirmar_codigo').val('Processando...');
				},

	            success: function(retorno_backend) {
	            	$("#form_confirmacao_red :input").prop('disabled', false);
					$('#corfirmar_codigo').val('Corfirmando...');
					if (retorno_backend == 1) {
						$('#resultado_processamento').html('Processado com sucesso...');
						$('#ativa_modal').click();
						$('#corfirmar_codigo').val('Confirmar');
					}else{
						$('#resultado_processamento').html(retorno_backend); // Mostra a mensagem de erro
						$('#InformaCerto').html("O código inserido está incorreto, tente novamente ou verifique se o e-mail está correto");
						$('#corfirmar_codigo').val('Confirmar');
					}
					
	            }
	        });
		});
