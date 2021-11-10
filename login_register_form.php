<!DOCTYPE html>
<html lang="en">
<?php include('Private_login.php'); ?>
<?php include('h.php');

?>
<body id="page-top">
<?php include('nav.php');?>
    
   <!-- Begin Page Content -->
   <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 font-weight-bold text-success text-uppercase"><i class="fas fa-fw fa-warehouse"></i> Register</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-2">
    <div class="row row-cols-2">
    <div class="col"><h6 class="m-3 font-weight-bold text-success">Register form</h6></div>
    
  </div>
        
    </div>
    <div class="card-body">

<!--------------------------------------------------------------------------------------------------------------->
<!-- Earnings (Monthly) Card Example -->
<form  name="Line" action="login_register_form_db.php" method="POST" id="Line" class="form-horizontal">
<div class="form-group row">
<label for="colFormLabelSm" class="col-sm-1 col-form-label ">Username</label>
    <div class="col-sm-10">
    <input name="a_user" type="text" required class="form-control " id="a_user"   placeholder="username" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2">
    </div>
  </div>
<br>
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-1 col-form-label ">Password</label>
    <div class="col-sm-10">
    <input name="a_pass" type="password" required class="form-control" id="a_pass"  placeholder="password" pattern="^[a-zA-Z0-9]+$" minlength="2">
    </div>
  </div>
  <br>
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-1 col-form-label ">Confirm Password</label>
    <div class="col-sm-10">
    <input name="pass_commit" type="password" required class="form-control" id="pass_commit"  placeholder="Confirm Password" pattern="^[a-zA-Z0-9]+$" minlength="2">
    </div>
  </div>
  <br>
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-1 col-form-label ">Firstname</label>
    <div class="col-sm-10">
    <input name="nameF" type="text" required class="form-control" id="nameF"  placeholder="Firstname" >
    </div>
  </div>
  <br>

  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-1 col-form-label ">Lastname</label>
    <div class="col-sm-10">
    <input name="nameL" type="text" required class="form-control" id="nameL"  placeholder="Lastname" >
    </div>
  </div>
  <br>

  
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-1 col-form-label ">Department</label>
    <div class="col-sm-10">
    <input name="department" type="text" required class="form-control" id="department"  placeholder="Department" >
    </div>
  </div>
  <br>


 <br>



  <button type="submit" class="btn btn-success">Register</button>

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


            

  