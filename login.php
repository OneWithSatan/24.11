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
    <h1 class="fw-bold fs-2xl font-monospace">Регистрация<br>на портале "Конференции.РФ"</h1>
    <form method="POST" action="process_log.php">
        <label for="login" class="form-label mb-2">Логин</label>
        <input class="form-control" type="text" name="login" id="login" placeholder="Login">
        <label for="password" class="form-label mb-2">Пароль</label>
        <input class="form-control" type="password" name="password" id="password" placeholder="******">
        <button class="theme-primary btn-solid btn-styled">Войти</button><br>
        <a class="log-link" href="index.php">Нет аккаунта?</a>
    </form>
</main>
</body>
</html>