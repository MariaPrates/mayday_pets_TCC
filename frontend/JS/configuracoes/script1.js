$(document).on('submit','#form_configuracao',function(e){
    var form = $('form')[0];
    var data = new FormData(form);
    
    $.ajax({
        url: './backend/acao.php', // Url do lado server que vai receber o arquivo
        type: 'POST',
        data: data,
        processData: false,
        contentType: false,
        
        success: function (retorno_backend) {
            // utilizar o retorno
            $("#form_configuracao :input").prop('disabled', false);
            $('#SalvarBtn').val('Salvando...');
            if (retorno_backend == 1) {
                $('#resultado_processamento').html('Dados atualizados...');
                $('#SalvarBtn').val('Salvar');
            }else{
                $('#resultado_processamento').html(retorno_backend);
                $('#SalvarBtn').val('Salvar');
            }
            $('#ativa_modal').click(); // escreve o retorno no console
        }
    })
    e.preventDefault();
  })
