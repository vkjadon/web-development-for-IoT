<?php
require_once("dbIoT.php");
$output='';
require_once("select_functions.php");

if(isset($_POST["action"]))
{
//	$output=array("error"=>true, "action"=>"Fetch");
  if($_POST['action']=='add')
  {
    $text=$_POST['ha_name'];
    $tableId='ha_id';
    $values=array($text);
    $fields=array("ha_name");
    $dup_phrase=" ha_name='$text' and ha_status='0'";
    addData($conn, 'home_appliance', $tableId, $fields, $values, $dup_phrase);
  }
  elseif($_POST["action"]=='haOn')
  {
    echo $_POST["action"];
    $ha_id=$_POST['haId'];
    echo $ha_id;
    $sql="update home_appliance set ha_status_code='0' where ha_id='$ha_id'";
    $result=$conn->query($sql);
    if(!$result)echo "Error";
  }
  if($_POST["action"]=='haOff')
  {
    echo $_POST["action"];
    $ha_id=$_POST['haId'];
    echo $ha_id;
    $sql="update home_appliance set ha_status_code='1' where ha_id='$ha_id'";
    $result=$conn->query($sql);
    if(!$result)echo "Error";
  }

  if($_POST["action"]=='haList')
  {
    $sql="select * from home_appliance where ha_status='0' order by ha_id desc";
    //echo $sql;

    $tableId='ha_id';
    $fields=array("ha_name","ha_status_code");
    $dataType=array("0","3");
    $header=array("ID","Appliance Name", "Status");
    
    // $tableId=Table Auto Increment ID (to be used for editing data and "deleteData")
    // $fields= Array of fields to fetch from the output of the Query 
    // $dataType= Array of data type of the fields, 0 Text 1 Date Format 2 TimeStamp
    // $header= Array of Table Headers
    // $sql=Query to be execute
    // $edit=0 - Edit Button NOT Required; $edit=1 Edit Button Required
    // $delete=0 - Delete Button NOT Required; $delete=1 Delete Button Required

    getList($conn, $tableId, $fields, $dataType, $header, $sql, '1', '1');
  }
}  
?>