
function mostrarFormulario(){
    document.querySelector('.formsLibro').classList.toggle('mostrar');
    document.querySelector('.btn-visible').classList.toggle('desactivado');
}

function mostrarFormularioLec(){
    document.querySelector('.formsLector').classList.toggle('mostrar');
    document.querySelector('.btn-visible').classList.toggle('desactivado');
}

function mostrarBotonLec(){
    document.querySelector('.btn-visible').classList.remove('desactivado');
    document.querySelector('.formsLector').classList.remove('mostrar');
}

function mostrarBoton(){
    document.querySelector('.btn-visible').classList.remove('desactivado');
    document.querySelector('.formsLibro').classList.remove('mostrar');
}

function mostrar(){
    document.querySelector('.formularioUno').classList.toggle('desactivar');
}



