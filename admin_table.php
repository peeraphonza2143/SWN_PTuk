<!DOCTYPE html>
<html lang="en">
<?php include('Private_login.php'); ?>
<?php include('condb.php');?>
<?php include('h.php');?>
<body id="page-top">
<?php include('nav.php');


 $sql = "SELECT * FROM tbl_admin ORDER BY a_id ASC ";
 $result=mysqli_query($con,$sql);
 $row_am =  mysqli_fetch_assoc($result);
 $count = mysqli_num_rows($result);

?>

 
   <!-- Begin Page Content -->
   <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 font-weight-bold text-success text-uppercase"><i class="fas fa-fw fa-user"></i> Admin list</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-2">
    <div class="row row-cols-2">
    <div class="col"><h6 class="h4 m-3 font-weight-bold text-success">Admin list  </h6></div>
    <div class="col">   <form  name="del" action="login_register_form.php" method="POST" id="del" class="form-horizontal">
    <a  align = 'right'><h6 class="m-2 font-weight-bold text-primary"> <button type="submit" class="btn btn-success" >Add</button> </h6></a>
</form>
</div>
  </div>  
    </div>
    <div class="card-body">

<!--------------------------------------------------------------------------------------------------------------->
<div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>username</th>
                                            <th>Firstname</th>
                                            <th>lastname</th>
                                            <th>Department</th>
                                            
                                        </tr>
                                    </thead>

                                    <tbody>
                                    <?php if($count>0){?>
                                    <?php do { ?>
                                        <tr>
                                            <td><?php echo $row_am['a_user']; ?></td>
                                            <td><?php echo $row_am['a_nameF']; ?></td>
                                            <td><?php echo $row_am['a_nameL']; ?></td>
                                            <td><?php echo $row_am['a_department']; ?></td>
                                        
                                        </tr>
                                  <?php } while ($row_am =  mysqli_fetch_assoc($result)); ?>
                                  <?php }?>
                                    </tbody>
                                </table>
                            </div>

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

