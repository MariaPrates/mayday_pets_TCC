
	    // Executar ao salvar:
		$('#form_confirmacao').submit(function(e){ // ao enviar o form
			e.preventDefault(); // interrompemos o envio padrão, para que faça o q segue abaixo:
			$.ajax({
	            type: 'POST',
	            url: "./backend/acao.php",
	            data: $(this).serialize(), // pegando todos os campos do form
	            processData: false,
	            beforeSend: function(){
	            	$("#form_confirmacao :input").prop('disabled', true);
					$('#btn_salvar_usuario').val('Processando...');
				},

	            success: function(retorno_backend) {
	            	$("#form_confirmacao :input").prop('disabled', false);
					$('#corfirmar_codigo').val('Corfirmando...');
					if (retorno_backend == 1) {
						$('#resultado_processamento').html('Processado com sucesso, agora você será redirecionado para a página de login para então poder entrar na sua conta');
						$('#ativa_modal').click();
						$('#corfirmar_codigo').val('Corfirmar');
					}else{
						$('#resultado_processamento').html(retorno_backend); // Mostra a mensagem de erro
						$('#InformaCerto').html("O código inserido está incorreto, tente novamente ou verifique se o e-mail está correto");
						$('#corfirmar_codigo').val('Corfirmar');
					}
					$('#ativa_modal').click();
	            }
	        });
		});
