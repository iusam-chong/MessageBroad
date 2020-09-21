<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-21 09:11:42
  from '/Users/sam_chong/Documents/Github/smarty_php/templates/blade/postlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f686e4e096028_51306097',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4c4eace1f507be5978a55d062383dd28597d940' => 
    array (
      0 => '/Users/sam_chong/Documents/Github/smarty_php/templates/blade/postlist.tpl',
      1 => 1600679499,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f686e4e096028_51306097 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">

<form id="goPost" method="post" action=""></form>
<?php
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
        <p style="word-wrap: break-word;"><?php echo htmlspecialchars(nl2br($_smarty_tpl->tpl_vars['post']->value['message']));?>
</p>
        <div class="row">
        <div class="col pull-right">
            <span style="padding-right:15px">
            <button form="goPost" type="submit" name="postId" value="<?php echo '<?=';?>
$postId<?php echo '?>';?>
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
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</div><!-- /.container --><?php }
}
