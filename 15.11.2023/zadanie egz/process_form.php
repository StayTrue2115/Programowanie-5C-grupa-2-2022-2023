<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "customer_data";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$birth_year = $_POST['birth_year'];
$gender = $_POST['gender'];
$comments = $_POST['comments'];
$consent = isset($_POST['consent']) ? 1 : 0;

$sql = "INSERT INTO participants (birth_year, gender, comments, consent)
        VALUES ('$birth_year', '$gender', '$comments', '$consent')";

if ($conn->query($sql) === TRUE) {
    echo "Dane zostały zapisane.";
} else {
    echo "Błąd: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</body>
</html>