<?php

class Model{

    public function getRequest(){
        return substr($_SERVER['REQUEST_URI'], 11);
    }

    public function check_name($posted = null){
        if($posted) return true;
    }

    public function check_email($posted = null){
        $format = preg_match(
            '/^[a-zA-Z0-9_.+-]+[@][a-zA-Z0-9.-]+$/'
            ,$posted);

        if($posted && $format) return true;
    }

    public function check_tel($posted = null){
        if($posted){
            return
            preg_match(
                '/^[0-9]{2,4}-[0-9]{2,4}-[0-9]{3,4}$/'
                ,$posted);
        }
        return true;
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
            $msg[] = $etoj[$k] .'の入力が正しくありません。';
        }

        if($msg) return $msg;
        
        return true;

    }

    public function render_notice_mail($data){
        $content = <<<EOF
        <html>
        <head>
        <meta http-equiv="Content-Type" content="text/html">
        <meta lang="ja">
        <meta charset="ISO-2022-JP">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        </head>
        <body>
        <h1 style="font-size: 20px;">お問い合わせ頂いた内容</h1><br>
        <p style="font-size: 15px;">名前：</p>
            <p style="font-size: 13px;">{$data["name"]}</p>
        <p style="font-size: 15px;">メールアドレス：</p>
            <p style="font-size: 13px;">{$data["email"]}</p>
        <p style="font-size: 15px;">電話番号：</p>
            <p style="font-size: 13px;">{$data["tel"]}</p>
        <p style="font-size: 15px;">お問い合わせ内容：</p>
            <p style="font-size: 13px;">{$data["content"]}</p>
        </body>
    EOF;

        return $content;
    }

    public function mailsending($data, $title = null){
        mb_language("Japanese");
        mb_internal_encoding("UTF-8");
        $to = $data['email'];
        $subj = '[自動返信メール]' . $title;
        $body = $this->render_notice_mail($data);
        $headers = '';
        $headers .= 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-Type: text/html; charset=iso-2022-jp' . "\r\n";
        $headers .= 'Content-Transfer-Encoding: quoted-printable' . "\r\n";
        $headers .= 'Bcc: helloworld.test.address@gmail.com' . "\r\n";

        $subj = mb_convert_encoding($subj, "iso-2022-jp");
        $msg = '';
        $msg .= quoted_printable_encode(mb_convert_encoding($body, 'iso-2022-jp', 'UTF-8')) . "\r\n";

        return mb_send_mail($to, $subj, $msg, $headers);
    }


}