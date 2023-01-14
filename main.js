const btns = document.querySelectorAll('.btn-model');
const model = document.querySelectorAll('.bloc.model');
const close = document.querySelectorAll('.close');
const index = document.querySelectorAll('.bloc-model img');

btns.forEach(btn => {
    btn.addEventListener ('click', (e) => {
        index.src= `img/equip-3{e.target.getAttribute('data-index')}.png`;
        model.classList.add('active-model');
       
    })
})
close .addEventListener('click',()=> {
    model.classList.remove('active-model');

})