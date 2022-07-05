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
$i = $i + 1; //カート数カウント
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


<h2 class="title">丸亀製麺メニュー</h2>
<div class="menu_wrapper">

  <section class="box_items">
    <a href="marukame_item01.php">
      <img src="img/marukame_items/item01.jpg" alt="鴨ねぎうどん">
      <h3>鴨ねぎうどん</h3>
      <p>並　690円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="marukame_item02.php">
      <img src="img/marukame_items/item02.jpg" alt="玉子あんかけ">
      <h3>玉子あんかけ</h3>
      <p>並　450円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="marukame_item03.php">
      <img src="img/marukame_items/item03.jpg" alt="釜玉うどん">
      <h3>釜玉うどん</h3>
      <p>並　370円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="marukame_item04.php">
      <img src="img/marukame_items/item04.jpg" alt="釜揚げうどん">
      <h3>釜揚げうどん</h3>
      <p>並　290円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="marukame_item05.php">
      <img src="img/marukame_items/item05.jpg" alt="とろろ醤油うどん">
      <h3>とろろ醤油うどん</h3>
      <p>並　390円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="marukame_item06.php">
      <img src="img/marukame_items/item06.jpg" alt="ぶっかけうどん">
      <h3>ぶっかけうどん</h3>
      <p>並　300円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="marukame_item07.php">
      <img src="img/marukame_items/item07.jpg" alt="カレーうどん">
      <h3>カレーうどん</h3>
      <p>並　490円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="marukame_item08.php">
      <img src="img/marukame_items/item08.jpg" alt="とろ玉うどん">
      <h3>とろ玉うどん</h3>
      <p>並　440円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="marukame_item09.php">
      <img src="img/marukame_items/item09.jpg" alt="きつねうどん">
      <h3>きつねうどん</h3>
      <p>並　440円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="marukame_item10.php">
      <img src="img/marukame_items/item10.jpg" alt="ざるうどん">
      <h3>ざるうどん</h3>
      <p>並　300円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="marukame_item11.php">
      <img src="img/marukame_items/item11.jpg" alt="肉うどん">
      <h3>肉うどん</h3>
      <p>並　590円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="marukame_item12.php">
      <img src="img/marukame_items/item12.jpg" alt="牛すき釜玉うどん">
      <h3>牛すき釜玉うどん</h3>
      <p>並　690円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="marukame_item13.php">
      <img src="img/marukame_items/item13.jpg" alt="野菜かき揚げ">
      <h3>野菜かき揚げ</h3>
      <p>１ヶ　140円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="marukame_item14.php">
      <img src="img/marukame_items/item14.jpg" alt="えび天">
      <h3>えび天</h3>
      <p>1ヶ　160円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="marukame_item15.php">
      <img src="img/marukame_items/item15.jpg" alt="さつまいも天">
      <h3>さつまいも天</h3>
      <p>１ヶ　110円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="marukame_item16.php">
      <img src="img/marukame_items/item16.jpg" alt="かぼちゃ天">
      <h3>かぼちゃ天</h3>
      <p>１ヶ　110円</p>
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
