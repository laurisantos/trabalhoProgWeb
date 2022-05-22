<?php
include_once('app/controller/Controller.php');
$controller = new Controller();

switch ($_GET['acao']) {
    case 'ver':
        $controller->ver();
        break;
    default:
        $controller->principal();
}
?>