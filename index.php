<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>ПрокатВещей</title>
</head>
<body>
<main>
    <h1 class="fw-bold fs-2xl font-monospace">Регистрация<br>на портале "ПрокатВещей"</h1>
    <form method="POST" action="process_form.php">
        <div class="inp">
        <label for="login" class="form-label mb-2">Логин</label>
        <input class="form-control" type="text" name="login" id="login" placeholder="Login">
        </div>
        <div class="inp">
        <label for="password" class="form-label mb-2">Пароль</label>
        <input class="form-control" type="password" name="password" id="password" placeholder="******">
        </div>
        <div class="inp">
        <label for="phone" class="form-label mb-2">Телефон</label>
        <input class="form-control" type="phone" name="phone" id="phone" placeholder="+7(XXX)XXX-XX-XX">
        </div>
        <div class="inp">
        <label for="name" class="form-label mb-2">ФИО</label>
        <input class="form-control" type="text" name="name" id="name" placeholder="Иванов Иван Иванович">
        </div>
        <div class="inp">
        <label for="pass" class="form-label mb-2">Серия и номер паспорта</label>
        <input class="form-control" type="text" name="pass" id="pass" placeholder="XXXX XXXXXX">
        </div>
        <button class="theme-primary btn-solid btn-styled">Зарегестрироваться</button>
        <a class="log-link" href="login.php">Есть аккаунт?</a>
        <?php
            if (isset($_SESSION['message'])) {
                echo '<p> ' . $_SESSION['message'] . ' </p>';
                unset($_SESSION['message']);
            }
        ?>
    </form>
</main>
</body>
</html>