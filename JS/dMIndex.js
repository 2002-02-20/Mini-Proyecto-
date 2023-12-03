const dark = document.querySelector('.darkMode');
const body = document.querySelector('.allPage');
const logo = document.querySelector('.logoWhite');
const logoOriginal = document.querySelector('.logoOriginal');
const titleH3 = document.querySelector('.titleH3');
const text = document.querySelector('.masterWebP');


dark.addEventListener('click', ()=>{
    body.classList.toggle('a'); 
    logo.classList.toggle('logoDark'); 
    logoOriginal.classList.toggle('logoWhite');
    titleH3.classList.toggle('textwhite'); 
    text.classList.toggle('textwhite'); 

})


