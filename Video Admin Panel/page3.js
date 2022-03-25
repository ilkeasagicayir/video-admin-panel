
$(function () {
    $("#save").click(function () {
        $.ajax({
            url: "test3.php",
            type: "POST",
            data: {
                link: $('#link').val(),
                description: $('#description').val()
            },
            cache: false,
            success: function (dataResult) {

                if (!dataResult.includes('200')) {

                    return false;
                }
                window.location.replace("http://localhost/projects/page2.php");



            }
        });
    });



});
