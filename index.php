<?php


if(isset($_GET['p'])){
    $p = $_GET['p'];
}else{
    $p = 'connexion';
}
ob_start();
if($p === 'connexion'){
    include('./pages/connexion.php');
}if($p === 'deconnexion'){
    include('./pages/deconnexion.php');
}if($p === 'utilisateurs'){
    include('./pages/utilisateurs.php');
}if($p === 'create_message'){
    include('./pages/create_message.php');
}if($p === 'sent_messages'){
    include('./pages/sent_messages.php');
}if($p === 'received_messages'){
    include('./pages/received_messages.php');
}if($p === 'message'){
    include('./pages/received_messages.php');
}




$content = ob_get_clean();
include('./pages/templates/default.php');

