<?php
  session_start();

  if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST['add_to_cart'])){
      if(isset($_SESSION['cart'])){
        $myitems = array_column($_SESSION['cart'], 'item_name');//주어진 배열(첫 번째 파라미터)에서 특정 컬럼(두 번째 파라미터)값 리턴 => https://zetawiki.com/wiki/PHP_array_column()
        if(in_array($_POST['item_name'], $myitems)){//in_array(a, b) : b배열에서 a요소가 있으면 true
          echo "
            <script>
              alert('이미 추가된 상품입니다.');
              history.go(-1);
            </script>
          ";
        } else {
          $count = count($_SESSION['cart']);
          $_SESSION['cart'][$count]=array('item_img' => $_POST['item_img'], 'item_name' => $_POST['item_name'], 'price' => $_POST['item_pri'], 'quantity' => 1);
          //print_r($_SESSION['cart']);

          echo "
            <script>
              alert('카트에 상품이 추가되었습니다.');
              history.go(-1);
            </script>
          ";
        }
      } else {
        $_SESSION['cart'][0]=array('item_img' => $_POST['item_img'], 'item_name' => $_POST['item_name'], 'price' => $_POST['item_pri'], 'quantity' => 1);
        //print_r($_SESSION['cart']);

        echo "
          <script>
            alert('카트에 상품이 추가되었습니다.');
            history.go(-1);
          </script>
        ";
      }
    }
    if(isset($_POST['remove_cart'])){
      foreach($_SESSION['cart'] as $key => $value){
        //var_dump($key);
        //print_r($key);
        if($value['item_name']==$_POST['item_name']){
          unset($_SESSION['cart'][$key]);
          $_SESSION['cart']=array_values($_SESSION['cart']);
          echo "
            <script>
              alert('카트에서 상품이 삭제되었습니다.');
              history.go(-1);
            </script>
          ";
        }
      }
    }
  }

?>