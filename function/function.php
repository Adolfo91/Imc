
<?php

	function imcHomem($peso, $altura){
		$msg;
		$tipoMsg;
		$resultado = $peso /($altura^2);

		if($resultado < 20.7){

			$tipoMsg = "primary";
			$msg = "Seu indice é: $resultado. <br> Você está abaixo do peso."; 

		}elseif($resultado <= 26.4){
			$tipoMsg = "success";
			$msg = "Seu indice é: $resultado. <br> Você está no peso normal."; 
		
		}elseif($resultado <= 27.8){
			$tipoMsg = "warning";
			$msg = "Seu indice é: $resultado. <br> Você está levemente acima do peso ideal.";	
		
		}elseif($resultado <= 31.1){
			$tipoMsg = "danger";
			$msg = "Seu indice é: $resultado. <br> Você está acima do peso ideal.";
		
		}else{
			$tipoMsg = "danger";
			$msg = "Seu indice é: $resultado. <br> Você está obeso.";
		
		}

		return array($msg,$tipoMsg,$resultado);
	}

	function imcMulher($peso, $altura){
		$msg;
		$tipoMsg;
		$resultado = $peso /($altura^2);


		if($resultado < 19.1){

			$tipoMsg = "primary";
			$msg = "Seu indice é: $resultado. <br> Você está abaixo do peso."; 

		}elseif($resultado <= 25.8){
			$tipoMsg = "success";
			$msg = "Seu indice é: $resultado. <br> Você está no peso normal."; 
		
		}elseif($resultado <= 27.3){
			$tipoMsg = "warning";
			$msg = "Seu indice é: $resultado. <br> Você está levemente acima do peso ideal.";	
		
		}elseif($resultado <= 32.3){
			$tipoMsg = "danger";
			$msg = "Seu indice é: $resultado. <br> Você está acima do peso ideal.";
		
		}else{
			$tipoMsg = "danger";
			$msg = "Seu indice é: $resultado. <br> Você está obeso.";
		
		}

		return array($msg,$tipoMsg,$resultado);
	}


?>