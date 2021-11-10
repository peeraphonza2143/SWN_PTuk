<?php
include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
  //สร้างตัวแปรเก็บค่าที่รับมาจากฟอร์ม
  $His_tag = $_REQUEST["ID"];
  $His_Line = $_REQUEST["Line"];
  $His_symptom = $_REQUEST["His_symptom"];
  $His_cause = $_REQUEST["His_cause"];
  $His_correction = $_REQUEST["His_correction"];
  $His_who = $_REQUEST["His_who"];
  $His_date_F = $_REQUEST["His_date_F"];
  $His_date_S = date("Y-m-d");
  $Mfg_val =  $_REQUEST["Mfg"];
  $His_Status = $_REQUEST["His_Status"];

  if($His_Status !='Service รับของแล้ว'){
    $His_Status_count = 1;
  } 
  else{
    $His_Status_count = 0;
  }
  #-----------------------------------------------------------Tag
  $sql = "SELECT * FROM tbl_tag
  WHERE Tag_SN LIKE '%$His_tag%' ORDER BY Tag_ID ASC ";
  $result2=mysqli_query($con,$sql);
  $row_am =  mysqli_fetch_assoc($result2);
  
  $Tag_Status_count = $row_am['Tag_Status_count'];
  $Tag_Status_count = $Tag_Status_count + $His_Status_count;


  $sql2 = "UPDATE tbl_tag SET  
  Tag_Status_count='$Tag_Status_count'
  WHERE Tag_SN='$His_tag' ";
  $result1 = mysqli_query($con, $sql2) or die ("Error in query: $sql2 " . mysqli_error());
#---------------------------------------------------------------Line

  $sql3 = "SELECT * FROM tbl_Line
  WHERE Line_code LIKE '%$His_Line%' ORDER BY Line_ID ASC ";
  $result3=mysqli_query($con,$sql3);
  $row_am3 =  mysqli_fetch_assoc($result3);
  
  $Line_Status_count = $row_am3['Line_Status_count'];
  $Line_Status_count = $Line_Status_count + $His_Status_count;


  $sql4 = "UPDATE tbl_Line SET  
  Line_Status_count='$Line_Status_count'
  WHERE Line_code='$His_Line' ";
  $result4 = mysqli_query($con, $sql4) or die ("Error in query: $sql4 " . mysqli_error());

#----------------------------------------------------------------His

  $sql1 = "INSERT INTO tbl_history(His_tag, His_cause,His_symptom,His_correction,His_who,His_date_S,His_date_F,His_Line,His_Status,His_Status_count)
       VALUES('$His_tag', '$His_cause', '$His_symptom', '$His_correction', '$His_who', '$His_date_S', '$His_date_F','$His_Line','$His_Status','$His_Status_count')";

  $result = mysqli_query($con, $sql1) or die ("Error in query: $sql1 " . mysqli_error());
  mysqli_close($con);

  
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('Add Line Succesfuly');";
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