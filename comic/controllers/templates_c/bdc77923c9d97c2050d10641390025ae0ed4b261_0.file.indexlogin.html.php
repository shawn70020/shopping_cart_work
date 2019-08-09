<?php
/* Smarty version 3.1.33, created on 2019-07-26 03:47:47
  from 'C:\xampp\htdocs\comic\views\indexlogin.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d3a5bc352bdf0_82504370',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bdc77923c9d97c2050d10641390025ae0ed4b261' => 
    array (
      0 => 'C:\\xampp\\htdocs\\comic\\views\\indexlogin.html',
      1 => 1563845343,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d3a5bc352bdf0_82504370 (Smarty_Internal_Template $_smarty_tpl) {
?><html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>話題留言板</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous">
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $(function() {
            $(".header").load("indexheader.html");
        });
    <?php echo '</script'; ?>
>
</head>

<body>
    <div class="header"></div>
    <div class="content">
        <div class="left">
            <div class="left">
                <p class="title">歡迎光臨話題留言板</p>
                <p class="heading1"> 本留言系統擁有以下的功能：</p>
                <ol>
                    <li>免費加入會員 。</li>
                    <li>每個會員可修改本身資料。</li>
                    <li>可以瀏覽別人留言及編輯自己留言。</li>
                    <li>管理者可以修改、刪除會員的資料。</li>
                </ol>
                <p class="heading2">請各位會員遵守以下規則： </p>
                <ol>
                    <li> 遵守政府的各項有關法律法規。</li>
                    <li>勿隨意散播或造謠任何未經證實的事情。</li>
                    <li> 承擔一切因您的行為而直接或間接導致的民事或刑事法律責任。</li>
                    <li> 互相尊重， 遵守互聯網絡道德；嚴禁互相惡意攻擊， 漫罵。</li>
                </ol>
            </div>
        </div>
        <div class="login">
            <div class="regbox">
                <p class='msg'><?php echo $_smarty_tpl->tpl_vars['flag']->value;?>
</p>
                <p class="title">登入會員系統</p>
                <form name="form1" method="post" action="">
                    <p>帳號：
                        <br>
                        <input name="username" type="text" class="logintextbox" id="username" value="" autocomplete="off">
                    </p>
                    <p>密碼：<br>
                        <input name="passwd" type="password" class="logintextbox" id="passwd" value="" autocomplete="off">
                    </p>
                    <p>
                        <input name="rememberme" type="checkbox" id="rememberme" value="true" checked> 記住我的帳號密碼。
                    </p>
                    <p><br> 驗證碼 &nbsp
                        <img src="checkCode.php">
                    </p>
                    <p>
                        <input type="text" name="checkCode" autocomplete="off">&nbsp
                        <input type="hidden" name="click" value="1">
                        <button type="submit" class="btn btn-primary">登入</button>
                    </p>
                </form>
                <hr size="1" />
                <p class="heading1">還沒有會員帳號?</p>
                <p align="right"><a href="member_join.html">馬上申請會員</a></p>
            </div>
        </div>
    </div>

    <style type="text/css">
        body {
            width: 1280px;
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
            color: rgb(226, 35, 35);
            font-size: 30px;
        }
    </style>

</body>

</html><?php }
}
