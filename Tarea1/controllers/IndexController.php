<?php

declare(strict_types=1);

require_once __DIR__ . '/../models/indexModel.php';

final class IndexController
{
    public function index(): void
    {
        $model = new IndexModel();
        $cursosDestacados = $model->getCursosDestacados();

        $pageTitle = 'Academia Berk | Inicio';
        $activePage = 'index';
        $extraCss = 'index.css';
        $extraJs = 'index.js';

        require __DIR__ . '/../views/index/index.php';
    }
}
