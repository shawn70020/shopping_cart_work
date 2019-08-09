<?php
/* Smarty version 3.1.33, created on 2019-07-26 04:44:02
  from 'C:\xampp\htdocs\comic\views\member_center.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d3a68f2e40da2_72153775',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2048c4eabe7bdfd0dfdcf47ccf631a8089b4710d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\comic\\views\\member_center.html',
      1 => 1563504266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d3a68f2e40da2_72153775 (Smarty_Internal_Template $_smarty_tpl) {
?><html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>網站會員系統</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous">
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $(function() {
            $(".header").load("header.html");
        });
    <?php echo '</script'; ?>
>
</head>

<body>
    <div class="header"></div>
    <div class="content">
        <div class="left">
            <div class="left">
                <p class="title">歡迎光臨網站留言板</p>
                <p>感謝各位來到留言板，現在您可開始進行留言，請點選上排列選擇想要的功能。</p>
                <p class="heading1"> 本留言系統擁有以下的功能：</p>
                <ol>
                    <li>免費加入會員 。</li>
                    <li>每個會員可修改本身資料。</li>
                    <li>可以瀏覽別人留言及編輯自己留言。</li>
                    <li>管理者可以修改、刪除會員的資料。</li>
                </ol>
                <p class="heading1">請各位會員遵守以下規則： </p>
                <ol>
                    <li> 遵守政府的各項有關法律法規。</li>
                    <li>勿隨意散播或造謠任何未經證實的事情。</li>
                    <li> 承擔一切因您的行為而直接或間接導致的民事或刑事法律責任。</li>
                    <li> 互相尊重， 遵守互聯網絡道德；嚴禁互相惡意攻擊， 漫罵。</li>
                </ol>
            </div>
        </div>
        <div class="member">
            <div class="regbox">
                <p class="heading1"><strong>會員系統</strong></p>
                <div class="right">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'it');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['it']->value) {
?>
                    <p><strong><?php echo $_smarty_tpl->tpl_vars['it']->value['realname'];?>
</strong> 您好。</p>
                    <p>您總共登入了 <?php echo $_smarty_tpl->tpl_vars['it']->value['loginnum'];?>
 次。<br> 本次登入的時間為：
                        <br> <?php echo $_smarty_tpl->tpl_vars['it']->value['logintime'];?>

                    </p><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <p align="center"><a href="member_update.php">修改資料</a> | <a href="?logout=true">登出系統</a>
                    </p>
                </div>
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
        
        .right {
            font-size: 20px;
        }
    </style>
</body>

</html><?php }
}
