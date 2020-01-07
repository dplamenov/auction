function login() {
    let email = document.getElementById('login_email').value;
    let password = document.getElementById('login_password').value;

    $.ajax({
        url: "login.php",
        method: "POST",
        data: {
            email: email,
            password: password
        },
        dataType: "html"
    }).done(function (done) {
        console.log(done);
    });

}