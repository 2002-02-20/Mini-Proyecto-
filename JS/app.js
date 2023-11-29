const liInteractive = document.querySelector('.liInteractive');
const liInteractive2 = document.querySelector('.liInteractive2');
const liInteractive3 = document.querySelector('.liInteractive3');

liInteractive.addEventListener('mouseover', function () {
    liInteractive.classList.add('myProfileNav');
    liInteractive2.classList.remove('myProfileNav');
    liInteractive3.classList.remove('myProfileNav');
});

liInteractive2.addEventListener('mouseover', function () {
    liInteractive.classList.remove('myProfileNav');
    liInteractive2.classList.add('myProfileNav');
    liInteractive3.classList.remove('myProfileNav');
});

liInteractive3.addEventListener('mouseover', function () {
    liInteractive.classList.remove('myProfileNav');
    liInteractive2.classList.remove('myProfileNav');
    liInteractive3.classList.add('myProfileNav');
});


const click = document.querySelector('.clickAndActive');
const interactiveNameNav = document.querySelector('.containerNavInteractive');


click.addEventListener('click', function () {
    interactiveNameNav.classList.toggle('invisible');
})


