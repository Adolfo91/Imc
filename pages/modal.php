<div class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class=<?php echo isset($resultado) ? 'modal-header '.$resultado[1]:'modal-header'?>>
				<button type="button" class="close" data-dimiss="modal" arial-blade="Close"><span aria-hidden="true"></span></button>
				<h4>Resultado</h4>
			</div>
			<div class="modal-body">
				<?php 
					$resultado[2];
				?>
			</div>
			<div class="modal-footer">
				<button class="btn btn-default" data-dimiss="modal">Fechar</button>
			</div>
		</div>
	</div>
</div>