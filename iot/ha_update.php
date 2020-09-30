<div class="row">
	<div class="col-md-6">
	<h3 align="center">Add Home Appliance to Control</h3>
	<form action="ha_update.php" method="post" id="haForm">
	<div class="card-group">
		<div class="card bg-secondary text-white">
			<div class="card-body">
				<input type="text" style="font-size: 30;" class="form-control" name="ha_name" required/>
			</div>
		</div>
		<div class="card bg-info text-white">
			<div class="card-body">
			<input type="submit" style="font-size: 30;" class="btn btn-info btn-block" name="add" value="Add/Update"/>		<input type="hidden" name="action" value="add"/>				
			</div>
		</div>
	</div>
	</form>
	</div>
	<div class="col-md-6">
	<h3 align="center">Added Home Appliances</h3>
	<span id="sectionList"></span>
</div>
	</div>