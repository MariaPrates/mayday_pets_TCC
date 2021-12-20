
 var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('img_new');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
}


    $(document).on('submit','#form_interesse',function(e){
        var form = $('#form_interesse')[0];
        var data = new FormData(form);
        
        $.ajax({
            url: './backend/acao.php', // Url do lado server que vai receber o arquivo
            type: 'POST',
            data: data,
            processData: false,
            contentType: false,
             beforeSend: function(){
            $("#form_interesse :input").prop('disabled', true);
            $('#interesse_auxiliar').val('Processando...');
        },
            
            success: function(retorno_backend) {
            $("#form_interesse :input").prop('disabled', false);
                if (retorno_backend == 1) {
                  $(document.getElementById('interesse_auxiliar').style.backgroundColor = '#BD5E6C');
                  $("#interesse_auxiliar").val('Interessado');
                  $("#id_interesse").val('2');
                }else{
                  $(document.getElementById('interesse_auxiliar').style.backgroundColor = '#F49FAB');
                  $("#interesse_auxiliar").val('Interesse');
                  $("#id_interesse").val('1');
                }
          }
        })
        e.preventDefault();
      })


        
        $('#form_denunciar').on('click', function(e){
          e.preventDefault(); // interrompemos o envio padrão, para que faça o q segue abaixo:
          $.ajax({
                  type: 'POST',
                  url: "./backend/acao.php",
                  data: $(this).serialize(), // pegando todos os campos do form
                  processData: false,
                  beforeSend: function(){
                    $("#form_denunciar :input").prop('disabled', true);
            },
    
            success: function(retorno_backend) {
              $("#form_denunciar :input").prop('disabled', false);
                  if (retorno_backend == 1) {
                    window.location.replace("./index.php?pag=denuncia");
                  }else{
                    console.log("erro");
                  }
            }
              });
        });
       
  $(document).on('submit','#form_novo_post',function(e){
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
            $("#form_novo_post :input").prop('disabled', false);
            $('#CompartilharBtn').val('Compartilhar');
            if (retorno_backend == 1) {
                $('#resultado_processamento').html('Postagem feita.');
                $('#btn_limpar').click();
                 window.location.replace("./index.php?pag=home");
            }else{
                $('#resultado_processamento').html(retorno_backend);
            }
            $('#ativa_modal').click(); // escreve o retorno no console
        }
    })
    e.preventDefault();
  })

