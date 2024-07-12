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
    <title>Update Student</title>
</head>
<body>
    <h2>Update Student</h2>
    <form action="update_php.php" method="post">
        <label for="id">ID:</label>
        <input type="text" id="id" name="uid" value="<?php echo $id; ?>" readonly><br>

        <label for="name">Name:</label>
        <input type="text" id="name" name="uname" value="<?php echo $name; ?>"><br>

        <label for="contact">Contact:</label>
        <input type="text" id="contact" name="ucontact" value="<?php echo $contact; ?>"><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="uemail" value="<?php echo $email; ?>"><br>

        <input type="submit" value="Update">
    </form>
</body>
</html>
