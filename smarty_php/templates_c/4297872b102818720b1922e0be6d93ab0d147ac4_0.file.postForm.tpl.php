<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-21 12:18:50
  from 'C:\Users\ALPHA\Documents\Github\MessageBroad\smarty_php\templates\blade\postForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f687e0a2c67e4_77275145',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4297872b102818720b1922e0be6d93ab0d147ac4' => 
    array (
      0 => 'C:\\Users\\ALPHA\\Documents\\Github\\MessageBroad\\smarty_php\\templates\\blade\\postForm.tpl',
      1 => 1600683249,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f687e0a2c67e4_77275145 (Smarty_Internal_Template $_smarty_tpl) {
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
