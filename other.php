<?php
session_start();  
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Інша сторінка</title>
</head>
<body>
    <h1>Ласкаво просимо на іншу сторінку</h1>

    <?php
    
    if (isset($_SESSION['username'])) {
        echo "<p>Привіт, " . htmlspecialchars($_SESSION['username']) . " (через сесію).</p>";
    } elseif (isset($_COOKIE['username'])) {
        echo "<p>Привіт, " . htmlspecialchars($_COOKIE['username']) . " (через кукіс).</p>";
    } else {
        echo "<p>Ім'я користувача не знайдено.</p>";
    }
    ?>

</body>
</html>
