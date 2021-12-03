var i = 1;
var j = 1;
var k = 1;

$('#username').on("keyup blur", function() {

    var username1 = $('#username').val();

    $.ajax({
        url: 'register_login.php',
        method: 'POST',
        data: {
            username1: username1,
        },
        success: function(data) {
            if (data) {
                i = 0;
                document.getElementById('unerr').style.display = 'block';
                document.getElementById("register").disabled = true;

            } else {
                i = 1;
                document.getElementById('unerr').style.display = 'none';
                if (i && j && k) document.getElementById("register").disabled = false;

            }

        },

    });
});

$('#email').on("keyup blur", function() {

    var email1 = $('#email').val();

    $.ajax({
        url: 'register_login.php',
        method: 'POST',
        data: {
            email1: email1,
        },
        success: function(data) {
            if (data) {
                j = 0;
                document.getElementById('emailerr').style.display = 'block';
                document.getElementById("register").disabled = true;

            } else {
                j = 1;
                document.getElementById('emailerr').style.display = 'none';
                if (i && j && k) document.getElementById("register").disabled = false;

            }
        },

    });
});


var recaptcha_response = '';

function submitUserForm() {
    if (recaptcha_response.length == 0) {
        k = 0;
        document.getElementById('g-recaptcha-re-error').style.display = 'none';
        document.getElementById('g-recaptcha-error').style.display = 'block';
        document.getElementById('g-recaptcha-internet-error').style.display = 'none';
        document.getElementById("register").disabled = true;
        return false;
    }
    k = 1;
    return true;
}

function verifyCaptcha(token) {
    k = 1;
    recaptcha_response = token;
    document.getElementById('g-recaptcha-internet-error').style.display = 'none';
    document.getElementById('g-recaptcha-error').style.display = 'none';
    document.getElementById('g-recaptcha-re-error').style.display = 'none';
    if (i && j && k) document.getElementById("register").disabled = false;
}


function reverifyCaptcha() {
    k = 0;
    document.getElementById('g-recaptcha-internet-error').style.display = 'none';
    document.getElementById('g-recaptcha-re-error').style.display = 'block';
    document.getElementById('g-recaptcha-error').style.display = 'none';
    document.getElementById("register").disabled = true;
}


function noCaptcha() {
    document.getElementById('g-recaptcha-error').style.display = 'none';
    document.getElementById('g-recaptcha-re-error').style.display = 'none';
    document.getElementById('g-recaptcha-internet-error').style.display = 'block';
    document.getElementById("register").disabled = true;

};