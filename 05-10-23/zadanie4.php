<!DOCTYPE html>
<html>
<head>
    <title>Sprawdź, czy liczba jest liczbą pierwszą</title>
</head>
<body>
    <form method="post" action="">
        <label for="number">Podaj liczbę:</label>
        <input type="number" name="number" id="number" required>
        <br>
        <input type="submit" value="Sprawdź">
    </form>

    <?php
    function isPrime($n) {
        if ($n <= 1) {
            return false;
        }
        if ($n <= 3) {
            return true;
        }
        if ($n % 2 == 0 || $n % 3 == 0) {
            return false;
        }
        $i = 5;
        while ($i * $i <= $n) {
            if ($n % $i == 0 || $n % ($i + 2) == 0) {
                return false;
            }
            $i += 6;
        }
        return true;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = intval($_POST["number"]);
        if (isPrime($number)) {
            echo "$number jest liczbą pierwszą.";
        } else {
            echo "$number nie jest liczbą pierwszą.";
        }
    }
    ?>
</body>
</html>
