<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodaj ucznia</title>
</head>
<body>

<h2>Dodaj ucznia</h2>

<form action="dodaj_ucznia.php" method="post">
    <label for="nazwisko">Nazwisko:</label>
    <input type="text" name="nazwisko" required><br>

    <label for="imie">Imię:</label>
    <input type="text" name="imie" required><br>

    <label for="data_urodzenia">Data urodzenia:</label>
    <input type="date" name="data_urodzenia" required><br>

    <input type="submit" value="Dodaj ucznia">
</form>
<?php
$servername = "localhost"; 
$username = "twoj_login"; 
$password = "twoje_haslo"; 
$dbname = "moja_klasa"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$nazwisko = $_POST['nazwisko'];
$imie = $_POST['imie'];
$data_urodzenia = $_POST['data_urodzenia'];

$sql = "INSERT INTO uczniowie (nazwisko, imie, data_urodzenia) VALUES ('$nazwisko', '$imie', '$data_urodzenia')";

if ($conn->query($sql) === TRUE) {
    echo "Uczeń dodany pomyślnie";
} else {
    echo "Błąd podczas dodawania ucznia: " . $conn->error;
}
$conn->close();
?>
</body>
</html>