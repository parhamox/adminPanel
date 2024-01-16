<?php include_once('include/header_start.php') ?>
<?php include_once('include/header_end.php') ?>
<?php include_once('include/navbar.php') ?>
<!-- /.navbar -->
<!-- Main Sidebar Container -->
<?php include_once('include/sidebar.php') ?>
<!-- Content Wrapper. Contains page content -->

<?php include_once('function/function.php') ?>


<div class="content-wrapper">

    <div class="container">
        <form method="post" action="" class="was-validated">
            <div class="form-group">
                <label for="uname">شماره کلاس:</label>
                <input type="text" class="w-25 form-control"  placeholder="شماره کلاس را وارد کنید" name="class_no"
                       required>
            </div>
            <div class="form-group">
                <label for="pwd">نام کلاس:</label>
                <input type="text" class="w-25 form-control" placeholder="نام کلاس را وارد کنید" name="class_name"
                       required>
            </div>
            <button name="add_class" type="submit" class="btn btn-primary">ذخیره</button>
        </form>
    </div>
    <?php
    $con=mysqli_connect("localhost","root","","school2");
    if(mysqli_connect_errno())
    {
        echo "ارتباط با پایگاه داده برقرار نیست . شماره خطا :".mysqli_connect_errno();
    }
    if (isset($_POST['add_class'])) {
        $class_no = $_POST['class_no'];
        $class_name = $_POST['class_name'];
        $inert_class = "insert into class (`class_no`,`class_name`) values (N'$class_no',N'$class_name')";
        $run_insert_class = mysqli_query($con, "SET NAMES SET utf8");
        $run_insert_class = mysqli_query($con, "SET CHARACKTER SET utf8");
        $run_insert_class = mysqli_query($con, $insert_class);
        if ($run_insert_class) {
            echo "<script>alert('کلاس $class_name به کلاس های موجود اضافه شد.')</script>";
        }
    }
    ?>


</div>

<?php include_once('include/footer_start.php') ?>
<?php include_once('include/footer_end.php') ?>


