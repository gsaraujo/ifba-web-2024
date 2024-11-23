<?php
    //session_start();
    $_SESSION['logado'] = true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>Login</title>
</head>
<body>
<main>
    <form action="index.php" method="post">
        <h1>Login</h1>
        <div>
            <label for="username">Usuário:</label>
            <input type="text" name="username" id="username">
        </div>
        <div>
            <label for="password">Senha:</label>
            <input type="password" name="password" id="password">
        </div>
        <section>
            <button type="submit">Login</button>
            <a href="index.php">Register</a>
        </section>
    </form>
</main>
</body>
</html>