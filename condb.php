<?php
$con= mysqli_connect("localhost","root","","swn_project2") or die("Error: " . mysqli_error($con));
mysqli_query($con, "SET NAMES 'utf8' ");
date_default_timezone_set('Asia/Bangkok');
?>