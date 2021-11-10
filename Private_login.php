<?php session_start();
    $user_id = $_SESSION['user_id'];
    $a_name = $_SESSION['a_name'];
    $a_nameF = $_SESSION['a_nameF'];
    $a_nameL = $_SESSION['a_nameL'];
    $status = $_SESSION["status"];
  
    if($status!= 1){
        Header("Location: index.php");  
      } 
      if($user_id==''){
        Header("Location: index.php");  
      } 
?>