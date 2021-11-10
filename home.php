<!DOCTYPE html>
<html lang="en">
<?php include('condb.php'); ?>
<?php include('h.php'); ?>
<?php include('Private_login.php'); ?>
<body id="page-top" >
     <?php include('nav.php');
     $Mfg_val = "1";
     $sql = "SELECT * FROM tbl_line
     WHERE Line_mfg LIKE '%$Mfg_val%' ORDER BY Line_mfg ASC ";
     $result = mysqli_query($con, $sql);
     $row_am =  mysqli_fetch_assoc($result);
     $count = mysqli_num_rows($result);

     ?>

     
          <!-- Begin Page Content -->
          <div class="bg">

               <!-- Page Heading -->

               <!-- DataTales Example -->

          </div>

          <!-- /.container-fluid -->

          </div>
          <!-- End of Main Content -->

          <?php include('footer.php'); ?>
</body>

</html>