$(document).ready(function () {

    $('.contact-btn').on('click', function (e) {
        console.log('contact us');
        e.preventDefault();

        var name = $("#contact-name").val(),
            message = $("#contact-message").val(),
            email = $("#contact-email").val(),
            token = $(".token").val();

        $.ajax({
            type: 'POST',
            url: window.location.origin + '/get-in-touch',
            data: {
                name: name,
                message: message,
                email: email,
                _token: token
            },
            success: function (data) {
                var icon = 'success';
                if (data.status == false) {
                    icon = 'error';
                }
                swal({
                    icon: icon,
                    title: data.message,
                });
                // Clear input fields after successful submission
                console.log('Clear input fields after successful submission')
                $("#contact-name").val('');
                $("#contact-message").val('');
                $("#contact-email").val('');
            },
            error: function (reject) {
                var errors = $.parseJSON(reject.responseText);
                swal({
                    icon: 'error',
                    title: errors.errors.email ? errors.errors.email[0]
                        : errors.errors.message ? errors.errors.message[0]
                            : errors.errors.name ? errors.errors.name[0] : '',
                });
            }

        });

    });
});
