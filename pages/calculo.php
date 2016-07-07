<script type="text/javascript">
	function showMessage(){
		$('.modal').modal('show');
	}
</script>


<?php
	if(isset($_POST['calcular'])){
		//FAZER CALCULO AQUI
		echo "<script type='text/javascript'>showMessage();</script>";
	}else{
		echo "Não postou";
	}
?>

<form method="POST" class="form-horizontal" action="">
<h4 class="center-h4">Insira seus dados para calcular seu indice de massa corporea</h4>
<br>
	
	<div class="form-group">
		<label class="col-md-3 control-label"><h4>Peso</h4></label>
		<div class="col-md-6">
			<input class="form-control input-lg col-md-3" placeholder="Peso em Kg"></input>	
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-3 control-label"><h4>Altura</h4></label>
		<div class="col-md-6">
			<input class="form-control input-lg col-md-3" placeholder="Altura em Metros"></input>	
		</div>
	</div>

	<div class="form-group">
	<div class="col-md-6 col-md-offset-3">
		<button class="btn btn-primary" value="calcular" name="calcular" type="submit">Calcular</button>
</div>
	</div>
</form>
</div>



