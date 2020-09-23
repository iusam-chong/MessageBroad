$(function() {
   
    showPagination(0);

    $(document).on('click','.pagi',function(e){
        //console.log($(this).attr('id'));
        e.preventDefault();
        var page = $(this).attr('id');
        changeBroad(page);
    });

    $('.inputField').keyup(function() {
        BtnStatus($(this));
    });

    $('#idPostForm').submit(function(e) {
        
        e.preventDefault();
        if ($('#textarea').val().trim().length > 0) {

            var formData = $(this).serialize();
            $.ajax({
                type:'POST',
                url:'./postCreate.php',
                data: formData,
                dataType: 'JSON',
                success:function(response) {
                    if (response.status === 1) {
                        //console.log('success function');
                        $('#textarea').val('');
                        BtnDisable();
                        changeBroad(0);
                    }
                    else if (response.status === 2) {
                        //console.log('user not login');
                        alert(response.message);
                        window.location.href = './login.php';
                    }
                    else if (response.status === 3) {
                        //console.log('create post fail');
                        alert(response.message);
                        window.location.href = './index.php';
                    }
                }, error(){
                    alert('無法新增貼文');
                }
            })
        }
    });
});

function showPagination(page) {
    $.ajax({
        type:'GET',
        url:'./paginationShow.php',
        data: {page: page},
        success:function(data) {
            //console.log('access paginationShow.php '+page);
            $('#pagination').append(data);
        }, error(){
            alert('載入失敗，您無法換頁了');
        }
    });
};

function changeBroad(page) {
    $.ajax({
        type:'GET',
        url:'./displayBoardList.php',
        data: {page: page},
        success:function(data) {
            //console.log('access displayBoardList');
            $('#postList').empty();
            $('#postList').append(data);

            $('#pagination').empty();
            showPagination(page);

        }, error(){
            alert('換頁失敗！');
        }
    });
}

function BtnStatus(element) {

    BtnDisable(); 
    
    if (element.val().trim().length > 0) {
        //console.log(element.val().trim().length);
        element.closest('#idPostForm').find('#submitBtn').removeAttr('disabled');
    }
}

function BtnDisable() {
    $('#submitBtn').attr('disabled',true);
}


