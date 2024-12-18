$(document).ready(function () {
  

    $(document).on("click",'.go',function(e){

       
        var select = $('#select_event').val();
        console.log(select);
        if(select == 1){
            window.location.href = "/wedding";
        } else if(select == 2) {
            window.location.href = "/north-indian-wedding";
        } else if(select == 3) {
            window.location.href = "/maternity";
        } else if(select == 4) {
            window.location.href = "/new-born";
        } else if(select == 5) {
            window.location.href = "/birthday";
        } else {
            location.reload()
        }
    });


    $(document).on("submit",'#submit-wedding',function(e){
        e.preventDefault();
        var form_data = new FormData($('#submit-wedding')[0]);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "save-wedding",
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
                    
                        window.location.href = "/personal";
                } else {
                   
                }
    
            },
            error: function (message) {
                // $('.invalid-password').removeClass('d-none')
            }
        });
    });


    $(document).on("submit",'#submit-personal',function(e){
        e.preventDefault();
        var form_data = new FormData($('#submit-personal')[0]);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "save-personal",
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
                    
                        window.location.href = "/terms";
                } else {
                    $.each(result.message, function (key, value) {
                        if (value[0])
                            $("#submit-personal .error_" + key).html(value[0]);
                    });
                }
    
            },
            error: function (message) {
                // $('.invalid-password').removeClass('d-none')
            }
        });
    });

    $(document).on("click",'#flexCheckDefault',function(e){
        // var a = $('#flexCheckDefault').val();
        // console.log(a);
        // if()
        var e = document.getElementById("saveAll");
        e.removeAttribute("disabled");
    });



    $(document).on("click",'#saveAll',function(e){

        $.ajax({
            url: "save-all",
            type: "get",
            success: function (result) {
                // var e = document.getElementById("saveAll");
                // e.removeAttribute("disabled");
                
                $('#exampleModalCenter').modal('show'); 
            },
            error: function (message) {
                // $('.invalid-password').removeClass('d-none')
            }
        });


        
    });

});




