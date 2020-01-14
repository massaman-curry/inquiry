
<div class="row">
<div class="col-md-1">
</div>
<div class="col-md-10">
<form action= "/index.php/completed" method= "post">
    <input type= 'hidden' name= 'name' value= <?= $_POST['name']; ?>>
    <input type= 'hidden' name= 'email' value= <?= $_POST['email']; ?>>
    <input type= 'hidden' name= 'tel' value= <?= $_POST['tel']; ?>>
    <input type= 'hidden' name= 'content' value= <?= $_POST['content']; ?>>
    <div class="card">
        <h1 style ="font-size:20px;"class="card-header">確認画面</h1>
        <div class="card-body">

        <table class="table table-striped" style="table-layout:fixed;">
        <tr>
        <th scope="row" style="width:30%">名前(必須):</td>
        <td><?= $data['name']; ?></td>
        </tr>
        <tr>
        <th scope="row">メールアドレス（必須）:</td>
        <td><?= $data['email']; ?></td>
        </tr>
        <tr>
        <th scope="row">電話番号（任意）:</td>
        <td><?= $data['tel']; ?></td>
        </tr>
        <tr>
        <th scope="row">お問い合わせ内容:</td>
        <td><?= $data['content']; ?></td>
        </tr>
        </table>
        <button class="btn btn-secondary" type="button" onclick="history.back()">戻る</button>
        <input class="btn btn-primary" type="submit" value="送信する">

        </div>
    </div>

</div>
</div>