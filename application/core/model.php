<?php

class Model{

    public function getRequest(){
        return substr($_SERVER['REQUEST_URI'], 11);
    }

    public function check_name($posted = null){
        if(isset($posted)) return true;
    }

    public function check_email($posted = null){
        $format = preg_match(
            '/^[a-zA-Z0-9_.+-]+[@][a-zA-Z0-9.-]+$/'
            ,$posted);

        if($posted && $format) return true;
    }

    public function check_tel($posted = null){
        $format = preg_match(
            '/^[0-9]{2,4}-[0-9]{2,4}-[0-9]{3,4}$/'
            ,$posted);
        if($format) return true;
    }

    public function check_all($posted = null){
        $rslts = [];
        $msg = [];
        $etoj = ['name' => '名前', 'email' => 'メールアドレス', 'tel' => '電話番号'];

        $rslts['name'] = $this->check_name($posted['name']);
        $rslts['email'] = $this->check_email($posted['email']);
        $rslts['tel'] = $this->check_tel($posted['tel']);

        foreach($rslts as $k => $v){
            if($v == true) continue;
            $msg[] = $etoj[$k] .'の入力が正しくありません';
        }

        if($msg) return $msg;
        
        return true;

    }

    public function send_a_mail($data){
        mb_language("Japanese");
        mb_internal_encoding("UTF-8");

        $to = $data['email'];
        $subj = '自動返信メール';
        $msg = require '/view/mailcontent.php';
        $header = 'Bcc: ';
        //CentOS側のsendmailの設定を先に。
    }


}