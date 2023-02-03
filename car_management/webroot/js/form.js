
$(document).ready(function () {

    jQuery.validator.addMethod("noSpace", function (value, element) {
        return value.indexOf(" ") < 0 && value != "";
    }, "Space are not allowed");



    $('#form').validate({
        rules: {
            name: {
                required: true,
                minlength: 3,
                noSpace: true
            },

            email: {
                required: true,
                email: true,
                noSpace: true
            },

            age: {
                required: true,
                range: [18, 50]
            },

            Phone_Number: {
                required: true,
                minlength: 10,
                maxlength: 12
            },

            password: {
                required: true,
                minlength: 3,
                maxlength: 12
            },
            
            gender: {
                required: true,
            },


        },

        messages: {
            name: {
                required: "** Please Enter Your Name",
                minlength: "name should be atleast 3 characters",
                noSpace: "Space are not allowed"
            },
            email: {
                required: "** Please Enter Email ",
            },
            age: {
                range: "please enter age between 18 to 50 years"
            },
            phone_number: {
                required: "please enter 10 digit phone number"
            },
            password: {
                required: "** Please enter password"

            },
            confirm_password: {
                required: "please enter confirm password",
                equalTo: "password not match"
            },
            gender: {
                required: "Please select gender",
            }
        },

      
    });

   
})
