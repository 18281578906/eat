<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <link rel="stylesheet" href="css/guan.css">
    <script src="js/lib/vue-resource.js"></script>
    <script src="js/lib/vue.min.js"></script>
    <script src="js/jquery-3.2.1%20.js"></script>
</head>
<body>
<div id="guan">
<div id="form-list">
    <div class="tab-inner">
    <form class="form-list">
    <h3>管理员登录</h3>
        <ul>
            <li><label for="userName">用户名：</label>
                <input type="text" id="userName" v-model="userName"></li>
            <li> <label for="password">密码 ：  </label>
                <input type="password" id="password" v-model="password"></li>
            <li> <input type="submit" id="submit" value="登录" @click="checkInput"></li>
        </ul>
    </form>
    </div>
</div>
</div>
<script src="js/guan.js"></script>
</body>
</html>