let btnMenu = document.getElementById('btn-menu')
let menu = document.getElementById('menu-mobile')
let overlay = document.getElementById('overlay-menu')

btnMenu.addEventListener('click', ()=>{
    menu.classList.add('abrir-menu')
})

menu.addEventListener('click', ()=>{
    menu.classList.remove('abrir-menu')
})
overlay.addEventListener('click', ()=>{
    menu.classList.remove('abrir-menu')
})


document.addEventListener('DOMContentLoaded', function () {
    const logo = document.querySelector('.logo img');

    window.addEventListener('scroll', function () {
        const scrollPos = window.scrollY || window.scrollTop || document.getElementsByTagName("html")[0].scrollTop;

        // Ajuste conforme necessário para a altura desejada
        const endPos = document.documentElement.scrollHeight - window.innerHeight - 10;

        // Calcula a opacidade com base na posição de rolagem
        let opacity = 1 - (scrollPos / endPos);

        // Limita a opacidade mínima a 0.2 (ou qualquer valor desejado)
        opacity = Math.max(opacity, 0.2);

        // Aplica a opacidade à logo
        logo.style.opacity = opacity.toFixed(2);
    });
});


