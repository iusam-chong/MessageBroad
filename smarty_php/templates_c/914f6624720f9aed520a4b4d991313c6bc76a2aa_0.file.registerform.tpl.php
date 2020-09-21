<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-21 12:50:16
  from 'C:\Users\ALPHA\Documents\Github\smarty_php\templates\blade\registerform.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6885689228c6_48104462',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '914f6624720f9aed520a4b4d991313c6bc76a2aa' => 
    array (
      0 => 'C:\\Users\\ALPHA\\Documents\\Github\\smarty_php\\templates\\blade\\registerform.tpl',
      1 => 1600683249,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6885689228c6_48104462 (Smarty_Internal_Template $_smarty_tpl) {
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
