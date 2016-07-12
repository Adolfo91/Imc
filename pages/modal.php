<div class="modal fade" role="dialog" id="imc-modal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close close-modal" data-dimiss="modal" arial-blade="Close" onclick="closeModal()"><span aria-hidden="true">&times</span></button>
				<h4 class="atention-header">Atenção</h4>
			</div>
			<div class="modal-body">
			</div>
			<div class="modal-footer">
				<button class="btn btn-default" data-dimiss="modal" onclick="closeModal()">Fechar</button>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	
	function closeModal(){
		$("#imc-modal").removeClass("in").removeAttr("style");
		$("body").removeClass("modal-open");
		$(".modal-backdrop").remove();

	}

</script>