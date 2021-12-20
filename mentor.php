<?php

require_once 'config/connect.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mentors</title>
</head>
<style>
    th, td {
        padding: 10px;
    }

    th {
        background: #606060;
        color: white;
    }

    td {
        background: #b5b5b5;
    }
</style>
<body>
<a href="index.php">Main</a>
<table>
    <tr>
        <th>ID</th>
        <th>Mentor</th>
        <th>Institution</th>
        <th>Position</th>
        <th>E-mail</th>
        <th>Phone number</th>
    </tr>

    <?php
    $mentors = mysqli_query($connect, query: "SELECT * FROM `mentors`");
    $mentors = mysqli_fetch_all($mentors);
    foreach ($mentors as $mentor) {
        ?>

        <tr>
            <td><?= $mentor[0] ?></td>
            <td><?= $mentor[1] ?></td>
            <td><?= $mentor[2] ?></td>
            <td><?= $mentor[3] ?></td>
            <td><?= $mentor[4] ?></td>
            <td><?= $mentor[5] ?></td>
            <!-- <td><a href="update.php?id=<?= $mentor[0] ?>">Update</a></td> -->
            <!-- <td><a style="color: crimson;" href="scripts/delete.php?id=<?= $mentor[0] ?>">Delete</a></td> -->
        </tr>

        <?
    }
    ?>
</table>
<!--<h3>Add new mentor</h3>
<form action="scripts/create.php" method="post">
    <p>Year</p>
    <input type="number" name="year">
    <p>Level</p>
    <input type="text" name="level">
    <p>Direction</p>
    <input type="text" name="direction">
    <p>Theme</p>
    <input type="text" name="theme">
    <p>Participant</p>
    <input type="text" name="participant">
    <p>Mentor</p>
    <input type="text" name="mentor"> <br> <br>
    <button type="submit">Add new olympiad</button>
</form>-->


</body>
</html>