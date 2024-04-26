<?php

include 'connect.php';


$sql2 = "SELECT * FROM `tasks` WHERE u_id='$u_id' ORDER BY id DESC";
$res2 = mysqli_query($con,$sql2);


while ($row2 = mysqli_fetch_assoc($res2)) {
    # code...
    $task = $row2['task'];
    $category = $row2['category'];
    $due = $row2['due'];
    $desc = $row2['description'];

    echo $task;
}
?>