<?php
/* Smarty version 3.1.33, created on 2019-08-09 13:46:52
  from '/Users/shawnyan/Desktop/Mamp/comic/index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d4d08cc921a33_61541913',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df43b098ac8a4fa605de51df86b589c53247b51e' => 
    array (
      0 => '/Users/shawnyan/Desktop/Mamp/comic/index.html',
      1 => 1565329610,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d4d08cc921a33_61541913 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="login.php">登入</a>
<a href="logout.php">登出系統</a>
<div class="content">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'it');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['it']->value) {
?>
          <div class="main">
            <div>
              <a href="#">
                <img src="../images/<?php echo $_smarty_tpl->tpl_vars['it']->value['id'];?>
.jpg" width="340px" height="480px">
              </a>
            </div>
            <div class="down">
              <div class="price"><?php echo $_smarty_tpl->tpl_vars['it']->value['price'];?>
/ <small>卷</small></div>
              <h1><?php echo $_smarty_tpl->tpl_vars['it']->value['name'];?>
</h1>
              <ul class="details">
                <li><?php echo $_smarty_tpl->tpl_vars['it']->value['content'];?>
</li>
              </ul>
              <a href="product.php?id=<?php echo $_smarty_tpl->tpl_vars['it']->value['id'];?>
" class="btn btn-primary btn-lg btn-block buy-now">
                購買 <span class="glyphicon glyphicon-triangle-right"></span>
              </a>
            </div>
          </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
  <div class="page">
      <nav aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item"><a class="page-link"><?php echo $_smarty_tpl->tpl_vars['pageup']->value;?>
</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link"><?php echo $_smarty_tpl->tpl_vars['pagedown']->value;?>
</a></li>
          </ul>
        </nav>總共<?php echo $_smarty_tpl->tpl_vars['totals']->value;?>
筆 共<?php echo $_smarty_tpl->tpl_vars['total_pages']->value;?>
頁&nbsp在第<?php echo $_smarty_tpl->tpl_vars['num_page']->value;?>
頁&nbsp<?php echo $_smarty_tpl->tpl_vars['pageup']->value;?>
&nbsp<?php echo $_smarty_tpl->tpl_vars['pagedown']->value;?>
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

    .content{
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
    }
.main{
  margin: 30px;
  border-style: solid;
  background-color:#f8f8ff;
  border-radius: 10px;
  box-shadow:6px 10px 6px #000;
}
.price{
  text-align: center;
  color: cornflowerblue;
  font-size: 32px;
}
.down{
  padding-top: 30px;
}
.down h1{
  padding-left: 15px;
}
.details li{
  list-style-type: square;
}
  </style>
</body>

</html><?php }
}
