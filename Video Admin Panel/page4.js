
$(function () {

    $(".updateDesc").click(function () {

        $.ajax({
            url: "test4.php",
            type: "post",
            data: {
                id: $(this)[0].id,
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
