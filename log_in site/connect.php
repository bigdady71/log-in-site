<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "uni";

// Create connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve the input values from the form
$name = $_POST['name'];
$password = $_POST['password'];
$st_id = isset($_POST['st_id']) ? $_POST['st_id'] : '';
// Create the INSERT query
$sql = "INSERT IGNORE INTO st_info (name, password,st_id) VALUES ('$name', '$password','$st_id')";

// Execute the INSERT query
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
}
 else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>
