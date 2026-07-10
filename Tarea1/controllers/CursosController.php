<?php
require_once __DIR__ . '/../models/CursoModel.php';
class CursosController {
    public function index(): void {
        $model=new CursoModel();
        $categoria=trim((string)($_GET['categoria'] ?? ''));
        $categorias=$model->getCategorias();
        $cursos=$categoria !== '' ? $model->getByCategoria($categoria) : $model->getAll();
        $pageTitle='Cursos | Academia Berk'; $activePage='cursos'; $extraCss='cursos.css';
        require __DIR__ . '/../views/cursos/index.php';
    }
}
