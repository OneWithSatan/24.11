<?php
session_start();
require_once 'bd.php';
$login = $_POST['login'];
$password = $_POST['password'];
$check = mysqli_query($connect, "SELECT * FROM Users WHERE login = '$login' AND password = '$password' ");
if (mysqli_num_rows($check) > 0) {
    $user = mysqli_fetch_assoc($check);
    $_SESSION ['user'] = [
    'id' => $user['id'],
    'login' => $user['login'],
    'password' => $user['password'],
    'name' => $user['name'],
    'pass' => $user['pass'],
    'phone' => $user['phone'] 
    ];
    header('location: profile.php');
}
else {
    $_SESSION['message'] = 'Неверный логин или пароль';
    header('location: login.php');
    exit;
}
?>