$(function () {

    /***
     * 页面动画
     * 二级菜单
     */


    $("#guan").on('mouseenter',function () {
        $("#two").css({display:'block'});
    });
    $("#user").on('mouseenter',function () {
        $("#two").css({display:'block'});
    });
    $("#two").on('mouseleave',function () {
        $("#two").css({display:'none'});
    });
    $("#logside").on('mouseenter',function () {
        $("#cart-ul").css({display:'block'});
    });
    $("#cart-ul").on('mouseleave',function () {
        $("#cart-ul").css({display:'none'});
    })




    /**删除购物车单项
     *
     */


    $('.list>li').click(function (e) {
   var el=e||window.event;
   var src=el.target||el.srcElement;
   var li=src.parentNode.parentNode.nodeName;
  if(src.className==='fa fa-trash')
  {

      var $id=$(this).val();
      $(this).remove();
      $.ajax({
          url:'php/cart.php',
          type:'get',
          dataType:'json',
          data:{
              id:$id,
          },
          success:function (data) {
              window.refresh();
          }

      });

      // $(this).remove();
  }

})
});