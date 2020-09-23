$(function() {

    $('#editPostForm').submit(function(e) {
       
        e.preventDefault();
        var element = $(this);
        var formData = $(this).serialize();
        
        $.ajax({
            type:'POST',
            url:'./postModify.php',
            data: formData,
            dataType: 'JSON',
            success:function(response) {
                
                if (response.status === 1) {
                    console.log(response.newText);
                    $(element).find('.inputField').val(response.newText);
                    $(element).closest('.editStatus').find('#postText').empty();
                    $(element).closest('.editStatus').find('#postText').append(response.newText);
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
    });

    $(".modal").on("shown.bs.modal", function() {

        var text = $(this).find(".inputField").val();
        $(this).find(".inputField").val("").focus().val(text);
    });

    $(".messageInput").keydown(function(event){
        
        if (event.which === 13 && !event.shiftKey) {

            var content = $(this).find('.inputField').val();
            var contentLength = $(this).find('.inputField').val().trim().length;

            if (content !== null && contentLength > 0) {
                $(this).find('form').submit();
            }
        }
    });
})
