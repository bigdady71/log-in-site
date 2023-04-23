<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "uni";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = 'select * from faculty';

$result = mysqli_query($conn, $sql);

$at_student = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style3.css">
    <title>Result</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>username</th>
                <th>name</th>
                <th>education</th>
                <th>contact</th>
</tr>
        </thead>
        <tbody>
            <?php foreach ($at_student as $row) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['education']; ?></td>
                <td><?php echo $row['contact']; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
