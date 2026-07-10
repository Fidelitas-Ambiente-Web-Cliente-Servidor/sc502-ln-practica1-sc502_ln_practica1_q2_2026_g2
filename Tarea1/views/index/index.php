<?php require __DIR__ . '/../layout/header.php'; ?>
<section class="hero"><div class="container contenido-hero"><h1>Aprende. Crea. Transforma.</h1><p>Formación profesional para desarrollar habilidades tecnológicas y de negocios orientadas al futuro.</p><a class="boton-berk d-inline-block text-decoration-none" href="index.php?controller=cursos&action=index">Explorar cursos</a></div></section>
<section class="container py-5"><h2 class="titulo-seccion text-center">Cursos destacados</h2><div class="row g-4">
<?php foreach ($cursos as $curso): ?>
<div class="col-md-6 col-lg-4"><article class="card tarjeta-berk"><img src="<?= htmlspecialchars($curso['imagen']) ?>" class="card-img-top" alt="<?= htmlspecialchars($curso['nombre']) ?>"><div class="card-body"><span class="categoria"><?= htmlspecialchars($curso['categoria']) ?></span><h3 class="h5 mt-2"><?= htmlspecialchars($curso['nombre']) ?></h3><p><?= htmlspecialchars($curso['descripcion']) ?></p><p class="precio">₡<?= number_format((float)$curso['precio'],0,',','.') ?></p><a class="boton-berk d-inline-block text-decoration-none" href="index.php?controller=cursos&action=index&categoria=<?= urlencode($curso['categoria']) ?>">Ver más</a></div></article></div>
<?php endforeach; ?>
</div></section>
<section class="container py-5"><div class="row g-4"><div class="col-md-4"><div class="caja-estadistica"><h2>20+</h2><p>Cursos especializados</p></div></div><div class="col-md-4"><div class="caja-estadistica"><h2>10+</h2><p>Profesores expertos</p></div></div><div class="col-md-4"><div class="caja-estadistica"><h2>500+</h2><p>Estudiantes formados</p></div></div></div></section>
<?php require __DIR__ . '/../layout/footer.php'; ?>
