<?php
//Creating an array with name 'data' for JSON response
	$data = array();
	require_once("dbIoT.php");

	if(isset($_GET['id']))
	{
		$sql="SELECT * FROM scroll_text where st_id='".$_GET['id']."'";
		$result=$conn->query($sql);

		if($result->num_rows==0)
		{
			$data["A"] = "0";
			echo json_encode($data);
		}
		else
		{
			$row=$result->fetch_assoc();
			$stringLength=strlen($row["st_text"]);
			$digits=strlen($stringLength);
			$data["A"] = $digits;
			$data["B"] = $stringLength;
			$data["C"] = $row["st_text"];
			echo json_encode($data);  // Show JSON response
		}
	}
	else
	{
		$data["A"] = "0";
		echo json_encode($data);
	}
?>