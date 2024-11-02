$(document).ready(function () {

    $('.leave-comment-btn').on('click', function (e) {
        console.log('leave a comment');
        e.preventDefault();

        var name = $("#name").val(),
            comment = $("#comment").val(),
            email = $("#email").val(),
            blog_id = $("#blog_id").val(),
            token = $("#token").val();

        // console.log(comment);
        // console.log(email);

        $.ajax({
            type: 'POST',
            url: window.location.origin + '/leave-a-comment',
            data: {
                name: name,
                comment: comment,
                email: email,
                blog_id: blog_id,
                _token: token
            },
            success: function (data) {
                var icon = 'success';
                if (data.status == false) {
                    icon = 'error';
                }
                swal({
                    icon: icon,
                    title: data.title,
                    text: data.text,
                });
                // Clear input fields after successful submission
                console.log('Clear input fields after successful submission')
                $("#name").val('');
                $("#comment").val('');
                $("#email").val('');
                $("#blog_id").val('');
            },
            error: function (reject) {
                var errors = $.parseJSON(reject.responseText);
                swal({
                    icon: 'error',
                    title: errors.errors.email ? errors.errors.email[0]
                        : errors.errors.comment ? errors.errors.comment[0]
                            : errors.errors.blog_id ? errors.errors.blog_id[0]
                                : errors.errors.name ? errors.errors.name[0] : '',
                });
            }
        });

    });

});
