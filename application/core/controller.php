<?php

class Controller{

    protected $view;
    protected $model;
    protected $method;

    public function __construct(){
        require 'view.php';
        require 'model.php';
        $this->view = new View();
        $this->model = new Model();
    }

    public function getRequest(){
        return $this->model->getRequest();
    }


    public function index(){
        $this->view->render('index');
    }

    public function confirm($params){
        $this->view->render('confirm', $params);

        // 入力されたデータを受取。
        // 受け取ったデータのチェック。
        // viewファイルにデータを渡してレンダー
        
    }

    public function mail(){
        // 確認画面からデータを受取。
        // 受取データのメールアドレスに対してデータを送信。

    }

}