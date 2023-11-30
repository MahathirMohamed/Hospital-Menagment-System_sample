$(document).ready(function () {
    Login();
    singup();
});


function Login() {
    $(document).on('click', '.login', function () {
        $.validator.setDefaults({
            submitHandler: function () {
                $.ajax({
                    url: 'PHP/login.php',
                    type: 'post',
                    data: $("#loginForm").serialize(),

                    success: function (msg) {

                        msg = msg.trim();

                        if (msg === 'admin') {
                            document.location.href = 'Backend/admin.php';
                        }
                        else if (msg === 'user') {
                            document.location.href = 'user.php';
                        }

                        else if (msg === 'Admin disabled your account') {
                            Swal.fire(msg)
                        }

                        else {
                            Swal.fire(msg)
                        }

                    }
                });
            }
        })

        $("#loginForm").validate({
            errorClass: 'error',
            rules: {
                email: "required",
                password: {
                    required: true,
                    minlength: 5,
                }
            },
            messages: {
                email: "Pleas Enter Your Name",
                password: {
                    required: "Please Enter Your Password",
                    minlength: "Password Length Must be 5"
                },
            }
        })
    });
}



function singup() {
    $(document).on('click', '.sign', function () {

        $.validator.setDefaults({
            submitHandler: function () {
                $.ajax({
                    url: 'PHP/sign.php',
                    type: 'post',
                    data: $("#sign").serialize(),

                    success: function (msg) {

                        msg = msg.trim();

                        if (msg === 'admin') {
                            document.location.href = 'Backend/admin.php';
                        }
                        else if (msg === 'user') {
                            document.location.href = 'user.php';
                        }
                        
                        else {
                            Swal.fire(msg)
                        }
                    },
                    error: function (error) {
                        alert(error);
                    }
                });
            }
        })


        $("#sign").validate({
            errorClass: 'error',
            rules: {
                name: "required",
                password: "required",
                mobile: "required",
                age: "required",
                gender: "required",
                address: "required",
                email: {
                    email: true,
                    required: true
                },
            },
            messages: {
                name: "Pleas Enter Your Name",
                password: "Please Enter Your password",
                mobile: "Please Enter Your mobile",
                age: "Enter Your age",
                gender: "Enter Your gender",
                address: "Enter Your address",
                email: {
                    email: "Please Enter The Valid Email Address",
                    required: "Please Enter Your Email Id"
                },
            }
        })
    });
}