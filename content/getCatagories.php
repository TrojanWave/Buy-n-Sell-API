<?php
include_once '../db/dbconn.php';

function getCatagories(){
  $sql_catagories = "SELECT * FROM ad_catagories";
  $result_catagories = $conn->query($sql_catagories);

  if ($result_catagories->num_rows > 0) {
      return $result_catagories;
  }
}

 ?>
