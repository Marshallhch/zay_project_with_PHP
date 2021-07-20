$(function(){
  $(".like, .unlike").click(function(){
    //클릭 시 해당 아이디를 분리하여 like, unlike와 상품번호로 저장
    const selectId = $(this).attr("id");
    //alert(selectId); like_12. unlike_12
    const splitId = selectId.split("_");
    const likeUnlike = splitId[0];
    const postId = splitId[1];
    let type=0;

    //console.log(likeUnlike);
    //console.log(postId);

    if(likeUnlike == "like"){
      type=1;
    } else {
      type=0;
    }

    $.ajax({
      url :'/zay/php/like_unlike.php',
      type:'post',
      data:{postId : postId, type : type},
      success : function(data){
        console.log(data);
      }
    });
  });
});