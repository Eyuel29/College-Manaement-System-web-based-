const usernamePass = document.getElementById('username-pass');
const loginModal = document.getElementById('login-modal');
const cancelLoginBtn = document.getElementById('cancel-login');
const signInModalBtn = document.getElementById('goto-signin');
const welcomeModal = document.getElementById('welcome-modal');
const bgImage = document.getElementById('bg-img');


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

const makeLoginModalVisible = () =>{
    bgImage.style.minHeight = "200vh";
    makeNonVisible(welcomeModal);
    makeVisible(loginModal);
}

const cancelLoginProcess = () =>{
    makeNonVisible(loginModal);
    makeVisible(welcomeModal);
    bgImage.style.minHeight = "100vh";
}

cancelLoginBtn.addEventListener('click',cancelLoginProcess);
signInModalBtn.addEventListener('click',makeLoginModalVisible);