<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve the username and password from the login form
    $name = $_POST['name'];
    $password = $_POST['password'];

    $host = "localhost";
    $db_username = "root";
    $db_password = "";
    $database = "uni";
    
    $pdo = new PDO("mysql:host=$host;dbname=$database", $db_username, $db_password);
    $stmt = $pdo->prepare('SELECT * FROM st_info WHERE name = ? AND password = ?');
    $stmt->execute([$name, $password]);

    $user = $stmt->fetch();
    if ($user) {
        $_SESSION['loggedin'] = true;
        header('Location: admin.html');
        exit;
    } else {
        echo 'Invalid username or password';
    }
}
?>
