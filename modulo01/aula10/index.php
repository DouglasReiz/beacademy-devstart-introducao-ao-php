<?php
$notasCursoA = [
    10,
    9,
    9.5,
    7,
];

$notasCursoB = [
    8,
    9.4,
    5,
    6,
];

function mediaDeNotas(array $notas):float
{
    $total = 0;
    $quantidade = 4;

    foreach ($notas as $cadanota){
        $total += $cadanota;
    }

    return $total / $quantidade;
}

echo mediaDeNotas($notasCursoA);
echo mediaDeNotas($notasCursoB);