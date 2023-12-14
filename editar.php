<?php 

require __DIR__.'/vendor/autoload.php';

use \App\Entity\User;

define('TITLE','Editar User');

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
if(isset($_POST['name'], $_POST['birthdate'], $_POST['cpf'], $_POST['gender'])){
    $obUser->name = $_POST['name'];
    $obUser->birthdate = $_POST['birthdate'];
    $obUser->cpf = $_POST['cpf'];
    $obUser->gender = $_POST['gender'];
    $obUser->atualizar();

    header('location: index.php?status=success');
    exit;
}



include __DIR__.'/includes/header.php';
include __DIR__.'/includes/FormUser.php';
include __DIR__.'/includes/footer.php';


?>