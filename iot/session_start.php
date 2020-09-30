<?php
session_start();
if(!isset($_SESSION["staff_id"]))
{
  header('location:../index.php');
  
}
else 
{
  $myId=$_SESSION['staff_id'];
  echo "MyID $myId";
  $submit_date=date("Y-m-d", time());
}
?>