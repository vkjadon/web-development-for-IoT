<?php
//Creating an array with name 'data' for JSON response
	$data = array();
	require_once("dbIoT.php");
	
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		$sql="SELECT * FROM home_appliance where ha_id='$id'";
		$result=$conn->query($sql);
		if($result->num_rows==0)
		{
			$data["success"] = 0;
			$data["message"] = "No data on led found.";
			echo json_encode($data);
		}
		else
		{
			$row=$result->fetch_assoc();
			$data["ID"] = $row["ha_id"];
			$data["STATUS"] = $row["ha_status_code"];
			echo json_encode($data);  // Show JSON response
		}
	}
	else
	{
		$data["success"] = 0;
		$data["message"] = $conn->error;
		echo json_encode($data);
	}
?>