<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1" />
  <title>Zay Shop || Admin</title>
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
    input, textarea{border:1px solid;}
    textarea{resize:both;}
  </style>
</head>
<body>

  <?php include $_SERVER["DOCUMENT_ROOT"]."/zay/include/header.php"; ?>

  <section class="pro_insert">
    <div class="center">
      <div class="detail_contents">
        <div class="detail_img">
          <img src="/zay/data/product_imgs/watch_3_1.jpg" alt="">
          <img src="/zay/data/product_imgs/watch_3_2.jpg" alt="">
          <div class="detail_tab_btns">
            <span><img src="/zay/data/product_imgs/watch_3_1.jpg" alt=""></span>
            <span><img src="/zay/data/product_imgs/watch_3_2.jpg" alt=""></span>
          </div>
        </div>
        <div class="detail_txt">
          <div class="detail_wrap">
            <div class="detail_top">
              <h2>멋찐 시계</h2>
              <p><span><i class="fa fa-krw"></i> 50,000</span></p>
              <div class="detail_like">
                <div class="like_unlike">
                  <span>좋아요 | <b>20</b></span>
                  <span>별로에요 | <b>11</b></span>
                  <span class="comments">20 <b>Comments</b></span>
                </div>     
                <p class="gray">Brans : Easy Wear</p>
                <div class="detail_desc">
                  <h3>상품설명</h3>
                  <p>국회의원은 국회에서 직무상 행한 발언과 표결에 관하여 국회외에서 책임을 지지 아니한다. 대법원은 법률에 저촉되지 아니하는 범위안에서 소송에 관한 절차, 법원의 내부규율과 사무처리에 관한 규칙을 제정할 수 있다.</p>
                </div>
                <p class="gray">Available Color : White / Black</p>       
              </div>
              <!-- end of detail_like -->
            </div>

            <div class="size_quan">
              <div class="size">
                <p>Size : 
                  <span>S</span>
                  <span>M</span>
                  <span>S</span>
                  <span>XL</span>
                </p>
                <p>Quantity 
                  <span>-</span>
                  <b>1</b>
                  <span>+</span>
                </p>
              </div>
              <div class="detail_btns">
                <button type="button">BUY NOW</button>
                <button type="button">ADD TO CART</button>
              </div>
            </div>
            <!-- end of size quantity -->
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include $_SERVER["DOCUMENT_ROOT"]."/zay/include/footer.php"; ?>

  <!-- jQuery Framework Load -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="/zay/js/jq.main.js"></script>
</body>
</html>
