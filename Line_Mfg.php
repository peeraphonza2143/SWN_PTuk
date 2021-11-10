<!DOCTYPE html>
<html lang="en">
<?php include('Private_login.php'); ?>
<?php include('condb.php'); ?>
<?php include('h.php'); ?>

  <body id="page-top" >
    <?php include('nav.php');
    $Mfg_val = $_REQUEST["ID"];
    $sql = "SELECT * FROM tbl_line
     WHERE Line_mfg LIKE '%$Mfg_val%' ORDER BY Line_mfg ASC ";
    $result = mysqli_query($con, $sql);
    $row_am =  mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);


    ?>


    <!-- Begin Page Content -->
    <div class="container-fluid ">

      <!-- Page Heading -->
      <h1 class="h3 mb-2 font-weight-bold text-success text-uppercase "><i class="fas fa-fw fa-warehouse"></i> MFG.<?php echo $Mfg_val; ?></h1>

      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header">
          <div class="row row-cols-2">
            <div class="col">
              <h6 class="h4 m-3 font-weight-bold text-success">Line </h6>
            </div>
            <div class="col">
              <a href='add_line.php?ID=<?php echo $Mfg_val; ?>'>
                <h6 class="btn-selector-success">
                  <button class="btn btn-success">Add</button>
                </h6>
              </a>
              <a href="Line_del.php?ID=<?php echo $Mfg_val; ?>">
                <h6 class="btn-selector-delete"> <button type="button" class="btn btn-danger">Delete</button>
                </h6>
              </a>
            </div>
          </div>

        </div>
        <div class="card-body">

          <!--------------------------------------------------------------------------------------------------------------->
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
            <?php if ($count > 0) { ?>
              <?php do { ?>
                <a href="Page_Tag.php?ID=<?php echo $row_am['Line_code']; ?>&Mfg=<?php echo $Mfg_val; ?>">
                  <div class="col">
                    <!-- Earnings (Monthly) Card Example -->
                    <div class="card <?= $row_am['Line_Status_count'] == '1' ? 'bg-danger' : '' ?> border-left-<?= $row_am['Line_Status_count'] == '1' ? 'danger' : 'success' ?> shadow h-100 py-2">
                      <div class="card-body">
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <div class="h2 mb-0 font-weight-bold text-gray-<?= $row_am['Line_Status_count'] == '1' ? '100' : '800' ?>"><?php echo $row_am['Line_code']; ?></div>
                          </div>
                          <div class="col-auto">
                            <i class="fas fa-cogs fa-2x text-gray-300"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div><br>
                </a>
                <br>
                <br>
              <?php } while ($row_am =  mysqli_fetch_assoc($result)); ?>
            <?php } ?>
          </div>

          <!--------------------------------------------------------------------------------------------------------------->


        </div>
      </div>
    </div>

    <!-- /.container-fluid -->
    </body>
</div>


<?php include('footer.php'); ?>



</html>