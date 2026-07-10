<?php
require_once __DIR__ . '/../config/database.php';
class IndexModel {
    private PDO $db;
    public function __construct(){ $this->db = Database::getConnection(); }
    public function getAll(): array {
        $sql = 'SELECT id, nombre, descripcion, precio, categoria, disponible, imagen FROM cursos WHERE destacado = 1 AND disponible = 1 ORDER BY id';
        return $this->db->query($sql)->fetchAll();
    }
}
