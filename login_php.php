<?php
require 'config.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin1 WHERE email='$email' AND password='$password'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        header("Location:read.php");
    } else {
            echo "<script>alert('Username or password incorrect');</script>";
            echo "<script>window.location.href = 'login.php';</script>";
    }

    $con->close();
}

?>