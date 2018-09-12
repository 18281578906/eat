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




    $(".code").on('mouseenter',function () {
       $(".code-btn").css({display:'block',})
    }).on('mouseleave',function () {
        $(".code-btn").css({display:'none',});
    })

    // $(window).scroll(function (e) {
    //
    //    if($(window).scrollTop()>3500)
    //    {
    //
    //     //数字改变
    //        var num=0;
    //        var time=null;
    //        function avg() {
    //            num++;
    //            $(".avg").text(num);
    //            if(num==5)
    //            {
    //                clearTimeout(time);
    //            }
    //            else {
    //                time=setTimeout('avg()',500);
    //            }
    //
    //        }
    //        time=setTimeout('avg()',500);
    //
    //    }
    //
    //
    // })


    /***
     * 动画效果，鼠标移动事件
     */

    $(".col-1").on('mouseenter',function (e) {
        $(".col-1 figure .overlay").css({display:'block'});
        $(".col-1 figure img").animate({
            width:400,
            height:350,
        },500);
    }).on('mouseleave',function () {
        $(".col-1 figure .overlay").css({display:'none'});
        $(".col-1 figure img").animate({
            width:350,
            height:300,
        },500);
    }); $(".col-2").on('mouseenter',function (e) {
        $(".col-2 figure .overlay").css({display:'block'});
        $(".col-2 figure img").animate({
            width:400,
            height:350,
        },500);
    }).on('mouseleave',function () {
        $(".col-2figure .overlay").css({display:'none'});
        $(".col-2 figure img").animate({
            width:350,
            height:300,
        },500);
    }); $(".col-3").on('mouseenter',function (e) {
        $(".col-3 figure .overlay").css({display:'block'});
        $(".col-3 figure img").animate({
            width:400,
            height:350,
        },500);
    }).on('mouseleave',function () {
        $(".col-3 figure .overlay").css({display:'none'});
        $(".col-3 figure img").animate({
            width:350,
            height:300,
        },500);
    }) ;$(".col-4").on('mouseenter',function (e) {
        $(".col-4 figure .overlay").css({display:'block'});
        $(".col-4 figure img").animate({
            width:400,
            height:350,
        },500);
    }).on('mouseleave',function () {
        $(".col-4 figure .overlay").css({display:'none'});
        $(".col-4 figure img").animate({
            width:350,
            height:300,
        },500);
    }) ;$(".col-5").on('mouseenter',function () {
        $(".col-5 figure .overlay").css({display:'block'});
        $(".col-5 figure img").animate({
            width:400,
            height:350,
        },500);
    }).on('mouseleave',function () {
        $(".col-5 figure .overlay").css({display:'none'});
        $(".col-5 figure img").animate({
            width:350,
            height:300,
        },500);
    });$(".col-6").on('mouseenter',function (e) {
        $(".col-6 figure .overlay").css({display:'block'});
        $(".col-6 figure img").animate({
            width:400,
            height:350,
        },500);
    }).on('mouseleave',function () {
        $(".col-6 figure .overlay").css({display:'none'});
        $(".col-6 figure img").animate({
            width:350,
            height:300,
        },500);
    })

    //页面定位
    $("#service").click(function () {
        $("html,body").animate({'scrollTop' : "2400px"}, 700);

    });
    $("#about").click(function () {
        $("html,body").animate({'scrollTop' : "3700px"}, 700);
    })
    $("#contact").click(function () {
        $("html,body").animate({'scrollTop' : "4300px"}, 700);
    });




    /***
     *  登录数据传输
     */



    $("#login").click(function () {
        var username=$("#username").val();
        var password=$("#password").val();
        if(username==''||password=='')
            alert("用户名和密码不能为空！");

        $.ajax({
            url:'php/login.php?act=login',
            type:'get',
            dataType:'json',
            data:{
                username:username,
                password:password,

            },
            success:function (data) {

                if(data==0)
                    alert("用户名或密码不正确");
                if(data==1){
                    alert("登录成功！");
                 window.location='index.php';
                }


            },
            error:function (data) {
            }
        })
    })




    /**
     *  判断是否登录
     */




    $("#logout").click(function () {
        alert("请先登录！");
    })






    /***
     * 加入购物车
     */

    $(".price").click(function () {
       var img=this.parentNode.parentNode.getElementsByTagName("img");
       var src=$(img).attr("src");
        $.ajax({
            url:'php/menu.php',
            type:'get',
            dataType:'json',
            data:{
                imgSrc:src,
            },
            success:function (data) {
                if(data==1)
                {
                    alert('预定成功！');
                }
                else {
                    alert('再次预定成功!');
                }
            },
            error:function (data) {
                alert(error);

            }
        })
    })


    /**
     * 搜索框
     */

    $(".search").click(function () {
        $("#search").toggle(500);
    })


})