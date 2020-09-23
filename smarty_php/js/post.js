$(function() {

    $('textarea').keyup(function() {

        BtnStatus($(this));
    });

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
    })

    $(".modal").on("shown.bs.modal", function() {

        var text = $(this).find(".inputField").val();
        $(this).find(".inputField").val("").focus().val(text);

    });

    $(".enterSubmit").keydown(function(event){
        
        if (event.which === 13 && !event.shiftKey) {

            var content = $(this).find('.inputField').val();
            var contentLength = $(this).find('.inputField').val().trim().length;

            if (content !== null && contentLength > 0) {
                $(this).find('form').submit();
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
            else if (response.status === 2) {
                alert(response.message);
                window.location.href = './login.php';
            }
            else if (response.status === 3) {
                alert(response.message);
                window.location.href = './index.php';
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
                alert(response.message);
                window.location.href = './index.php';
            }
            else if (response.status === 2) {
                alert(response.message);
                window.location.href = './login.php';
            }
            else if (response.status === 3) {
                alert(response.message);
                window.location.href = './index.php';
            }
        }, error() {
            alert('系統出錯,無法修改貼文');
        }
    })
}

function BtnStatus(textarea) {

    BtnDisable(textarea);
    
    if (textarea.val().trim().length > 0) {

        // console.log('keyup');
        // console.log(textarea.val().trim().length);

        textarea.closest('#messageInput').find('#submitBtn').removeAttr('disabled');
    }
}

function BtnDisable(textarea) {

    textarea.closest('#messageInput').find('#submitBtn').attr('disabled',true);
}

function escapeHtml(unsafe) {

    return unsafe
         .replace(/&/g, "&amp;")
         .replace(/</g, "&lt;")
         .replace(/>/g, "&gt;")
         .replace(/"/g, "&quot;")
         .replace(/'/g, "&#039;");
 }