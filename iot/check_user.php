<?php
require_once("dbIoT.php");
session_start();
$username = ''; $userpassword = ''; $error_code = 0; $username_error='';$userpassword_error='';

if(empty($_POST["username"]))
{
	$username_error='Username is required';
	$error_code++;
}
else $username=htmlspecialchars($_POST["username"]);

if(empty($_POST["userpassword"]))
{
	$userpassword_error='Password is required';
	$error_code++;
}
else $userpassword=sha1(htmlspecialchars($_POST["userpassword"]));

$output = array('success'=>"true", 'user_type'=>'1', 'username_error'=>'Found',	'userpassword_error'=>$userpassword);

if($error_code>0)
{
	$output = array('success'=>true, 'username_error'=>$username_error,	'userpassword_error'=>$userpassword_error);
}
else 
{
	$sql = "SELECT * FROM user WHERE user_name ='$username' and user_password='$userpassword'";
  $result = $conn->query($sql);
  if(!$result)$output = array('success'=>"true", 'user_type'=>'1', 'username_error'=>'Error',	'userpassword_error'=>'Error');
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc()) 
		{
			$output=array("success"=>"User Found - ".$row["user_name"]);		
			$user_type = $row["user_type"];
			$staff_id = $row["staff_id"];
      if($staff_id>0)$_SESSION["staff_id"] = $row["staff_id"];
      else die();
			$output = array('success'=>"true", 'user_type'=>$user_type, 'username_error'=>'Found',	'userpassword_error'=>'Matched');
    }
	}
  else $output = array('error'=>"true", 'username_error'=>$username,	'userpassword_error'=>$userpassword);
}
echo json_encode($output);
?>