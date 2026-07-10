<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($pageTitle ?? 'Academia Berk') ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="css/style.css">
  <?php if (!empty($extraCss)): ?><link rel="stylesheet" href="css/<?= htmlspecialchars($extraCss) ?>"><?php endif; ?>
</head>
<body>
<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container">
    <a class="navbar-brand logo-berk" href="index.php?controller=index&action=index">Academia Berk</a>
    <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#menuBerk"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="menuBerk">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link <?= ($activePage ?? '')==='index'?'pagina-activa':'' ?>" href="index.php?controller=index&action=index">Inicio</a></li>
        <li class="nav-item"><a class="nav-link <?= ($activePage ?? '')==='cursos'?'pagina-activa':'' ?>" href="index.php?controller=cursos&action=index">Cursos</a></li>
        <li class="nav-item"><a class="nav-link <?= ($activePage ?? '')==='profesores'?'pagina-activa':'' ?>" href="index.php?controller=profesores&action=index">Profesores</a></li>
        <li class="nav-item"><a class="nav-link <?= ($activePage ?? '')==='contacto'?'pagina-activa':'' ?>" href="index.php?controller=contacto&action=index">Contacto</a></li>
      </ul>
    </div>
  </div>
</nav>
