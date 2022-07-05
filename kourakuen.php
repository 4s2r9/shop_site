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


<h2 class="title">幸楽苑メニュー</h2>
<div class="menu_wrapper">

  <section class="box_items">
    <a href="kourakuen_item01.php">
      <img src="img/kourakuen_items/item01.jpg" alt="中華そばプレミアム">
      <h3>中華そばプレミアム</h3>
      <p>740円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="kourakuen_item02.php">
      <img src="img/kourakuen_items/item02.jpg" alt="ねぎらーめん">
      <h3>ねぎらーめん</h3>
      <p>540円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="kourakuen_item03.php">
      <img src="img/kourakuen_items/item03.jpg" alt="煮卵らーめん">
      <h3>煮卵らーめん</h3>
      <p>540円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="kourakuen_item04.php">
      <img src="img/kourakuen_items/item04.jpg" alt="味噌らーめんプレミアム">
      <h3>味噌らーめんプレミアム</h3>
      <p>740円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="kourakuen_item05.php">
      <img src="img/kourakuen_items/item05.jpg" alt="辛し味噌野菜たんめん">
      <h3>辛し味噌野菜たんめん</h3>
      <p>740円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="kourakuen_item06.php">
      <img src="img/kourakuen_items/item06.jpg" alt="味噌野菜らーめん">
      <h3>味噌野菜らーめん</h3>
      <p>540円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="kourakuen_item07.php">
      <img src="img/kourakuen_items/item07.jpg" alt="塩らーめんプレミアム">
      <h3>塩らーめんプレミアム</h3>
      <p>740円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="kourakuen_item08.php">
      <img src="img/kourakuen_items/item08.jpg" alt="塩ねぎらーめん">
      <h3>塩ねぎらーめん</h3>
      <p>540円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="kourakuen_item09.php">
      <img src="img/kourakuen_items/item09.jpg" alt="塩野菜らーめん">
      <h3>塩野菜らーめん</h3>
      <p>540円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="kourakuen_item10.php">
      <img src="img/kourakuen_items/item10.jpg" alt="塩煮卵らーめん">
      <h3>塩煮卵らーめん</h3>
      <p>540円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="kourakuen_item11.php">
      <img src="img/kourakuen_items/item11.jpg" alt="とんこつチャーシューめん">
      <h3>とんこつチャーシューめん</h3>
      <p>640円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="kourakuen_item12.php">
      <img src="img/kourakuen_items/item12.jpg" alt="つけめんプレミアム">
      <h3>つけめんプレミアム</h3>
      <p>740円</p>
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
