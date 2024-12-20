<?php
session_start();  
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $_SESSION['username'] = $_POST['username'];
    
    
    setcookie('username', $_POST['username'], time() + 365 * 24 * 60 * 60, '/');
}
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Введіть ім'я користувача</title>
</head>
<body>
    <h1>Введіть ваше ім'я</h1>
    <form method="post">
        <label for="username">Ім'я користувача:</label>
        <input type="text" id="username" name="username" required>
        <button type="submit">Надіслати</button>
    </form>

    <?php
    // Вивести ім'я користувача, якщо воно є в сесії або кукісах
    if (isset($_SESSION['username'])) {
        echo "<p>Привіт, " . htmlspecialchars($_SESSION['username']) . " (через сесію).</p>";
    } elseif (isset($_COOKIE['username'])) {
        echo "<p>Привіт, " . htmlspecialchars($_COOKIE['username']) . " (через кукіс).</p>";
    }
    ?>
</body>
</html>
