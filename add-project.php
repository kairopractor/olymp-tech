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
        <form action="scripts/create.php" method="post" accept-charset="UTF-8">
            <div class="panel-heading">Добавить новый проект</div>
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
            
            <button>Добавить</button>
        </form>
    </div>
    
    
    


</body>
</html>
