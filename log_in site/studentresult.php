<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "uni";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = 'select * from result';

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
                <th>st_id</th>
                <th>marks</th>
                <th>sub</th>
                <th>semester</th>
</tr>
        </thead>
        <tbody>
            <?php foreach ($at_student as $row) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['st_id']; ?></td>
                <td><?php echo $row['marks']; ?></td>
                <td><?php echo $row['sub']; ?></td>
                <td><?php echo $row['semester']; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
