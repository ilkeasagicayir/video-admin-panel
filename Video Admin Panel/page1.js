
$(function () {
    $("#save").click(function () {
        $.ajax({
            url: "test1.php",
            type: "POST",
            data: {
                username: $('#username').val(),
                password: $('#password').val()
            },
            cache: false,
            success: function (dataResult) {

                if (!dataResult.includes('200')) {

                    Swal.fire('User not found! Please try again.');
                    return false;
                }
                window.location.replace("http://localhost/projects/page2.php");


            }
        });
    });



});
