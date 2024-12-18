$(document).ready(function () {
    
    // $(document).on("click",'#pick-date',function(e){

    //     callWS();
    // });


    $(document).on("click",'#saveAll',function(e){
        $('#exampleModalCenter').modal('show'); 
    });


    $(document).on("submit",'#finalSave',function(e){
        console.log('mnv');
        e.preventDefault();
        var form_data = new FormData($('#finalSave')[0]);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "save-proceed",
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
                    $('#exampleModalCenter').modal('hide'); 
                    $('#thanks').modal('show'); 
                } else {
                    $.each(result.message, function (key, value) {
                        if (value[0])
                            $("#finalSave .error_" + key).html(value[0]);
                    });
                }
    
            },
            error: function (message) {
                // $('.invalid-password').removeClass('d-none')
            }
        });
    });

    


    $(document).on("click",'#viewSummary',function(e){
        var id = $('#event_id').val();
        console.log(id);
        $.ajax({
            url: "view-summary/"+id,
            type: "get",
            success: function (result) {
                // var e = document.getElementById("saveAll");
                // e.removeAttribute("disabled");
                
                $('#summaryList').modal('show'); 
            },
            error: function (message) {
                // $('.invalid-password').removeClass('d-none')
            }
        });

    });



    $(document).on("click",'#newAdvance',function(e){
        $('#newAdvanceAmount').modal('show'); 
    });



    $(document).on("submit",'#saveAdvance',function(e){
        e.preventDefault();
        var form_data = new FormData($('#saveAdvance')[0]);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "new-advance",
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
                    $('#newAdvanceAmount').modal('hide'); 
                    location.reload();

                } else {
                    $.each(result.message, function (key, value) {
                        if (value[0])
                            $("#saveAdvance .error_" + key).html(value[0]);
                    });
                }
    
            },
            error: function (message) {
                // $('.invalid-password').removeClass('d-none')
            }
        });
    });



    $(document).on("click",'#newExpence',function(e){
        $('#newExpenceAmount').modal('show'); 
    });


    $(document).on("submit",'#saveExpence',function(e){
        e.preventDefault();
        var form_data = new FormData($('#saveExpence')[0]);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "new-expence",
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
                    $('#newExpenceAmount').modal('hide'); 
                    location.reload();

                } else {
                    $.each(result.message, function (key, value) {
                        if (value[0])
                            $("#saveExpence .error_" + key).html(value[0]);
                    });
                }
    
            },
            error: function (message) {
                // $('.invalid-password').removeClass('d-none')
            }
        });
    });

});




