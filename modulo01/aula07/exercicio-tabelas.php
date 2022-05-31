<?php



$p1= [
    'nome' => 'Notebook',
    'preco' => 'R$2900.00',
    'imagem' => "<img width='200px' src='https://m.media-amazon.com/images/I/51BtRE4IMcL._AC_SY450_.jpg'>"
];

$p2= [
    'nome' => 'Fone de ouvido',
    'preco' => 'R$200.00',
    'imagem' => "<img width='200px' src='https://http2.mlstatic.com/D_NQ_NP_858109-MLA40944407720_022020-O.jpg'>"
];

$p3 = [
    'nome' => 'Playstation 4',
    'preco' => '1500.00',
    'imagem' => "<img width= '200px' src='https://files.tecnoblog.net/wp-content/uploads/2022/01/ps4-edited.jpeg'>"
];

$p4 = [
    'nome' => 'Playstation 5',
    'preco' => '1500.00',
    'imagem' => "<img width= '200px' src='https://i.promobit.com.br/268/456342844416003668966101124919.png'>"
];

$produtos = [
    $p1,
    $p2,
    $p3,
    $p4
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .table{
            background-color: gray;
        }
    </style>

</head>
<body>
    <caption><h1>Tabela de produtos</h1></caption>

    <table name="t-box" id="tabela" >
        <thead name="t-head">
            <tr>
                <th><h2> Nome</h2></th>
                <th><h2> Valor</h2></th>
                <th><h2> Imagem</h2></th>
            </tr>
        </thead>


        <tbody name="t-body">
        <?php foreach($produtos as $cadaproduto): ?>
            <tr>
                <td><? echo $cadaproduto['nome'] ?></td>
                <td><? echo $cadaproduto['preco'] ?></td>
                <td><? echo $cadaproduto['imagem'] ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>