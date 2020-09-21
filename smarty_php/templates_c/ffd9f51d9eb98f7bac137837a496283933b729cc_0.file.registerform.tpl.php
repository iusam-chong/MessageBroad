<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-21 09:25:23
  from '/Users/sam_chong/Documents/Github/MessageBroad/smarty_php/templates/blade/registerform.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f68718350f3c3_13668386',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffd9f51d9eb98f7bac137837a496283933b729cc' => 
    array (
      0 => '/Users/sam_chong/Documents/Github/MessageBroad/smarty_php/templates/blade/registerform.tpl',
      1 => 1600679337,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f68718350f3c3_13668386 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
<div class="row">
    <div class="col-sm-6 col-sm-offset-3">
    <div class="thumbnail">
    <div class="caption">
        <form method="post" action="">
            <div class="form-group">
                <label for="user-name">帳號</label>
                <input name="textUserName" maxlength="16" type="text" class="form-control" id="user-name">
            </div>
            <div class="form-group">
                <label for="pwd">密碼</label>
                <input name="textPassword" maxlength="16" type="password" class="form-control" id="pwd">
            </div>
            <div class="form-group">
                <label for="pwd">密碼確認</label>
                <input name="textPasswordConfirm" maxlength="16" type="password" class="form-control" id="pwdconfirm">
            </div>
            <button name="register" value="1" type="submit" class="btn btn-primary btn-block">註冊</button>
        </form>
    </div>
    </div>
    </div>
</div>
</div><?php }
}
