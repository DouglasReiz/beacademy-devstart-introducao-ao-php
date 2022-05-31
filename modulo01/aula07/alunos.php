<?php

$a1 = [
    'nome' => 'Chiquim' ,
    'email' =>'chiquim@gmail.com',
    'telefone' =>'22 9 9999-99999',
    'notas' =>[
        9,
        5.6,
        6.4,
        7
    ]
];

$a2 = [
    'nome' => 'alice' ,
    'email' => 'alice@gmail.com',
    'telefone' => '22 9 9999-0009',
    'notas' => [
        9,
        5.6,
        6.4,
        7
    ]
];

$alunos = [
    $a1,
    $a2,
];

/* var_dump($alunos); */
?>

<table border="2">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($alunos as $cadaaluno): ?>
            <tr>
                <td><? echo $cadaaluno['nome'] ?></td>
                <td><? echo $cadaaluno['email'] ?></td>
                <td><? echo $cadaaluno['telefone'] ?></td>
            </tr>
        
        <?php endforeach; ?>
    </tbody>
</table>