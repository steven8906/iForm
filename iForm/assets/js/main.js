$(document).ready(function () {
    $('form').validate({
        errorClass: 'is-invalid',
        validClass: 'is-valid',
        rules: {
            name: {
                required: true,
            },
            email: {
                required: true,
            },
            company: {
                required: true,
            },
            phone: {
                required: true,
            },
            message: {
                required: true,
            },
        },
        submitHandler: function (form) {
            $.ajax({
                url: $(form).attr('action'),
                type: 'post',
                data: $(form).serialize()
            }).done(function (res) {
                if (res.success == true){
                    $('#modal_response_ajax').modal();
                    $('#name').text(res.data.name);
                    $('#email').text(res.data.email);
                    $('#company').text(res.data.company);
                    $('#phone').text(res.data.phone);
                    $('#message').text(res.data.message);
                }
            }).fail(function (error) {
                console.error(error);
            })
        }
    });
});