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
$username = "twoj_login"; 
$password = "twoje_haslo"; 
$dbname = "moja_klasa"; 


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM uczniowie";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . "<br>";
        echo "Nazwisko: " . $row["nazwisko"] . "<br>";
        echo "Imię: " . $row["imie"] . "<br>";
        echo "Data urodzenia: " . $row["data_urodzenia"] . "<br><br>";
    }
} else {
    echo "Brak danych";
}

$conn->close();
?>
</body>
</html>