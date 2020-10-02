<?php
    //Variables
    $num1 = 10;
    $num2 = 7;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma dos variables</title>
</head>
<body>
    <div>
        <?php
            echo "<h1>Suma dos variables</h1>";
            echo "<p>Número 1: $num1</p>";
            echo "<p>Número 2: $num2</p>";
            echo "$num1 + " ."$num2 = ".($num1 + $num2);
            echo "<p>$num1 -" ." $num2 = ".($num1 - $num2);
            echo "<p>$num1 *" ." $num2 = ".($num1 * $num2);
            echo "<p>$num1 /" ." $num2 = ".($num1 / $num2);
            echo "<p>$num1 %" ." $num2 = ".($num1 % $num2);
        ?>
    </div>
</body>
</html>