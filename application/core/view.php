<?php

class View{

    protected $index = 'view/form.php';
    protected $confirm = 'view/confirm.php';
    protected $completed = 'view/completed.php';

    public function render($mode, $data = [], $error = null){?>

        <!DOCTYPE html>
        <html lang=ja>
        <head>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
            <meta charset="UTF-8">
            <title>入力フォーム</title>
        </head>
        <body>
        <?php if($error){ ?>
        <div class="alert alert-danger" role="alert">
            <?php foreach($error as $e) echo $e . "\n";} ?>
        </div>
        <div class= "container">
            <?php require $this->$mode; ?>
        </div>
        </body>

<?php
    }

}
