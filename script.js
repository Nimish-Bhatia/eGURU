let eguru_darkmode = localStorage.getItem('eguru_darkmode');
let eguru_theme_color = localStorage.getItem('eguru_theme_color');
let navbar = document.querySelector('.navbar');
let themeToggler = document.querySelector('.theme-toggler');
let toggleBtn = document.querySelector('.toggle-btn');
let themeBtn = document.querySelector('#theme-btn');



document.querySelector('#menu-btn').onclick = () => {
    navbar.classList.toggle('active');
    themeToggler.classList.remove('active');
}


window.onscroll = () => {
    navbar.classList.remove('active');
    themeToggler.classList.remove('active');

}




if (eguru_darkmode == "dark") {
    document.body.classList.add('active');
    themeBtn.classList.add('fa-sun');

}



themeBtn.onclick = () => {
    themeBtn.classList.toggle('fa-sun');

    if (themeBtn.classList.contains('fa-sun')) {
        document.body.classList.add('active');
        localStorage.setItem('eguru_darkmode', 'dark');


    } else {
        document.body.classList.remove('active');
        localStorage.setItem('eguru_darkmode', 'light');

    }

};



var swiper = new Swiper(".review-slider", {
    spaceBetween: 20,
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    breakpoints: {
        640: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 3,
        },
    },
});


toggleBtn.onclick = () => {
    themeToggler.classList.toggle('active');
    navbar.classList.remove('active');
}

if (eguru_theme_color == "blue") blue();
if (eguru_theme_color == "red") red();
if (eguru_theme_color == "green") green();
if (eguru_theme_color == "yellow") yellow();
if (eguru_theme_color == "pink") pink();
if (eguru_theme_color == "orange") orange();



function blue() {
    document.querySelector(':root').style.setProperty('--orange', '#3867d6');
    document.querySelector(':root').style.setProperty('--light_orange', '#6dd1ff31');
    localStorage.setItem('eguru_theme_color', 'blue');
    $('.blue').show();
    $('.red').hide();
    $('.pink').hide();
    $('.orange').hide();
    $('.green').hide();
    $('.yellow').hide();
}

function red() {
    document.querySelector(':root').style.setProperty('--orange', '#ff0033');
    document.querySelector(':root').style.setProperty('--light_orange', '#ff52523d');
    localStorage.setItem('eguru_theme_color', 'red');
    $('.red').show();
    $('.pink').hide();
    $('.orange').hide();
    $('.green').hide();
    $('.yellow').hide();
    $('.blue').hide();
}

function green() {
    document.querySelector(':root').style.setProperty('--orange', '#20bf6b');
    document.querySelector(':root').style.setProperty('--light_orange', 'rgba(31, 255, 31, 0.219)');
    localStorage.setItem('eguru_theme_color', 'green');
    $('.red').hide();
    $('.pink').hide();
    $('.green').show();
    $('.yellow').hide();
    $('.blue').hide();
    $('.orange').hide();
}

function yellow() {
    document.querySelector(':root').style.setProperty('--orange', '#f7b731');
    document.querySelector(':root').style.setProperty('--light_orange', 'rgba(255, 165, 0,.2)');
    localStorage.setItem('eguru_theme_color', 'yellow');
    $('.red').hide();
    $('.pink').hide();
    $('.orange').hide();
    $('.green').hide();
    $('.yellow').show();
    $('.blue').hide();
}

function pink() {
    document.querySelector(':root').style.setProperty('--orange', '#FC427B');
    document.querySelector(':root').style.setProperty('--light_orange', '#fc427a57');
    localStorage.setItem('eguru_theme_color', 'pink');
    $('.red').hide();
    $('.pink').show();
    $('.orange').hide();
    $('.green').hide();
    $('.yellow').hide();
    $('.blue').hide();
}

function orange() {
    document.querySelector(':root').style.setProperty('--orange', '#fa8231');
    document.querySelector(':root').style.setProperty('--light_orange', 'rgba(255, 165, 0,.2)');
    localStorage.setItem('eguru_theme_color', 'orange');
    $('.red').hide();
    $('.pink').hide();
    $('.orange').show();
    $('.green').hide();
    $('.yellow').hide();
    $('.blue').hide();
}


