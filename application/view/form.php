<div class="row">
<div class="col-md-2">
</div>
<div class="col-md-8">
<div class="card">
  <h5 class="card-header">お問い合わせフォーム</h5>
  <div class="card-body">
    <p class="card-text">必須事項を記入の上、確認するボタンを押してください。</p>
    <form action="/index.php/confirm" method="POST">
        <div class="form-row">
        <div class="form-group col-md-6">
            <label for="formname">名前（必須）:</label>
            <input class="form-control" type="text" id="formname" value="<?= $data['name']?>" name="name">
        </div>
        <div class="form-group col-md-6">
            <label for="formtel">電話番号（任意）:</label>
            <input class="form-control" type="tel" id="formtel" value="<?= $data['tel']?>" name="tel">
        </div>
        </div>
        <div class="form-group">
            <label for="formemail">メールアドレス（必須）:</label>
            <input class="form-control" type="email" id="formemail" value="<?= $data['email']?>" name="email">
        </div>
        <div class="form-group">
            <label for="formcontent">お問い合わせ内容：</label>
            <textarea class="form-control" name="content" id="formcontent" rows="8"><?= $data['content']?> </textarea>
        </div>
        <input class="btn btn-primary" type="submit" value="確認する">
    </form>
  </div>
</div>
</div>
</div>








