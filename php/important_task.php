<?php
include 'connect.php';

if (isset($_GET['id'])){
    $id = $_GET['id'];


    $sql4 = "SELECT * FROM `tasks` WHERE id='$id' ORDER BY id DESC";
    $res4 = mysqli_query($con, $sql4);

    $row4 = mysqli_fetch_assoc($res4);
    $important = $row4['important'];

    if ($important == 'no') {
        # code...

        $sql3 = "UPDATE `tasks` SET `important` = 'yes' WHERE `tasks`.`id` = $id";
        $res3 = mysqli_query($con,$sql3);
        if ($res3) {
            # code...
        echo "Task added to important tasks";
        }

    }else{

        $sql3 = "UPDATE `tasks` SET `important` = 'no' WHERE `tasks`.`id` = $id";
        $res3 = mysqli_query($con,$sql3);
        if ($res3) {
            # code...
        echo "Task removed into important tasks";
        }
    }



}
?>