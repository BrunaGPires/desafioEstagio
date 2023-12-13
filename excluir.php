<?php 

require __DIR__.'/vendor/autoload.php';

use \App\Entity\User;


if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location: index.php?status=error');
    exit;
}

$obUser = User::getUser($_GET['id']);
//valida user
if(!$obUser instanceof User){
    header('location: index.php?status=error');
}

//valida $_post
if(isset($_POST['excluir'])){
    
    $obUser->excluir();

    header('location: index.php?status=success');
    exit;
}



include __DIR__.'/includes/header.php';
include __DIR__.'/includes/confirmar-exclusao.php';
include __DIR__.'/includes/footer.php';


?>