<?php
include 'function/function.php';
include 'pages/modal.php';
?>
     <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
    	
    	function showModal(atribute, msg, massa){
    		$(".modal-body").html(msg);
    		$(".modal-header").addClass(atribute);
    		$("#imc-modal").modal("toggle");
    		$(".atention-header").text(massa);
    	}

    </script>
<?php
	if(isset($_POST['calcular'])){
		if(isset($_POST['peso'])&&isset($_POST['altura'])){
			$resultado = $_POST['sexo'] == 'M' ? ImcHomem($_POST['nome'],$_POST['sexo'],$_POST['peso'],$_POST['altura']):ImcMulher($_POST['nome'],$_POST['sexo'],$_POST['peso'],$_POST['altura']);
			echo "<script type='text/javascript'>showModal('$resultado[1]','$resultado[0]','$resultado[3]');</script>";
		}
		
	}
?>

<form method="POST" class="form-horizontal" action="">
<h4 class="center-h4">Insira seus dados para calcular seu indice de massa corporal</h4>
<br>
	

	<div class="form-group">
		<label class="col-md-3 control-label"><h4>Nome:</h4></label>
		<div class="col-md-6">
			<input class="form-control input-lg col-md-3" name="nome" id="nome" placeholder="Primeiro Nome" value="<?php echo isset($_POST['nome'])? $_POST['nome']:'' ?>"></input>	
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-3 control-label"><h4>Sexo:</h4></label>
		<div class="col-md-3">
			<input type="radio" name="sexo" id="sexo" value="F" <?php echo isset($_POST['sexo'])? $_POST['sexo'] == "F" ? 'checked':'':'checked'?>></input><label class="label-radio">Feminino</label>	
		</div>
		<div class="col-md-3">
		
			<input type="radio" name="sexo" id="sexo" value="M" <?php echo isset($_POST['sexo'])? $_POST['sexo'] == "M" ? 'checked':'':''?>></input><label class="label-radio">Masculino</label>	
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-3 control-label"><h4>Peso:</h4></label>
		<div class="col-md-6">
			<input type="number" class="form-control input-lg col-md-3" name="peso" required id="peso" placeholder="Peso em Kg" value="<?php echo isset($_POST['peso'])? $_POST['peso']:'' ?>"></input>	
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-3 control-label"><h4>Altura</h4></label>
		<div class="col-md-6">
			<input type="number" class="form-control input-lg col-md-3" step="0.01" required name="altura" id="altura" placeholder="Altura em Metros" value="<?php echo isset($_POST['altura'])? $_POST['altura']:'' ?>"></input>	
		</div>
	</div>

	<div class="form-group">
	<div class="col-md-6 col-md-offset-3">
		<button class="btn btn-primary" value="calcular" name="calcular" type="submit">Calcular</button>
		<a class="btn btn-danger" href="index.php?page=calculo" type="reset">Limpar</a>
</div>
	</div>
</form>




    <script src="js/bootstrap.min.js"></script>
  
