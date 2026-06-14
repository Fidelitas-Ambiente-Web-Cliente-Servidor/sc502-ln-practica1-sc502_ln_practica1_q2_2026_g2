 const profesores = [
    {
        nombre: "Juan Pérez",
        especialidad: "Programación Web",
        descripcion: "Profesor con experiencia en desarrollo web y bases de datos.",
        foto: "https://picsum.photos/300/300?1",
        correo: "juan@institucion.com",
        cursosQueImparte: ["HTML", "CSS", "JavaScript"]
    },
    {
        nombre: "María López",
        especialidad: "Diseño Gráfico",
        descripcion: "Especialista en diseño digital e identidad visual.",
        foto: "https://picsum.photos/300/300?2",
        correo: "maria@institucion.com",
        cursosQueImparte: ["Photoshop", "Illustrator", "Branding"]
    },
    {
        nombre: "Carlos Ramírez",
        especialidad: "Redes y Seguridad",
        descripcion: "Experto en ciberseguridad y administración de redes.",
        foto: "https://picsum.photos/300/300?3",
        correo: "carlos@institucion.com",
        cursosQueImparte: ["Cisco", "Seguridad Informática", "Redes"]
    },
    {
        nombre: "Ana Fernández",
        especialidad: "Bases de Datos",
        descripcion: "Docente enfocada en modelado y gestión de datos.",
        foto: "https://picsum.photos/300/300?4",
        correo: "ana@institucion.com",
        cursosQueImparte: ["SQL", "MySQL", "Oracle"]
    }
];

const contenedor = document.getElementById("contenedorProfesores");

profesores.forEach((profesor, index) => {

    contenedor.innerHTML += `
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 shadow profesor-card"
                 data-id="${index}"
                 style="cursor:pointer;">

                <img src="${profesor.foto}"
                     class="card-img-top"
                     alt="${profesor.nombre}">

                <div class="card-body">
                    <h5 class="card-title">${profesor.nombre}</h5>

                    <h6 class="especialidad">Especialidad:</h6>
                    <p>${profesor.especialidad}</p>

                    <p class="card-text">
                        ${profesor.descripcion}
                    </p>
                </div>
            </div>
        </div>
    `;
});

const modal = new bootstrap.Modal(
    document.getElementById("profesorModal")
);

document.addEventListener("click", (e) => {

    const tarjeta = e.target.closest(".profesor-card");

    if (!tarjeta) return;

    const id = tarjeta.dataset.id;
    const profesor = profesores[id];

    document.getElementById("modalNombre").textContent =
        profesor.nombre;

    document.getElementById("modalContenido").innerHTML = `
        <img src="${profesor.foto}"
             class="img-fluid rounded mb-3">

        <p><strong>Especialidad:</strong>
        ${profesor.especialidad}</p>

        <p><strong>Descripción:</strong>
        ${profesor.descripcion}</p>

        <p><strong>Correo:</strong>
        ${profesor.correo}</p>

        <p><strong>Cursos que imparte:</strong></p>

        <ul>
            ${profesor.cursosQueImparte
                .map(curso => `<li>${curso}</li>`)
                .join("")}
        </ul>
    `;

    modal.show();
});