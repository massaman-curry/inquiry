
<form action= "accepted.php" method= "post">
    <input type= 'hidden' name= 'name' value= <?= $_POST['name']; ?>>
    <input type= 'hidden' name= 'email' value= <?= $_POST['email']; ?>>
    <input type= 'hidden' name= 'tel' value= <?= $_POST['tel']; ?>>
    <input type= 'hidden' name= 'content' value= <?= $_POST['content']; ?>>

    <h1>確認画面</h1>

    <p>名前(必須):</p>
    <?= $data['name']; ?>
    <p>メールアドレス（必須）:</p>
    <?= $data['email']; ?>
    <p>電話番号（任意）:</p>
    <?= $data['tel']; ?>
    <p>お問い合わせ内容:</p>
    <?= $data['content']; ?>

<input type="submit" value="送信">