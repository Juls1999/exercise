<?php
  require_once 'db_config.php';
  $query  = "SELECT * FROM users";
  $result = mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($result)) {
    $users[] = $row;
  }
  
?>