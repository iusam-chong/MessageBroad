<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-25 02:41:09
  from '/Users/sam_chong/Documents/Github/smarty_php/templates/blade/postlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6d58c5f13f43_47832061',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4c4eace1f507be5978a55d062383dd28597d940' => 
    array (
      0 => '/Users/sam_chong/Documents/Github/smarty_php/templates/blade/postlist.tpl',
      1 => 1600763119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:blade/printpost.tpl' => 1,
  ),
),false)) {
function content_5f6d58c5f13f43_47832061 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">

    <form id="goPost" method="post" action=""></form>
    <div id="postList">
        <?php $_smarty_tpl->_subTemplateRender("file:blade/printpost.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>


    <div class="row">
    <div class="col-lg-8 col-lg-offset-2 text-center">
    <nav aria-label="Page navigation">
      <ul class="pagination" id="pagination">
            </ul>
    </nav>
    </div>
    </div>

</div><!-- /.container -->

<?php echo '<script'; ?>
 src="./js/home.js" defer><?php echo '</script'; ?>
><?php }
}
