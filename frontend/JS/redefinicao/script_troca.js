
	    // Executar ao salvar:
		$('#form_troca_senhao').submit(function(e){ // ao enviar o form
			e.preventDefault(); // interrompemos o envio padrão, para que faça o q segue abaixo:
			$.ajax({
	            type: 'POST',
	            url: "./backend/acao.php",
	            data: $(this).serialize(), // pegando todos os campos do form
	            processData: false,
	            beforeSend: function(){
	            	$("#form_troca_senhao :input").prop('disabled', true);
					$('#confirmar').val('Processando...');
				},

	            success: function(retorno_backend) {
	            	$("#form_troca_senhao :input").prop('disabled', false);
					$('#confirmar').val('Processando...');
					if (retorno_backend == 1) {
				    	$('#confirmar').val('Confirmar');
						$('#resultado_processamento').html('Sua senha foi altereada com sucesso...');
						$('#ativa_modal').click();
					}else{
					    $('#confirmar').val('Confirmar');
				    	$('#InformaCerto').html("As senhas não coincidem");
						$('#resultado_processamento').html(retorno_backend); // Mostra a mensagem de erro
					}
					
	            }
	        });
		});
