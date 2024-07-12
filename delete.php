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
</head>
<body>
    <h2>Delete Student</h2>
    <form action="delete_php.php" method="post">
        <label for="id">ID:</label>
        <input type="text" id="id" name="did" value="<?php echo $id; ?>" readonly><br>

        <label for="name">Name:</label>
        <input type="text" id="name" name="dname" value="<?php echo $name; ?>" readonly><br>

        <label for="contact">Contact:</label>
        <input type="text" id="contact" name="dcontact" value="<?php echo $contact; ?>" readonly><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="demail" value="<?php echo $email; ?>" readonly><br>

        <input type="submit" value="Delete">
    </form>
</body>
</html>
