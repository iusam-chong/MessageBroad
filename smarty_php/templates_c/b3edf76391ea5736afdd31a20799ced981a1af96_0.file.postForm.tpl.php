<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-25 02:41:09
  from '/Users/sam_chong/Documents/Github/smarty_php/templates/blade/postForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6d58c5f0e664_30379341',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3edf76391ea5736afdd31a20799ced981a1af96' => 
    array (
      0 => '/Users/sam_chong/Documents/Github/smarty_php/templates/blade/postForm.tpl',
      1 => 1600907530,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6d58c5f0e664_30379341 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['loginStatus']->value) {?>
<div class="container">
    <div class="row">
    <div class="col-lg-8 col-lg-offset-2">
    <div class="thumbnail">
    <div class="caption">
        <form method="post" action="" id="idPostForm">
            <div class="form-group">
                <label for="textarea">新增貼文</label>
                <textarea id="textarea" name="message" rows="3" class="form-control inputField" style="resize:none;" required="required"></textarea>
            </div>
            <button id="submitBtn" class="btn btn-success" type="submit" disabled>發佈</button>
        </form>
    </div>
    </div>
    </div>
    </div>
</div>
<?php }
}
}
