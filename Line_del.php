<!DOCTYPE html>
<html lang="en">
<?php include('Private_login.php'); ?>
<?php include('h.php');
  $Mfg_val = $_REQUEST["ID"];
?>
<body id="page-top">
<?php include('nav.php');?>
    
   <!-- Begin Page Content -->
   <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 font-weight-bold text-success text-uppercase"><i class="fas fa-fw fa-warehouse"></i> MFG.<?php echo $Mfg_val;?></h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-2">
    <div class="row row-cols-2">
    <div class="col"><h6 class="m-3 font-weight-bold text-success"></h6></div>
    
  </div>
        
    </div>
    <div class="card-body">

<!--------------------------------------------------------------------------------------------------------------->
<!-- Earnings (Monthly) Card Example -->
<form  name="Line" action="Line_del_db.php?ID=<?php echo $Mfg_val;?>" method="POST" id="Line" class="form-horizontal">
<div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-2 col-form-label ">Line ID</label>
    <div class="col-sm-8">
    <input name="Line_code" type="text" required class="form-control " id="Line_code"   placeholder="Line">
    </div>
  </div>
<br>

  <button type="submit" class="btn btn-danger">Delete</button>

</form>
     
              
 

            
           
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


            

  