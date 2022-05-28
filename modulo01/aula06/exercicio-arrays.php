<?php

$bandas = [
    ['7mz', 15],
    ['evanescence', 1],
    ['Sorriso maroto', 20],
    ['Imagine Dragons', 18],
    ['AC/DC', 3],
    ['Exaltasamba', 30]
];

/* echo '<table>';
    echo '<caption>Tabela com dados do PHP</caption>';
    echo '<tr>';
        echo '<th>Bandas</th>';
        echo '<th>Músicas</th>';
    echo '</tr>';
    echo '<tr>';
    foreach($bandas as $cadabanda) {
        echo '<td>'. $bandas[$n] [$n] .'</td>';
    }
    echo '</tr>';

echo '</table>'; */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <table>

    <thead>
        <tr>
            <th>Bandas</th>
            <th>Músicas conhecidas</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($bandas as $cadabanda): ?>
            <tr>
                <td><? echo $cadabanda[0] ?></td>
                <td><? echo $cadabanda[1] ?></td>
            </tr>
        
        <?php endforeach; ?>
    </tbody>
    </table>

</body>

</html>