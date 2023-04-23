<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "uni";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = 'select * from st_info';

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
                <th>st_id</th>
                <th>name</th>
                <th>email</th>
                <th> birthday</th>
                <th> contact </th>
                <th>gender </th>
                <th> program</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($at_student as $row) { ?>
            <tr>
                <td><?php echo $row['st_id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['bday']; ?></td>
                <td><?php echo $row['contact']; ?></td>
                <td><?php echo $row['gender']; ?></td>
                <td><?php echo $row['program']; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
