<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-21 17:50:09
  from 'C:\Users\ALPHA\Documents\Github\smarty_php\templates\post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f68cbb16d7508_23850771',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65eec7647691e33eae5d4bba83ce826612d9b9ec' => 
    array (
      0 => 'C:\\Users\\ALPHA\\Documents\\Github\\smarty_php\\templates\\post.tpl',
      1 => 1600703403,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:blade/header.tpl' => 1,
    'file:blade/navbar.tpl' => 1,
    'file:blade/postbody.tpl' => 1,
  ),
),false)) {
function content_5f68cbb16d7508_23850771 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:blade/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:blade/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:blade/postbody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    $(function(){
        //$(".messageInput").hide();

        //var regex = /<br\s*[\/]<?php echo '?>';?>
/gi;

        // $(".editBtn").click(function(){
        //     //$(this).closest(".editIcon").hide();
        //     //$(this).closest(".editStatus").find(".messageBody").hide();
        //     //$(this).closest(".editStatus").find(".messageInput").show();

        //     // var str = $(".inputField").val();
        //     // var regex = /<br\s*[\/]<?php echo '?>';?>
/gi;
        //     // $(".inputField").val(str.replace(regex, "\n"));

        //     var text = $(this).closest(".editStatus").find(".inputField").val();
        //     // text = text.replace(regex, "");

        //     // $(this).closest(".editStatus").find(".inputField").val("").focus().val(text);
        //     $(this).closest(".editStatus").find(".inputField").focus();
        // })

        $(".modal").on("shown.bs.modal", function() {
            var text = $(this).find(".inputField").val();
            $(this).find(".inputField").val("").focus().val(text);
        })

        $(".messageInput").keydown(function(event){
            // keycode vs which search in google
            // if (event.which === 27) {
            //     $(this).hide();
            //     $(this).closest(".editStatus").find(".messageBody").show();
            //     $(this).closest(".editStatus").find(".editIcon").show();
            // }

            if (event.which === 13 && !event.shiftKey) {
                
                $(this).find('form').submit();
                //return false;
                //event.preventDefault();
            }
        })
    })
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
