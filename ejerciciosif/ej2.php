<?php
    //Variables
    $mes = 10;
    $anio = 2020;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Días del mes</title>
</head>
<body>
    <div>
        <?php
            echo "<h1>Días del mes $mes del $anio</h1>";
            if ($mes == 1,){
                echo "$num1";
            } else{
                echo "$num2";
            }
        ?>
    </div>
</body>
</html>