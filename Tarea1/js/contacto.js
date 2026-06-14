const formulario = document.getElementById("formContacto");
const nombre = document.getElementById("nombre");
const correo = document.getElementById("correo");
const telefono = document.getElementById("telefono");
const asunto = document.getElementById("asunto");
const mensaje = document.getElementById("mensaje");

const btnEnviar = document.getElementById("btnEnviar");
const mensajeExito = document.getElementById("mensajeExito");

function mostrarError(idError, textoError) {

    document.getElementById(idError).textContent =
        textoError;
}

function validarFormulario() {

    let formularioValido = true;

    const regexNombre =
        /^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$/;

    if (nombre.value.trim().length < 5) {

        mostrarError(
            "errorNombre",
            "El nombre debe tener mínimo 5 caracteres."
        );

        formularioValido = false;

    } else if (!regexNombre.test(nombre.value.trim())) {

        mostrarError(
            "errorNombre",
            "Solo se permiten letras y espacios."
        );

        formularioValido = false;

    } else {

        mostrarError("errorNombre", "");
    }


    // Correo
    const regexCorreo =
        /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!regexCorreo.test(correo.value.trim())) {

        mostrarError(
            "errorCorreo",
            "Ingrese un correo electrónico válido."
        );

        formularioValido = false;

    } else {

        mostrarError("errorCorreo", "");
    }
    const regexTelefono = /^[0-9]+$/;

    if (!regexTelefono.test(telefono.value.trim())) {

        mostrarError(
            "errorTelefono",
            "El teléfono solo puede contener números."
        );

        formularioValido = false;

    } else if (telefono.value.trim().length < 8) {

        mostrarError(
            "errorTelefono",
            "El teléfono debe tener mínimo 8 dígitos."
        );

        formularioValido = false;

    } else {

        mostrarError("errorTelefono", "");
    }


    // Asunto
    if (asunto.value.trim().length < 3) {

        mostrarError(
            "errorAsunto",
            "El asunto debe tener mínimo 3 caracteres."
        );

        formularioValido = false;

    } else {

        mostrarError("errorAsunto", "");
    }


    // Mensaje
    if (mensaje.value.trim().length < 20) {

        mostrarError(
            "errorMensaje",
            "El mensaje debe tener mínimo 20 caracteres."
        );

        formularioValido = false;

    } else {

        mostrarError("errorMensaje", "");
    }

    btnEnviar.disabled = !formularioValido;
}

function mostrarMensajeExito() {

    mensajeExito.innerHTML = `
        <div class="alert alert-success">
            Mensaje enviado correctamente.
        </div>
    `;
}
nombre.addEventListener("input", validarFormulario);
correo.addEventListener("input", validarFormulario);
telefono.addEventListener("input", validarFormulario);
asunto.addEventListener("input", validarFormulario);
mensaje.addEventListener("input", validarFormulario);

formulario.addEventListener("submit", (e) => {

    e.preventDefault();

    mostrarMensajeExito();

    formulario.reset();

    btnEnviar.disabled = true;

    mostrarError("errorNombre", "");
    mostrarError("errorCorreo", "");
    mostrarError("errorTelefono", "");
    mostrarError("errorAsunto", "");
    mostrarError("errorMensaje", "");
});