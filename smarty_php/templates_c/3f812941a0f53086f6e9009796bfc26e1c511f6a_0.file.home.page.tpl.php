<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-21 07:08:51
  from '/Users/sam_chong/Documents/Github/smarty_php/templates/home.page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f685183ca9db2_10631966',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f812941a0f53086f6e9009796bfc26e1c511f6a' => 
    array (
      0 => '/Users/sam_chong/Documents/Github/smarty_php/templates/home.page.tpl',
      1 => 1600672128,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f685183ca9db2_10631966 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>留言板 - 留下您的偉論</title>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>


    require_once('./views/blade/navbar.page.php');
    require_once('./views/blade/broadForm.page.php');
    require_once('./views/blade/broad.page.php');


<?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">

<?php echo '</script'; ?>
>
</body>
</html><?php }
}
