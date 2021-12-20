<?php

require_once '../config/connect.php';

$name = $_POST['name'];
$link = $_POST['link'];
$category = $_POST['category'];

mysqli_query($connect, query: "INSERT INTO `project` (`idproject`, `name`, `materials`, `titli`) VALUES (NULL, '$name', '$link', '$category')");

header('Location: /theme.php');






