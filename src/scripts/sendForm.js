$(document).ready(function () {
    // Загрузка комментариев при загрузке страницы
    $.ajax({
        type: 'GET',
        url: 'showComments.php',
        success: function (commentsHTML) {
            $('.comments-container').html(commentsHTML);
        }
    });

    $('form').submit(function (e) {
        e.preventDefault();

        $.ajax({
            type: 'POST',
            url: 'process.php',
            data: $('form').serialize(),
            success: function (response) {

                $.ajax({
                    type: 'GET',
                    url: 'showComments.php',
                    success: function (commentsHTML) {
                        $('.comments-container').html(commentsHTML);
                    }
                });
            }
        });
    });
});
