new Vue({
    el:'#shop',
    data:{
        clickFlag:false,
        shopItem:'',
        shoppingNum:1,
        shoppingPrice:'',

    },
    filters:{

    },
    mounted:function () {
      this.$nextTick(function () {

      })
    },
    methods:{
        addAddress:function () {
           $("textarea").css('display','block');
           $("textarea").blur(function () {
               $value=$("textarea").val();
               if($value==''){
                   alert("添加地址失败");
                   $("textarea").css('display','none');
               }else{
                   $.ajax({
                       url:'php/cart2.php',
                       type:'get',
                       dataType:'json',
                       data:{
                           address:$value,

                       },
                       success:function (data) {
                           if(data==1)
                           {
                               alert("添加地址成功！");
                               window.location='cart.php';
                           }

                       }
                   })
               }
           })
        },
        changeNum:function (e,index) {
            if(index==1)
            this.shoppingNum++;
            else
                this.shoppingNum--;

        }


    }
})