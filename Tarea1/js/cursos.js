const cursos = [
    {
        nombre: "Ingeniería de Software",
        descripcion: "Aprende a diseñar, desarrollar y mantener software de calidad profesional.",
        categoria: "Tecnología",
        duracion: "12 semanas",
        precio: "₡95 000",
        imagen: "https://images.unsplash.com/photo-1515879218367-8466d910aaa4"
    },
    {
        nombre: "Desarrollo Web",
        descripcion: "Construye aplicaciones modernas con HTML, CSS y JavaScript.",
        categoria: "Programación",
        duracion: "10 semanas",
        precio: "₡75 000",
        imagen: "https://images.unsplash.com/photo-1555949963-aa79dcee981c"
    },
    {
        nombre: "Administración de Bases de Datos",
        descripcion: "Diseña y optimiza bases de datos para proyectos empresariales.",
        categoria: "Tecnología",
        duracion: "8 semanas",
        precio: "₡80 000",
        imagen: "https://images.unsplash.com/photo-1544383835-bda2bc66a55d"
    },
    {
        nombre: "Administración de Proyectos",
        descripcion: "Lidera equipos y ejecuta proyectos con éxito.",
        categoria: "Negocios",
        duracion: "6 semanas",
        precio: "₡60 000",
        imagen: "https://images.unsplash.com/photo-1522202176988-66273c2fd55f"
    },
    {
        nombre: "Liderazgo Empresarial",
        descripcion: "Fortalece habilidades de dirección y toma de decisiones.",
        categoria: "Negocios",
        duracion: "5 semanas",
        precio: "₡55 000",
        imagen: "https://images.unsplash.com/photo-1454165804606-c3d57bc86b40"
    },
    {
        nombre: "Marketing Digital",
        descripcion: "Aprende estrategias modernas para posicionar marcas y productos.",
        categoria: "Negocios",
        duracion: "7 semanas",
        precio: "₡65 000",
        imagen: "https://images.unsplash.com/photo-1552664730-d307ca884978"
    }
];

const contenedorCursos = document.getElementById("contenedor-cursos");
const buscador = document.getElementById("buscador");
const botonesCategoria = document.querySelectorAll(".filtro-categoria");

let categoriaSeleccionada = "Todos";

function mostrarCursos(listaCursos) {
    contenedorCursos.innerHTML = "";

    listaCursos.forEach(curso => {
        contenedorCursos.innerHTML += `
            <div class="col-md-4">
                <div class="card tarjeta-berk h-100">
                    <img src="${curso.imagen}" class="card-img-top" alt="${curso.nombre}">

                    <div class="card-body">
                        <h4>${curso.nombre}</h4>

                        <p class="categoria">
                            ${curso.categoria}
                        </p>

                        <p>
                            ${curso.descripcion}
                        </p>

                        <p class="duracion">
                            Duración: ${curso.duracion}
                        </p>

                        <p class="precio">
                            ${curso.precio}
                        </p>

                        <button class="boton-berk">
                            Ver más
                        </button>
                    </div>
                </div>
            </div>
        `;
    });
}

function filtrarCursos() {
    const textoBusqueda = buscador.value.toLowerCase();

    const cursosFiltrados = cursos.filter(curso => {
        const coincideBusqueda =
            curso.nombre.toLowerCase().includes(textoBusqueda) ||
            curso.descripcion.toLowerCase().includes(textoBusqueda);

        const coincideCategoria =
            categoriaSeleccionada === "Todos" ||
            curso.categoria === categoriaSeleccionada;

        return coincideBusqueda && coincideCategoria;
    });

    mostrarCursos(cursosFiltrados);
}

buscador.addEventListener("input", filtrarCursos);

botonesCategoria.forEach(boton => {
    boton.addEventListener("click", () => {
        categoriaSeleccionada = boton.dataset.categoria;
        filtrarCursos();
    });
});

mostrarCursos(cursos);