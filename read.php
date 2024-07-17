<!DOCTYPE html>
<html>
<head>
  <title>Manage Student Data</title>
  <link rel="stylesheet" href="./CSS/readcss.css">
</head>

<body>
<h1 style="text-align: center; margin-top: 5em;">Student Management System</h1>


  <table class="zigzag">
    <thead>
      <tr>
        <th class="header">Student ID</th>
        <th class="header">Student Name</th>
        <th class="header">Student Contact</th>
        <th class="header">Student Email</th>
        <th class="header">Actions</th>
      </tr>
    </thead>


    <tbody>
    
 




<?php
require 'config.php';

$sql ="SELECT id, name, contact, email FROM student1";
$result = $con->query($sql);

if($result->num_rows>0){

    while($row = $result->fetch_assoc())
    {
        echo "<tr>";
        echo "<td>".$row["id"]."</td>"."<td>".$row["name"]."</td>"."<td>".$row["contact"]."</td>"."<td>".$row["email"]."</td>";
        echo "<td>
            <form action='update.php' method='get'>
                <input type='hidden' name='id' value='".$row["id"]."'>
                <input type='hidden' name='name' value='".$row["name"]."'>
                <input type='hidden' name='contact' value='".$row["contact"]."'>
                <input type='hidden' name='email' value='".$row["email"]."'>
                <input type='submit' value='edit' style='background-color: blue; color: white; border: none;'>
            </form>
            <form action='delete.php' method='get'>
                <input type='hidden' name='id' value='".$row["id"]."'>
                <input type='hidden' name='name' value='".$row["name"]."'>
                <input type='hidden' name='contact' value='".$row["contact"]."'>
                <input type='hidden' name='email' value='".$row["email"]."'>
                <input type='submit' value='delete' style='background-color: red; color: white; border: none;'>
            </form>
        </td>";
        echo "</tr>";
    }
}
else{
    echo "No result";
}

$con->close();
?>





    </tbody>
</table>

<div style="text-align: center;">
    <button onclick="goToTable()" style="display: block; margin: 10px auto; border: none; border-radius: 3px; padding: 7px;">Add student</button>
</div>
    <script>
        function goToTable() {
            window.location = 'index.php';
        }
    </script>

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