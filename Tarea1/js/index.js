

// Array con los cursos

const cursosDestacados = [


{nombre: "Ingeniería de Software",
descripcion: "Aprende a diseñar, desarrollar y mantener software de alta calidad con las mejores prácticas de la industria.",
imagen: "https://images.unsplash.com/photo-1515879218367-8466d910aaa4?auto=format&fit=crop&w=1200&q=80",
categoria: "Tecnología"
},

{
nombre: "Administración de Proyectos",
descripcion: "Desarrolla habilidades para liderar equipos y gestionar proyectos complejos con éxito.",
imagen: "https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=1200&q=80",
categoria: "Gestión"
},

{
nombre: "Administración de Bases de Datos",
descripcion: "Aprende a gestionar y optimizar bases de datos para proyectos de gran escala.",
imagen: "https://images.unsplash.com/photo-1544383835-bda2bc66a55d?auto=format&fit=crop&w=1200&q=80",
categoria: "Tecnología"
}


];

// Contenedor donde se mostrarán los cursos

const contenedorCursos = document.getElementById("contenedor-cursos");

// Tarjetas dinámicamente

cursosDestacados.forEach(function(curso) {

const columna = document.createElement("div");
columna.className = "col-md-4";

const tarjeta = document.createElement("div");
tarjeta.className = "card tarjeta-berk";

const imagen = document.createElement("img");
imagen.src = curso.imagen;
imagen.alt = curso.nombre;

const cuerpoTarjeta = document.createElement("div");
cuerpoTarjeta.className = "card-body";

const categoria = document.createElement("p");
categoria.className = "categoria";
categoria.textContent = curso.categoria;

const titulo = document.createElement("h5");
titulo.textContent = curso.nombre;

const descripcion = document.createElement("p");
descripcion.textContent = curso.descripcion;

const boton = document.createElement("button");
boton.className = "boton-berk";
boton.textContent = "Ver más";

cuerpoTarjeta.appendChild(categoria);
cuerpoTarjeta.appendChild(titulo);
cuerpoTarjeta.appendChild(descripcion);
cuerpoTarjeta.appendChild(boton);

tarjeta.appendChild(imagen);
tarjeta.appendChild(cuerpoTarjeta);

columna.appendChild(tarjeta);

contenedorCursos.appendChild(columna);


});
