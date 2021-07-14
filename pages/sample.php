<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1" />
  <title>Zay Shop || Join</title>
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
  <link rel="stylesheet" href="/zay/css/join_login.css">
  <!-- Media Style CSS Link -->
  <link rel="stylesheet" href="/zay/css/media.css">
</head>
<body class="join_login">

  <?php include $_SERVER["DOCUMENT_ROOT"]."/zay/include/header.php"; ?>

  <section class="join">
    <div class="center">
      <div class="mem_form_box">
        <form action="/zay/php/insert_mem.php" method="post" name="mem_form" enctype="multipart/form-data" class="mem_form">
          <p>
            <label for="mem_id">아이디</label>
            <input type="text" name="mem_id" id="mem_id">
            <button type="button">중복체크</button>
          </p>
          <!-- 아이디 중복체크 -->
          <p>
            <label for="mem_pass">비밀번호</label>
            <input type="password" name="mem_pass" autocomplete="off" id="mem_pass">
          </p>
          <p>
            <label for="mem_pass_check">비밀번호 확인</label>
            <input type="password" name="mem_pass_check" autocomplete="off" id="mem_pass_check">
          </p>
          <p>
            <label for="mem_pf">프로필 사진</label>
            <input type="file" name="mem_pf" id="mem_pf">
          </p>
          <p>
            <label for="mem_name">이름</label>
            <input type="text" name="mem_name" id="mem_name">
          </p>
          <p>
            <label for="mem_email">이메일</label>
            <input type="text" name="mem_email" id="mem_email">
          </p>

          <button type="button" id="submit_btn">회원가입</button>
        </form>
        <div class="still_not">
          <em>아직 회원이 아니시면</em>
          <a href="#">Click</a>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <p>Designed By ProjectMong Co.LTD</p>
  </footer>

  <!-- jQuery Framework Load -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="/zay/js/jq.main.js"></script>
  <script>
    $(function(){
       
    });
  </script>
  <script>

    const submitBtn = document.querySelector("#submit_btn");

    submitBtn.addEventListener('click', function(){
      if(!document.mem_form.mem_id.value){
        alert('아이디를 입력해 주세요');
        document.mem_form.mem_id.focus();
        return;
      }

      if(!document.mem_form.mem_pass.value){
        alert('비밀번호를 입력해 주세요');
        document.mem_form.mem_pass.focus();
        return;
      }

      if(!document.mem_form.mem_pass_check.value){
        alert('비밀번호 확인을 입력해 주세요');
        document.mem_form.mem_pass_check.focus();
        return;
      }

      if(document.mem_form.mem_pass.value != document.mem_form.mem_pass_check.value){
        alert('비밀번호와 비밀번호 확인이 다릅니다.');
        document.mem_form.mem_pass_check.focus();
        return;
      }

      const extensions = ['jpg', 'png', 'jpeg', 'JPG', 'PNG', 'JPEG'];
      const imgValue = document.mem_form.mem_pf.value;
      const imgExt = imgValue.split('.');
      //console.log(imgExt[1]);

      if(!extensions.includes(imgExt[1])){
        alert('jpg, png, jpeg 형식의 이미지를 올려주세요.');
        return;
      }

      if(!document.mem_form.mem_name.value){
        alert('이름을 입력해 주세요');
        document.mem_form.mem_name.focus();
        return;
      }

      if(!document.mem_form.mem_email.value){
        alert('이메일을 입력해 주세요');
        document.mem_form.mem_email.focus();
        return;
      }

      document.mem_form.submit();
    });

  </script>
</body>
</html>