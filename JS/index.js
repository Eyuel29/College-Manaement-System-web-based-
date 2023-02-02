const menuBtn = document.getElementById("menu-ico");
const closeMenuBtn = document.getElementById("close-ico");
const sidebar = document.getElementById("section-side");
const section = document.getElementById("section3");
const Profile = document.querySelectorAll('.profile');
const newFormModal = document.getElementById('add-profile-form');
const cancelAddProfile = document.getElementById('cancel-add-profile');
const submitAddProfile = document.getElementById('submit-add-profile');
const addFormBtn = document.getElementById('add-profile')
const backdrop = document.getElementById('backdrop');
const inputs = document.querySelectorAll('input');
const profiles = document.getElementById('profiles');
const people = [];

const clearForm = () =>{
    inputs.forEach(inp => {
        inp.value = "";
    });
}
const makeVisible = (v) =>{
    v.style.display = "block";
}
const makeNonvisible = (v) =>{
    v.style.display = "none";
}
const openNewFormModal = () =>{
    makeVisible(backdrop);
    makeVisible(newFormModal);
}
const closeNewFormModal = () =>{
    makeNonvisible(backdrop);
    makeNonvisible(newFormModal);
}

const appendToHomePage = (PN,PI,PO,PC) =>{
    const newProfile = document.createElement('div');
    newProfile.classList.add('profile');
    newProfile.innerHTML += `<div id="profile-image">
                            <img id="pro-img" src="${PI}" alt="bran">
                        </div>
                        <div id="desc">
                            <div id="name"  class="lead"><p>${PN}</p></div>
                            <div id="occupation"><p>${PO}</p></div>
                            <div id="state"><p>${PC}</p></div>
                            <div id="icon">
                            <i></i>
                        </div>
                        </div>`    
    profiles.append(newProfile);
}

const pushToDB = (PN,PI,PO,PC) =>{
    people.push({
        pname: PN,
        pimage : PI,
        poccupation : PO,
        pcompany : PC
    });
}

const cancelFormhandler = () =>{
    closeNewFormModal();
    clearForm();
}

const collectFormData = () =>{
    let profileName = inputs[0].value;
    let profileImage = inputs[1].value;
    let profileOccupation = inputs[2].value;
    let profileCompany = inputs[3].value;

    pushToDB(profileName,profileImage,profileOccupation,profileCompany);
    appendToHomePage(profileName,profileImage,profileOccupation,profileCompany);
}

const checkInput = () =>{
    let PN = inputs[0].value;
    let PI = inputs[1].value;
    let PO = inputs[2].value;
    let PC = inputs[3].value;
    
    if (PN != "" && PI != "" && PO != "" && PC != "" ) {
        return true;
    }
    else{
        return false;
    }
}

const submitFormHandler = () =>{
    if(checkInput()){
        collectFormData();
        clearForm();
        closeNewFormModal();
        console.log(people);
    }else{
        alert("Please insert valid information!");
    }
}
// closeMenuBtn.addEventListener('click',);
cancelAddProfile.addEventListener('click',cancelFormhandler);
submitAddProfile.addEventListener('click',submitFormHandler);
addFormBtn.addEventListener('click',openNewFormModal);
backdrop.addEventListener('click',cancelFormhandler);