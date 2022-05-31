<?php

$url = $_SERVER['REQUEST_URI'];



if($url === '/'){

    include 'telas/home.php';
    include 'telas/menu.php';

} elseif($url === '/login'){

    include 'telas/login.php';
    include 'telas/menu.php';

} elseif($url === '/cadastro'){

    include 'telas/cadastro.php';
    include 'telas/menu.php';

} else{
    include 'telas/404.php';
    include 'telas/menu.php';
}

?>