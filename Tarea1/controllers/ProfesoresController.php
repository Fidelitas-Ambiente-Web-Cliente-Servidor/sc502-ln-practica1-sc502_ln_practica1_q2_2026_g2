<?php
require_once __DIR__ . '/../models/ProfesorModel.php';
class ProfesoresController {
    public function index(): void {
        $model=new ProfesorModel(); $profesores=$model->getAll();
        $pageTitle='Profesores | Academia Berk'; $activePage='profesores'; $extraCss='profesores.css';
        require __DIR__ . '/../views/profesores/index.php';
    }
    public function show(int $id): void {
        $model=new ProfesorModel(); $profesor=$model->getById($id);
        if (!$profesor) { http_response_code(404); exit('<h2>Profesor no encontrado</h2>'); }
        $pageTitle=$profesor['nombre'].' | Academia Berk'; $activePage='profesores'; $extraCss='profesores.css';
        require __DIR__ . '/../views/profesores/show.php';
    }
}
