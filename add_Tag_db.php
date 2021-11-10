<?php
include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
  //สร้างตัวแปรเก็บค่าที่รับมาจากฟอร์ม
  $Tag_line_code = $_REQUEST["ID"];
  $Tag_SN = $_REQUEST["Tag_SN"];
  $Tag_ESC = $_REQUEST["Tag_ESC"];
  $Mfg_val = $_REQUEST["Mfg"];


  $sql = "INSERT INTO tbl_tag(Tag_line_code, Tag_SN,Tag_ESC)
       VALUES('$Tag_line_code', '$Tag_SN','$Tag_ESC')";

  $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
  mysqli_close($con);
  
  
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('Add Tag Succesfuly');";
  echo "window.location = 'Page_Tag.php?ID=$Tag_line_code&Mfg=$Mfg_val'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('Error');";
  echo "window.location = 'index.php; "; 
  echo "</script>";
}
?>