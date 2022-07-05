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
      <img src="img/sukiya_items/item01.jpg" alt="">
      <h3></h3>
      <p></p>
    </a>
  </section>
  <section class="box_items">
    <a href="sukiya_item02.php">
      <img src="img/sukiya_items/item02.jpg" alt="">
      <h3></h3>
      <p></p>
    </a>
  </section>
  <section class="box_items">
    <a href="sukiya_item03.php">
      <img src="img/sukiya_items/item03.jpg" alt="">
      <h3></h3>
      <p></p>
    </a>
  </section>
  <section class="box_items">
    <a href="sukiya_item04.php">
      <img src="img/sukiya_items/item04.jpg" alt="">
      <h3></h3>
      <p></p>
    </a>
  </section>
  <section class="box_items">
    <a href="sukiya_item05.php">
      <img src="img/sukiya_items/item05.jpg" alt="">
      <h3></h3>
      <p></p>
    </a>
  </section>
  <section class="box_items">
    <a href="sukiya_item06.php">
      <img src="img/sukiya_items/item06.jpg" alt="">
      <h3></h3>
      <p></p>
    </a>
  </section>
  <section class="box_items">
    <a href="sukiya_item07.php">
      <img src="img/sukiya_items/item07.jpg" alt="">
      <h3></h3>
      <p></p>
    </a>
  </section>
  <section class="box_items">
    <a href="sukiya_item08.php">
      <img src="img/sukiya_items/item08.jpg" alt="">
      <h3></h3>
      <p></p>
    </a>
  </section>
  <section class="box_items">
    <a href="sukiya_item09.php">
      <img src="img/sukiya_items/item09.jpg" alt="">
      <h3></h3>
      <p></p>
    </a>
  </section>
  <section class="box_items">
    <a href="sukiya_item10.php">
      <img src="img/sukiya_items/item10.jpg" alt="">
      <h3></h3>
      <p></p>
    </a>
  </section>
  <section class="box_items">
    <a href="sukiya_item11.php">
      <img src="img/sukiya_items/item11.jpg" alt="">
      <h3></h3>
      <p></p>
    </a>
  </section>
  <section class="box_items">
    <a href="sukiya_item12.php">
      <img src="img/sukiya_items/item12.jpg" alt="">
      <h3></h3>
      <p></p>
    </a>
  </section>
</div>



<footer class="footer">
  <p>&copy; 2021 Eater</p>
</footer>


<script src="js/jquery-1.10.1.min.js"></script>
<script src="js/slide.js"></script>
</body>
</html>
