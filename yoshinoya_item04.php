<?php
$i = NULL; //カートに入ってるデータ数、NULL空

try {
    $db = new PDO('mysql:dbname=hew2020_00382;host=127.0.0.1;charset=utf8', 'hew2020_00382', '');
}
catch (PDOException $e) {
    echo 'DB接続エラー： ' . $e->getMessage();
}

if(isset($_POST["size"])){// セレクトボックスで選択された値を受け取る
  if(!$_POST["size"] == 0){
    $records = $db->query('select * from yoshinoya where id="'.$_POST["size"].'"');//入力された商品を呼び出す
    if($record = $records->fetch()) {
      $db->exec('insert into cart set item="'.$record['item'].'", price="'.$record['price'].'", shop="'.$record['shop'].'"');//呼び出した商品のデータをテーブルcartにデータ挿入
    }
  }
}

//cratのデータ数
$counts = $db->query('SELECT * FROM cart');
while ($count = $counts->fetch()) {
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

  <section class="item">
    <img src="img/yoshinoya_items/item04.jpg" alt="チーズ豚丼">
    <h1>チーズ豚丼</h1>

    <form action="yoshinoya_item04.php" method = "POST">
      <select name="size" class="size_select">
        <option value="">サイズを選択してください</option>
        <option value = "19">小盛　440円</option>
        <option value = "20">並盛　460円</option>
        <option value = "21">アタマの大盛　570円</option>
        <option value = "22">大盛　630円</option>
        <option value = "23">特盛　750円</option>
        <option value = "24">超特盛　840円</option>
      </select><br>
      <input type="submit" name="submit" value="カートに入れる" class="submit_btn">
    </form>
</section>
<div class="menu_but">
  <p><a href="yoshinoya.php" class="menu">メニューへ戻る</a></p>
</div>


<!-- フッター -->
<footer class="footer">
  <p>&copy; 2021 Eater</p>
</footer>

<!-- JS -->
<script src="js/jquery-1.10.1.min.js"></script>
<script src="js/slide.js"></script>
</body>
</html>