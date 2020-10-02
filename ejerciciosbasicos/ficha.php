<?php
    //
    $nombre = 'Javier';
    $apellido = 'Epifanio López';
    $hobbie = 'Arbitro A. 3º División';
    $img = "img/ficha.png"
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha Personal</title>
</head>
<body>
    <div>
        <?php
            echo "<section>";
            echo "<h1>Ficha Personal</h1>";
            echo "<h3>$nombre $apellido</h3>";
            echo "<p>$hobbie</p>";
            echo "<img src= $img width = 350px></img>"
        ?>
    </div>
</body>
</html>