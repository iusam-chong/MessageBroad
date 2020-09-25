<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-25 02:41:09
  from '/Users/sam_chong/Documents/Github/smarty_php/templates/blade/printpost.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6d58c5f25d64_91588336',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d4a69cbd0a0e01d54d28f7e99691b6bdc7f6d16' => 
    array (
      0 => '/Users/sam_chong/Documents/Github/smarty_php/templates/blade/printpost.tpl',
      1 => 1600759181,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6d58c5f25d64_91588336 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['postList']->value, 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
        <div class="thumbnail">
        <div class="caption">
            <p><?php echo $_smarty_tpl->tpl_vars['post']->value['user_name'];?>
</p>
            <p><span class="glyphicon glyphicon-time"></span> <?php echo $_smarty_tpl->tpl_vars['post']->value['create_time'];?>
</p>
            <!-- nl2br(htmlspecialchars($postMessage, ENT_COMPAT))-->
            <pre style="border: 0; background-color: transparent; resize:none; white-space: pre-wrap;"><p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['message']);?>
</p></pre>
            <div class="row">
            <div class="col pull-right">
                <span style="padding-right:15px">
                <button form="goPost" type="submit" name="postId" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['broad_id'];?>
" class="btn btn-primary">留言 
                <span class="badge progress-bar-primary"><?php echo $_smarty_tpl->tpl_vars['post']->value['message_count'];?>
</span>
                </button>
                </span>
            </div>
            </div>
        </div>
        </div>
        </div>
    </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
