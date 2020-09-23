<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-23 15:49:03
  from 'C:\Users\ALPHA\Documents\Github\smarty_php\templates\post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6b524f762ed3_51673934',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65eec7647691e33eae5d4bba83ce826612d9b9ec' => 
    array (
      0 => 'C:\\Users\\ALPHA\\Documents\\Github\\smarty_php\\templates\\post.tpl',
      1 => 1600860380,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:blade/header.tpl' => 1,
    'file:blade/navbar.tpl' => 1,
    'file:blade/postbody.tpl' => 1,
    'file:blade/footer.tpl' => 1,
  ),
),false)) {
function content_5f6b524f762ed3_51673934 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:blade/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:blade/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:blade/postbody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:blade/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
