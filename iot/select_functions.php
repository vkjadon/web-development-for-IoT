<?php
function getList($conn, $tableId, $fields, $dataType, $header, $sql, $edit, $delete)
{
  
  // $tableId=Table Auto Increment ID (to be used for editing data and "deleteData")
  // $fields= Array of fields to fetch from the output of the Query 
  // $dataType= Array of data type of the fields, 0 Text 1 Date Format 2 TimeStamp
  // $header= Array of Table Headers
  // $sql=Query to be execute
  // $edit=0 - Edit Button NOT Required; $edit=1 Edit Button Required
  // $delete=0 - Delete Button NOT Required; $delete=1 Delete Button Required

  $columnCount=count($header);
  //echo "In Function  $sql Column Count $columnCount";
  echo '<table  class="list-table-xs">';
  echo '<thead>';
  if($edit=='1')echo '<th><i class="fa fa-edit"></i></th>';
  for($j=0; $j<$columnCount; $j++)echo '<th align="center">'.$header[$j].'</th>';
  if($delete=='1')echo '<th align="right"><i class="fa fa-trash"></i></th>';
  echo '</thead>';
    
  $fieldCount=count($fields);
  $result=$conn->query($sql);
  if(!$result)
  {
    $conn->error;
    die(" The script could not be Loadded! Please report!");
  }
//  else echo "DDD ".$result->num_rows;
  while($rows=$result->fetch_assoc())
  {
    echo '<tr>';
    if($tableId<>'')$id=$rows[$tableId];
    if($edit=='1')echo '<td><a href="#" class="'.$tableId.'E" id="'.$id.'"><i class="fa fa-edit"></i></a></td>';
    if($tableId<>'')echo '<td>'.$id.'</td>';
    for($j=0; $j<$fieldCount; $j++)
    {
      $fieldName=$fields[$j];
      if($dataType[$j]=="0")echo '<td>'.$rows[$fieldName].'</td>';
      elseif($dataType[$j]=="1")echo '<td>'.date("d-M-Y", strtotime($rows[$fieldName])).'</td>';
      elseif($dataType[$j]=="3")
      {
        if($rows[$fieldName]==1)echo '<td><a href="#" class="'.$tableId.'ON"  id="'.$id.'"><img src="images/buttonOn.PNG" width="50"></a></td>';
        else echo '<td><a href="#" class="'.$tableId.'OFF" id="'.$id.'"><img src="images/buttonOff.PNG" width="50"></a> </td>';
      } 
    }
    if($delete=='1')echo '<td align="right"><a href="#" class="'.$tableId.'D" id="'.$id.'"><i class="fa fa-trash"></i> </a></td>';
    echo '</tr>';
  }
  echo '</table>';
}
function addData($conn, $table, $id, $fields, $values, $dup_phrase)
{
  //echo $table;
  //echo $dup_phrase;
  
  $field=$fields[0];
  $value=$values[0];
  
  $rows_count='100';

  $sql_dup="select * from $table where $dup_phrase";
  //echo $sql_dup;
  $result_dup=$conn->query($sql_dup);
  if($result_dup)$rows_count = $result_dup->num_rows;
  else echo "Failed ".$rows_count;
//  echo "Dup Found $rows_count";

  if($rows_count==0)
  {
    $sql_in="insert into $table ($field) values('$value')";
  //  echo $sql_in;
    $result=$conn->query($sql_in);
    if(!$result)echo $conn->error;
    else
    {
      $insert_id=$conn->insert_id;
    //  echo "dsds $insert_id";
      $sql="update $table set $field='$value' where $id='$insert_id'";
      $result=$conn->query($sql);
    }
  }
}
?>