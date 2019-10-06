/* 
 * Custom JS
 */
$ = jQuery;

/*
 * Contact form validation rules
 */
var contactForm = $('#contactForm').validate({
    errorClass: "madt_error",
    errorElement: "label",
    rules: {
        user_name: {
            required: true,
            accept: '[a-zA-Z_.-]+'
        },
        user_email: {
            required: true,
            email: true
        },
        user_message: {
            required: true,
        }
    },
    messages: {
        user_name: {
            required: 'Required field',
            accept: 'Please enter a valid name',
        },
        user_email: {
            email: 'Please enter a valid email',
            required: 'Required field',
        },
        user_message: {
            required: 'Required field',
        }
    }
});

/*
 * Contact Form Ajax
 */
$("#contactFormSubmit").click(function() {
    contactForm.element($(this));
    if ($('#contactForm').valid() === true) {
        
        formData = $('#contactForm').serialize();
        
        $.ajax({
            type:"POST",
            url: ajaxurl,
            data: formData + '&action=contact_form',
            dataType: 'json',
            beforeSend: function () {
                $(".loader").css("display", "block");
            },
            complete: function (response) {
                $(".loader").css("display", "none");
                var responseOutput = response.responseText;
                if (responseOutput) {
                    $('#contactForm')[0].reset();
                    $('.contact-form-response').html(responseOutput);
                }
                return false;
            },
            error: function () {
            },
        });
    }
});



/*
 * Contact form validation rules
 */
var subscribeForm = $('#subscribeForm').validate({
    errorClass: "madt_error",
    errorElement: "label",
    rules: {
        
        subscribe_email: {
            required: true,
            email: true
        }
    },
    messages: {
        subscribe_email: {
            email: 'Please enter a valid email',
            required: 'Required field',
        }
    }
});

/*
 * Subscribe Form Ajax
 */
$("#subscribeFormSubmit").click(function() {
    subscribeForm.element($(this));
    if ($('#subscribeForm').valid() === true) {
        formData = $('#subscribeForm').serialize();
        $.ajax({
            type:"POST",
            url: ajaxurl,
            data: formData + '&action=newsletter_subscription',
            dataType: 'json',
            beforeSend: function () {
                $(".subscribe-loader").html('Please wait..');
            },
            complete: function (response) {
                $(".subscribe-loader").css("display", "none");
                var responseOutput = response.responseText;
                if (responseOutput) {
                    $('#subscribeForm')[0].reset();
                    $('.subscribe-form-response').html(responseOutput);
                }
                return false;
            },
            error: function () {
            },
        });
    }
});