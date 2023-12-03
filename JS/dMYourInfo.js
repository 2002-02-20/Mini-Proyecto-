const dark = document.querySelector('.darkMode');
const body = document.querySelector('.allPage');
const logo = document.querySelector('.logoWhite');
const logoOriginal = document.querySelector('.logoOriginal');
const thProfile = document.querySelector('.thProfile');
const thBtnEdit = document.querySelector('.thBtnEdit');

//ESTILOS DE YOURINFO
dark.addEventListener('click', ()=>{
    body.classList.toggle('a'); 
    logo.classList.toggle('logoDark'); 
    logoOriginal.classList.toggle('logoWhite');
    thProfile.classList.toggle('textwhite'); 
    thBtnEdit.classList.toggle('btnDarkMode'); 

})

