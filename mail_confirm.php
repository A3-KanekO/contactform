<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問い合わせフォームの作成</title>
  <link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body>
  <h1>お問い合わせ内容の確認</h2>

  <div class="confirm">
    <p>お問い合わせ内容はこちらで宜しいでしょうか？
      <br>宜しければ「送信する」ボタンを押してください。
    </p>
    <p>名前
      <br>
      <?php echo $_POST['name'];?>
    
    <p>メールアドレス
      <br>
      <?php echo $_POST['mail'];?>

    <p>年齢
      <br>
      <?php echo $_POST['age']."歳";?>

    <p>コメント
      <br>
      <?php echo $_POST['comments'];?>

    <form action="index.html">
      <input type="submit" class="button1" value="戻って修正する"/>
    </form>

    <form action="insert.php" method="post">
      <input type="submit" class="button2" value="登録する"/>
      <input type="hidden" value="<?php echo $_POST['name'];?>" name="name">
      <input type="hidden" value="<?php echo $_POST['mail'];?>" name="mail">
      <input type="hidden" value="<?php echo $_POST['age'];?>" name="age">
      <input type="hidden" value="<?php echo $_POST['comments'];?>" name="comments">
    </form>
    
  </div>
</body>
</html>