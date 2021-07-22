<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1" />
  <title>Zay Shop || Community</title>
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
</head>
<body>

  <?php include $_SERVER["DOCUMENT_ROOT"]."/zay/include/header.php"; ?>

  <section class="community">
    <div class="center">
      <div class="tit_box">
        <h2>Community Board</h2>
        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt<br> mollit anim id est laborum.</p>
      </div>

      <div class="comm_table comm_center">
        <ul class="comm_row">
          <li class="comm_tit">
            <span>번호</span>
            <span>아이디</span>
            <span>제목</span>
            <span>등록일</span>
            <span>조회수</span>
          </li>

          <?php
            include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php";
            $sql = "SELECT * FROM zay_comm ORDER BY ZAY_comm_idx DESC LIMIT 5";

            $comm_result = mysqli_query($dbConn, $sql);
            while($comm_row = mysqli_fetch_array($comm_result)){
          ?>
          <li class="comm_con">
            <span>3</span>
            <span>marshall36</span>
            <span>사이트 오픈을 축합니다.</span>
            <span>2021-07-21</span>
            <span>51</span>
          </li>
          <?php } ?>
        </ul>
      </div>
      <!-- End of comm_table -->
      <div class="search_paging comm_center">
        <div class="search">
          <form action="#" class="search_form" name="search_form">
            <select name="" id="">
              <option value="">아이디</option>
              <option value="">제목</option>
            </select>
            <input type="text" placeholder="검색어를 입력해 주세요.">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
        </div>

        <div class="paging">
          <span><i class="fa fa-angle-double-left"></i></span>
          <span><i class="fa fa-angle-left"></i></span>
          <span class="num">1</span>
          <span><i class="fa fa-angle-right"></i></span>
          <span><i class="fa fa-angle-double-right"></i></span>
        </div>
      </div>
      <!-- End of search paging -->

      <div class="write comm_center">
        <h4>글을 입력해 주세요.</h4>
        <form class="write_form" action="/zay/php/community_insert.php" name="write_form" method="post">
          <div class="write_tit">
            <label for="write_input">제목</label>
            <input type="text" id="write_input" placeholder="제목을 입력해 주세요." name="write_input">
          </div>
          <div class="write_con">
            <textarea placeholder="내용을 입력해 주세요." name="write_con"></textarea>
          </div>
        </form>
        <div class="write_btn">
          <?php if(!$userid){ ?>
          <button type="button" onclick="plzLogin()">글쓰기</button>
          <?php } else { ?>
          <button type="button" onclick="sendWrite()">글쓰기</button>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>

  <?php include $_SERVER["DOCUMENT_ROOT"]."/zay/include/footer.php"; ?>

  <!-- jQuery Framework Load -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="/zay/js/jq.main.js"></script>
  <script>
    function plzLogin(){
      alert('로그인 후 이용해 주세요.');
      return false;
    }

    function sendWrite(){
      if(!document.write_form.write_input.value){
        alert('제목을 입력해 주세요.');
        return;
      }

      if(!document.write_form.write_con.value){
        alert('내용을 입력해 주세요.');
        return;
      }

      document.write_form.submit();
    }
  </script>
</body>
</html>