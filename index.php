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
    <img src="https://nspu.ru/images/logo.png" width="150" />
    <h1> Результаты олимпиад по технологии </h1>
    
    <div class="panel panel-primary">
        <div class="panel-heading">Просмотр таблиц
        </div>
        <div class="panel-body">
            <div class="btn-group" style="display:block">
                <input name="newThread" type="button" value="Вывести победителей и призеров" onclick="window.location.replace('winners.php')"/>
                <input name="newThread" type="button" value="Вывести все проекты" onclick="window.location.replace('theme.php')"/>
                <select name="forma" ONCHANGE="location = this.options[this.selectedIndex].value;">
                    <option value="">Выбрать</option>
                    <option value="theme-1.php">3D-моделирование и печать</option>
                    <option value="theme-2.php">Ручная деревообработка</option>
                    <option value="theme-3.php">Обработка швейного изделия и моделирование</option>
                    <option value="theme-4.php">Механическая деревообработка</option>
                    <option value="theme-5.php">Ручная металлообработка</option>
                    <option value="theme-6.php">Робототехника</option>

                </select>
               
                
            </div>
        </div>
    </div>
    
    
    


</body>
</html>
