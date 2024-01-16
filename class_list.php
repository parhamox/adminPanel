<?php include_once('include/header_start.php') ?>
<?php include_once('include/header_end.php') ?>
<?php include_once('include/navbar.php') ?>
    <!-- /.navbar -->
    <!-- Main Sidebar Container -->
<?php include_once('include/sidebar.php') ?>
    <!-- Content Wrapper. Contains page content -->

<?php include_once('function/function.php') ?>


    <div class="content-wrapper">


        <div class="card">
            <div class="card-header">
                <h3 class="card-title">لیست کلاس ها</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>شماره کلاس</th>
                        <th>نام کلاس</th>
                        <th>عملیات ویرایش</th>
                        <th>عملیات حذف</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php getClass(); ?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>id</th>
                        <th>شماره کلاس</th>
                        <th>نام کلاس</th>
                        <th>عملیات ویرایش</th>
                        <th>عملیات حذف</th>

                    </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
        </div>


    </div>

<?php include_once('include/footer_start.php') ?>
<?php include_once('include/footer_end.php') ?>