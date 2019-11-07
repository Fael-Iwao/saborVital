function Validacao(){

	this.validaInput = function(classeCampo){		
		var valido = false;
		$(classeCampo).each(function() {
			if ($(this).hasClass("value-required") == true) {
				if (!$(this).val()) {
					$(this).addClass("is-invalid");
					valido = true;
				} else {
					$(this).removeClass("is-invalid");
				}
			}
		});
	}

	this.validaLogin = function(id){
		var login = $('#'+id).val()
		nlogin = login.split('@')
		
		if (login == "" ) {
			 // toastr.error("Insira um nome do equipamento.");
			$('#'+id).attr('style', 'border-color: #ff9249 !important');
			$('#'+id).attr('placeholder','Campo Obrigatório!')
			$('#'+id).removeClass('load-ok')
			$('#'+id).removeClass('load-error')
			$('#mensagemLogin').text('')
			 return false;
		}else{
			if(nlogin[1] == 'natura.net'){
				$('#'+id).removeClass('load-ok')
				$('#'+id).removeClass('load-error')
				$('#'+id).addClass('load-input');
				var listagem = {
				'login': login
				}
				var lista = JSON.stringify(listagem)
				//envio e retorno	
				$.post(ipConn+portaConn+"/getUsuario", lista , function(result){
					var obj = JSON.parse(result);
					
					
					if (obj == null) {
						$('#'+id).removeClass('load-input')
						$('#'+id).removeClass('load-error')
						$('#'+id).addClass('load-ok');
						$('#mensagemLogin').text('Login disponível')
						$('#mensagemLogin').attr('style', 'color: green !important');
						$('#'+id).removeAttr('style', 'border-color: #ff9249 !important');
						$("#btnCadastrar").removeAttr('disabled','disabled')
					}else{
						$("#btnCadastrar").attr('disabled','disabled')
						$('#'+id).attr('style', 'border-color: #ff9249 !important');
						$('#'+id).removeClass('load-ok')
						$('#'+id).removeClass('load-input')
						$('#'+id).addClass('load-error');
						$('#mensagemLogin').text('Login já existente')
						$('#mensagemLogin').attr('style', 'color: red !important');
					}
				}).error(function(status){
					//status de erro comuns que acontecem antes da conexão com o go
					if (status.status == 404) {
						$("#loading").addClass("hidden");
					}
					if (status.status == 408) {
						$("#loading").addClass("hidden");
					}
					if (status.status == 500) {
						$("#loading").addClass("hidden");
					}
					if (status.status == 504) {
						$("#loading").addClass("hidden");
					}
					if (status.status == 0) {
						$("#loading").addClass("hidden");
					}
				});
				$('#'+id).removeAttr('style');
			}else {
				$('#'+id).attr('style', 'border-color: #ff9249 !important');
				$('#'+id).removeClass('load-ok')
				$('#'+id).removeClass('load-input')
				$('#'+id).addClass('load-error');
				$('#mensagemLogin').text('Aceito Apenas e-mails @natura.net')
				$('#mensagemLogin').attr('style', 'color: red !important');
			}
		}
	}

}

var validacao = new Validacao();