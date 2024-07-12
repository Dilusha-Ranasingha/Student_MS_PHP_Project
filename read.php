<?php
require 'config.php';

$sql ="SELECT id, name, contact, email FROM student1";
$result = $con->query($sql);

if($result->num_rows>0){

    echo "<table border='1'>";
    echo "<th>"."Student ID"."</th>";
    echo "<th>"."Student Name"."</th>";
    echo "<th>"."Student Contact"."</th>";
    echo "<th>"."Student Email"."</th>";
    echo "<th>"."Action"."</th>";
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
                <input type='submit' value='Update student'>
            </form>
            <form action='delete.php' method='get'>
                <input type='hidden' name='id' value='".$row["id"]."'>
                <input type='hidden' name='name' value='".$row["name"]."'>
                <input type='hidden' name='contact' value='".$row["contact"]."'>
                <input type='hidden' name='email' value='".$row["email"]."'>
                <input type='submit' value='Delete student'>
            </form>
        </td>";
        echo "</tr>";
    }

    echo "</table>";
}
else{
    echo "No result";
}

$con->close();
?>

<!--<script>
function updateStudent(id) {
    window.location.href = 'update.php?id=' + id;
}
</script>-->

<!DOCTYPE html>
<html>
<head>
    <title>Manage Student Data</title>
</head>
<body>
    <button onclick="goToTable()">Add student</button>

    <script>
        function goToTable() {
            window.location = 'index.php';
        }
    </script>
</body>
</html>