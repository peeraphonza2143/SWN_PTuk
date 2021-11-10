<!DOCTYPE html>
<html lang="en">
<?php include('Private_login.php'); ?>
<?php include('condb.php');?>
<?php include('h.php');?>
<body id="page-top">
<?php include('nav.php');
 $Tag_SN = $_REQUEST["ID"];
 $His_Line = $_REQUEST["Line"];
 $Mfg_val = $_REQUEST["Mfg"];
 $number=0;
 $sql = "SELECT * FROM tbl_history
 WHERE His_tag LIKE '%$Tag_SN%' ORDER BY His_date_S ASC ";
 $result=mysqli_query($con,$sql);
 $row_am =  mysqli_fetch_assoc($result);
 $count = mysqli_num_rows($result);

?>

 
   <!-- Begin Page Content -->
   <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 font-weight-bold text-success text-uppercase"><i class="fas fa-fw fa-warehouse"></i> MFG.<?php echo $Mfg_val;?></h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-2">
    <div class="row row-cols-2">
    <div class="col"><h6 class="h4 m-3 font-weight-bold text-success">DataTables  </h6></div>
    <div class="col">   <form  name="del" action="add_history.php?ID=<?php echo $Tag_SN;?>&Line=<?php echo $His_Line;?>&Mfg=<?php echo $Mfg_val;?>" method="POST" id="del" class="form-horizontal">
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
                                            <th>ครั้งที่</th>
                                            <th>ป/ด/ว</th>
                                            <th>อาการ</th>
                                            <th>สาเหตุ</th>
                                            <th>การแก้ไข</th>
                                            <th>ผู้ดำเนินการ</th>
                                            <th>ป/ด/ว ดำเนินการแล้วเสร็จ</th>
                                            <th>สถานะ</th>
                                            <th>แก้ไข</th>
                                            <th>ลบ</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    <?php if($count>0){?>
                                    <?php do { $number = $number + 1;?> 
                                        <tr>
                                            <td><?php echo $number; ?></td>
                                            <td><?php echo $row_am['His_date_S']; ?></td>
                                            <td><?php echo $row_am['His_symptom']; ?></td>
                                            <td><?php echo $row_am['His_cause']; ?></td>
                                            <td><?php echo $row_am['His_correction']; ?></td>
                                            <td><?php echo $row_am['His_who']; ?></td>
                                            <td><?php echo $row_am['His_date_F']; ?></td>
                                            <td>
                                            <a href="Repair_history_status.php?act=edit&ID=<?php echo $row_am['His_ID']; ?>&Line=<?php echo $His_Line;?>&Mfg=<?php echo $Mfg_val;?>" class="btn btn-<?= $row_am['His_Status_count'] == '1' ? 'danger' : 'success' ?> btn-sm"><?php echo $row_am['His_Status']; ?></a> 
                                            </td>
                                            <td><a href="Repair_history_edit.php?act=edit&ID=<?php echo $row_am['His_ID']; ?>&Line=<?php echo $His_Line;?>&Mfg=<?php echo $Mfg_val;?>" class="btn btn-warning btn-sm">Edit</a> </td>

                                            <form  name="del" action="Repair_history_del.php?ID=<?php echo $row_am['His_ID']; ?>&Line=<?php echo $His_Line;?>&Mfg=<?php echo $Mfg_val;?>" method="POST" id="del" class="form-horizontal">
                                            <input type="hidden" name="Tag_SN" value="<?php echo $Tag_SN; ?>">  
                                            <td><button type="submit" class='btn btn-danger btn-sm' onclick="return confirm('Confirm deletion')">Delete</button> </td>
                                            </form>
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

