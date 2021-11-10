<?php
include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
  //สร้างตัวแปรเก็บค่าที่รับมาจากฟอร์ม
  $a_user = $_REQUEST["a_user"];
  $a_pass = $_REQUEST["a_pass"];
  $a_pass2 = $_REQUEST["pass_commit"];
  $a_nameF = $_REQUEST["nameF"];
  $a_nameL = $_REQUEST["nameL"];
  $department = $_REQUEST["department"];


  //เพิ่มเข้าไปในฐานข้อมูล
  if($a_pass != $a_pass2){
		echo "<script type='text/javascript'>";
		echo "alert('password ไม่ตรงกัน กรุณาใส่่ใหม่อีกครั้ง ');";
		echo "window.location = 'login_register_form.php; ";   
		echo "</script>";
	}else{
  $sql = "INSERT INTO tbl_admin(a_user, a_pass, a_nameF,a_nameL,a_department)
       VALUES('$a_user', '$a_pass', '$a_nameF', '$a_nameL', '$department')";

  $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());


  mysqli_close($con);
  }
  
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('Register Succesfuly');";
  echo "window.location = 'admin_table.php'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('Error back to register again');";
  echo "window.location = 'login_register_form.php; "; 
  echo "</script>";
}
?>