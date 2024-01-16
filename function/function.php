<?php

$con = mysqli_connect("localhost", "root", "", "school2");
if (mysqli_connect_errno()) {
    echo "ارتباط با پایگاه داده برقرار نیست . شماره خطا :" . mysqli_connect_errno();
}
//getting categories
function getPerson()
{
    global $con;
    $get_person = "select * from person";
    //for persion languge
    $run_person = @mysqli_query($con, "SET NAMES utf8");
    $run_person = @mysqli_query($con, "SET CHARACTER SET utf8");
    $run_person = @mysqli_query($con, $get_person);
    while ($row_person = @mysqli_fetch_array($run_person)) {
        $person_id = $row_person['id'];
        $person_name = $row_person['name'];
        $person_pader = $row_person['pader'];
        $person_code_meli = $row_person['code_meli'];
        $person_age = $row_person['age'];
        $person_roll = $row_person['roll'];
        $person_class_id = $row_person['class_id'];
        $person_dars_id = $row_person['dars_id'];


        echo "<tr>";
        echo " <td>$person_id</td>";
        echo " <td>$person_name</td>";
        echo " <td>$person_pader</td>";
        echo " <td>$person_code_meli</td>";
        echo " <td>$person_age</td>";
        echo " <td>$person_roll</td>";
        echo " <td>$person_class_id</td>";
        echo " <td>$person_dars_id</td>";
        echo "</tr>";

        echo " <td>        <a href='edit_class.php?edit_id=$person_id'>ویرایش</a>
</td>";
        echo " <td>        <a href='delete_class.php?delete_id=$person_id'>حذف</a>
</td>";
    }
}
function getClass()
{
    global $con;
    $get_class = "select * from class";
    //for persion languge
    $run_class = @mysqli_query($con, "SET NAMES utf8");
    $run_class = @mysqli_query($con, "SET CHARACTER SET utf8");
    $run_class = @mysqli_query($con, $get_class);
    while ($row_class = @mysqli_fetch_array($run_class)) {
        $class_id = $row_class['id'];
        $class_no = $row_class['class_no'];
        $class_name = $row_class['class_name'];
        echo "<tr>";
        echo " <td>$class_id</td>";
        echo " <td>$class_no</td>";
        echo " <td>$class_name</td>";

        echo " <td>        <a href='edit_class.php?edit_id=$class_id'>ویرایش</a>
</td>";
        echo " <td>        <a href='delete_class.php?delete_id=$class_id'>حذف</a>
</td>";




        echo "</tr>";
    }
}
