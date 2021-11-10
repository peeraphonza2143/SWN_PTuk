<?php
include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
  //สร้างตัวแปรเก็บค่าที่รับมาจากฟอร์ม
  $Tag_Line_code = $_REQUEST["ID"];
  $Tag_SN = $_REQUEST["Tag_SN"];
  $Mfg_val = $_REQUEST["Mfg"];

  $sql = "DELETE FROM tbl_tag WHERE Tag_SN ='$Tag_SN' ";
  $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error()); 

  $sql2 = "DELETE FROM tbl_history WHERE His_tag ='$Tag_SN' ";
  $result2 = mysqli_query($con, $sql2) or die ("Error in query: $sql2 " . mysqli_error()); 
  mysqli_close($con);
  
  if($result){
    echo "<script type='text/javascript'>";
    echo "alert('Delete Succesfuly');";
    echo "window.location = 'Page_Tag.php?ID=$Tag_Line_code&Mfg=$Mfg_val'; ";
    echo "</script>";
    }
    else{
    echo "<script type='text/javascript'>";
    echo "alert('Error back to delete again');";
    echo "</script>";
  }
  ?>
?>