<?php

//Base de dados
include 'database.php';

//cabeçalho
include 'header.php';

//conteúdo da página
if (isset($_GET['pagina'])){   
    $pagina = $_GET['pagina'];
}
else {
    $pagina = 'home';
}

if($pagina == 'bauru'){
    include 'bauru.php';
}

elseif($pagina == 'batatafrita'){
    include 'batatafrita.php';
}
elseif($pagina == 'cachorroquente'){
    include 'cachorroquente.php';
}
elseif($pagina == 'pastel'){
    include 'pastel.php';
}
else{
    include 'home.php';
}


//rodapé
include 'footer.php';
