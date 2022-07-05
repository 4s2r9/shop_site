<?php
$i = NULL; //カートに入ってるデータ数

try {
    $db = new PDO('mysql:dbname=hew2020_00382;host=127.0.0.1;charset=utf8', 'hew2020_00382', '');
}
catch (PDOException $e) {
    echo 'DB接続エラー： ' . $e->getMessage();
}

$records = $db->query('SELECT * FROM cart');
while ($record = $records->fetch()) {
$i = $i + 1;
}

if(!$i == NULL){ //カート内にデータがあれば
$check_text = $i."食のご購入完了<br>ご購入ありがとうございました。<br>当店でお待ちして居ります。";
$db->exec('delete from cart'); //カート内データ全削除
}
else{
  $check_text = "カートの中が空です。<br>購入するにはカートに料理を入れる必要があります。";
}
?>

<!DOCTYPE>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="robots" content="none,noindex,nofollow">
  <meta name="description" content="新型コロナウイルスを考え飲食店の商品を簡単に事前に購入できるサイトです">
  <meta name="keywords" content="おなかすいた,近くの飲食店,飲食店">
  <link rel="stylesheet" href="css/style.css">
  <title>Eater-料理事前購入サイト</title>
</head>

<body>

<!-- ヘッダー -->
<header class="header">
  <div class="header_logo">
    <h1><a href="index.php"><img src="img/logo.jpg" alt="Eaterロゴ"></a></h1>
  </div>
    <div class="header_cart">
      <h1><a href="#"><img src="img/cart.jpg" alt="カート画像" align="bottom"></a></h1>
    </div>
</header>

<h2 class="title">購入確認ページ</h2>

<div class="check_text">
  <p><?php echo $check_text ?></p>
</div>
<div class="menu_but">
  <p><a href="index.php" class="menu">ホームへ戻る</a></p>
</div>



<footer class="footer">
  <p>&copy; 2021 Eater</p>
</footer>


<script src="js/jquery-1.10.1.min.js"></script>
<script src="js/slide.js"></script>
</body>
</html>
