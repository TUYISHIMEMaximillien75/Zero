<?php
include 'connect.php';

if (isset($_GET['id'])){
    $id = $_GET['id'];



    $sql4 = "SELECT * FROM `tasks` WHERE id='$id' ORDER BY id DESC";
    $res4 = mysqli_query($con, $sql4);

    $row4 = mysqli_fetch_assoc($res4);
    $decision = $row4['decision'];

    if ($decision == 'nyc') {
        # code...

        $sql3 = "UPDATE `tasks` SET `decision` = 'complete' WHERE `tasks`.`id` = $id";
        $res3 = mysqli_query($con,$sql3);
        if ($res3) {
            # code...
        echo $id;
        }

    }else{

        $sql3 = "UPDATE `tasks` SET `decision` = 'nyc' WHERE `tasks`.`id` = $id";
        $res3 = mysqli_query($con,$sql3);
        if ($res3) {
            # code...
        echo $id;
        }
    }



}
?>