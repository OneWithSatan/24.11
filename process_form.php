<?php
session_start();
require_once 'bd.php';
$login = $_POST['login'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$name = $_POST['name'];
$pass = $_POST['pass'];

if ((strlen($login) < 6) || (mb_strlen($login) < 6)) {
    $_SESSION['message'] = 'Логин мал';
    header('location: index.php');
    exit;
}
if (!preg_match('/^[a-zA-Zа-яА-ЯёЁ0-9]+$/u', $login)) {
    $_SESSION['message'] = 'Логин должен содержать только буквы и цифры';
    header('location: index.php');
    exit;
}
if (!preg_match('/^(?=.*\d)(?=.*[A-ZА-ЯЁ])\S{8,}$/u', $password)) {
    $_SESSION['message'] = 'Пароль - минимум 8 символов, обязательно наличие цифры и заглавной буквы';
    header('location: index.php');
    exit;
}
if (!preg_match('/^[а-яА-ЯёЁ\s]+$/u', $name)) {
    $_SESSION['message'] = 'ФИО - символы кириллицы и пробелы';
    header('location: index.php');
    exit;
}
if (preg_match('/^(\+7|8)\d{11}$/', $phone)) {
    $_SESSION['message'] = 'Номер телефона - формат: +7(XXX)XXX-XX-XX';
    header('location: index.php');
    exit;
}
if (!preg_match('/^\d{4} \d{6}$/', $pass)) {
    $_SESSION['message'] = 'Серия и номер паспорта - формат: XXXX XXXXXX';
    header('location: index.php');
    exit;
}
mysqli_query ($connect , "INSERT INTO Users (login, password, name, pass, phone) VALUES ('$login', '$password', '$name', '$pass', '$phone')" );
header('location: login.php');
?>