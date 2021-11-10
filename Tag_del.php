<!DOCTYPE html>
<html lang="en">
<?php include('Private_login.php'); ?>
<?php include('condb.php');?>
<?php include('h.php');?>
<body id="page-top">
<?php include('nav.php');
$Tag_Line_code = $_REQUEST["ID"];
$Mfg_val = $_REQUEST["Mfg"];
?>
    
   <!-- Begin Page Content -->
   <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 font-weight-bold text-success text-uppercase"><i class="fas fa-fw fa-warehouse"></i> MFG.<?php echo $Mfg_val;?></h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-2">
    <div class="row row-cols-2">
    <div class="col"><h6 class="m-3 font-weight-bold text-success"> </h6></div>

  </div>
        
    </div>
    <div class="card-body">

<!--------------------------------------------------------------------------------------------------------------->
<!-- Earnings (Monthly) Card Example -->
<form  name="delete" action="Tag_del_db.php?ID=<?php echo $Tag_Line_code;?>&Mfg=<?php echo $Mfg_val;?>" method="POST" id="delete" class="form-horizontal">
<div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-2 col-form-label ">Tag s/n</label>
    <div class="col-sm-8">
    <input name="Tag_SN" type="text" required class="form-control " id="Tag_SN"   placeholder="Tag s/n">
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


            

  