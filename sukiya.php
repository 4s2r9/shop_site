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


<h2 class="title">すき家メニュー</h2>
<div class="menu_wrapper">

  <section class="box_items">
    <a href="sukiya_item01.php">
      <img src="img/sukiya_items/item01.jpg" alt="牛丼">
      <h3>牛丼</h3>
      <p>並盛　350円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="sukiya_item02.php">
      <img src="img/sukiya_items/item02.jpg" alt="キムチ牛丼">
      <h3>キムチ牛丼</h3>
      <p>並盛　480円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="sukiya_item03.php">
      <img src="img/sukiya_items/item03.jpg" alt="ねぎ玉牛丼">
      <h3>ねぎ玉牛丼</h3>
      <p>並盛　480円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="sukiya_item04.php">
      <img src="img/sukiya_items/item04.jpg" alt="とろ〜り3種のチーズ牛丼">
      <h3>とろ〜り3種のチーズ牛丼</h3>
      <p>並盛　500円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="sukiya_item05.php">
      <img src="img/sukiya_items/item05.jpg" alt="牛すき鍋定食">
      <h3>牛すき鍋定食</h3>
      <p>780円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="sukiya_item06.php">
      <img src="img/sukiya_items/item06.jpg" alt="チーズ尽くしのガーリックトマト牛鍋定食">
      <h3>チーズ尽くしのガーリックトマト牛鍋定食</h3>
      <p>890円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="sukiya_item07.php">
      <img src="img/sukiya_items/item07.jpg" alt="マンハッタンデラックスカレー">
      <h3>マンハッタンデラックスカレー</h3>
      <p>並盛　890円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="sukiya_item08.php">
      <img src="img/sukiya_items/item08.jpg" alt="チーズ牛カレー">
      <h3>チーズ牛カレー</h3>
      <p>並盛　770円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="sukiya_item09.php">
      <img src="img/sukiya_items/item09.jpg" alt="カレー">
      <h3>カレー</h3>
      <p>並盛　480円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="sukiya_item10.php">
      <img src="img/sukiya_items/item10.jpg" alt="牛皿定食">
      <h3>牛皿定食</h3>
      <p>560円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="sukiya_item11.php">
      <img src="img/sukiya_items/item11.jpg" alt="鮭定食">
      <h3>鮭定食</h3>
      <p>520円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="sukiya_item12.php">
      <img src="img/sukiya_items/item12.jpg" alt="納豆定食">
      <h3>納豆定食</h3>
      <p>410円</p>
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
