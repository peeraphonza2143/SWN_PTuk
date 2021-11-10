<!DOCTYPE html>
<html lang="en">
<?php include('Private_login.php'); ?>
<?php include('condb.php');?>
<?php include('h.php');?>
<body id="page-top">
<?php include('nav.php');
  $Tag_Line_code = $_REQUEST["ID"];
  $Mfg_val =  $_REQUEST["Mfg"];
  $sql = "SELECT * FROM tbl_tag
  WHERE Tag_Line_code LIKE '%$Tag_Line_code%' ORDER BY Tag_ID ASC ";
  $result=mysqli_query($con,$sql);
  $row_am =  mysqli_fetch_assoc($result);
  $count = mysqli_num_rows($result);
?>
<style>
.aline_item{
  right : 0px;
}
 </style> 
    
   <!-- Begin Page Content -->
   <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 font-weight-bold text-success text-uppercase"><i class="fas fa-fw fa-warehouse"></i> MFG.<?php echo $Mfg_val;?></h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-2">
    <div class="row row-cols-2">
    <div class="col"><h6 class="h4 m-3 font-weight-bold text-success">Monitor  </h6></div>
    <div class="col">
      <a href="add_Tag.php?ID=<?php echo $Tag_Line_code;?>&Mfg=<?php echo $Mfg_val;?>" align = 'right'><h6 class="btn-selector-success"> <button type="button" class="btn btn-success" >Add</button> </h6></a>
      <a href="Tag_del.php?ID=<?php echo $Tag_Line_code;?>&Mfg=<?php echo $Mfg_val;?>" align = 'right'><h6 class="btn-selector-delete"> <button type="button" class="btn btn-danger" >Delete</button> </h6></a>
      </div>
  </div>
        
    </div>
    <div class="card-body">

<!--------------------------------------------------------------------------------------------------------------->
<!-- Earnings (Monthly) Card Example -->
<?php if($count > 0){?>
<?php do { ?>
  
          <a href="Page_repair_history.php?ID=<?php echo $row_am['Tag_SN'];?>&Line=<?php echo $Tag_Line_code;?>&Mfg=<?php echo $Mfg_val;?>">
              <div class="card <?= $row_am['Tag_Status_count'] == '1' ? 'bg-danger' : '' ?> border-left-<?= $row_am['Tag_Status_count'] == '1' ? 'danger' : 'success' ?> shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="h2 font-weight-bold text-<?= $row_am['Tag_Status_count'] == '1' ? 'light' : 'success' ?> text-uppercase mb-1">S/N : <?php echo $row_am['Tag_SN']; ?></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-<?= $row_am['Tag_Status_count'] == '1' ? '100' : '800' ?> ">Express Service code : <?php echo $row_am['Tag_ESC']; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-desktop fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
              <br>
</a>
<?php } while ($row_am =  mysqli_fetch_assoc($result)); ?>
<?php }?>
<!--------------------------------------------------------------------------------------------------------------->


    </div>
</div>
</div>

<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php include('footer.php');?>
</body>
</html>



            

  