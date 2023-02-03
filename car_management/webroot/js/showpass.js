$(document).ready(function(){
    $('#show_password').click(function(){
        
        if('password' == $('#password').attr('type')){
            $('#password').attr('type', 'text');
        }else{
            $('#password').attr('type', 'password');
        }     
       
    });


});



//validation-------------------

$(document).ready(function(){
    $('#submit').click(function(){
        
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
    
                phone_number: {
                    required: true,
                    minlength: 10,
                    maxlength: 12
                },
    
                password: {
                    required: true,
                    minlength: 4,
                    maxlength: 12
                },
    
                confirm_password: {
                    required: true,
    
                    equalTo: "#password",
                },
                gender: {
                    required: true,
                },
       
            },
    
            messages: {
                name: {
                    required: "Name is required",
                    minlength: "name should be atleast 3 characters",
                    noSpace: "Space are not allowed"
                },
                email: {
                    required: "Email is Required",
                },
                age: {
                    range: "please enter age between 18 to 50 years"
                },
                phone_number: {
                    required: "please enter 10 digit phone number"
                },
                password: {
                    required: "please enter password"
    
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
        //validation-------------------
    });
});

