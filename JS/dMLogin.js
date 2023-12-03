const dark = document.querySelector('.darkMode');
const body = document.querySelector('.allPage');
const logo = document.querySelector('.logoWhite');
const logoOriginal = document.querySelector('.logoOriginal');


dark.addEventListener('click', ()=>{
    body.classList.toggle('a'); 
    logo.classList.toggle('logoDark'); 
    logoOriginal.classList.toggle('logoWhite');

})
