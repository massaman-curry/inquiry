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
        $msg = '';

        $rslts['name'] = $this->check_name($posted['name']);
        $rslts['email'] = $this->check_email($posted['email']);
        $rslts['tel'] = $this->check_tel($posted['tel']);

        if(!array_search('false', $rslt)) return true;

        foreach($rslts as $k => $v){
            if(!$v) $msg .= $k;
        }
        $msg .= 'の入力が正しくありません。';
        return $msg;
    }

}