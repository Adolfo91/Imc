
<?php

	function imcHomem($nome , $sexo, $peso, $altura){
		$nome = $nome == ""? "Usuário": $nome;
		$msg;
		$tipoMsg;
		$resultado = $peso /($altura * $altura);
		$massaCorporal;

		if($resultado < 20.7){

			$tipoMsg = "modal-header leve";
			$msg = "<p>Olá $nome. Seu indice de massa comporal é: ".number_format($resultado,2,",",".").".</p> <p>Você está abaixo do peso.</p>";
			$massaCorporal = "Abaixo do Peso";

		}elseif($resultado <= 26.4){
			$tipoMsg = "modal-header normal";
			$msg = "<p>Olá $nome. Seu indice de massa comporal é: ".number_format($resultado,2,",",".").". </p> <p> Você está no peso normal.</p>";
			$massaCorporal = "Peso Normal"; 
		
		}elseif($resultado <= 27.8){
			$tipoMsg = "modal-header perigo";
			$msg = "<p>Olá $nome. Seu indice de massa comporal é: ".number_format($resultado,2,",",".").". </p> <p> Você está levemente acima do peso ideal.</p>";
			$massaCorporal = "Levemente Acima do Peso";	
		
		}elseif($resultado <= 31.1){
			$tipoMsg = "modal-header risco";
			$msg = "<p>Olá $nome. Seu indice de massa comporal é: ".number_format($resultado,2,",",".").". </p> <p> Você está acima do peso ideal.</p>";
			$massaCorporal = "Acima do Peso";
		
		}else{
			$tipoMsg = "modal-header risco";
			$msg = "<p>Olá $nome. Seu indice de massa comporal é: ".number_format($resultado,2,",",".").". </p> <p> Você está obeso.</p>";
			$massaCorporal = "Obeso";
		}

		return array($msg,$tipoMsg,$resultado,$massaCorporal);
	}

	function imcMulher($nome, $sexo, $peso, $altura){
		$nome = $nome == ""? "Usuário": $nome;
		$msg;
		$tipoMsg;
		$resultado = $peso /($altura * $altura);
		$massaCorporal;

		if($resultado < 19.1){

			$tipoMsg = "modal-header leve";
			$msg = "<p>Olá $nome. Seu indice de massa comporal é: ".number_format($resultado,2,",",".").". </p> <p> Você está abaixo do peso.</p>";
			$massaCorporal = "Abaixo do Peso";

		}elseif($resultado <= 25.8){
			$tipoMsg = "modal-header normal";
			$msg = "<p>Olá $nome. Seu indice de massa comporal é: ".number_format($resultado,2,",",".").". </p> <p> Você está no peso normal.</p>";
			$massaCorporal = "Peso Normal";
		
		}elseif($resultado <= 27.3){
			$tipoMsg = "modal-header perigo";
			$msg = "<p>Olá $nome. Seu indice de massa comporal é: ".number_format($resultado,2,",",".").". </p> <p> Você está levemente acima do peso ideal.</p>";
			$massaCorporal = "Levemente Acima do Peso";
		
		}elseif($resultado <= 32.3){
			$tipoMsg = "modal-header risco";
			$msg = "<p>Olá $nome. Seu indice de massa comporal é: ".number_format($resultado,2,",",".").". </p> <p> Você está acima do peso ideal.</p>";
			$massaCorporal = "Acima do Peso";
		
		}else{
			$tipoMsg = "modal-header risco";
			$msg = "<p>Olá $nome. Seu indice de massa comporal é: ".number_format($resultado,2,",",".").". </p> <p> Você está obeso.</p>";
			$massaCorporal = "Obeso";
		}

		return array($msg,$tipoMsg,$resultado,$massaCorporal);
	}


?>