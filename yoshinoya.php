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
?>

<!DOCTYPE>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="robots" content="none,noindex,nofollow">
  <meta name="description" content="新型コロナウイルスを考え飲食店の商品を簡単に事前に購入できるサイトです">
  <meta name="keywords" content="おなかすいた,近くの飲食店,飲食店">
  <link rel="stylesheet" href="css/style.css">
  <title>Eater - 料理事前購入サイト</title>
</head>

<body>

<!-- ヘッダー -->
<header class="header">
  <div class="header_logo">
    <h1><a href="index.php"><img src="img/logo.jpg" alt="Eaterロゴ"></a></h1>
  </div>
    <div class="header_cart">
      <h1><a href="cart.php"><p><img src="img/cart.jpg" alt="カート画像" align="bottom"><?php echo $i; ?></p></a></h1>
    </div>
</header>


<h2 class="title">吉野家メニュー</h2>
<div class="menu_wrapper">

  <section class="box_items">
    <a href="yoshinoya_item01.php">
      <img src="img/yoshinoya_items/item01.jpg" alt="牛丼">
      <h3>牛丼</h3>
      <p>並盛　352円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="yoshinoya_item02.php">
      <img src="img/yoshinoya_items/item02.jpg" alt="ねぎ玉牛丼">
      <h3>ねぎ玉牛丼</h3>
      <p>並盛　460円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="yoshinoya_item03.php">
      <img src="img/yoshinoya_items/item03.jpg" alt="豚丼">
      <h3>豚丼</h3>
      <p>並盛　353円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="yoshinoya_item04.php">
      <img src="img/yoshinoya_items/item04.jpg" alt="チーズ豚丼">
      <h3>チーズ豚丼</h3>
      <p>並盛　460円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="yoshinoya_item05.php">
      <img src="img/yoshinoya_items/item05.jpg" alt="牛カルビ丼">
      <h3>牛カルビ丼</h3>
      <p>並盛　548円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="yoshinoya_item06.php">
      <img src="img/yoshinoya_items/item06.jpg" alt="牛の鍋焼き定食">
      <h3>牛の鍋焼き定食</h3>
      <p>598円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="yoshinoya_item07.php">
      <img src="img/yoshinoya_items/item07.jpg" alt="牛すき鍋膳">
      <h3>牛すき鍋膳</h3>
      <p>並盛　648円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="yoshinoya_item08.php">
      <img src="img/yoshinoya_items/item08.jpg" alt="牛鍋ファミリーパック">
      <h3>牛鍋ファミリーパック</h3>
      <p>3~4人前　748円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="yoshinoya_item09.php">
      <img src="img/yoshinoya_items/item09.jpg" alt="スタミナ超特盛丼">
      <h3>スタミナ超特盛丼</h3>
      <p>超特盛　798円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="yoshinoya_item10.php">
      <img src="img/yoshinoya_items/item10.jpg" alt="牛カレー">
      <h3>牛カレー</h3>
      <p>並盛　498円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="yoshinoya_item11.php">
      <img src="img/yoshinoya_items/item11.jpg" alt="カレー">
      <h3>カレー</h3>
      <p>並盛　358円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="yoshinoya_item12.php">
      <img src="img/yoshinoya_items/item12.jpg" alt="牛カルビカレー">
      <h3>牛カルビカレー</h3>
      <p>並盛　598円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="yoshinoya_item13.php">
      <img src="img/yoshinoya_items/item13.jpg" alt="牛×牛カルビカレー">
      <h3>牛×牛カルビカレー</h3>
      <p>並盛　738円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="yoshinoya_item14.php">
      <img src="img/yoshinoya_items/item14.jpg" alt="牛皿定食">
      <h3>牛皿定食</h3>
      <p>並盛　498円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="yoshinoya_item15.php">
      <img src="img/yoshinoya_items/item15.jpg" alt="牛カルビ定食">
      <h3>牛カルビ定食</h3>
      <p>598円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="yoshinoya_item16.php">
      <img src="img/yoshinoya_items/item16.jpg" alt="牛鮭定食">
      <h3>牛鮭定食</h3>
      <p>548円</p>
    </a>
  </section>
</div>
<div class="menu_but">
  <p><a href="index.php" class="menu">メニューへ戻る</a></p>
</div>


<footer class="footer">
  <p>&copy; 2021 Eater</p>
</footer>


<script src="js/jquery-1.10.1.min.js"></script>
<script src="js/slide.js"></script>
</body>
</html>
