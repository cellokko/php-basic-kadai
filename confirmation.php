<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP課題21</title>
</head>
<body>
  <!-- $_POSTはPHPがあらかじめ定義している変数。$_POST[]でフォームに入力された値を簡単に取得できる。丸カッコでなく[]なのは配列だから。 -->
  <h2>個人情報入力フォームの入力内容を確認します</h2>
  <p>お名前：<?php echo $_POST['user_name']; ?></p>
  <p>性別:<?php echo $_POST['user_gender']; ?></p>
  <p>メールアドレス：<?php echo $_POST['user_email']; ?></p>
</body>
</html>