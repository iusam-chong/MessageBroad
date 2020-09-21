<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-21 08:55:11
  from '/Users/sam_chong/Documents/Github/smarty_php/templates/blade/postForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f686a6faf5a69_81542976',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3edf76391ea5736afdd31a20799ced981a1af96' => 
    array (
      0 => '/Users/sam_chong/Documents/Github/smarty_php/templates/blade/postForm.tpl',
      1 => 1600678508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f686a6faf5a69_81542976 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['loginStatus']->value) {?>
<div class="container">
    <div class="row" style="padding-bottom: 20px;">
    <div class="col-lg-8 col-lg-offset-2">
    <div class="thumbnail">
    <div class="caption">
        <form method="post" action="">
            <div class="form-group">
                <label for="textarea">新增留言</label>
                <textarea id="textarea" name="message" rows="3" class="form-control" style="resize:none;" required="required"></textarea>
            </div>
            <button class="btn btn-success" type="submit" name="createPost" value="1">發佈</button>
        </form>
    </div>
    </div>
    </div>
    </div>
</div>
<?php }
}
}
