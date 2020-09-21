<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-21 09:16:16
  from '/Users/sam_chong/Documents/Github/MessageBroad/smarty_php/templates/blade/navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f686f60db12b2_42879814',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8225f5ac7ae3a9ecd4d034ed2a3f4ee0521c9e42' => 
    array (
      0 => '/Users/sam_chong/Documents/Github/MessageBroad/smarty_php/templates/blade/navbar.tpl',
      1 => 1600674319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f686f60db12b2_42879814 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-default">
<div class="container-fluid">
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="home">留言板</a>
</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
    <li class="active"><a href="home">全部<span class="sr-only">(current)</span></a></li>
    </ul>

    <ul class="nav navbar-nav navbar-right">
    <?php if ($_smarty_tpl->tpl_vars['loginStatus']->value) {?>
        <form id="logout" method="post" action=""></form>
        
        <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
        <span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?php echo $_smarty_tpl->tpl_vars['userName']->value;?>
 <span class="caret"></span></a>
        <ul class="dropdown-menu">
        <li><a href="#"><button type="submit" form="logout" name="logout" class="btn btn-link btn-block">登出</button></a></li>
        </ul>
        </li>
    <?php } else { ?>
        <li><a href="login"><span class="glyphicon glyphicon-log-in"></span> 登入</a></li>
        <li><a href="register"><span class="glyphicon glyphicon-user"></span> 註冊</a></li>
    <?php }?>
    </ul>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav><?php }
}
