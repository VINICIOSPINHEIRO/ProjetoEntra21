$(document).ready(function(){
		$('.label_radio').click(function(){

            // pega todos os labels
            var todos_radios = $('.label_radio');
            // percorre todos os labels
            $.each(todos_radios, function(key, value) {
                // tira a classe de todos os elementos pais dos labels
                 $('.label_radio').parent().removeClass('bg-success');
            });
            // toggle class do verdinho
            $(this).parent().toggleClass('bg-success');
            

                 var id_resposta = $(this).attr('data-id-resposta');
			     var id_sintoma = $(this).attr('data-id-sintoma');

			    $.ajax({
                  type: 'POST',
                  url: 'backend/botao_ajax2.php',
                  data: {
                    "id_resposta": id_resposta,
                  	"id_sintoma": id_sintoma
                  },
                  success: function(response) {
                      console.log(response);
                  }
              });

		});
	});