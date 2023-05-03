$(document).ready(function() {

	$('#confSenha').keyup(function() {
  
	var senha = $('#senha').val();
	var confSenha = $('#confSenha').val();

	if (senha == confSenha) {
		$('#cadastro').attr('disabled', false);
		$('#confSenha').removeClass('is-invalid');
		$('#confSenha').addClass('is-valid');
		$('#senha').removeClass('is-invalid');
		$('#senha').addClass('is-valid');
	} else {
		$('#cadastro').attr('disabled', true);
		$('#confSenha').removeClass('is-valid');
		$('#confSenha').addClass('is-invalid');
		$('#senha').removeClass('is-valid');
		$('#senha').addClass('is-invalid');
	}	


});


});

