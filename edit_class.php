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
    $class_id=$_GET['edit_id'];
    $select_class="select * from class where id='$class_id'";
    $run_class=mysqli_query($con,"SET NAMES SET utf8");
    $run_class=mysqli_query($con,"SET CHARACTER SET utf8");
    $run_class=mysqli_query($con,$select_class);
    $row_class=mysqli_fetch_array($run_class);
    $name_class=$row_class['class_name'];
    $no_class=$row_class['class_no'];
    ?>

    <br>
    <br>
    <caption style="border: none;" >
        <b>کلاس مورد نظرتان را ویرایش نمایید.</b>
    </caption >
    <form method="post" action="" >
        <table  width="650" align="center" style="border: none;" >
            <tr>
                <th>نام کلاس</th>
                <th>شماره کلاس</th>
            </tr>
            <tr style="border: none;">
                <td style="border: none;">
                    <input type="text" name="update_class_name" size="40" placeholder="<?php echo $name_class  ?>" >
                </td >
                <td style="border: none;">
                    <input type="text" name="update_class_no" size="40" placeholder="<?php echo $no_class  ?>" >
                </td >
                <td style="border: none;">
                    <input type="submit" name="update_old_class" value="کلاس ویرایش شود."/>
                </td >
            </tr>
        </table>
    </form>
    <?php
    if(isset($_POST['update_old_class'])){
        $update_class_name=$_POST['update_class_name'];
        $update_class_no=$_POST['update_class_no'];
        $update_brand="update class set class_name=N'$update_class_name' where id='$class_id'";
        $run_update_brand = mysqli_query($con,$update_brand);
        if($run_update_brand)
        {
            echo "<script>alert('کلاس شما به درستی به روز رسانی شد.')</script>";
            echo "<script>window.open('class_list.php','_self')</script>";

        }
    }
    ?>


    <!-- /.content -->
</div>

<?php include_once('include/footer_start.php') ?>
<?php include_once('include/footer_end.php') ?>