const openmodalbuttons = document.querySelectorAll('[data-modal-target]');
const closemodalbuttons = document.querySelectorAll('[data-close-button]');
var modalBody1 = document.querySelector("div.scroll_about");
var modalBody2 = document.querySelector("div.scroll_aim");
var modalBody3 = document.querySelector("div.scroll_terms");
var modalBody4 = document.querySelector("div.scroll_return");
openmodalbuttons.forEach(button => {
    button.addEventListener('click', () => {
        const modal = document.querySelector(button.dataset.modalTarget);
        openmodal(modal);
        modalBody1.scrollTo(0, 0);
        modalBody2.scrollTo(0, 0);
        modalBody3.scrollTo(0, 0);
        modalBody4.scrollTo(0, 0);
    })
})

closemodalbuttons.forEach(button => {
    button.addEventListener('click', () => {
        const modal = button.closest('.modal');

        closemodal(modal);
    })
})

function openmodal(modal) {
    modal.classList.add('showup');

}

function closemodal(modal) {

    modal.classList.remove('showup');

}


function loginformopen() {

    document.getElementById("togloginbtn").classList.remove("acttog2");
    document.getElementById("togloginbtn").classList.add("acttog");
    document.getElementById("togregisterbtn").classList.add("acttog2");
    document.getElementById("togregisterbtn").classList.remove("acttog");
    document.querySelector("#signupform").style.setProperty('display', 'none');
    document.querySelector("#loginform").style.setProperty('display', 'block');
    document.getElementById("loginform_1").reset();
    document.getElementById("logineye").classList.add("fa-eye");
    document.getElementById("logineye").classList.remove("fa-eye-slash");
    document.getElementById("login-pass").setAttribute('type', 'password');



}

function signformopen() {

    document.getElementById("togloginbtn").classList.add("acttog2");
    document.getElementById("togloginbtn").classList.remove("acttog");
    document.getElementById("togregisterbtn").classList.remove("acttog2");
    document.getElementById("togregisterbtn").classList.add("acttog");
    document.querySelector("#signupform").style.setProperty('display', 'block');
    document.querySelector("#loginform").style.setProperty('display', 'none');
    document.getElementById("signupform_1").reset();
    document.getElementById("regeye").classList.add("fa-eye");
    document.getElementById("regeye").classList.remove("fa-eye-slash");
    document.getElementById("reg_pass").setAttribute('type', 'password');
    document.getElementById('emailerr').style.display = 'none';
    document.getElementById("register").disabled = false;
    document.getElementById('unerr').style.display = 'none';
    grecaptcha.reset();


}

state = false;
state2 = false;

function showloginpass() {

    if (state) {

        document.getElementById("logineye").classList.add("fa-eye");
        document.getElementById("logineye").classList.remove("fa-eye-slash");
        document.getElementById("login-pass").setAttribute('type', 'password');
        state = false;
    } else {

        document.getElementById("logineye").classList.remove("fa-eye");
        document.getElementById("logineye").classList.add("fa-eye-slash");

        document.getElementById("login-pass").setAttribute('type', 'text');
        state = true;
    }

}

function hideregpass() {
    document.getElementById("regeye").classList.add("fa-eye");
    document.getElementById("regeye").classList.remove("fa-eye-slash");
    document.getElementById("reg_pass").setAttribute('type', 'password');
}

function showregpass() {

    if (state2) {

        document.getElementById("regeye").classList.add("fa-eye");
        document.getElementById("regeye").classList.remove("fa-eye-slash");
        document.getElementById("reg_pass").setAttribute('type', 'password');
        state2 = false;
    } else {

        document.getElementById("regeye").classList.remove("fa-eye");
        document.getElementById("regeye").classList.add("fa-eye-slash");

        document.getElementById("reg_pass").setAttribute('type', 'text');
        state2 = true;
    }

}


var password = document.getElementById("reg_pass"),
    confirm_password = document.getElementById("conpass");

function validatePassword() {
    if (password.value != confirm_password.value) {
        confirm_password.setCustomValidity("Passwords Don't Match");
    } else {
        confirm_password.setCustomValidity('');
    }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;



function preloading() {
    document.getElementById("container12").style.display = 'none';
}