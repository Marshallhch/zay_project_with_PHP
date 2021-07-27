<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1" />
  <title>Zay Shop || My Cart</title>
  <!-- Favicon Link -->
  <link rel="shortcut icon" href="/zay/img/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/zay/img/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="/zay/img/favicon.ico">
  <!-- Font Awesome Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
  <!-- Reset CSS Link -->
  <link rel="stylesheet" href="/zay/css/reset.css">
  <!-- Main Style CSS Link -->
  <link rel="stylesheet" href="/zay/css/style.css">
  <!-- Media Style CSS Link -->
  <link rel="stylesheet" href="/zay/css/media.css">
  <style>
    img{width:200px;}
  </style>
</head>
<body>

  <?php include $_SERVER["DOCUMENT_ROOT"]."/zay/include/header.php"; ?>

  <section class="cart">
    <div class="center">
      <div class="tit_box">
        <h2>My Cart Items</h2>
        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt<br> mollit anim id est laborum.</p>
      </div>
      <?php
      $total = 0;
      if(isset($_SESSION['cart'])){
        foreach($_SESSION['cart'] as $key => $value){
          $total = $total + $value['price'];
          //print_r($value);
          $item_img = $value['item_img'];
          $item_name = $value['item_name'];
          $item_price = $value['price'];
          $item_quanitity = $value['quantity'];
          //echo $item_img;
      ?>
      <p>
        <img src="/zay/data/product_imgs/<?=$item_img?>" alt="">
        <span>1</span>
        <span><?=$item_name?></span>
        <span><?=$item_price?></span>
        <input type="number" value="<?=$item_quanitity?>" min="1" max="10">
        <form action="/zay/php/cart_control.php" method="post">
          <button name="remove_cart">REMOVE</button>
          <input type="hidden" name="item_name" value="<?=$item_name?>">
        </form>   
      </p>
      <?php
        }
      }
      ?>
    </div>
    <h2>total price : <?=$total?></h2>

    <div class="example"></div>
  </section>

  <?php include $_SERVER["DOCUMENT_ROOT"]."/zay/include/footer.php"; ?>

  <!-- jQuery Framework Load -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="/zay/js/jq.main.js"></script>
  <script>
    $(function(){
      const arr = ['pro1', 'pro2', 'pro3', 'pro4'];
      let txt = '';
      for(let i = 0; i < arr.length; i++){
        txt = `<p>${arr[i]}</p>`;
        $(".example").append(txt);
      }
    });
  </script>
</body>
</html>