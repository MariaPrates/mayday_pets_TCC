$('#form_denuncia').submit(function(e){ // ao enviar o form
    e.preventDefault(); // interrompemos o envio padrão, para que faça o q segue abaixo:
    $.ajax({
            type: 'POST',
            url: "./backend/acao.php",
            data: $(this).serialize(), // pegando todos os campos do form
            processData: false,
            beforeSend: function(){
            $("#form_denuncia :input").prop('disabled', true);
            $('#denuncia_btn').val('Processando...');
        },

        success: function(retorno_backend) {
        $("#form_denuncia :input").prop('disabled', false);
            if (retorno_backend == 1) {
                $("#denuncia_btn").val('Denúnciar');
                $('#resultado_processamento').html('Denúnciado...');
                $("#redirecionamento_backend").attr("href", "./index.php?pag=home");
            }else{
                $("#denuncia_btn").val('Tentar novamente...');
                $('#resultado_processamento').html(retorno_backend);

            }
            $('#ativa_modal').click(); // escreve o retorno no console
        }
    })
})
