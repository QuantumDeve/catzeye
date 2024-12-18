$(document).ready(function () {
    
    //     $('input[name="pick-date"]').daterangepicker({
    //     singleDatePicker: true,
    //     showDropdowns: true,
    //     minYear: 2000,
    //     maxYear: parseInt(moment().format('YYYY'),10),
    //     dateFormat: 'dd-mm-yyyy'
    //  }); 

    $(document).on("submit",'#submit-salary',function(e){
        e.preventDefault();
        var form_data = new FormData($('#submit-salary')[0]);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "save-salary",
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
                    $('.success-message').removeClass('d-none')
                    $('#exampleModalCenter').modal('show');
                    // $('.qnumber').replaceWith("<div class='qnumber'>Q " + $('#document_price').val() + "</div>");
                } else {
                    $.each(result.message, function (key, value) {
                        if (value[0])
                            $("#submit-salary .error_" + key).html(value[0]);
                    });
                }
    
            },
            error: function (message) {
                // $('.invalid-password').removeClass('d-none')
            }
        });
    });


    

    $(document).on("change",'#pick-date ,#employee',function(e){

        callWS();
    });

});




function callWS(){
    
    var a = $('#dateRangePickerSample02').val();
    var id = $('#employee option:selected').val()
     $.ajax({
         // headers: {
         //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         // },
         url: "filter-salary",
         type: "get",
         data: {a:a,id:id},
         success: function (result) {
             if (result.status) {

                // var url = $('siteurl').val();
                // window.location = "/admin/list-salary/"+result.data.start+"/"+result.data.end+"/"+result.data.id;  
                $('.new-main').removeClass('d-none');
                $('.old-main').addClass('d-none');
                var $el = $('.new-main');
                $el.empty();
                // var $el = $("#replace"); 
                //     $el.empty();
                //     // $el.append($("<option></option>").attr("value", "").text("Select Board"));

                //     $.each(json.list, function (i, value) {
                //         $el.append($(""));
                //     });


                $.each(result.data, function(key,value) {
                    console.log(value);

                  var html = '<div class="col-md-6 card-group-row__col second-loader" ><div class="card card--elevated card-group-row__card"><div class="card-body d-flex"><span class="icon-holder icon-holder--outline-muted rounded-circle d-inline-flex mr-16pt"><i class="material-icons">account_box</i></span><div class="flex"><a class="card-title mb-8pt new_name"href="">'+value.employee.first_name+' '+value.employee.last_name+'</a><p class="card-title mb-8pt">'+value.amount+'</p><p class="card-title mb-0" style="color:black">'+value.status+'</p></div></div><div class="card-footer d-flex lh-1 px-16pt py-8pt"><div class="flex text-muted"><small></small></div></div></div></div>';

                  console.log(html);
                //   $('.new-main').html(html);
                  document.getElementById("new-main").innerHTML +=html;
                    // if(i>0){
                    //    $("#searchModules .single_division").eq(0).clone().appendTo("#searchModules .main_division");
                    // }
                    // $(".single_division .title").eq(i).html(value['subChapter_name']);
                    // $(".single_division .start-url").eq(i).attr('href',url+"/dashboard/courseDetail/"+result.packageId+"/"+value['subChapter_code']);
                    // $(".single_division .examCount").eq(i).html('');

                    // i++;
                });



             } else {
                 $.each(result.message, function (key, value) {
                     if (value[0])
                         $("#submit-salary .error_" + key).html(value[0]);
                 });
             }
 
         },
         error: function (message) {
             // $('.invalid-password').removeClass('d-none')
         }
     });
 }
