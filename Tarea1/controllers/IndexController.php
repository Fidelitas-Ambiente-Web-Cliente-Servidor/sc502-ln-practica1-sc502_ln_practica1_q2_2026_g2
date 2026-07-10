<?php
require_once __DIR__ . '/../models/IndexModel.php';
class IndexController {
    public function index(): void {
        $model=new IndexModel(); $cursos=$model->getAll();
        $pageTitle='Inicio | Academia Berk'; $activePage='index'; $extraCss='index.css';
        require __DIR__ . '/../views/index/index.php';
    }
}
