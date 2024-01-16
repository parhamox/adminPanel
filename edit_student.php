<?php include_once('include/header_start.php') ?>
<?php include_once('include/header_end.php') ?>
<?php include_once('include/navbar.php') ?>
<!-- /.navbar -->
<!-- Main Sidebar Container -->
<?php include_once('include/sidebar.php') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <?php
    $con=mysqli_connect("localhost","root","","school2");
    if(mysqli_connect_errno())
    {
        echo "ارتباط با پایگاه داده برقرار نیست . شماره خطا :".mysqli_connect_errno();
    }





?>

    <!-- /.content -->
    </div>

<?php include_once('include/footer_start.php') ?>
<?php include_once('include/footer_end.php') ?>


