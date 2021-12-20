<?php

require_once '../config/connect.php';

$id = $_GET['id'];

mysqli_query($connect, query: "DELETE FROM `olympiads` WHERE `olympiads`.`id` = '$id'");

header('Location: /');