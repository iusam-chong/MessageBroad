<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-25 02:33:46
  from '/Users/sam_chong/Documents/Github/smarty_php/templates/blade/registerform.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6d570a6c1bc2_37027305',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4ff22d9bbc569dbdccfe66029e714418deb7091' => 
    array (
      0 => '/Users/sam_chong/Documents/Github/smarty_php/templates/blade/registerform.tpl',
      1 => 1600997043,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6d570a6c1bc2_37027305 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
<div class="row">
    <div class="col-sm-6 col-sm-offset-3">
    <div class="thumbnail">
    <div class="caption">
        <form method="post" action="">
            <div class="form-group">
                <label for="user-name">帳號</label>
                <input name="textUserName" maxlength="16" type="text" class="form-control" id="user-name" required="required"/>
            </div>
            <span class="text-danger"><p id="textUserNameErr"></p></span>
            <div class="form-group">
                <label for="pwd">密碼</label>
                <input name="textPassword" maxlength="16" type="password" class="form-control" id="pwd" required="required"/>
            </div>
            <span class="text-danger"><p id="textPasswordErr"></p></span>
            <div class="form-group">
                <label for="pwdconfirm">密碼確認</label>
                <input name="textPasswordConfirm" maxlength="16" type="password" class="form-control" id="pwdconfirm" required="required"/>
            </div>
            <span class="text-danger"><p id="textPasswordConfirmErr"></p></span>
            <button name="register" value="1" type="submit" class="btn btn-primary btn-block" id="btnSubmit">註冊</button>
        </form>
    </div>
    </div>
    </div>
</div>
</div>
<?php echo '<script'; ?>
 type="module" src="./js/register.js" defer><?php echo '</script'; ?>
><?php }
}
