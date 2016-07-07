<?php
include 'function/function.php';
?>

<script type="text/javascript">
	function showMessage(){
		$('.modal').modal('show');
	}
</script>


<?php
	if(isset($_POST['calcular'])){
		if(isset($_POST['peso'])&&isset($_POST['altura'])){
			$resultado = $_POST['sexo'] == 'M' ? ImcHomem($_POST['peso'],$_POST['altura']):ImcMulher($_POST['peso'],$_POST['altura']);
			var_dump($resultado);
			echo "<script type='text/javascript'>showMessage();</script>";
		}
		
	}
?>

<form method="POST" class="form-horizontal" action="">
<h4 class="center-h4">Insira seus dados para calcular seu indice de massa corporea</h4>
<br>
	

	<div class="form-group">
		<label class="col-md-3 control-label"><h4>Nome:</h4></label>
		<div class="col-md-6">
			<input class="form-control input-lg col-md-3" name="nome" id="nome" placeholder="Primeiro Nome"></input>	
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-3 control-label"><h4>Sexo:</h4></label>
		<div class="col-md-3">
			<input type="radio" name="sexo" id="sexo" value="F" checked>Feminino</input>	
		</div>
		<div class="col-md-3">
			<input type="radio" name="sexo" id="sexo" value="M">Masculino</input>	
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-3 control-label"><h4>Peso:</h4></label>
		<div class="col-md-6">
			<input class="form-control input-lg col-md-3" name="peso" id="peso" placeholder="Peso em Kg"></input>	
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-3 control-label"><h4>Altura</h4></label>
		<div class="col-md-6">
			<input class="form-control input-lg col-md-3" name="altura" id="altura" placeholder="Altura em Metros"></input>	
		</div>
	</div>

	<div class="form-group">
	<div class="col-md-6 col-md-offset-3">
		<button class="btn btn-primary" value="calcular" name="calcular" type="submit">Calcular</button>
</div>
	</div>
</form>
</div>



