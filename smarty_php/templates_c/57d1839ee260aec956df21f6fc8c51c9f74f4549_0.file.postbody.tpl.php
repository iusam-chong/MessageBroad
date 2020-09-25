<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-25 02:43:23
  from '/Users/sam_chong/Documents/Github/smarty_php/templates/blade/postbody.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6d594b40df30_78314541',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57d1839ee260aec956df21f6fc8c51c9f74f4549' => 
    array (
      0 => '/Users/sam_chong/Documents/Github/smarty_php/templates/blade/postbody.tpl',
      1 => 1600940806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:blade/commentlist.tpl' => 1,
  ),
),false)) {
function content_5f6d594b40df30_78314541 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <div class="row">
    <div class="col-lg-8 col-lg-offset-2">
    <div class="thumbnail">
    <div class="caption">
    <div class="editStatus">
        <div class="row">
            <div class="col-sm-8">
                <p><?php echo $_smarty_tpl->tpl_vars['post']->value['user_name'];?>
</p>
                <p><span class="glyphicon glyphicon-time"></span> <?php echo $_smarty_tpl->tpl_vars['post']->value['create_time'];?>
</p>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['post']->value['user_id'] === $_smarty_tpl->tpl_vars['userId']->value) {?>
                <div class="col-sm-4 pull-right editIcon">
                <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">    
                        <span class="glyphicon glyphicon-th-large"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu">
                    <li>
                        <button class="btn btn-link btn-block editBtn" data-toggle="modal" data-target="#editPost<?php echo $_smarty_tpl->tpl_vars['post']->value['broad_id'];?>
">
                            <span class="glyphicon glyphicon-pencil"></span> 修改
                        </button>
                    </li>
                        <li>
                        <button class="btn btn-link btn-block" data-toggle="modal" data-target="#dltPost<?php echo $_smarty_tpl->tpl_vars['post']->value['broad_id'];?>
">
                            <span class="glyphicon glyphicon-trash"></span> 刪除
                        </button>
                        </li>
                    </ul>
                </li>
                </ul>
                </div>

                <div class="modal fade" id="editPost<?php echo $_smarty_tpl->tpl_vars['post']->value['broad_id'];?>
" role="dialog">
                <div class="modal-dialog">
                <div class="modal-content" id="messageInput">
                    <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">修改貼文</h4>
                    </div>
                    <form method="post" action="" id="editPostForm">
                        <div class="modal-body">
                            <div class="enterSubmit">
                            <div class="form-group">
                            <textarea name="editPostText" required="required" class="form-control inputField" rows="5" style="resize:none;" oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"'><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['message']);?>
</textarea>
                            </div>
                            <input type="text" name="editPostId" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['broad_id'];?>
" style="display: none"/>
                            
                            <p style="font-size:10px;" class="text-muted">取消<span class="text-danger">ESC</span> 確認修改<span class="text-success">ENTER</span></p>
                            </div>
                        </div>
                        <div class="modal-footer">
                        <button type="submit" id="submitBtn" class="btn btn-success submitBtn" form="editPostForm">確認修改</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">取消</button>
                        </div>
                    </form>
                </div>
                </div>
                </div>

                <div class="modal fade" id="dltPost<?php echo $_smarty_tpl->tpl_vars['post']->value['broad_id'];?>
" role="dialog">
                <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">刪除貼文</h4>
                    </div>
                    <div class="modal-body">
                        進行此操作後資料將無法復原，請問確定刪除嗎?
                    </div>
                    <div class="modal-footer">
                        <form method="post" action="" id="dltPostForm">
                            <input type="text" name="dltPostId" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['broad_id'];?>
" style="display: none"/>
                            <button type="submit" class="btn btn-success">確認</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">取消</button>
                        </form>
                    </div>
                </div>
                </div>
                </div>
            <?php }?>
        </div><!--./row-->

        <div class="messageBody">
        <pre style="border: 0; background-color: transparent; resize:none; white-space: pre-wrap;"><p id="postText"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['message']);?>
</p></pre>
        </div>
        
    </div><!--./editStatus-->
    
    <div id="messageList">
    <?php $_smarty_tpl->_subTemplateRender("file:blade/commentlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>

    </div><!--./caption-->
    </div><!--./thumbnail-->
    </div><!--./col-->
    </div><!--./row-->

    <?php if ($_smarty_tpl->tpl_vars['loginStatus']->value) {?>
        <div class="row" style="padding-bottom: 20px;">
        <div class="col-lg-8 col-lg-offset-2">
        <div class="thumbnail">
        <div class="caption">
            <div class="thumbnail" style="border: 0 none;">
            <div class="caption">
                <div class="row" id="messageInput">
                <form method="post" action="" id="newCmntForm">
                    <div class="col-sm-12">
                        <div class="form-group">
                        <textarea name="newCommentText" rows="3" required="required" class="form-control" placeholder="輸入您的留言" style="resize:none;"></textarea>
                        <input type="hidden" name="newComment" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['broad_id'];?>
" style="display: none"/>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <button type="submit" id="submitBtn" class="btn btn-success btn-block submitBtn" disabled>留言</button>
                    </div>
                </form>
                </div>
            </div>
            </div>
        </div><!--./caption-->
        </div><!--./thumbnail-->
        </div><!--./col-->
        </div><!--./row-->
    <?php }?>
        
</div><!--./container-->
<?php echo '<script'; ?>
 type="module" src="./js/post.js" defer><?php echo '</script'; ?>
><?php }
}
