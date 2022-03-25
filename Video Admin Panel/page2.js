
$(function () {
    $(".btn-close").click(function () {

        $.ajax({
            url: "test2.php",
            type: "post",
            data: {
                id: $(this)[0].id
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

    $(".updateClass").click(function () {


        document.cookie = "id=" + $(this)[0].id;


        window.location.replace("http://localhost/projects/page4.php");


    });

});
