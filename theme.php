<?php

require_once 'config/connect.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Themes</title>
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
    h1 {
        text-align: center;
    }
    img {
        margin: 0 auto;
        display: block;
    }
    form {
        display: grid;
        gap: 10px;
        max-width: 400px;
        margin: 0 auto;
        padding-bottom: 40px;
    }
    label {
        display: contents;
    }
</style>
<body>
<a href="index.php"><img src="https://nspu.ru/images/logo.png" width="150" /></a>

    <h1> База данных ФГБОУ ВО "НГПУ"
        <br />
        "Олимпиада по технологии"
    </h1>
<table>
    <tr>
        <th>Номер</th>
        <th>Название проекта</th>
        <th>Ссылка на материал</th>
        <th>Направление</th>
    </tr>

    <?php
    $themes = mysqli_query($connect, query: "SELECT * FROM `project`");
    $themes = mysqli_fetch_all($themes);
    for ($i = 0; $i < count($themes); $i++) {
        $theme = $themes[$i];
        ?>

        <tr>
            <td><?= $i + 1 ?></td>
            <td><?= $theme[1] ?></td>
            <td><?= $theme[2] ?></td>
            <td><?= $theme[3] ?></td>
            <!-- <td><?= $theme[6] ?></td>
            <td><?= $theme[7] ?></td>
            <td><?= $theme[8] ?></td> -->
            <!-- <td><a href="update.php?id=<?= $theme[0] ?>">Update</a></td> -->
            <!-- <td><a style="color: crimson;" href="scripts/delete.php?id=<?= $theme[0] ?>">Delete</a></td> -->
        </tr>

        <?
    }
    ?>
</table>

<form action="scripts/create.php" method="post">
    <h3>Add new mentor</h3>
    <label>
        <span>Название проекта</span>
        <input type="" name="name">
    </label>

    <label>
        <span>Ссылка на материал</span>
        <input type="" name="link">
    </label>

    <label>
        <span>Направление</span>
        <input type="" name="category">
    </label>
    
    <button>Add new olympiad</button>
</form>

</body>
</html>