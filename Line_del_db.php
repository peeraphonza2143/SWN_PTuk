<?php
include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
  //สร้างตัวแปรเก็บค่าที่รับมาจากฟอร์ม
  $Mfg = $_REQUEST["ID"];
  $Line_code = $_REQUEST["Line_code"];

  $sql = "DELETE FROM tbl_line WHERE Line_code ='$Line_code' ";
  $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error()); 

  $sql2 = "DELETE FROM tbl_tag WHERE Tag_Line_code ='$Line_code' ";
  $result2 = mysqli_query($con, $sql2) or die ("Error in query: $sql2 " . mysqli_error());
  
  $sql3 = "DELETE FROM tbl_history WHERE His_Line ='$Line_code' ";
  $result3 = mysqli_query($con, $sql3) or die ("Error in query: $sql3 " . mysqli_error()); 
  mysqli_close($con);
  
  if($result){
    echo "<script type='text/javascript'>";
    echo "alert('Delete Succesfuly');";
    echo "window.location = 'Line_Mfg.php?ID=$Mfg'; ";
    echo "</script>";
    }
    else{
    echo "<script type='text/javascript'>";
    echo "alert('Error back to delete again');";
    echo "</script>";
  }
  ?>
?>