<?php

    require_once 'config/connect.php';

   // echo "<link rel='stylesheet' href='styles.css'>";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Результаты олимпиад</title>
    <link rel='stylesheet' href='styles.css'/>
</head>

<body>
    <img src="https://nspu.ru/images/logo.png" width="150" />
    <h1> Результаты олимпиад по технологии </h1>
    <div >
        <div class="sort">
            Сортировать по: <strong>имени</strong> (<span>от А до Я</span>/<span>от Я до А</span>); <strong>цене</strong> (<span>по возрастанию</span>/<span>по убыванию</span>)
        </div>

        <div class="container">
            <table >
            <tr>
                <th>Номер</th>
                <th>Статус</th>
                <th><a href="theme.php">Проект</a></th>
                <th>Руководитель</th>
                <th>Участник</th>
                <th>Балл #1</th>
                <th>Балл #2</th>
                <th>Балл #3</th>
                <th>Итого</th>
                <!-- <th><a href="theme.php">Theme</a></th> -->
            </tr>

            <?php
            $olymps = mysqli_query($connect, query: "SELECT * FROM `result` ORDER BY `result`.`idresult` ASC");
            $projects = mysqli_query($connect, query: "SELECT project.idproject, project.name AS project_name FROM result LEFT JOIN project on result.idproject = project.idproject");
            $managers = mysqli_query($connect, query: "SELECT manager.idmanager, manager.name AS manager_name FROM result LEFT JOIN manager on result.idmanager = manager.idmanager");
            $children = mysqli_query($connect, query: "SELECT schoolchild.idschoolchild, schoolchild.name AS child_name FROM result LEFT JOIN schoolchild on result.id_schoolchild = schoolchild.idschoolchild");
            $olymps = mysqli_fetch_all($olymps);
            $managers = mysqli_fetch_all($managers);
            $children = mysqli_fetch_all($children);
            $projects = mysqli_fetch_all($projects);

            $project_list = array();
            for ($i = 0; $i < count($projects); $i++) {
                $project_list[$projects[$i][0]] = $projects[$i][1];
            }

            $manager_list = array();
            
            for ($i = 0; $i < count($managers); $i++) {
                $manager_list[$managers[$i][0]] = $managers[$i][1];

            }

            $child_list = array();
            for ($i = 0; $i < count($children); $i++) {
                
                $child_list[$children[$i][0]] = $children[$i][1];

            }
            
            
            for ($i = 0; $i < count($olymps); $i++) {
                $olymp = $olymps[$i];
                ?>
                <tr >
                    <td id="number"><?= $i + 1 ?></td>
                    <td><?= $olymp[1] ?></td>
                    <td><?= $project_list[$olymp[2]] ?><sup><?= $olymp[2] ?></sup></td>
                    <td><?= $manager_list[$olymp[3]] ?><sup><?= $olymp[3] ?></sup></td>
                    <td><?= $child_list[$olymp[4]] ?><sup><?= $olymp[4] ?></sup></td>
                
                    <td id="number"><?= $olymp[5] ?></td>
                    <td id="number"><?= $olymp[6] ?></td>
                    <td id="number"><?= $olymp[7] ?></td>
                    <td id="number"><?= $olymp[8] ?></td>
                    <!-- <td><a href="update.php?id=<?= $olymp[0] ?>">Update</a></td>
                    <td><a style="color: crimson;" href="scripts/delete.php?id=<?= $olymp[0] ?>">Delete</a></td>-->
                </tr>

                <?
            }
            
            
            ?>
        </table>
        </div>
    </div>
    
    
    


</body>
</html>
