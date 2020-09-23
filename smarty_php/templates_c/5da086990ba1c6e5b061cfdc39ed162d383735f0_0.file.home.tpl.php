<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-23 15:15:34
  from 'C:\Users\ALPHA\Documents\Github\smarty_php\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6b4a76726588_09426706',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5da086990ba1c6e5b061cfdc39ed162d383735f0' => 
    array (
      0 => 'C:\\Users\\ALPHA\\Documents\\Github\\smarty_php\\templates\\home.tpl',
      1 => 1600860380,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:blade/header.tpl' => 1,
    'file:blade/navbar.tpl' => 1,
    'file:blade/postForm.tpl' => 1,
    'file:blade/postlist.tpl' => 1,
    'file:blade/footer.tpl' => 1,
  ),
),false)) {
function content_5f6b4a76726588_09426706 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:blade/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:blade/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:blade/postForm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:blade/postlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:blade/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
