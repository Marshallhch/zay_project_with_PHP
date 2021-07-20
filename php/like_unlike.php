<?php

  session_start();
  if(isset($_SESSION['useridx'])){
    $useridx = $_SESSION['useridx'];
  } else {
    $useridx = "";
  }

  $post_id = $_POST['postId'];
  $type = $_POST['type'];

  // echo $useridx.'<br>';
  // echo $post_id.'<br>';
  // echo $type.'<br>';

  include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php";
  //기존에 있던 좋아요, 싫어요 수를 읽어서 초기화
  $sql = "SELECT COUNT(*) AS cntpost FROM zay_like_unlike WHERE ZAY_like_unlike_postid='{$post_id}' AND ZAY_like_unlike_userid='{$useridx}'";


  $result = mysqli_query($dbConn, $sql);
  $fetch_data = mysqli_fetch_array($result);
  $count = $fetch_data['cntpost'];

  echo $count;

?>