<?php

class Controller{

    protected $view;
    protected $model;

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
            $this->view->render('index', $params, $eval);
        }
    }

    public function completed($params){
        $title = 'お問い合わせありがとうございました。';
        if($this->model->mailsending($params, $title)) $this->view->render('completed',$params); return;
        $this->view->render('completed', '', '申し訳ありません。エラーが発生したのでもう一度やり直してください。');
    }

}