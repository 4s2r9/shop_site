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


<h2 class="title">Ringer Hut メニュー</h2>
<div class="menu_wrapper">

  <section class="box_items">
    <a href="ringerhut_item01.php">
      <img src="img/ringerhut_items/item01.jpg" alt="長崎ちゃんぽん">
      <h3>長崎ちゃんぽん</h3>
      <p>590円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="ringerhut_item02.php">
      <img src="img/ringerhut_items/item02.jpg" alt="減塩 長崎ちゃんぽん">
      <h3>減塩 長崎ちゃんぽん</h3>
      <p>640円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="ringerhut_item03.php">
      <img src="img/ringerhut_items/item03.jpg" alt="ピリカラちゃんぽん">
      <h3>ピリカラちゃんぽん</h3>
      <p>650円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="ringerhut_item04.php">
      <img src="img/ringerhut_items/item04.jpg" alt="長崎皿うどん">
      <h3>長崎皿うどん</h3>
      <p>620円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="ringerhut_item05.php">
      <img src="img/ringerhut_items/item05.jpg" alt="太めん皿うどん">
      <h3>太めん皿うどん</h3>
      <p>750円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="ringerhut_item06.php">
      <img src="img/ringerhut_items/item06.jpg" alt="減塩 長崎皿うどん">
      <h3>減塩 長崎皿うどん</h3>
      <p>640円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="ringerhut_item07.php">
      <img src="img/ringerhut_items/item07.jpg" alt="牛・がっつりまぜめん">
      <h3>牛・がっつりまぜめん</h3>
      <p>740円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="ringerhut_item08.php">
      <img src="img/ringerhut_items/item08.jpg" alt="野菜たっぷり食べるスープ">
      <h3>野菜たっぷり食べるスープ</h3>
      <p>700円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="ringerhut_item09.php">
      <img src="img/ringerhut_items/item09.jpg" alt="薄皮ぎょうざ定食">
      <h3>薄皮ぎょうざ定食</h3>
      <p>7個、10個、15個</p>
    </a>
  </section>
  <section class="box_items">
    <a href="ringerhut_item10.php">
      <img src="img/ringerhut_items/item10.jpg" alt="半チャーハン">
      <h3>半チャーハン</h3>
      <p>260円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="ringerhut_item11.php">
      <img src="img/ringerhut_items/item11.jpg" alt="ごはん（大盛り無料）">
      <h3>ごはん（大盛り無料）</h3>
      <p>無料</p>
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
