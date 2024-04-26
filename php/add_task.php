<?php
include 'connect.php';
    if (isset($_GET['task'])) {
        $task = $_GET['task'];
        $category = $_GET['category'];
        $due = $_GET['due'];
        $desc = $_GET['desc'];
        $u_id = 5;

        echo "Task: $task";
        echo "Category: $category";
        echo "Due: $due";
        echo "Desc: $desc";

        
    $sql = "INSERT INTO `tasks` (`id`, `task`, `category`, `due`, `description`,`u_id`,`decision`,`important`) VALUES (NULL, '$task', '$category', '$due', '$desc', '$u_id','nyc','no')";
    $res = mysqli_query($con, $sql);

    if ($res) {
        # code...
        echo "rwanda";
    }
    }
?>