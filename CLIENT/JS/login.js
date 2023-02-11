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
    clearForm(document.querySelectorAll('input'));
}

const makeAdminFormVisible = () =>{
    // const registerForm = document.getElementById('user-login-form');
    const userLogin = document.getElementById('user-login-form');
    const adminLogin = document.getElementById('admin-login-form');
    
    // inputs.forEach(inp => {
    //     if (!inp.classList.contains('login-btn')) {
    //         inp.value = "";            
    //     }
    // });
    makeVisible(adminLogin);
    makeNonVisible(userLogin);
    document.getElementById('bg-img').style.minHeight = "140vh";
}

const makeUserFormVisible = () =>{
    const userLogin = document.getElementById('user-login-form');
    const adminLogin = document.getElementById('admin-login-form');
    const inputs = document.querySelectorAll('input');

    // inputs.forEach(inp => {
    //     if (!inp.classList.contains('login-btn')) {
    //         inp.value = "";            
    //     }
    // });
    makeVisible(userLogin);
    makeNonVisible(adminLogin);
    document.getElementById('bg-img').style.minHeight = "160vh";
}