$(document).ready(function() {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') 
        }
    });

    // Post
    $('#registrationForm').submit(function(e){
        e.preventDefault();

        $.ajax({
            url: 'api/post',
            type: 'POST',
            data: {
                platenumber : $('#platenumber').val(),
                currentcolor : $('#currentcolor').val(),
                targetcolor : $('#targetcolor').val(),
                status : 'Waiting'
            },
            success:function(response) {
                window.location.href = "/paint-jobs"
            },
            // error: function(response) {
            // }

        },);           
    });
})