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
    if(isset($_GET['delete_id'])){
        $delete_id_class=$_GET['delete_id'];
        $delete_class="delete from class where id='$delete_id_class' ";
        $run_delete_class=mysqli_query($con,$delete_class);
        if($run_delete_class)
        {
            echo "<script>alert('این کلاس با موفقیت از میان کلاس های شما حذف شد.')</script>";
            echo "<script>window.open('class_list.php','_self')</script>";

        }
    }
    ?>

    <!-- /.content -->
</div>

<?php include_once('include/footer_start.php') ?>
<?php include_once('include/footer_end.php') ?>


