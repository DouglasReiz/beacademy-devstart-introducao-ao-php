<?php

$bandas = [
    'Imagine Dragons',
    'AC/DC',
    'Exaltasamba',
    'Sorriso maroto',
    'Raça negra',
];


foreach ($bandas as $cadaBanda) {
    echo "<li>{$cadaBanda}</li>";
}

$bandas[100] = 'Nirvana';
$bandas[9] = 'Linkin Park';


echo '<ul>';

for($n = 0; $n <= 3; $n++){
    echo '<li>'. $bandas[$n] .'</li>';
}

echo '</ul>';