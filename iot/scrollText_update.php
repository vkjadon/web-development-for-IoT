<head>
  <title>Class Connect LMS </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/table.css"> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<?php
	require_once("dbIoT.php");
	require_once("select_functions.php");
	if(isset($_POST['add']))
	{
		$text=$_POST['text'];		
		$values=array($text);
		$fields=array("st_text");
		$dup_phrase=" st_text='$text' and st_status='0'";
		addData($conn, 'scroll_text', 'st_id', $fields, $values, $dup_phrase);
	}
?>
<div class="jumbotron"><h1>ClassConnect - IoT Application </h1></div>
<div class="container">
	<div class="row">
	<div class="col-md-6">
	<h3 align="center">Add ID to Display</h3>
	<form action="scrollText_update.php" method="post">
	<div class="card-group">
		<div class="card bg-secondary text-white">
			<div class="card-body">
				<input type="number" style="font-size: 30;" class="form-control" name="text" required/>
			</div>
		</div>
		<div class="card bg-info text-white">
			<div class="card-body">
			<input type="submit" style="font-size: 30;" class="btn btn-info btn-block" name="add" value="Add/Update"/>				
			</div>
		</div>
	</div>
	</form>
	</div>
	<div class="col-md-6">
	<h3 align="center">Added ID to Display</h3>
<?php
	$sql="select * from scroll_text where st_status='0' order by st_id desc";
	$result=$conn->query($sql);
	$tableId='st_id';
	$fields=array("st_text","st_status");
	$dataType=array("0","0");
	$header=array("ID","Scroll UID/Text", "Status");
  // $tableId=Table Auto Increment ID (to be used for editing data and "deleteData")
  // $fields= Array of fields to fetch from the output of the Query 
  // $dataType= Array of data type of the fields, 0 Text 1 Date Format 2 TimeStamp
  // $header= Array of Table Headers
  // $sql=Query to be execute
  // $edit=0 - Edit Button NOT Required; $edit=1 Edit Button Required
	// $delete=0 - Delete Button NOT Required; $delete=1 Delete Button Required
	getList($conn, $tableId, $fields, $dataType, $header, $sql, '1', '1')
?>
	</div>
	</div>
</div>
