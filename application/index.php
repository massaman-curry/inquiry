<?php

require "core/model.php";
require "core/controller.php";

$model = new Model();
$controller = new Controller();

$method = $model->getRequest();

switch($method){
    case 'confirm':
        //controller/confirm functionを実行
        //break;
    case 'mail':
        //controller/mailへ
        //break;
    default:
        $controller->index();
        //controller/indexへ
        //break;
}
