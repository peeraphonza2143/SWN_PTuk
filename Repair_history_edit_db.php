<?php
include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
  //สร้างตัวแปรเก็บค่าที่รับมาจากฟอร์ม
  $His_ID = $_REQUEST["ID"];
  $His_Line = $_REQUEST["Line"];
  $His_symptom = $_REQUEST["His_symptom"];
  $His_cause = $_REQUEST["His_cause"];
  $His_correction = $_REQUEST["His_correction"];
  $His_who = $_REQUEST["His_who"];
  $His_date_F = $_REQUEST["His_date_F"];
  $Mfg_val = $_REQUEST["Mfg"];

  $sql1 = "SELECT * FROM tbl_history
  WHERE His_ID LIKE '%$His_ID%' ORDER BY His_ID ASC ";
 $result1 = mysqli_query($con, $sql1) or die ("Error in query: $sql1 " . mysqli_error());
 $row_am =  mysqli_fetch_assoc($result1);
 $His_tag = $row_am['His_tag']; 


  $sql = "UPDATE tbl_history SET  
      His_cause='$His_cause', 
      His_symptom='$His_symptom', 
      His_correction='$His_correction',
      His_who='$His_who',
      His_date_F='$His_date_F'
      WHERE His_ID='$His_ID' ";
  
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
  mysqli_close($con);

  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('Edit Succesfuly');";
  echo "window.location = 'Page_repair_history.php?ID=$His_tag&Line=$His_Line&Mfg=$Mfg_val'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('Error');";
  echo "window.location = 'index.php; "; 
  echo "</script>";
}
?>