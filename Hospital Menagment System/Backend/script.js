$(document).ready(function () {
    insert();
    medicine();
    logout();
});

function insert() {
    $(document).on('click', '.save', function () {
        $.validator.setDefaults({
            submitHandler: function () {
                $.ajax({
                    url: 'PHP/add.php',
                    type: 'post',
                    data: $("#save").serialize(),

                    success: function (d) {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Your work has been saved',
                            showConfirmButton: false,
                            timer: 1500
                        })

                        window.location.href = 'admin.php';
                    }
                })
            }
        })

        $("#save").validate({
            errorClass: 'error',
            rules: {
                id: "required",
                name: "required",
                specialIn: "required",
                address: "required",
            },
            messages: {
                id: "Pleas Enter Your Doctor Id",
                name: "Pleas Enter Your Name",
                specialIn: "Please Enter Your special In",
                address: "Please Enter Your Address",
            }
        })
    });
}

function medicine() {
    $(document).on('click', '.medicine', function () {
        $.validator.setDefaults({
            submitHandler: function () {
                $.ajax({
                    url: 'PHP/medicine.php',
                    type: 'post',
                    data: $("#medicine").serialize(),

                    success: function (d) {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Your work has been saved',
                            showConfirmButton: false,
                            timer: 1500
                        })

                        window.location.href = 'admin.php';
                    }
                })
            }
        })

        $("#medicine").validate({
            errorClass: 'error',
            rules: {
                id: "required",
                name: "required",
                price: "required",
            },
            messages: {
                id: "Pleas Enter Your Doctor Id",
                name: "Pleas Enter Your Name",
                price: "Please Enter the price",
            }
        })
    });
}


function logout() {
    $(document).on('click', '.logout', function () {
        window.location.href = '../index.html';
    });
}