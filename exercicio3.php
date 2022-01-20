<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
</head>
<body>

<?php    


    $diccionario = array(
        'table' => 'mesa',
        'chair' => 'silla',
        'sofa' => 'sofá',
        'door' => 'puerta',
        'window' => 'ventana',
        'lamp' => 'lámpara',
        'kitchen' => 'cocina',
        'fridge' => 'nevera',
        'dish' => 'plato',
        'fork' => 'tenedor',
    );

    echo "<table border='1'>";

    // Recorremos o array asociativo para imprimir cada fila da
    // táboa;
    
    foreach ( $diccionario as $ingles => $castelan ){
        echo "<tr><td>".$ingles."</td><td>".$castelan."</td></tr>";
    }

    echo "</table>";

?>
    
</body>
</html>