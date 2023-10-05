<!DOCTYPE html>
<html>
<head>
    <title>Tabliczka mnożenia</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>
<body>
    <h2>Tabliczka mnożenia</h2>

    <!-- Tabliczka mnożenia - pętla for -->
    <h3>Pętla for</h3>
    <table>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 10; $j++) {
                $result = $i * $j;
                echo "<td>$i x $j = $result</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>

    <!-- Tabliczka mnożenia - pętla while -->
    <h3>Pętla while</h3>
    <table>
        <?php
        $i = 1;
        while ($i <= 10) {
            echo "<tr>";
            $j = 1;
            while ($j <= 10) {
                $result = $i * $j;
                echo "<td>$i x $j = $result</td>";
                $j++;
            }
            echo "</tr>";
            $i++;
        }
        ?>
    </table>

    <!-- Tabliczka mnożenia - pętla do...while -->
    <h3>Pętla do...while</h3>
    <table>
        <?php
        $i = 1;
        do {
            echo "<tr>";
            $j = 1;
            do {
                $result = $i * $j;
                echo "<td>$i x $j = $result</td>";
                $j++;
            } while ($j <= 10);
            echo "</tr>";
            $i++;
        } while ($i <= 10);
        ?>
    </table>
</body>
</html>
