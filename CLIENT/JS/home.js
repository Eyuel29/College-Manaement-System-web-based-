const makeVisible = (v) =>{
    v.style.display = "block";
}

const makeNonVisible = (v) =>{
    v.style.display = "none";
}

const lightMode = () =>{
    makeVisible(document.getElementById('img-nightmode'));
    makeNonVisible(document.getElementById('img-lightmode'));
    document.getElementById('container').style.background = "#fee";
    document.getElementById('navbar-outer').style.background = "#fee";
    document.querySelectorAll('.nav-option-link').forEach(e => {
        e.style.color = "#211";
    });
    document.getElementById('nav-logo').style.color = "#211";
    document.querySelectorAll('.lead').forEach((e)=>{
        e.style.color = "#211";
    });

    document.querySelectorAll('#burger-menu-icon g rect').forEach((e)=>{
        e.style.fill = "#211";
    })
}

const darkMode = () =>{
    makeNonVisible(document.getElementById('img-nightmode'));
    makeVisible(document.getElementById('img-lightmode'));
    document.getElementById('container').style.background = "#211";
    document.getElementById('navbar-outer').style.background = "#211";
    document.querySelectorAll('.nav-option-link').forEach(e => {
        e.style.color = "#fee";
    });    
    document.getElementById('nav-logo').style.color = "#fee";
    document.querySelectorAll('.lead').forEach((e)=>{
        e.style.color = "#fee";
    });
    document.querySelectorAll('#burger-menu-icon g rect').forEach((e)=>{
        e.style.fill = "#fee";
    })
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

const openBurgerMenu = () =>{
    document.getElementById('menu-modal').style.display = "block";
}

window.addEventListener('scroll',scrollEffectOn);