<?php
/* Smarty version 3.1.33, created on 2019-08-06 21:32:28
  from '/Users/shawnyan/Desktop/mamp/comic/views/product.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d49816c4c2cd7_58915155',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb9b14843743919b92fe037fb124919436c4f1ec' => 
    array (
      0 => '/Users/shawnyan/Desktop/mamp/comic/views/product.html',
      1 => 1565098277,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d49816c4c2cd7_58915155 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="Shortcut Icon" type="image/x-icon" href="https://i.ibb.co/GJKYQYH/favicon.png" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../js/cart.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../js/add.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css"
        integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
    <?php echo '<script'; ?>
>
        $(function () {
            // $(".header").load("../views/header.html");
            $(".footer").load("../views/footer.html");
        });
    <?php echo '</script'; ?>
>
    <title>COMIC SHOP</title>
</head>

<body>
    <div class="header">
        <div class="personal-profile" id="profile">
            <div class="nav">
                <div class="home">
                    <a href="#home" class="anchor">漫畫王</a>
                    <a href="#profile" class="anchor">最新</a>
                    <a href="#resume" class="anchor">熱門</a>
                    <a href="#skill" class="anchor">分類</a>&nbsp
                    <input type="text" name="search" id="search" class="search" placeholder="搜尋漫畫..">
                    <button type="submit" class="btn btn-default btn-sm"><span
                            class="glyphicon glyphicon-search"></span> </button>
                </div>
                <div class="social">
                    <div class="icon">
                        <a href="https://www.facebook.com/" target="_blank" class="fb">
                            <i class="fab fa-facebook-square fa-lg"></i>
                        </a>
                        <a href="https://www.instagram.com/?hl=zh-tw" target="_blank" class="ig">
                            <i class="fab fa-instagram fa-lg"></i>
                        </a>
                        <a href="https://line.me/zh-hant/" target="_blank" class="line">
                            <i class="fab fa-line fa-lg"></i>
                        </a>
                    </div>
                </div>
                <div class="user">
                    <a href="join.html" target="_self" class="line">
                        <i class="fas fa-user-circle fa-lg"></i>
                    </a>
                    會員管理
                </div>
                <div class="cart">
                        <a id="cart-popover" class="btn" data-placement="bottom" title="最近加入的商品">
                            <i class="fas fa-shopping-cart fa-lg"></i>
                            購物車
                            <span class="badge"></span>
                        </a>
                    <div id="popover_content_wrapper" style="display: none">
                        <span id="cart_details"></span>
                        <div align="right">
                            <a href="#" class="btn btn-primary" id="check_out_cart">
                                <span class="glyphicon glyphicon-shopping-cart"></span> 結帳
                            </a>
                            <a href="#" class="btn btn-default" id="clear_cart">
                                <span class="glyphicon glyphicon-trash"></span> 清空
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="content">
        <a href="#">
            <img src="../images/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
.jpg" width="340px" height="480px">
        </a>
        <div class="main">
            <div>
            </div>
            <div class="down">
                <h1><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h1>
                <div class="price"><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
 / <small>卷</small></div>
                <ul class="details">
                    <li><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</li>
                    <li>庫存量:<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
</li>
                </ul>
                <hr>
                <div class="input-group">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus"
                            data-field="quant[1]">
                            <span class="glyphicon glyphicon-minus"></span>
                        </button>
                    </span>
                    <input type="text" name="quant[1]" id="quantity" class="form-control input-number" value="1" min="1" max="10">
                    <input type="hidden" name="hidden_name" id="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" />
            	<input type="hidden" name="hidden_price" id="price" value="<?php echo $_smarty_tpl->tpl_vars['price']->value;?>
" />
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                            <span class="glyphicon glyphicon-plus"></span>
                        </button>
                    </span>
                </div>
                <div class="group">
                    <a href="#" class="btn btn-buy btn-lg ">立即購買</a>
                    <a href="#" class="btn btn-add btn-lg add_cart" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">加入購物車</a>
                </div>
            </div>
        </div>

    </div>
    <div class="footer"></div>
    <style type="text/css">
        body {
            width: 100%;
            margin: 0 auto;
            height: auto;
            font-size: 16px;
            font-family: Microsoft JhengHei;

        }

        img {
            border-radius: 8px;
        }

        .content {
            display: flex;
            justify-content: center;
            margin-top: 50px;
        }

        .main {
            margin: 30px;
            width: 350px;
        }

        .price {
            text-align: right;
            color: rgb(78, 104, 153);
            font-size: 32px;
        }

        .down {
            padding-top: 30px;
        }

        .down h1 {
            padding-left: 15px;
        }

        .details li {
            list-style-type: square;
        }

        .details {
            padding-top: 40px;
        }

        .btn-buy {
            background-color: rgb(254, 213, 123);
            border-color: rgb(254, 213, 123);
            color: aliceblue;
            width: 170px;
        }

        .btn-add {
            background-color: rgb(180, 218, 227);
            border-color: rgb(180, 218, 227);
            color: aliceblue;
            width: 170px;
        }

        .group {
            display: flex;
            justify-content: space-around;
            margin-top: 50px;
        }

        .input-group {
            margin-top: 50px;
            width: 170px;
        }

        .input-number {
            text-align: center;
        }

        input {
            padding: 3px;
            background: #fff;
            cursor: auto;
            -webkit-border-radius: 5px;
            border-radius: 5px;
        }

        .dropdown {
            display: block;
        }

        .user :hover .dropdown {
            color: red;
        }

        .search {
            height: 30px;
        }

        .social i {
            color: white;
            padding-right: 12px;
        }

        .social {
            padding-right: 8px;
            border-right: solid;
            border-color: white;
            float: right;
        }

        .nav {
            position: relative;
            padding: 0 20px 0 20px;
            width: 100%;
            line-height: 40px;
            border-bottom: 1px solid #ccc;
            overflow: auto;
            box-sizing: border-box;
            text-transform: uppercase;
            background: -webkit-linear-gradient(right, #FFAFBD, #ffc3a0);
            display: flex;
            justify-content: space-between;
        }

        .nav .home {
            font-size: 16px;
            font-weight: bold;
            text-transform: uppercase;
            float: left;
        }

        .nav .home a:first-child {
            font-size: 24px;
        }

        .nav a {
            text-decoration: none;
            color: rgb(255, 255, 255);
            padding-left: 10px;
        }

        .nav li {
            display: inline-block;
            margin: 0 15px;
            font-size: 15px;
        }

        .nav li:hover {
            text-shadow: 5px 5px 10px #000;
        }

        .user {
            color: white;
            float: right;
        }

        .badge {
            display: inline-block;
            min-width: 10px;
            padding: 3px 7px;
            font-size: 12px;
            font-weight: 700;
            line-height: 1;
            color: #777;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            background-color: #fff;
            border-radius: 10px;
        }

        .popover {
            width: 100%;
            max-width: 400px;
        }
    </style>
</body>

</html><?php }
}
