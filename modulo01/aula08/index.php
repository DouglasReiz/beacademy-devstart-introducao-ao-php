<?php

$url = $_SERVER['REQUEST_URI'];

if($url === '/'){
    echo '<h1> Página inicial</h1>';
} elseif($url === '/login'){
    echo "<h1> Pagina login</h1>";
} elseif($url === '/cadastro'){
    echo "<h1> Pagina cadastro</h1>";
} else{
    echo "<h1> Pagina não encontrada</h1>";
}