<?php
/* Smarty version 3.1.33, created on 2019-08-01 07:11:55
  from 'C:\xampp\htdocs\comic\views\product.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d42749bdfbeb3_03058323',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbce6d5dcebd993d7cc8c3d682f89a2aba259c17' => 
    array (
      0 => 'C:\\xampp\\htdocs\\comic\\views\\product.html',
      1 => 1564636312,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d42749bdfbeb3_03058323 (Smarty_Internal_Template $_smarty_tpl) {
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
 src="../js/add.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css"
        integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./static/css/main.css">
    <?php echo '<script'; ?>
>
        $(function () {
            $(".header").load("../views/header.html");
            $(".footer").load("../views/footer.html");
        });
    <?php echo '</script'; ?>
>
    <title>COMIC SHOP</title>
</head>

<body>
    <div class="header"></div>

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
                    <input type="text" name="quant[1]" class="form-control input-number" value="1" min="1" max="10">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                            <span class="glyphicon glyphicon-plus"></span>
                        </button>
                    </span>
                </div>
                <div class="group">
                    <a href="#" class="btn btn-buy btn-lg ">立即購買</a>
                    <a href="#" class="btn btn-add btn-lg ">加入購物車</a>
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
    </style>
</body>

</html><?php }
}
