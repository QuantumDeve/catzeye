$(document).ready(function () {
    console.log('niyas');
  

    $(document).on("submit",'#submit-employee',function(e){
        e.preventDefault();
        var form_data = new FormData($('#submit-employee')[0]);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "save-employee",
            type: "POST",
            dataType: 'json',
            data: form_data,
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function(){
                $(".error").html('');
            },
            success: function (result) {
                if (result.status) {
                    toastr.success(result.message);
                    setTimeout(function () {
                        location.reload()
                    }, 1000);
                } else {
                    $.each(result.message, function (key, value) {
                        if (value[0])
                            $("#submit-employee .error_" + key).html(value[0]);
                    });
                }
    
            },
            error: function (message) {
                // $('.invalid-password').removeClass('d-none')
            }
        });
    });

});




