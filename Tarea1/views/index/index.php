<?php require __DIR__ . '/../layout/header.php'; ?>

<main>
  <section class="hero" aria-labelledby="titulo-principal">
    <div class="container">
      <div class="contenido-hero">
        <p class="eyebrow">Aprende, crea y lidera</p>
        <h1 id="titulo-principal">Forma a los líderes del mañana</h1>
        <p>En Academia Berk formamos estrategas, exploradores y líderes capaces de enfrentar cualquier desafío.</p>
        <a href="#cursos-destacados" class="boton-berk text-decoration-none">Explorar cursos</a>
      </div>
    </div>
  </section>

  <section id="cursos-destacados" class="container seccion" aria-labelledby="titulo-cursos">
    <div class="encabezado-seccion text-center">
      <p class="eyebrow">Nuestra selección</p>
      <h2 id="titulo-cursos" class="titulo-seccion">Cursos destacados</h2>
      <p>Programas prácticos para impulsar tu crecimiento académico y profesional.</p>
    </div>

    <div class="row g-4">
      <?php if (!$cursosDestacados): ?>
        <div class="col-12"><p class="mensaje-vacio">Pronto tendremos nuevos cursos destacados para ti.</p></div>
      <?php endif; ?>
      <?php foreach ($cursosDestacados as $curso): ?>
        <div class="col-md-6 col-lg-4">
          <article class="card tarjeta-berk">
            <img src="<?= htmlspecialchars((string) $curso['imagen']) ?>" class="card-img-top" alt="<?= htmlspecialchars((string) $curso['nombre']) ?>" loading="lazy">
            <div class="card-body d-flex flex-column">
              <span class="categoria"><?= htmlspecialchars((string) $curso['categoria']) ?></span>
              <h3 class="h4 mt-2"><?= htmlspecialchars((string) $curso['nombre']) ?></h3>
              <p><?= htmlspecialchars((string) $curso['descripcion']) ?></p>
              <div class="mt-auto d-flex justify-content-between align-items-center gap-2">
                <span class="duracion"><i class="bi bi-clock"></i> <?= htmlspecialchars((string) $curso['duracion']) ?></span>
                <span class="precio">₡<?= number_format((float) $curso['precio'], 0, ',', '.') ?></span>
              </div>
            </div>
          </article>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="text-center mt-5"><a href="index.php?controller=cursos&amp;action=index" class="boton-berk text-decoration-none">Ver todos los cursos</a></div>
  </section>

  <section class="container seccion estadisticas" aria-label="Estadísticas de Academia Berk">
    <div class="row g-4">
      <div class="col-md-4"><article class="caja-estadistica"><i class="bi bi-people"></i><strong>+1200</strong><span>Estudiantes activos</span></article></div>
      <div class="col-md-4"><article class="caja-estadistica"><i class="bi bi-mortarboard"></i><strong>48</strong><span>Profesores expertos</span></article></div>
      <div class="col-md-4"><article class="caja-estadistica"><i class="bi bi-journal-bookmark"></i><strong>25</strong><span>Cursos disponibles</span></article></div>
    </div>
  </section>

  <section class="container seccion" aria-labelledby="titulo-testimonios">
    <div class="encabezado-seccion text-center"><p class="eyebrow">Comunidad Berk</p><h2 id="titulo-testimonios" class="titulo-seccion">Historias de nuestros estudiantes</h2></div>
    <div class="row g-4">
      <div class="col-md-6"><blockquote class="tarjeta-testimonio"><i class="bi bi-quote"></i><p>Academia Berk cambió completamente mi perspectiva del trabajo grupal y de cómo ser un buen integrante.</p><footer>— Astrid</footer></blockquote></div>
      <div class="col-md-6"><blockquote class="tarjeta-testimonio"><i class="bi bi-quote"></i><p>Los cursos son intensos y disciplinados, pero a la vez entretenidos y muy prácticos.</p><footer>— Hipo</footer></blockquote></div>
    </div>
  </section>
</main>

<?php require __DIR__ . '/../layout/footer.php'; ?>
