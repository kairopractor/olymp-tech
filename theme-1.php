<?php

require_once 'config/connect.php';
echo "<link rel='stylesheet' href='styles.css'>";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Список проектов</title>
    <link rel='stylesheet' href='index.css'/>
</head>

<body>

<a href="index.php"><img src="https://nspu.ru/images/logo.png" width="150" /></a>

<h1> База данных ФГБОУ ВО "НГПУ"
    <br />
    "Олимпиада по технологии"
</h1>

<div class="container">
    <table>
        <tr>
            <th>Номер</th>
            <th>Название проекта</th>
            <th>Ссылка на материал</th>
            <th>Направление</th>
        </tr>

        <?php
        $themes = mysqli_query($connect, query: "SELECT * FROM `project` WHERE titli = '3D-моделирование и печать' ORDER BY `project`.`titli` DESC");
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
</div>

</body>
</html>
