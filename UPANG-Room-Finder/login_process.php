<?php
 include 'config.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows> 0) {
        session_start();
        $_SESSION['username'] = $username;
    header("Location: home.php");
       exit();
    } else {
        echo "Invalid username or password";
}
}
?>