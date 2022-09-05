
//menu hamburguesa
document.getElementById('btn_menu').addEventListener('click', mostrar_menu);
document.getElementById('back_menu').addEventListener('click', ocultar_menu);

nav = document.getElementById('nav');
background_menu = document.getElementById('back_menu');

function mostrar_menu(){
    nav.style.right = "0px";
    background_menu.style.display = "block";
}

function ocultar_menu(){
    nav.style.right = "-25rem";
    background_menu.style.display = "none";
}


//Enviar email

const formulario = document.querySelector('#formulario');

formulario.addEventListener('submit', function(e){
    e.preventDefault();
    email();
    limpiarFormulario();
});

function email(){
    const datos = new FormData(formulario);
    fetch('email.php', {
        method: 'POST',
        body: datos
    })
    .then(res => res.json())
    .then(res => {

        if('exito'){
            Swal.fire({
                icon: 'success',
                title: 'Gracias por Contactarnos',
                text: 'Tambien puedes contactarnos por nuestras Redes!'
              })
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Hubo un Error',
                text: 'Error al enviar el correo, intenta contactarnos por nuestras Redes.!'
              })
        }
    })
}

function limpiarFormulario(){
    formulario.reset();
}

//boton up

window.onscroll = function(){
    if(document.documentElement.scrollTop > 100){
        document.querySelector('.go-top').classList.add('show');
    }else{
        document.querySelector('.go-top').classList.remove('show');
    }
}

document.querySelector('.go-top').addEventListener('click', () => {
    window.scrollTo({
        top:0,
        behavior: 'smooth'
    });
});


window.addEventListener('scroll', () => {
    let headerFijo = document.querySelector('header');
    headerFijo.classList.toggle('abajo', window.scrollY > 0);
});