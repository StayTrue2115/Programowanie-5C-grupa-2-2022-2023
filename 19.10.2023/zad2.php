<!DOCTYPE html>
<html>
<head>
    <title>Zmiana kolorów</title>
</head>
<body>
    <form action="" method="post">
        <label for="bg_color">Kolor tła (hex):</label>
        <input type="text" name="bg_color" id="bg_color" required><br>
        <label for="text_color">Kolor tekstu (hex):</label>
        <input type="text" name="text_color" id="text_color" required><br>
        <input type="submit" value="Zmień kolory">
    </form>
     
     <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bg_color = $_POST["bg_color"];
    $text_color = $_POST["text_color"];

    if (preg_match('/^#[0-9A-Fa-f]{6}$/', $bg_color) && preg_match('/^#[0-9A-Fa-f]{6}$/', $text_color)) {
        echo "<p style='height: 50%; width: 50%; margin: 0 auto; margin-top: 50px; border: 2px dashed red; background-color: $bg_color; color: $text_color;'>Twoje imię i nazwisko</p>";
    } else {
        echo "Błąd. Wprowadź poprawne kolory w formie szesnastkowej liczby 6 cyfrowej.";
    }
}
?>
</body>
</html>