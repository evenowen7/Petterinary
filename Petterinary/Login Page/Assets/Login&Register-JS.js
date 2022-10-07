window.onload = function() {
    const tab_switchers = document.querySelectorAll('[data-switcher]');
    const logonbtns = document.querySelectorAll('#logon-btn');
    const inputs = document.querySelectorAll('.pswrd');
    const shows = document.querySelectorAll('.show');

    for(let i = 0; i < tab_switchers.length; i++) {
        const tab_switcher = tab_switchers[i];
        const page_id = tab_switcher.dataset.tab;

        tab_switcher.addEventListener('click', function() {
            document.querySelector('.tabs .tab.is-active').classList.remove('is-active');
            tab_switcher.parentNode.classList.add('is-active');
            
            SwitchPage(page_id);
        });

        const input = inputs[i];
        const show = shows[i];

        show.addEventListener('click', active);
        function active () {
            if(input.type === "password") {
                input.type = "text";
                show.textContent = "HIDE";
            } else {
                input.type = "password";
                show.textContent = "SHOW";
            }
        }


    }
}

function SwitchPage(page_id) {
    const current_page = document.querySelector('.pages .page.is-active');
    current_page.classList.remove('is-active');

    const next_page = document.querySelector(`.pages .page[data-page="${page_id}"]`);
    next_page.classList.add('is-active');
}


/*--------------------FORM VALIDATION-------------------- */

/*------------------REGISTER VALIDATION START-----------*/

const register = document.querySelector('#register')
const email = register.querySelector('.email')
const password = register.querySelector('.pswrd')

register.addEventListener('submit', function(e) {
    
    if(checkRegisterInput() === 1) {
        e.preventDefault();
    }
   
})

function checkRegisterInput() {
    let value = 0;
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();

    if(checkEmail(emailValue) === 1) {
        setErrorFor(email);
        value = 1;
    }
    else {
        setSuccessFor(email);
        const accountEmail = emailValue;
    }

    if(checkPassword(passwordValue) === 1) {
        setErrorFor(password);
        value = 1;
    }
    else {
        setSuccessFor(password);
        const accountPassword = passwordValue;
    }

    return value;    
   
}

function checkEmail(emailValue) {

    if(emailValue === '' || emailValue.length < 5) {
        return 1;
    }
}

function checkPassword(passwordValue) {

    if(passwordValue.length < 5) {
        return 1;
    }
}

/*------------------REGISTER VALIDATION END-----------*/

/*------------------LOGIN VALIDATION START-----------*/

const login = document.querySelector('.login')
const loginEmail = login.querySelector('.email')
const loginPassword = login.querySelector('.pswrd')

login.addEventListener('submit', function(e) {

    if(checkLoginInput() === 1) {
        e.preventDefault();
    }
})

function checkLoginInput() {
    let value = 0;
    const loginEmailValue = loginEmail.value.trim();
    const loginPasswordValue = loginPassword.value.trim();

    if(checkEmail(loginEmailValue) === 1 || accountEmail === '') {
        setErrorFor(email)
        value = 1;
    }
    else {
        if(loginEmailValue !== accountEmail) {
            setErrorFor(email)
            value = 1;
        }
        else {
            setSuccessFor(email)
        }
    }

    if(checkPassword(loginPasswordValue) === 1 || accountPassword === '') {
        setErrorFor(password)
        value = 1;
    }
    else {
        if(loginPasswordValue !== accountPassword) {
            setErrorFor(password)
            value = 1;
        }
        else {
            setSuccessFor(password)
        }
    }

    return value;
}

/*------------------LOGIN VALIDATION END-----------*/

function setErrorFor(input) {
    const parent = input.parentElement;
    console.log(parent)

    parent.classList.remove("success");
    parent.classList.add("error");
}

function setSuccessFor(input) {
    const parent = input.parentElement;
    
    parent.classList.remove("error");
    parent.classList.add("success");
}
