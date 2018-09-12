$(function () {
    $(".btn button").click(function () {
        $(".second").css({display:'block'});

    })


    $(".menu-ul ul li").click(function () {
        var img=this.getElementsByTagName('img');
        var src=$(img).attr('src');
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