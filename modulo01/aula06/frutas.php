<?php

$frutas =[
    'Laranja',
    'Banana',
    'Abacaxi'
];

// adicionando nova fruta no array
$frutas[] = 'maçã';

$frutas[10] = 'melancia';

$frutas[7] = 'Morango';

$frutas[] = 'tangerina';

$frutas[] = 'Uva';

var_dump($frutas);
?>

<ul>
    <li><?php echo $frutas[0]; ?></li>
    <li><?php echo $frutas[1]; ?></li>
    <li><?php echo $frutas[2]; ?></li>
    <li><?php echo $frutas[3]; ?></li>
    <li><?php echo $frutas[7]; ?></li>
    <li><?php echo $frutas[10]; ?></li>
    <li><?php echo $frutas[11]; ?></li>
    <li><?php echo $frutas[12]; ?></li>
</ul>