<?php 

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Protocol;
use \App\Entity\User;

define('TITLE','Registra protocolo');


if(isset($_POST['description'], $_POST['deadline'], $_POST['user_id'])){
    $userID = $_POST['user'];
    $user = User::getUser($userID);

    $obProtocol = new Protocol;
    $obProtocol->description = $_POST['description'];
    $obProtocol->deadline = $_POST['deadline'];
    $obProtocol->user = $user;
    $obProtocol->registrar();

    header('location: index.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/FormProtocol.php';
include __DIR__.'/includes/footer.php';


?>