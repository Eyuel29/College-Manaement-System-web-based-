const blurBg = (bg) =>{
    bg.style.filter = "blur(0.5rem)"
}

const makeVisible = (v) =>{
    v.style.display = "block";
}
const makeNonVisible = (v) =>{
    v.style.display = "none";
}
const makeUPVisible = () =>{
    makeVisible(usernamePass);
}

const clearForm = (input) =>{
    input.forEach(inp => {
            inp.value = "";            
    });
}

const makeLoginModalVisible = () =>{
    document.getElementById('bg-img').style.minHeight = "140vh";
    makeNonVisible(document.getElementById('welcome-modal'));
    makeVisible(document.getElementById('register-modal'));
}

const cancelLoginProcess = () =>{
    makeNonVisible(document.getElementById('register-modal'));
    makeVisible(document.getElementById('welcome-modal'));
    document.getElementById('bg-img').style.minHeight = "100vh";
}

const makeLoginFormVisible = () =>{
    const registerForm = document.getElementById('register-form');
    const loginForm = document.getElementById('login-form');
    const inputs = document.querySelectorAll('input');

    inputs.forEach(inp => {
        if (!inp.classList.contains('register-btn')) {
            inp.value = "";            
        }
    });

    makeVisible(loginForm);
    makeNonVisible(registerForm);
    document.getElementById('bg-img').style.minHeight = "140vh";
}

const makeRegisterFormVisible = () =>{
    const registerForm = document.getElementById('register-form');
    const loginForm = document.getElementById('login-form');
    const inputs = document.querySelectorAll('input');

    inputs.forEach(inp => {
        if (!inp.classList.contains('register-btn')) {
            inp.value = "";            
        }
    });

    makeVisible(registerForm);
    makeNonVisible(loginForm);
    document.getElementById('bg-img').style.minHeight = "160vh";
}