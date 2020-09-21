<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-21 09:06:59
  from '/Users/sam_chong/Documents/Github/smarty_php/templates/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f686d33599304_10092925',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99a0eb55934152531b7375c0cf6446e42215e79e' => 
    array (
      0 => '/Users/sam_chong/Documents/Github/smarty_php/templates/login.tpl',
      1 => 1600678920,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:blade/navbar.tpl' => 1,
    'file:blade/loginform.tpl' => 1,
  ),
),false)) {
function content_5f686d33599304_10092925 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入 - 留言板</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    
    <?php $_smarty_tpl->_subTemplateRender("file:blade/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("file:blade/loginform.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}
