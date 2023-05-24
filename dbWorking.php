<?php
$con = mysqli_connect("localhost", "root", "", "DB");
mysqli_set_charset($con, "utf8");

if ($con == false) {
    echo ("Ошибка подключения: " . mysqli_connect_error());
}
else {
    echo ("Соединение установлено");
    // выполнение запросов
}