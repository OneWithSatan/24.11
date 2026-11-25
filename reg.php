<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Техномарат</title>
    <link rel="stylesheet" href="css/relog.css">
</head>
<body>
    <form action="process_reg.php" method="POST" enctype="multipart/form-data">
    <div class="allmost">
        <h1>РЕГИСТРАЦИЯ</h1>
        <div class="login">
            <label for="login">Введите логин</label>
            <input type="text" id="login" name="login" required>
        </div>
        <div class="password">
            <label for="password">Введите полироль</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="password">
            <label for="password2">Введите полироль вновь</label>
            <input type="password" id="password2" name="password2" required>
        </div>
        <div class="fio">
            <label for="fio">Введите ФИО</label>
            <input type="text" id="fio" name="fio" required>
        </div>
        <div class="img">
            <label for="img">Вставьте фото</label>
            <input type="file" id="img" name="avatar" required>
        </div>
        <div class="phone">
            <label for="phone">Введите телефон</label>
            <input type="tel" id="phone" name="phone" required>
        </div>
        <div class="email">
            <label for="email">Введите почту</label>
            <input type="email" id="email" name="email" required>  
        </div> 
        <button type="submit" class="knopka">Зарегистрироваться</button>
        <a href="log.php" class="bibib">Уже зарестрированы? Войти.</a>
            <?php
            if (isset($_SESSION['message'])) {
                echo '<p> ' . $_SESSION['message'] . ' </p>';
                unset($_SESSION['message']);
            }
            ?>
    </div>
</form>
</body>
</html>