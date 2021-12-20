<?php

$connect = mysqli_connect(hostname: 'localhost', username: 'root', password: '', database: 'olimp');

if (!$connect) {
    die('Error connect to database!');
}
