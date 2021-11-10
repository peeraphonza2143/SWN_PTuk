 <!-- Page Wrapper -->
 <div id="wrapper">

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home.php">
        <div class="side-logo1 ">
            <img src="img/small.png" alt="logo" class="logo">
        </div>
        <div class="side-logo2 ">
            <img src="img/logo.png" alt="logo" class="logo">
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-2">
<?php $Mfg1 = "1";
$Mfg2 = "2";
$Mfg3 = "3";
$Mfg4 = "4";
$Mfg5 = "5";
$Mfg6 = "6";
?>
    <!-- Heading -->
    <div class="sidebar-heading">factory</div>

    <!-- Nav Item - warehouse mfg1-6 KMITL -->
    <li class="nav-item">
        <a class="nav-link" href="Line_Mfg.php?ID=<?php echo $Mfg1;?>">
            <i class="fas fa-fw fa-warehouse"></i>
            <span>MFG.1</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="Line_Mfg.php?ID=<?php echo $Mfg2;?>">
            <i class="fas fa-fw fa-warehouse"></i>
            <span>MFG.2</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="Line_Mfg.php?ID=<?php echo $Mfg3;?>">
            <i class="fas fa-fw fa-warehouse"></i>
            <span>MFG.3</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="Line_Mfg.php?ID=<?php echo $Mfg4;?>">
            <i class="fas fa-fw fa-warehouse"></i>
            <span>MFG.4</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="Line_Mfg.php?ID=<?php echo $Mfg5;?>">
            <i class="fas fa-fw fa-warehouse"></i>
            <span>MFG.5</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="Line_Mfg.php?ID=<?php echo $Mfg6;?>">
            <i class="fas fa-fw fa-warehouse"></i>
            <span>MFG.6</span></a>
    </li>

  <!-- Divider -->
  
  <hr class="sidebar-divider">
  <div class="sidebar-heading">Admin</div>
<li class="nav-item">
    <a class="nav-link" href="admin_table.php">
        <i class="fas fa-user"></i>
        <span>Admin List</span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="login_setting_form.php">
        <i class="fas fa-sliders-h"></i>
        <span>Setting</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<li class="nav-item">
    <a class=" bg-danger nav-link" href="logout.php">
        <i class="fas fa-sign-out-alt"></i>
        <span>Logout</span></a>
</li>
<!-- Divider -->
<hr class="sidebar-divider">
<!-- Divider -->
<hr class="sidebar-divider">

<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <form class="form-inline">
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>
            </form>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block"></div>

<!-- Nav Item - User Information -->
<li class="nav-item dropdown no-arrow">
    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $a_nameF;?> <?php echo $a_nameL;?></span>
        <img class="img-profile rounded-circle" src="img/small.png">
    </a>

</li>
            </ul>
        </nav>
        <!-- End of Topbar -->