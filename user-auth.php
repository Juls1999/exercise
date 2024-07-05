<?php
require_once('db_config.php');

$username = mysqli_real_escape_string($conn,$_POST['username']);
$password = mysqli_real_escape_string($conn,$_POST['password']);



$query = "SELECT * FROM users WHERE user_name = '$username' AND password = '$password'";
$result = mysqli_query($conn, $query);
$resultCheck = mysqli_num_rows($result);
$login_result = array();  

    if($resultCheck == 1){
       $login_result[] =array("result" => "success");
       $_SESSION['username'] = $username;
    }else{
       $login_result[] =array("result" => "failed");
    }

echo json_encode($login_result);
$conn -> close();
?>