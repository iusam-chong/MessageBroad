<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-21 08:55:11
  from '/Users/sam_chong/Documents/Github/smarty_php/templates/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f686a6fad38c3_69405713',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd97bb21015a377a2c641a8b905e9139ede6bdd08' => 
    array (
      0 => '/Users/sam_chong/Documents/Github/smarty_php/templates/home.tpl',
      1 => 1600677678,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:blade/navbar.tpl' => 1,
    'file:blade/postlist.tpl' => 1,
    'file:blade/postForm.tpl' => 1,
  ),
),false)) {
function content_5f686a6fad38c3_69405713 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>留言板 - 留下您的偉論</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>

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
