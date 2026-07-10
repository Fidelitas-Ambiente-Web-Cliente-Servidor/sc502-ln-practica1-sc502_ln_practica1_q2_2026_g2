<?php
require_once __DIR__ . '/../models/ContactoModel.php';
class ContactoController {
    public function index(): void {
        $pageTitle='Contacto | Academia Berk'; $activePage='contacto'; $extraCss='contacto.css'; $extraJs='contacto.js';
        $success = isset($_GET['success']); $error = $_GET['error'] ?? '';
        require __DIR__ . '/../views/contacto/index.php';
    }
    public function store(): void {
        $data=[
            'nombre'=>trim((string)($_POST['nombre'] ?? '')),
            'correo'=>trim((string)($_POST['correo'] ?? '')),
            'telefono'=>trim((string)($_POST['telefono'] ?? '')),
            'asunto'=>trim((string)($_POST['asunto'] ?? '')),
            'mensaje'=>trim((string)($_POST['mensaje'] ?? '')),
        ];
        if ($data['nombre']==='' || !filter_var($data['correo'], FILTER_VALIDATE_EMAIL) || $data['asunto']==='' || $data['mensaje']==='') {
            header('Location: index.php?controller=contacto&action=index&error=validacion'); exit;
        }
        (new ContactoModel())->create($data);
        header('Location: index.php?controller=contacto&action=index&success=1'); exit;
    }
}
