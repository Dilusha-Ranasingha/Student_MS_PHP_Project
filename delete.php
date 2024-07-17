<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];
    $name = $_GET['name'];
    $contact = $_GET['contact'];
    $email = $_GET['email'];
} else {
    echo "No data to update";
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete Student</title>
    <link rel="stylesheet" href="./CSS/deletecss.css">
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form action="delete_php.php" method="post">
        <h3>Delete Student</h3>

        <label for="id">ID:</label>
        <input type="text" id="id" name="did" value="<?php echo $id; ?>" readonly>

        <label for="name">Name:</label>
        <input type="text" id="name" name="dname" value="<?php echo $name; ?>" readonly>

        <label for="contact">Contact:</label>
        <input type="text" id="contact" name="dcontact" value="<?php echo $contact; ?>" readonly>

        <label for="email">Email:</label>
        <input type="email" id="email" name="demail" value="<?php echo $email; ?>" readonly>

        <button>delete</button>
    </form>

    <!--navigation bar-->
    <div class="navbar" style="background-color: #333; padding: 10px; position: fixed; top: 0; width: 100%; margin-top: 0px;">
            <a href="home.php" style="color: white; text-decoration: none; margin-right: 10%; margin-left: 10%">Home</a>
            <a href="signup.php" style="color: white; text-decoration: none; margin-right: 10%; margin-left: 10%">Add Admin</a>
            <a href="login.php" style="color: white; text-decoration: none; margin-right: 10%; margin-left: 10%">Manage Student</a>
            <a href="setting.php" style="color: white; text-decoration: none; margin-right: 10%; margin-left: 10%">Setting</a>
    </div>

    <!--footer section-->
    <div class="footer" style="background-color: #333; color: white; padding: 10px; text-align: center; position: fixed; bottom: 0; width: 100%;">
        This is the student management system 2024
    </div>
</body>
</html>
