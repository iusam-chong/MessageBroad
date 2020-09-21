<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-21 09:33:18
  from '/Users/sam_chong/Documents/Github/MessageBroad/smarty_php/templates/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f68735e2b5d03_93386015',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e964f0151f456d2236c1ac99afd878a9b5281505' => 
    array (
      0 => '/Users/sam_chong/Documents/Github/MessageBroad/smarty_php/templates/home.tpl',
      1 => 1600680736,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:blade/header.tpl' => 1,
    'file:blade/navbar.tpl' => 1,
    'file:blade/postlist.tpl' => 1,
    'file:blade/postForm.tpl' => 1,
  ),
),false)) {
function content_5f68735e2b5d03_93386015 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php $_smarty_tpl->_subTemplateRender("file:blade/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("file:blade/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("file:blade/postlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("file:blade/postForm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
