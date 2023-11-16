<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zad3</title>
</head>
<body>
<?php

$host = "nazwa_hosta";
$username = "nazwa_użytkownika";
$password = "hasło";
$database = "nazwa_bazy_danych";


$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Błąd połączenia z bazą danych: " . $conn->connect_error);
} else {
    echo "Połączenie z bazą danych udane!";
}


$conn->close();
?>
</body>
</html>