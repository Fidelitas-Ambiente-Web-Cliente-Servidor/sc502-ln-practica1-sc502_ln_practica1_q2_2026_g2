CREATE DATABASE IF NOT EXISTS academia_berk CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE academia_berk;

CREATE TABLE IF NOT EXISTS cursos (
 id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 nombre VARCHAR(150) NOT NULL,
 descripcion TEXT NOT NULL,
 precio DECIMAL(10,2) NOT NULL DEFAULT 0,
 categoria VARCHAR(80) NOT NULL,
 duracion VARCHAR(60) NOT NULL,
 disponible TINYINT(1) NOT NULL DEFAULT 1,
 destacado TINYINT(1) NOT NULL DEFAULT 0,
 imagen VARCHAR(500) NOT NULL,
 created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS profesores (
 id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 nombre VARCHAR(150) NOT NULL,
 especialidad VARCHAR(150) NOT NULL,
 bio TEXT NOT NULL,
 foto VARCHAR(500) NOT NULL,
 correo VARCHAR(150) NOT NULL UNIQUE,
 cursos_imparte VARCHAR(500) NOT NULL,
 activo TINYINT(1) NOT NULL DEFAULT 1,
 created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS contacto (
 id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 nombre VARCHAR(120) NOT NULL,
 correo VARCHAR(150) NOT NULL,
 telefono VARCHAR(30) NULL,
 asunto VARCHAR(180) NOT NULL,
 mensaje TEXT NOT NULL,
 created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO cursos (nombre,descripcion,precio,categoria,duracion,disponible,destacado,imagen) VALUES
('Desarrollo Web Moderno','Construcción de sitios responsivos con HTML5, CSS3 y fundamentos de JavaScript.',65000,'Programación','8 semanas',1,1,'https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=900&q=80'),
('Python desde Cero','Fundamentos de programación, estructuras de datos y solución de problemas con Python.',72000,'Programación','10 semanas',1,1,'https://images.unsplash.com/photo-1526379095098-d400fd0bf935?auto=format&fit=crop&w=900&q=80'),
('Ciberseguridad Esencial','Buenas prácticas para proteger equipos, redes, cuentas y datos institucionales.',80000,'Tecnología','8 semanas',1,1,'https://images.unsplash.com/photo-1563013544-824ae1b704d3?auto=format&fit=crop&w=900&q=80'),
('Administración de Bases de Datos','Modelado relacional, SQL, MySQL, respaldo y administración de información.',75000,'Tecnología','9 semanas',1,0,'https://images.unsplash.com/photo-1544383835-bda2bc66a55d?auto=format&fit=crop&w=900&q=80'),
('Emprendimiento Digital','Diseño de modelos de negocio, validación de ideas y presencia digital.',60000,'Negocios','6 semanas',1,0,'https://images.unsplash.com/photo-1556761175-b413da4baf72?auto=format&fit=crop&w=900&q=80'),
('Gestión de Proyectos','Planificación, alcance, riesgos, cronograma y seguimiento de proyectos.',68000,'Negocios','7 semanas',1,0,'https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=900&q=80');

INSERT INTO profesores (nombre,especialidad,bio,foto,correo,cursos_imparte,activo) VALUES
('Juan Pérez','Programación Web','Profesor con experiencia en desarrollo web, arquitectura cliente-servidor y bases de datos.','https://picsum.photos/seed/profesor1/600/600','juan@academiaberk.com','HTML, CSS, JavaScript, PHP',1),
('María López','Diseño Gráfico','Especialista en diseño digital, experiencia de usuario e identidad visual.','https://picsum.photos/seed/profesora2/600/600','maria@academiaberk.com','Diseño UX, Photoshop, Illustrator',1),
('Carlos Ramírez','Redes y Seguridad','Experto en ciberseguridad, administración de redes y continuidad tecnológica.','https://picsum.photos/seed/profesor3/600/600','carlos@academiaberk.com','Cisco, Redes, Seguridad Informática',1),
('Ana Fernández','Bases de Datos','Docente enfocada en modelado relacional, SQL y administración de datos.','https://picsum.photos/seed/profesora4/600/600','ana@academiaberk.com','SQL, MySQL, Modelado de Datos',1),
('Laura Gómez','Gestión de Proyectos','Consultora y docente en planificación, innovación y dirección de equipos.','https://picsum.photos/seed/profesora5/600/600','laura@academiaberk.com','Gestión de Proyectos, Emprendimiento',1);

INSERT INTO contacto (nombre,correo,telefono,asunto,mensaje) VALUES
('Carlos Soto','carlos@example.com','8888-1111','Información de matrícula','Deseo conocer las próximas fechas de matrícula.'),
('Andrea Mora','andrea@example.com','8777-2222','Curso de Python','Solicito información sobre horarios del curso.'),
('Luis Vega','luis@example.com','8666-3333','Modalidad virtual','¿Los cursos pueden llevarse completamente en línea?'),
('Sofía Rojas','sofia@example.com','8555-4444','Certificación','¿Se entrega certificado al concluir el curso?'),
('Daniel Jiménez','daniel@example.com','8444-5555','Formas de pago','Necesito conocer las formas de pago disponibles.');
