const makeVisible = (v) =>{
    v.style.display = "block";
}

const makeNonVisible = (v) =>{
    v.style.display = "none";
}

const lightMode = () =>{
    makeVisible(document.getElementById('img-nightmode'));
    makeNonVisible(document.getElementById('img-lightmode'));
    document.querySelectorAll('.dark-light').forEach(e => {
        e.style.background = "#fee";
    });    
    document.querySelectorAll('.lead').forEach((e)=>{
        e.style.color = "#211";
    });
    
    document.querySelectorAll('#burger-menu-icon g rect').forEach((e)=>{
        e.style.fill = "#211";
    });
}

const darkMode = () =>{
    makeNonVisible(document.getElementById('img-nightmode'));
    makeVisible(document.getElementById('img-lightmode'));
    document.querySelectorAll('.dark-light').forEach(e => {
        e.style.background = "#211";
    });    
    document.querySelectorAll('.lead').forEach((e)=>{
        e.style.color = "#fee";
    });
    document.querySelectorAll('#burger-menu-icon g rect').forEach((e)=>{
        e.style.fill = "#fee";
    });
}

const scrollEffectOn = () =>{
    const nav = document.getElementById('navbar-outer');
    if (window.scrollY > 120) {
    // nav.style.boxShadow = "rgba(34, 17, 17, 0.1) 0px 4px 29px 0px";
    nav.style.opacity = 0.8;
    nav.style.boxShadow = "none";
    }else{
        // nav.style.boxShadow = "none";
        nav.style.opacity = 1;
        nav.style.boxShadow = "rgba(34, 17, 17, 0.1) 0px 4px 29px 0px";
    }
}

const closeBurgerMenu = () =>{
    document.getElementById('menu-modal').style.display = "none";
}

const toggleVisible = (t) =>{
    t.classList.toggle('visible');
}
const toggleVisibleActive = (t,p) =>{
    t.classList.toggle('visible');
    p.parentElement.classList.toggle('admin-option-active')
}

const openBurgerMenu = () =>{
    document.getElementById('menu-modal').style.display = "block";
}

let time = new Date().getHours();

const autoDarkMode = () =>{
    let time = new Date().getHours();
    if (time > 18 && time < 7) {
        darkMode();
    }else{
        lightMode();
    }
}


window.addEventListener('scroll',scrollEffectOn);
// window.addEventListener('load',autoDarkMode);