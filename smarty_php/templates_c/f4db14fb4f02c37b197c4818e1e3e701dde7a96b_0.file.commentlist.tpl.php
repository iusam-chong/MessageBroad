<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-25 02:43:23
  from '/Users/sam_chong/Documents/Github/smarty_php/templates/blade/commentlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6d594b428293_03666531',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4db14fb4f02c37b197c4818e1e3e701dde7a96b' => 
    array (
      0 => '/Users/sam_chong/Documents/Github/smarty_php/templates/blade/commentlist.tpl',
      1 => 1600940014,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6d594b428293_03666531 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['commentList']->value, 'comment');
$_smarty_tpl->tpl_vars['comment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->do_else = false;
?>
<div class="thumbnail editStatus" id="aComment">
<div class="caption bg-light">
    <div class="row">
        <div class="col-sm-8">
            <p><?php echo $_smarty_tpl->tpl_vars['comment']->value['user_name'];?>
</p>
            <p><span class="glyphicon glyphicon-time"></span> <?php echo $_smarty_tpl->tpl_vars['comment']->value['create_time'];?>
</p>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['comment']->value['user_id'] === $_smarty_tpl->tpl_vars['userId']->value) {?>
            <div class="col-sm-4 pull-right editIcon">
            <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">    
                    <span class="glyphicon glyphicon-th-large"></span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu">
                <li>
                    <button type="button" class="btn btn-link btn-block editBtn" data-toggle="modal" data-target="#editComment<?php echo $_smarty_tpl->tpl_vars['comment']->value['message_id'];?>
">
                        <span class="glyphicon glyphicon-pencil"></span> 修改
                    </button>
                </li>
                <li>  
                    <button type="button" class="btn btn-link btn-block editBtn" data-toggle="modal" data-target="#dltComment<?php echo $_smarty_tpl->tpl_vars['comment']->value['message_id'];?>
">
                        <span class="glyphicon glyphicon-trash"></span> 刪除
                    </button>
                </li>
                </ul>
            </li>
            </ul>
            </div>

            <div class="modal fade" id="editComment<?php echo $_smarty_tpl->tpl_vars['comment']->value['message_id'];?>
" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content" id="messageInput">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">修改留言</h4>
                </div>
                <form method="post" action="" id="editCommentForm" class="editCommentForm">
                    <div class="modal-body enterSubmit">
                        <div class="form-group">
                            <textarea name="editCommentText" required="required" class="form-control inputField" rows="3" style="resize:none;" oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"'><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['message_content']);?>
</textarea>
                        </div>
                            <input type="hidden" name="editComment" value="<?php echo $_smarty_tpl->tpl_vars['comment']->value['message_id'];?>
" style="display: none"/>
                            <input type="hidden" name="broadId" value="<?php echo $_smarty_tpl->tpl_vars['comment']->value['broad_id'];?>
" style="display: none"/>
                            <p style="font-size:10px;" class="text-muted">取消<span class="text-danger">ESC</span> 確認修改<span class="text-success">ENTER</span></p>
                    </div>
                    <div class="modal-footer">
                        <button id="editSubmit" class="btn btn-success editSubmit submitBtn" value="<?php echo $_smarty_tpl->tpl_vars['comment']->value['broad_id'];?>
">確認修改</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">取消</button>
                    </div>
                </form>
            </div>
            </div>
            </div>

            <div class="modal fade" id="dltComment<?php echo $_smarty_tpl->tpl_vars['comment']->value['message_id'];?>
" role="dialog">
            <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">刪除留言</h4>
                </div>
                <div class="modal-body">
                    進行此操作後資料將無法復原，請問確定刪除嗎?
                </div>
                <div class="modal-footer">
                    <form method="post" action="" class="dltCommentForm">
                        <input type="hidden" name="dltComment" value="<?php echo $_smarty_tpl->tpl_vars['comment']->value['message_id'];?>
" style="display: none"/>
                        <input type="hidden" name="broadId" value="<?php echo $_smarty_tpl->tpl_vars['comment']->value['broad_id'];?>
" style="display: none"/>
                        <button type="submit" class="btn btn-success dltSubmit">確認</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">取消</button>
                    </form>
                </div>
            </div>
            </div>
            </div>
        <?php }?>
    </div> <!-- end of row -->

    <div class="messageBody">
    <pre style="border: 0; background-color: transparent; resize:none; white-space: pre-wrap;"><p id="commentText"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['message_content']);?>
</p></pre>
    </div>

</div>
</div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
