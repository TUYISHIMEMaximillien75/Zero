<?php

include 'connect.php';
$u_id = 5;

$router = $_GET['type'];
if ($router == "main") {
    $sql2 = "SELECT * FROM `tasks` WHERE u_id='$u_id' ORDER BY id DESC";

}elseif ($router == "important") {
$sql2 = "SELECT * FROM `tasks` WHERE u_id='$u_id' AND important='yes' ORDER BY id DESC";

}elseif ($router == "planned") {
    $now = Date('m/d/Y');
$sql2 = "SELECT * FROM `tasks` WHERE u_id='$u_id' AND due !='$now' ORDER BY id DESC";

}elseif ($router == "assignedToMe") {
$sql2 = "SELECT * FROM `tasks` WHERE u_id='$u_id' ORDER BY id DESC";

}elseif ($router == "task") {
$sql2 = "SELECT * FROM `tasks` WHERE u_id='$u_id' ORDER BY id DESC";

}else{
// $sql2 = "SELECT * FROM `tasks` WHERE u_id='$u_id' ORDER BY id DESC";
    
}


$res2 = mysqli_query($con, $sql2);
$rec2 = mysqli_num_rows($res2);

// echo $rec2;

if ($rec2 <= 0) {
    # code...
    echo "
    <div class='placeholder'>
    <img src='assets/img/empty.png' alt='Empty icon'>
    <div class='text'>
        <h3>Welcome to your day</h3>
        <h6>We'll help you manage all tasks you have today</h6>
    </div>
</div>

    ";
}else{

    
    while ($row2 = mysqli_fetch_assoc($res2)) {
        # code...
        $t_id = $row2['id'];
        $task = $row2['task'];
        $category = $row2['category'];
        $due = $row2['due'];
        $desc = $row2['description'];
        $decision = $row2['decision'];
        $important = $row2['important'];
    
        // echo $task;
        if ($decision == 'nyc') {
            # code...
            $color = "black";
        }else{
            $color = "text";
        }

        // $important

        if ($important == 'yes') {
            # code...
            $check = '-fill';
        }else{
            $check = '';
        }

        $table = "
        <div class='task'  id='task_$t_id'>
        <div class='check ' style='background: var(--$color)' onclick='taskComplete($t_id)'></div>
        <div class='task-details' onclick='displayDetails($t_id)'>
            <h3 class='task-name'>$task</h3>
            <h5 class='category'>$category</h5>
        </div>
        <div class='fav'>
            <i class='bi bi-star$check' onclick='modeChange($t_id)'></i>
        </div>
    </div> ";
    
        echo $table;
    }
}
?>

