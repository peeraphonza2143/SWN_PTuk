<?php
include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
  //สร้างตัวแปรเก็บค่าที่รับมาจากฟอร์ม
  $Line_mfg = $_REQUEST["ID"];
  $Line_code = $_REQUEST["Line_code"];

  $sql = "INSERT INTO tbl_line(Line_mfg, Line_code)
       VALUES('$Line_mfg', '$Line_code')";

  $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
  mysqli_close($con);
  
  
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('Add Line Succesfuly');";
  echo "window.location = 'Line_Mfg.php?ID=$Line_mfg'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('Error');";
  echo "window.location = 'index.php; "; 
  echo "</script>";
}
?>