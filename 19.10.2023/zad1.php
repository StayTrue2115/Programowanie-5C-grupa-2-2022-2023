<!DOCTYPE html>
<html>
<head>
    <title>Logowanie</title>
</head>
<body>
    <form action="" method="post">
        <label >login</label>
        <input type="text" name="login"  required><br>
        <label for="password">Hasło:</label>
        <input type="password" name="password" id="password" required><br>
        <input type="submit" value="Zaloguj">
    </form>
    <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loowanie";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Błąd połączenia z bazą danych: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["login"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM uzytkownicy WHERE nazwa='$username' AND haslo='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "Logowanie poprawne!";
    } else {
        echo "Błąd logowania. Spróbuj ponownie.";
    }
}
?>
</body>
</html>