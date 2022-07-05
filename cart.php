<?php
$i = NULL; //カートに入ってるデータ数

try {
    $db = new PDO('mysql:dbname=hew2020_00382;host=127.0.0.1;charset=utf8', 'hew2020_00382', '');
}
catch (PDOException $e) {
    echo 'DB接続エラー： ' . $e->getMessage();
}

if(isset($_POST["delete"])){ //cart内データ全削除
  $db->exec('delete from cart');
}

$records = $db->query('SELECT * FROM cart');
while ($record = $records->fetch()) {
$i = $i + 1;
}

if (!$i == 0){
  //合計金額計算 $record['price']
  $records = $db->query('select sum(price) as price from cart');
  $record = $records->fetch();
  $cart_price = $record['price'];
}
else{
  $cart_price = 0;
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

<h2 class="title">Myカート</h2>

<section class="cart">
  <div class="cart_text">
    <p><?php
    if(!$i == NUll){
      $records = $db->query('SELECT * FROM cart');
      while ($record = $records->fetch()) {
      print($record['shop']."店　" .$record['item']."　" .$record['price']."円　". "<br>");
      }
    }
    else{
      print "カート内に商品がありません。";
    }
    ?></p>
  </div>

  <section class="cartprice_cartdelete">
    <div class="cart_delete">
      <form action="cart.php" method="post">
        <input type="hidden" name="delete" value="1">
        <input type="submit" value="カートを空にする" class="delete_btn">
      </form>
    </div>
    <div class="cart_price">
        <p>合計　<?php echo $cart_price; ?>円</p>
    </div>
  </section>


  <div class="cart_btn">
    <button type="button" class="cart_btn1" onclick="location.href='index.php'">買い物を続ける</button>
    <button type="button" class="cart_btn2" onclick="location.href='check.php'">購入する</button>
  </div>
</section>


<footer class="footer">
  <p>&copy; 2021 Eater</p>
</footer>


<script src="js/jquery-1.10.1.min.js"></script>
<script src="js/slide.js"></script>
</body>
</html>
