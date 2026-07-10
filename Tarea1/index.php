<?php

declare(strict_types=1);

require_once __DIR__ . '/config/database.php';

$controllerName = strtolower($_GET['controller'] ?? 'index');
$action = strtolower($_GET['action'] ?? 'index');
$method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
$id = isset($_GET['id']) ? filter_var($_GET['id'], FILTER_VALIDATE_INT) : null;

$allowedControllers = [
    'index' => 'IndexController',
    'cursos' => 'CursosController',
    'profesores' => 'ProfesoresController',
    'contacto' => 'ContactoController',
];

if (!isset($allowedControllers[$controllerName])) {
    http_response_code(404);
    exit('<h2>404 — Controlador no encontrado</h2>');
}

$controllerClass = $allowedControllers[$controllerName];
$controllerFile = __DIR__ . '/controllers/' . $controllerClass . '.php';
require_once $controllerFile;
$controller = new $controllerClass();

switch ($controllerName . ':' . $action) {
    case 'index:index':
    case 'cursos:index':
    case 'profesores:index':
    case 'contacto:index':
        if ($method === 'GET') $controller->index();
        break;
    case 'profesores:show':
        if ($method === 'GET' && $id) $controller->show((int)$id);
        else { http_response_code(400); echo '<h2>ID inválido</h2>'; }
        break;
    case 'contacto:store':
        if ($method === 'POST') $controller->store();
        else { http_response_code(405); echo '<h2>Método no permitido</h2>'; }
        break;
    default:
        http_response_code(404);
        echo '<h2>404 — Acción no encontrada</h2>';
}
