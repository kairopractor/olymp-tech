<?php

    require_once 'config/connect.php';

    $olymp_id = $_GET['id'];
    $olymp = mysqli_query($connect, query: "SELECT * FROM `olympiads` WHERE `id` = '$olymp_id'");
    $olymp = mysqli_fetch_assoc($olymp);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Olympiad</title>
</head>
<body>
    <h3>Update Olympiad</h3>
    <form action="scripts/update.php" method="post">
        <input type="hidden" name="id" value="<?= $olymp['id'] ?>">
        <p>Year</p>
        <input type="number" name="year" value="<?= $olymp['year'] ?>">
        <p>Level</p>
        <input type="text" name="level" value="<?= $olymp['level'] ?>">
        <p>Direction</p>
        <input type="text" name="direction" value="<?= $olymp['direction'] ?>">
        <p>Theme</p>
        <input type="text" name="theme" value="<?= $olymp['theme'] ?>">
        <p>Participant</p>
        <input type="text" name="participant" value="<?= $olymp['participant'] ?>">
        <p>Mentor</p>
        <input type="text" name="mentor" value="<?= $olymp['mentor'] ?>"> <br> <br>
        <button type="submit">Update</button>
    </form>
</body>
</html>