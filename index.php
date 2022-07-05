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

<!-- サイトメイン画像スライド -->
<div class="item_image">
  <div id="slideshow">
    <img src="img/mein_img1.jpg" alt="サイトメイメージ画像1" class="active">
    <img src="img/mein_img2.jpg" alt="サイトメイメージ画像2">
    <img src="img/mein_img3.jpg" alt="サイトメイメージ画像3">
    <img src="img/mein_img4.jpg" alt="サイトメイメージ画像4">
  </div>
</div>


<!-- トップページメイン -->
<h2 class="title">おすすめ店舗</h2>
<div class="box_wrapper">

 <section class="box_shop">
   <a href="matsuya.php">
     <div class="image_wrapper">
       <img src="img/matsuya_logo.jpg" alt="松屋ロゴ">
     </div>
   </a>
 </section>
 <section class="box_shop">
   <a href="sukiya.php">
     <div class="image_wrapper">
       <img src="img/sukiya_logo.jpg" alt="すき家ロゴ">
     </div>
   </a>
 </section>
 <section class="box_shop">
   <a href="yoshinoya.php">
     <div class="image_wrapper">
       <img src="img/yosinoya_logo.jpg" alt="吉野家ロゴ">
     </div>
   </a>
 </section>
 <section class="box_shop">
   <a href="ringerhut.php">
     <div class="image_wrapper">
       <img src="img/ringerhut_logo.jpg" alt="リンガーハットロゴ">
     </div>
   </a>
 </section>
 <section class="box_shop">
   <a href="kourakuen.php">
     <div class="image_wrapper">
       <img src="img/kourakuen_logo.jpg" alt="幸楽苑ロゴ">
     </div>
   </a>
 </section>

 <section class="box_shop">
   <a href="marukame.php">
     <div class="image_wrapper">
       <img src="img/marugeme_logo.jpg" alt="丸亀製麺ロゴ">
     </div>
   </a>
 </section>
</div>

<div class="text_box">
  <h2>Eater</h2>
  <p>Eater(イーター)は事前に外食先の料理を購入できるサイトです。<br>
様々な場所で家族や友達とゆっくり料理を選べ、簡単に料理を事前購入できます。<br>
オンライン決済なので会計時のゴタゴタが無くなります。</p>
</div>

<footer class="footer">
  <p>&copy; 2021 Eater</p>
</footer>


<script src="js/jquery-1.10.1.min.js"></script>
<script src="js/slide.js"></script>
</body>
</html>
