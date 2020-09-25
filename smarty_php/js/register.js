$(function() {

    console.log('working fine 12');
    // console.log(/^([A-Za-z0-9]{5,})$/.test('Aaaaa')); // false

    // console.log(/^([A-Za-z0-9]{5,})$/.test('aaa')); // true
    
    // console.log(/^([A-Za-z0-9]{5,})$/.test('aaaa')); // true
    $('#btnSubmit').attr('disabled', true);

    $('input').on('keyup', function(){
        //console.log($(this).val());
        console.log($(this).val());

        $('p').empty();
        var formData = $('form').serialize();

        $.ajax({
            type:'POST',
            url:'./registerCheck.php',
            data: formData,
            dataType: 'JSON',
            success:function(response) {
                if(response.userName !== false) {
                    //$('#textUserNameErr').empty();
                    $('#textUserNameErr').append(response.userName);
                }
                if(response.password !== false) {
                    $('#textPasswordErr').empty();
                    $('#textPasswordErr').append(response.password);
                }
                if(response.passwordConfirm !== false && $('#pwdconfirm').val().length > 0) {
                    $('#textPasswordConfirmErr').empty();
                    $('#textPasswordConfirmErr').append(response.passwordConfirm);
                }
                if(response.status === false) {
                    $('#btnSubmit').removeAttr('disabled');
                } else {
                    $('#btnSubmit').attr('disabled', true);
                }
            },error() {

            }
        });
    })

    
});


// "textUserName" 
// "textPassword"
// "textPasswordConfirm"