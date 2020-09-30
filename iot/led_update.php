<?php
	require_once("dbIoT.php");
	if(isset($_POST['ledOn']))$sql="update led set led_status_code='1' where led_id='1'";
	elseif(isset($_POST['ledOff']))$sql="update led set led_status_code='0' where led_id='1'";
	if(isset($_POST['ledOn']) || isset($_POST['ledOff']))
	{
		$result=$conn->query($sql);
		if(!$result)echo $conn->error;
	}
?>
	<h3 align="center">Controlling LED</h3>
	<form action="index.php" method="post">
	<div class="card-group">
		<div class="card bg-secondary text-white">
			<div class="card-body">
				<input type="submit" style="font-size: 50;" class="btn btn-secondary btn-block" name="ledOn" value="Switch On LED"/>
			</div>
		</div>
		<div class="card bg-info text-white">
			<div class="card-body">
			<input type="submit" style="font-size: 50;" class="btn btn-info btn-block" name="ledOff" value="Switch Off LED"/>				
			</div>
		</div>
	</div>
	<input type="hidden" name="led" value="true" />

	</form>