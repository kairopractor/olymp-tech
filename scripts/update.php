<?php

require_once '../config/connect.php';

$id = $_POST['id'];
$year = $_POST['year'];
$level = $_POST['level'];
$direction = $_POST['direction'];
$theme = $_POST['theme'];
$participant = $_POST['participant'];
$mentor = $_POST['mentor'];

mysqli_query($connect, query: "UPDATE `olympiads` SET `year` = '$year', `level` = '$level', `direction` = '$direction', `theme` = '$theme', `participant` = '$participant', `mentor` = '$mentor' WHERE `olympiads`.`id` = '$id'");

header('Location: /');