<?php
  require_once 'Untitled-1.php';

  function display_data($tableName){
    global $con;
    $query = "select * from $tableName";
    $result = mysqli_query($con,$query);
    return $result;
  }

  function getcount($tableName)
  {
    global $con;
    $query = "SELECT * FROM $tableName";
    $result = mysqli_query($con,$query);
    $totalcount = mysqli_num_rows($result);
    return $totalcount;
  }



?>