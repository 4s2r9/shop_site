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


<h2 class="title">松屋メニュー</h2>
<div class="menu_wrapper">

  <section class="box_items">
    <a href="matsuya_item01.php">
      <img src="img/matsuya_items/item01.jpg" alt="プレミアム牛めし">
      <h3>プレミアム牛めし</h3>
      <p>並盛 380円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="matsuya_item02.php">
      <img src="img/matsuya_items/item02.jpg" alt="創業ビーフカレー">
      <h3>創業ビーフカレー</h3>
      <p>並盛 490円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="matsuya_item03.php">
      <img src="img/matsuya_items/item03.jpg" alt="マッサマンカレー">
      <h3>マッサマンカレー</h3>
      <p>並盛 730円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="matsuya_item04.php">
      <img src="img/matsuya_items/item04.jpg" alt="創業プレミアムビーフカレギュウ">
      <h3>創業プレミアムビーフカレギュウ</h3>
      <p>並盛 720円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="matsuya_item05.php">
      <img src="img/matsuya_items/item05.jpg" alt="創業ハンバーグビーフカレー">
      <h3>創業ハンバーグビーフカレー</h3>
      <p>並盛 720円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="matsuya_item06.php">
      <img src="img/matsuya_items/item06.jpg" alt="お肉たっぷり焼き牛めし">
      <h3>お肉たっぷり焼き牛めし</h3>
      <p>並盛 560円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="matsuya_item07.php">
      <img src="img/matsuya_items/item07.jpg" alt="キムカル丼">
      <h3>キムカル丼</h3>
      <p>並盛 500円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="matsuya_item08.php">
      <img src="img/matsuya_items/item08.jpg" alt="ネギたっぷりネギ塩豚肩ロース丼">
      <h3>ネギたっぷりネギ塩豚肩ロース丼</h3>
      <p>並盛 500円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="matsuya_item09.php">
      <img src="img/matsuya_items/item09.jpg" alt="ビビン丼">
      <h3>ビビン丼</h3>
      <p>並盛 500円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="matsuya_item10.php">
      <img src="img/matsuya_items/item10.jpg" alt="シュクメルリ鍋定食">
      <h3>シュクメルリ鍋定食</h3>
      <p>790円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="matsuya_item11.php">
      <img src="img/matsuya_items/item11.jpg" alt="カルビ焼肉定食">
      <h3>カルビ焼肉定食</h3>
      <p>660円</p>
    </a>
  </section>
  <section class="box_items">
    <a href="matsuya_item12.php">
      <img src="img/matsuya_items/item12.jpg" alt="ブラウンソースハンバーグ定食">
      <h3>ブラウンソースハンバーグ定食</h3>
      <p>600円</p>
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
