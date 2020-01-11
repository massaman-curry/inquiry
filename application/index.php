<?php

require "core/controller.php";

$controller = new Controller();
$method = $controller->getRequest();

switch($method){
    case 'confirm':
        $controller->confirm($_POST);
        break;
    case 'sendmail':
        $controller->sendmail($_POST);
        break;
    default:
        $controller->index();
        break;
}
