<?php

require "core/controller.php";

$controller = new Controller();
$method = $controller->getRequest();

switch($method){
    case 'confirm':
        $controller->confirm($_POST);
        //controller/confirm functionを実行
        break;
    case 'mail':
        //controller/mailへ
        //break;
    default:
        $controller->index();
        //controller/indexへ
        break;
}
