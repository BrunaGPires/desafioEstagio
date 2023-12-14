<?php 

require __DIR__.'/vendor/autoload.php';

use \App\Entity\User;

define('TITLE','Cadastrar User');

if(isset($_POST['name'], $_POST['birthdate'], $_POST['cpf'], $_POST['gender'])){
    $obUser = new User;
    $obUser->name = $_POST['name'];
    $obUser->birthdate = $_POST['birthdate'];
    $obUser->cpf = $_POST['cpf'];
    $obUser->gender = $_POST['gender'];
    $obUser->cadastrar();

    header('location: index.php?status=success');
    exit;
}



include __DIR__.'/includes/header.php';
include __DIR__.'/includes/FormUser.php';
include __DIR__.'/includes/footer.php';


?>