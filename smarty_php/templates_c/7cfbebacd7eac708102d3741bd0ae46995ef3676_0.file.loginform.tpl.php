<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-25 02:42:08
  from '/Users/sam_chong/Documents/Github/smarty_php/templates/blade/loginform.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6d59007964c8_48813800',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7cfbebacd7eac708102d3741bd0ae46995ef3676' => 
    array (
      0 => '/Users/sam_chong/Documents/Github/smarty_php/templates/blade/loginform.tpl',
      1 => 1600678887,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6d59007964c8_48813800 (Smarty_Internal_Template $_smarty_tpl) {
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
            <button name="login" value="1" type="submit" class="btn btn-primary btn-block">登入</button>
        </form>
    </div>
    </div>
    </div>
</div> <!-- ./row -->
</div> <!-- ./container --><?php }
}
