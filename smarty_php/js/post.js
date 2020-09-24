import showComment from '/smarty_php/js/showComment.js';

$(function() {

    console.log('is normal check 12345678910');

    $('#editPostForm').submit(function(e) {

        e.preventDefault();
        var element = $(this);
        if ($(this).find('textarea').val().trim().length > 0) {

            editPost(element);
        }
    });

    $('#dltPostForm').submit(function(e) {

        e.preventDefault();
        dltPost($(this));
    });

    $('#newCmntForm').submit(function(e) {

        e.preventDefault();
        if ($(this).find('textarea').val().trim().length > 0) {

            newComment($(this));
        }
    });

    $(".dltSubmit").click(function(e) {

        e.preventDefault();
        $(this).closest('form').submit();
    });

    $('.dltCommentForm').submit(function(e) {

        e.preventDefault();
        deleteComment($(this));
    });

    $(".editSubmit").click(function(e) {
        
        e.preventDefault();

        if ($(this).closest('form').find('textarea').val().trim().length > 0) {

            $(this).closest('form').submit();
        }
    });

    $(".editCommentForm").submit(function(e) {
        
        e.preventDefault();
        
        console.log($(this).find('textarea').val());

        editComment($(this));
    });
    
    $(".modal").on("shown.bs.modal", function() {

        var text = $(this).find(".inputField").val();
        $(this).find(".inputField").val("").focus().val(text);
    });

    $(document).on("keyup", 'textarea', function() {
        console.log('keyup');
        BtnStatus($(this));
    });

    $(document).on("keydown", ".enterSubmit", function(event){
    //$(".enterSubmit").keydown(function(event){

        if (event.which === 13 && !event.shiftKey) {

            var content = $(this).find('.inputField').val();
            var contentLength = $(this).find('.inputField').val().trim().length;

            console.log(contentLength);
            if (content !== null && contentLength > 0) {

                $(this).closest('form').submit();
            }
        }
    });
})

function editPost(element) {

    var formData = element.serialize();

    $.ajax({
        type:'POST',
        url:'./postModify.php',
        data: formData,
        dataType: 'JSON',
        success:function(response) {
            
            if (response.status === 1) {
                //console.log(response.newText);
                $(element).find('.inputField').val(response.newText);
                $(element).closest('.editStatus').find('#postText').empty().append(escapeHtml(response.newText));
                $(element).closest('.modal').modal('hide');
            }
            else {
                ajaxFail(response);
            }
        }, error() {
            alert('系統出錯,無法修改貼文');
        }
    })
}

function dltPost(element) {

    var formData = element.serialize();

    $.ajax({
        type:'POST',
        url:'./postDelete.php',
        data: formData,
        dataType: 'JSON',
        success:function(response) {
            
            if (response.status === 1) {
                //alert(response.message);
                window.location.href = './index.php';
            }
            else {
                ajaxFail(response);
            }
        }, error() {
            alert('系統出錯,無法刪除貼文');
        }
    })
}

function newComment(element) {

    var formData = element.serialize();

    $.ajax({
        type:'POST',
        url:'./commentCreate.php',
        data: formData,
        dataType: 'JSON',
        success:function(response) {
            if (response.status === 1) {
                console.log('success function');
                console.log(response.content);

                element.find('textarea').val('');
                BtnDisable(element);

                // $('#messageList').append(escapeHtml(response.content.message_content));
                $('#messageList').append(showComment(response.content));
                //$('#messageList').find('caption').last().toggle("highlight", {}, 3000);
            }
            else {
                ajaxFail(response);
            }
        }, error(){
            alert('無法新增貼文');
        }
    })
}

function editComment(element) {
    
    var formData = element.serialize();

    console.log(formData);
    //alert();
    
    $.ajax({
        type:'POST',
        url:'./commentEdit.php',
        data: formData,
        dataType: 'JSON',
        success:function(response) {
            if (response.status === 1) {
                console.log('success function');
                console.log(response.newText);

                $(element).find('.inputField').val(response.newText);
                $(element).closest('.editStatus').find('#commentText').empty().append(escapeHtml(response.newText));
                $(element).closest('.modal').modal('hide');
            }
            else {
                ajaxFail(response);
            }
        }, error(){
            alert('無法新增貼文');
        }
    })
}

function deleteComment(element) {
    
    var formData = element.serialize();

    console.log(formData);
    
    $.ajax({
        type:'POST',
        url:'./commentDelete.php',
        data: formData,
        dataType: 'JSON',
        success:function(response) {
            if (response.status === 1) {
                
                $(element).closest('.editStatus').remove();
                $('.modal-backdrop').remove();
                $(document.body).removeClass("modal-open");
            }
            else {
                ajaxFail(response);
            }
        }, error(){
            alert('無法刪除貼文');
        }
    })
}

function ajaxFail(response) {
    if (response.status === 2) {
        //console.log('user not login');
        alert(response.message);
        window.location.href = './login.php';
    }
    else if (response.status === 3) {
        //console.log('create post fail');
        alert(response.message);
        window.location.href = './index.php';
    }
}

function BtnStatus(textarea) {

    BtnDisable(textarea);
    if (textarea.val().trim().length > 0) {

        textarea.closest('#messageInput').find('.submitBtn').removeAttr('disabled');
    }
}

function BtnDisable(textarea) {

    textarea.closest('#messageInput').find('.submitBtn').attr('disabled',true);
}

export function escapeHtml(unsafe) {

    return unsafe
         .replace(/&/g, "&amp;")
         .replace(/</g, "&lt;")
         .replace(/>/g, "&gt;")
         .replace(/"/g, "&quot;")
         .replace(/'/g, "&#039;");
}