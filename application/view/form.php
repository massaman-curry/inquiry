<!DOCTYPE html>
<html lang=ja>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>入力フォーム</title>
</head>
<body>
<div class= "container">
    <h1>お問い合わせ</h1>
    <form action="view/confirm.php" method="POST">

    <p>名前(必須):</p>
    <input type="text" name="name">
    <p>メールアドレス（必須）:</p>
    <input type="email" name="email">
    <p>電話番号（任意）:</p>
    <input type="tel" name="tel">
    <p>お問い合わせ内容:</p>
    <textarea name="content"></textarea>
    
    <input type="submit" value="確認">
</div>
</body>

