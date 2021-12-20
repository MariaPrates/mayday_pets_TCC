// JS Imagens posts
   

$(document).on('submit','#form_post',function(e){
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
            $("#form_post :input").prop('disabled', false);
            $('#SalvarBtn').val('Salvando');
            if (retorno_backend == 1) {
                $('#resultado_processamento').html('Edições salvas.');
                $('#SalvarBtn').val('Salvar');
                $('#ativa_modal').click();
            }else{
                $('#SalvarBtn').val('Salvar');
                $('#resultado_processamento').html(retorno_backend);
                $('#ativa_modal').click();
            }
             // escreve o retorno no console
        }
    })
    e.preventDefault();
  })

