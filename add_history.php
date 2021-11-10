<!DOCTYPE html>
<html lang="en">
<?php include('Private_login.php'); ?>
<?php include('condb.php');?>
<?php include('h.php');?>
<body id="page-top">
<?php include('nav.php');
$His_tag = $_REQUEST["ID"];
$His_Line = $_REQUEST["Line"];
$Mfg_val =  $_REQUEST["Mfg"];
?>
    
   <!-- Begin Page Content -->
   <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 font-weight-bold text-success text-uppercase"><i class="fas fa-fw fa-warehouse"></i> MFG.<?php echo $Mfg_val;?></h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-2">
    <div class="row row-cols-2">
    <div class="col"><h6 class="h4 m-3 font-weight-bold text-success">History</h6></div>

  </div>
        
    </div>
    <div class="card-body">

<!--------------------------------------------------------------------------------------------------------------->
<!-- Earnings (Monthly) Card Example -->
<form  name="add" action="add_history_db.php?ID=<?php echo $His_tag;?>&Line=<?php echo $His_Line;?>&Mfg=<?php echo $Mfg_val;?>" method="POST" id="add" class="form-horizontal">
<div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-2 col-form-label ">อาการ</label>
    <div class="col-sm-8">
    <input name="His_symptom" type="text" required class="form-control " id="His_symptom"   placeholder="อาการ">
    </div>
  </div>
<br>
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-2 col-form-label ">สาเหตุ </label>
    <div class="col-sm-8">
    <input name="His_cause" type="text" required class="form-control" id="His_cause"  placeholder="สาเหตุ" >
    </div>
  </div>
<br>

<div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-2 col-form-label ">การแก้ไข </label>
    <div class="col-sm-8">
    <input name="His_correction" type="text" required class="form-control" id="His_correction"  placeholder="การแก้ไข" >
    </div>
  </div>
<br>

<div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-2 col-form-label ">ผู้ดำเนินการ </label>
    <div class="col-sm-8">
    <input name="His_who" type="text" required class="form-control" id="His_who"  placeholder="ผู้ดำเนินการ" >
    </div>
  </div>
<br>

<div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-2 col-form-label ">สถานะ </label>
    <div class="col-sm-8">
              <select id="His_Status" name="His_Status" required class="form-control">
              <option selected>สถานะ</option>
              <option>ดำเนินการด้วยตนเอง</option>
              <option>แจ้ง Service</option>
              <option>รอ Service</option>
              <option>แจ้งช่าง</option>
              <option>รอช่างดำเนินการ</option>
              <option>Service รับของแล้ว</option>
              </select>
    </div>
  </div>
<br>

<div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-2 col-form-label ">ว/ด/ป ดำเนินการแล้วเสร็จ </label>
    <div class="col-sm-8">
    <input type="date" id="His_date_F" name="His_date_F" value="<?php echo date("d/m/Y");?>">
    </div>
  </div>
<br>
  <button type="submit" class="btn btn-success">Add</button>

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


            

  