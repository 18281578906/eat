$(function () {
    $("#login").click(function () {
        var username=$("#username").val();
        var password=$("#password").val();
        var comfirmPass=$("#comfirm").val();
        if(username==''||password==''||comfirmPass=='')
            alert("用户名或密码不能为空");
        if(password!=comfirmPass)
        alert("密码一致！");
       else{
           if(password.length<6)
               alert("密码不得小于6位");
        }

        $.ajax({
            url:'php/login.php?act=register',
            type:'get',
            dataType:'json',
            data:{
                username:username,
                password:password,
                comfirmPass:comfirmPass,

            },
            success:function (data) {

                if(data==1)
                    alert("该用户名已存在！");
                if(data==0)
                    alert("注册成功！");

            },
            error:function (data) {
            }
        })
    })
})