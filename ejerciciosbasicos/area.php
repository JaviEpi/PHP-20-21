<?php
    //Variables
    $radio = 5;
    $area = 2 * pi() * $radio;
    $img = "img/circunferencia.gif"
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área de una circunferencia</title>
</head>
<body>
    <div>
        <?php
            echo "<h1>Área de una circunferencia</h1>";
            echo "<p>Radio: $radio</p>";
            echo "<p>Area: $area</p>";
            echo "<img src= $img width = 350px></img>"
        ?>
    </div>
</body>
</html>