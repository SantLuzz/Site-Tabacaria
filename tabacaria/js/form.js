$(function(){

		//mask form input[name=telefone]

	$('input[name=telefone]').mask('(99)99999-9999');


	//Validação do formulário de contato

	//eventos do formulário
	$('input[type=text]').focus(function(){
		resetarCampoInvalido($(this));
	})

	$('textarea[name=mensagem]').focus(function(){
		resetarCampoInvalido($(this));
	})	

	$('form').submit(function(){

		

		//se chegou até aqui podemos enviar o formulário
	})

	//estilizar campos do formulário

	function aplicarCampoInvalido(el){
		el.css('color','red');
		el.css('border','2px solid red');
		el.val('Campo Invalido');
	}

	function resetarCampoInvalido(el){
		el.css('color','#444');
		el.css('border','1px solid #dadada');
		el.val('');
	}


	//funções para validar campos do forulário

	function verificarNome(nome){
		//contando a quantidade de espaços, pois esta sera a validação

		if(nome == ''){
			return false;
		}
		var amount = nome.split(' ').length;
		var splitStr = nome.split(' ');

		if(amount >= 2){
			for(var i = 0; i < amount; i++){
				if(splitStr[i].match(/^[A-Z]{1}[a-z]{1,}$/)){

				}else{
					return false;
				}
			}
		}else{
			return false;
		}
	}

	function verificarEmail(email){
		if(email == ''){
			return false;
		}

		if(email[i].match(/^[a-z0-9-_.]{1,}+@+[a-z.]{1,}$/) == null){
			return false;
		}
	}

	function verificarTelefone(telefone){
		if(telefone == ''){
			return false;
		}

		if(telefone[i].match(/^[\([0-9]{2}\)[0-9]{5}-[0-9]{4}]$/) == null){
			return false;
		}
	}

	function verificarMensagem(mensagem){
		if(mensagem == ''){
			return false;
		}
	}

	//envento enviar

	
	
	})