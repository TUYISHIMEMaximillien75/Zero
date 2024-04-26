<?php
include 'connect.php';

$id = $_GET['id'];
$u_id = 5;

$sql2 = "SELECT * FROM `tasks` WHERE u_id='$u_id' AND id='$id'";
$res2 = mysqli_query($con, $sql2);

$row2 = mysqli_fetch_assoc($res2);
$t_id = $row2['id'];

$task = $row2['task'];
$category = $row2['category'];

$due = $row2['due'];
$desc = $row2['description'];

$decision = $row2['decision'];
$important = $row2['important'];

        // $important

if ($important == 'yes') {
    # code...
    $check = '-fill';
}else{
    $check = '';
}
echo "

<div class='close'><i class='bi bi-x-lg' onclick='closePanel()'></i></div>
<div class='task'>
    <div class='check'></div>
    <div class='task-details'>$task</div>
    <div class='fav'><i class='bi bi-star$check' onclick='modeChange($t_id)'></i></div>
</div>

<div class='more-task-details'>
    <div class='detail'>
        <div class='icon'><i class='bi bi-collection'></i></div>
        <div class='detail-name'>$category</div>
    </div>
    <hr>
    <div class='detail'>
        <div class='icon'><i class='bi bi-calendar-date'></i></div>
        <div class='detail-name'>$due</div>
    </div>
</div>

<div class='task-desc'>
    <p class='descriptio'>$desc</p>
</div>
";
?>