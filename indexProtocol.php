<?php 

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Protocol;

$user = Protocol::getProtocols();

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/ListProtocol.php';
include __DIR__.'/includes/footer.php';

?>