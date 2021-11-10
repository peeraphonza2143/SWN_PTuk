<meta charset="UTF-8">
<?php
include('condb.php');  
$His_ID = $_REQUEST["ID"];
$Tag_SN = $_REQUEST["Tag_SN"];
$Tag_Line = $_REQUEST["Line"];
$Mfg_val = $_REQUEST["Mfg"];
    #-----------------------------------------------------------Get Row
    $sql1 = "SELECT * FROM tbl_history
    WHERE His_ID LIKE '%$His_ID%' ORDER BY His_ID ASC ";
   $result1 = mysqli_query($con, $sql1) or die ("Error in query: $sql1 " . mysqli_error());
   $row_am =  mysqli_fetch_assoc($result1);
   $His_tag = $row_am['His_tag']; 
   $His_Status_befor = $row_am['His_Status_count']; 
   if($His_Status_befor == 1){
   $His_Status_count = -1;
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
    WHERE Line_code LIKE '%$Tag_Line%' ORDER BY Line_ID ASC ";
    $result3=mysqli_query($con,$sql3);
    $row_am3 =  mysqli_fetch_assoc($result3);
    
    $Line_Status_count = $row_am3['Line_Status_count'];
    $Line_Status_count = $Line_Status_count + $His_Status_count;
  
  
    $sql4 = "UPDATE tbl_Line SET  
    Line_Status_count='$Line_Status_count'
    WHERE Line_code='$Tag_Line' ";
    $result4 = mysqli_query($con, $sql4) or die ("Error in query: $sql4 " . mysqli_error());


$sql5 = "DELETE FROM tbl_history WHERE His_ID ='$His_ID' ";
$result5 = mysqli_query($con, $sql5) or die ("Error in query: $sql5 " . mysqli_error()); 

  if($result5){
  echo "<script type='text/javascript'>";
  echo "alert('Delete Succesfuly');";
  echo "window.location = 'Page_repair_history.php?ID=$Tag_SN&Line=$Tag_Line&Mfg=$Mfg_val'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('Error back to delete again');";
  echo "</script>";
}
?>