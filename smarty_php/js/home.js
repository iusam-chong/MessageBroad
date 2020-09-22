$(function (){
    
    showPagination(0);

    $(document).on('click','.pagi',function(e){
        e.preventDefault();
        //console.log($(this).attr('id'));
        var page = $(this).attr('id');
        $.ajax({
            type:'GET',
            url:'./displayBoardList.php',
            data: {page: page},
            success:function(data){
                //console.log('access displayBoardList');
                $('#postList').empty();
                $('#postList').append(data);

                $('#pagination').empty();
                showPagination(page);

            }, error(){
                alert('換頁失敗！');
            }
        });
    });

    $('#idPostForm').submit(function(e) {
        e.preventDefault();
        console.log('submit form');
        var formData = $(this).serialize();

        $.ajax({
            type:'POST',
            url:'./postCreate.php',
            data: formData,
            success:function(result) {
                console.log(result);
            }
        })
    });

});

function showPagination(page) {
    $.ajax({
        type:'GET',
        url:'./paginationShow.php',
        data: {page: page},
        success:function(data){
            //console.log('access paginationShow.php '+page);
            $('#pagination').append(data);
        }, error(){
            alert('載入失敗，您無法換頁了');
        }
    });
};


