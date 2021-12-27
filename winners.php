<?php
    //include 'scripts/functions.php';
    require_once 'config/connect.php';

    
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--<script src="jquery-3.6.0.min.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <title>Результаты олимпиад</title>
    <link rel='stylesheet' href='index.css'/>
</head>

<body>
    <a href="index.php"><img src="https://nspu.ru/images/logo.png" width="150" /></a>
    <h1> Результаты олимпиад по технологии </h1>
    <div >
        <div id="main"></div>
        <div id="fon"></div>
        <div id="load"></div>
        <span><img class="load" src="images/loading1.gif"></span>
        <!--<div class="sort">
            Сортировать по: <strong>Количеству баллов</strong> (<span id="namea">по убыванию</span>/<span id="named">по возрастанию</span>); <strong>цене</strong> (<span id="pricea">по возрастанию</span>/<span id="priced">по убыванию</span>)*/
        </div>-->

        <div class="container">
            <table id="resultat">
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
            if ($_GET['sort_id'] ?? null) {
        $id = strip_tags($_GET['sort_id']);

        //$goods = get_goods($connect, $id);

        $sql = "SELECT * FROM result ";
        $projects = mysqli_query($connect, query: "SELECT project.idproject, project.name AS project_name FROM result LEFT JOIN project on result.idproject = project.idproject");
        $managers = mysqli_query($connect, query: "SELECT manager.idmanager, manager.name AS manager_name FROM result LEFT JOIN manager on result.idmanager = manager.idmanager");
        $children = mysqli_query($connect, query: "SELECT schoolchild.idschoolchild, schoolchild.name AS child_name FROM result LEFT JOIN schoolchild on result.id_schoolchild = schoolchild.idschoolchild");
        

        if ($id) {
            if ($id == 'namea') {
                $sql .= 'ORDER BY `result`.`ball` DESC';
            }
            else if ($id == 'named') {
                $sql .= 'ORDER BY `result`.`ball` ASC';
            }
        }

        $result = mysqli_query($connect, $sql);
        echo(mysqli_num_rows($result));
        for ($i=0; $i < mysqli_num_rows($result); $i++) { 
            $goods[] = mysqli_fetch_array($result);

            //return $goods;
        }



        

        $projects = mysqli_fetch_all($projects);
        $managers = mysqli_fetch_all($managers);
        $children = mysqli_fetch_all($children);

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

        $managers = mysqli_query($connect, query: "SELECT manager.idmanager, manager.name AS manager_name FROM result LEFT JOIN manager on result.idmanager = manager.idmanager");
            $children = mysqli_query($connect, query: "SELECT schoolchild.idschoolchild, schoolchild.name AS child_name FROM result LEFT JOIN schoolchild on result.id_schoolchild = schoolchild.idschoolchild");
            
            

        //echo "$goods ";
        ?><br/>
        <?
       

        for ($i = 0; $i < count($goods); $i++) {
                $olymp = $goods[$i];
                ?>
                <tr >
                    <td id="number"><?= $i + 1 ?></td>
                    <td><?= $olymp[1] ?></td>
                    <td><?= $project_list[$olymp[2]] ?></td>
                    <td><?= $manager_list[$olymp[3]] ?></td>
                    <td><?= $child_list[$olymp[4]] ?></td>
                
                    <td id="number"><?= $olymp[5] ?></td>
                    <td id="number"><?= $olymp[6] ?></td>
                    <td id="number"><?= $olymp[7] ?></td>
                    <td id="number"><?= $olymp[8] ?></td>
                    <!-- <td><a href="update.php?id=<?= $olymp[0] ?>">Update</a></td>
                    <td><a style="color: crimson;" href="scripts/delete.php?id=<?= $olymp[0] ?>">Delete</a></td>-->
                </tr>
                <?
            }
    }
    else {
        //$goods = get_goods($connect);
    //}

   // echo "<link rel='stylesheet' href='styles.css'>";
            ?>


            <?php
            
            $olymps = mysqli_query($connect, query: "SELECT * FROM `result` WHERE name = 'Призер' OR name = 'Победитель'  ORDER BY `result`.`ball` DESC");
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
                    <td><?= $project_list[$olymp[2]] ?></td>
                    <td><?= $manager_list[$olymp[3]] ?></td>
                    <td><?= $child_list[$olymp[4]] ?></td>
                
                    <td id="number"><?= $olymp[5] ?></td>
                    <td id="number"><?= $olymp[6] ?></td>
                    <td id="number"><?= $olymp[7] ?></td>
                    <td id="number"><?= $olymp[8] ?></td>
                    <!-- <td><a href="update.php?id=<?= $olymp[0] ?>">Update</a></td>
                    <td><a style="color: crimson;" href="scripts/delete.php?id=<?= $olymp[0] ?>">Delete</a></td>-->
                </tr>

                <?
            }
            }
            
            ?>
        </table>
        </div>
    </div>
    
    
    


</body>
</html>
