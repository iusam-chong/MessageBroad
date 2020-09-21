<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-21 09:06:55
  from '/Users/sam_chong/Documents/Github/smarty_php/templates/register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f686d2fe15ba7_32424888',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '984d3a72aac540244535eca4d848479331d39642' => 
    array (
      0 => '/Users/sam_chong/Documents/Github/smarty_php/templates/register.tpl',
      1 => 1600679155,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:blade/navbar.tpl' => 1,
    'file:blade/registerform.tpl' => 1,
  ),
),false)) {
function content_5f686d2fe15ba7_32424888 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>註冊 - 留言板</title>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
        
    <?php $_smarty_tpl->_subTemplateRender("file:blade/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("file:blade/registerform.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
</body>
</html><?php }
}
