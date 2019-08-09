<?php
/* Smarty version 3.1.33, created on 2019-08-09 13:00:50
  from '/Users/shawnyan/Desktop/Mamp/comic/views/login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d4cfe02553468_32146923',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5582834ecf470b380191b6b904681bce45ab7bfb' => 
    array (
      0 => '/Users/shawnyan/Desktop/Mamp/comic/views/login.html',
      1 => 1565326370,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d4cfe02553468_32146923 (Smarty_Internal_Template $_smarty_tpl) {
?><html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>COMIC SHOP</title>
    <link rel="Shortcut Icon" type="image/x-icon" href="../images/favicon.png" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css"
        integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../js/login.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $(function () {
            $(".header").load("../views/header.html");
            $(".footer").load("../views/footer.html");
        });
    <?php echo '</script'; ?>
>
</head>

<body>
    <div class="header"></div>
    <div class="content">
        <div class="login">
            <div class="regbox">
                <p class="title">登入會員系統</p>
                <form name="form1" id="formlogin" method="post" action="">
                    <p>
                        <div class="input-group">
                            <span class="input-group-addon usr"><i class="fas fa-user fa-lg"></i></span>
                            <input name="username" type="text" class="form-control" id="username" value="" size="30"
                                placeholder="請輸入帳號" autocomplete="off"> </div><span id="username_result"></span>
                    </p>
                    <p><br>
                        <div class="input-group">
                            <span class="input-group-addon pass"><i class="fas fa-lock fa-lg"></i></span>
                            <input name="passwd" type="password" class="form-control" id="password" value="" size="30"
                                placeholder="請輸入密碼" autocomplete="off"></div><span id="password_result"></span>
                    </p>
                    <!-- <p><br>
                        <div class="input-group">
                            <span class="input-group-addon"> <i class="fas fa-key fa-lg"></i></span>
                            <input type="text" name="checkCode" class="form-control" id="code" size="21"
                                placeholder="請輸入驗證碼" autocomplete="off"></div><span id="code_result"></span>
                        <span><img src="../controllers/checkCode.php" id="getcode_num"></span>
                        <input type="hidden" name="click" value="1">
                    </p> -->
                    <p>
                        <input name="rememberme" type="checkbox" id="rememberme" value="true" checked> 記住我的帳號密碼。
                    </p>
                    <p>忘記密碼</p>
                    <p class="msg"><?php echo $_smarty_tpl->tpl_vars['flag']->value;?>
</p>
                    <input type="submit" class="btn btn-primary " value="登入">
                </form>
                <p><a href="../views/join.html">立即註冊</a></p>
            </div>
        </div>
    </div>
    <div class="footer"></div>
    <style type="text/css">
        body {
            margin: 0 auto;
            height: auto;
            font-size: 18px;
            font-family: Microsoft JhengHei;
        }

        .regbox {
            background-color: white;
            border: none;
        }

        .content {
            display: flex;
            justify-content: space-around;
        }

        .title {
            font-size: 24px;
            color: rgb(84, 141, 216);
        }

        .heading1,
        .heading2 {
            font-size: 20px;
            color: rgb(141, 167, 216);
            padding-top: 10px;
        }

        .left {
            padding-top: 10px;
            font-size: 18px;
        }

        .msg {
            color: #FFAFBD;
        }

        .footer {
            margin-top: 100px;
        }

        .login {
            margin-top: 50px;
        }

        .btn.btn-success {
            color: #ffffff;
            background-image: linear-gradient(to bottom, #b9b1b1, #b1afaf);
            border-color: #c5c2c2;
        }
    </style>

</body>

</html><?php }
}
