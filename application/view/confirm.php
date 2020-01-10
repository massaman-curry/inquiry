<!DOCTYPE html>
<html lang=ja>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>確認画面</title>
</head>
<body>
<div class="container">
<form action= "accepted.php" method= "post">
    <input type= 'hidden' name= 'name' value= <?= $_POST['name']; ?>>
    <input type= 'hidden' name= 'email' value= <?= $_POST['email']; ?>>
    <input type= 'hidden' name= 'tel' value= <?= $_POST['tel']; ?>>
    <input type= 'hidden' name= 'content' value= <?= $_POST['content']; ?>>

    <h1>確認画面</h1>

    <p>名前(必須):</p>
    <?= $_POST['name']; ?>
    <p>メールアドレス（必須）:</p>
    <?= $_POST['email']; ?>
    <p>電話番号（任意）:</p>
    <?= $_POST['tel']; ?>
    <p>お問い合わせ内容:</p>
    <?= $_POST['content']; ?>

<input type="submit" value="送信">
    
</div>
</body>