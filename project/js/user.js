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
        if(typeof done === 'string'){
            let errors = $('#errors');
            errors.html('');
            let object = JSON.parse(done);
            for(let key in object){
                let element = object[key];
                errors.append(`<p>${element}</p>`);
            }
        }
    });

}