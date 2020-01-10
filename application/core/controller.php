<?php

class Controller{

    protected $view;

    public function __construct(){
        require 'view.php';
        $this->view = new View();
    }


    public function index(){
        $this->view->render('index');
    }

    public function confirm(){
        // 入力されたデータを受取。
        // 受け取ったデータのチェック。
        // viewファイルにデータを渡してレンダー
        
    }

    public function mail(){
        // 確認画面からデータを受取。
        // 受取データのメールアドレスに対してデータを送信。

    }

}