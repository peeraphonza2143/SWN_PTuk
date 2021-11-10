<?php 
session_start();
        if(isset($_POST['a_user'])){
                  include("condb.php");
                  $_Status_admin = 0;
                  $a_user = $_POST['a_user'];
                  $a_pass = $_POST['a_pass'];

                  $sql="SELECT * FROM tbl_admin
                  WHERE  a_user='".$a_user."' 
                  AND  a_pass='".$a_pass."' ";
                  $result = mysqli_query($con,$sql);

          
                  
                  if(mysqli_num_rows($result)==1){
                      $row = mysqli_fetch_array($result);
                      $_Status_admin = 1;
                      $_SESSION["user_id"] = $row["a_id"];
                      $_SESSION["a_name"] = $row["a_user"];
                      $_SESSION["a_nameF"] = $row["a_nameF"];
                      $_SESSION["a_nameL"] = $row["a_nameL"];
                      $_SESSION["status"] = $_Status_admin;
                     
                      if($_SESSION["user_id"]!=''){ 
                        Header("Location: home.php");
                      }
                    }
                else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";
 
                  }}else{

             Header("Location: index.php"); //user & password incorrect back to login again
 
        }
?>