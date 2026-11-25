<?php
session_start();
require_once 'bd.php';
$login = $_POST['login'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$fio = $_POST['fio'];
$phone = $_POST['phone'];
$email = $_POST['email'];

if (!($password === $password2)) {
    $_SESSION['message'] = 'пароли не совпадают';
    header('location: reg.php');
    exit;

}

else {
    $path = 'uploads/' . time() . $_FILES['avatar']['name'];
    if (!move_uploaded_file($_FILES['avatar']['tmp_name'], $path)) {
        $_SESSION['message'] = 'Файл не подгрузился';
        header('location: reg.php');
        exit;
    }
    mysqli_query ($connect , "INSERT INTO User (login, password, FIO, avatar, phone, email) VALUES ('$login', '$password', '$fio', '$path', '$phone', '$email')" );
    header('location: log.php');
}


?>