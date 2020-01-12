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
        $eval = $this->model->check_all($params);
        if($eval === true){ 
            $this->view->render('confirm', $params);
        }else{
            var_dump($eval);
            //時間があれば、エラーメッセージファイルに$evalを渡してrenderさせる
        }
    }

    public function completed($params){
        $this->view->render('completed',$params);
        return(
            $this->model->mailsending($params, 'mailtxt/notify.php')
        );

        
        // 確認画面からデータを受取。お問い合わせありがとう画面（sendmail.php）
        // 受取データのメールアドレスに対してデータを送信。
        // データには受取データを格納。
    }

}