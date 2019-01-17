<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Add New</h4>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<form method="POST" action="add.php">
						<div class="row form-group">
							<div class="col-sm-2">
								<label class="control-label" style="position:relative; top:7px;">ID:</label>
							</div>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="id">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-sm-2">
								<label class="control-label" style="position:relative; top:7px;">Montant:</label>
							</div>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="montant">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-sm-2">
								<label class="control-label" style="position:relative; top:7px;">Personne:</label>
							</div>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="personne">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-sm-2">
								<label class="control-label" style="position:relative; top:7px;">Description:</label>
							</div>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="description">
							</div>
						</div>
						<div class="row form-group">
					
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>
					Cancel</button>
				<button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
					</form>
			</div>

		</div>
	</div>
</div>