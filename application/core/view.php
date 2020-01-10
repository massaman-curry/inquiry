<?php

class View{

    protected $index = 'view/form.php';
    protected $confirm = '../view/confirm.php';
    protected $accepted = '../view/accepted.php';

    public function render($mode){?>

        <!DOCTYPE html>
        <html lang=ja>
        <head>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
            <meta charset="UTF-8">
            <title>入力フォーム</title>
        </head>
        <body>
        <div class= "container">

            <?php require $this->$mode; ?>
        
        </div>
        </body>

<?php
    }

}
