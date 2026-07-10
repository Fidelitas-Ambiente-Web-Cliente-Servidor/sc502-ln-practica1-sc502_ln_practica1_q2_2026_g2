<?php
require_once __DIR__ . '/../config/database.php';
class CursoModel {
    private PDO $db;
    public function __construct(){ $this->db = Database::getConnection(); }
    public function getAll(): array {
        return $this->db->query('SELECT id, nombre, descripcion, precio, categoria, duracion, disponible, imagen FROM cursos WHERE disponible = 1 ORDER BY categoria, nombre')->fetchAll();
    }
    public function getByCategoria(string $cat): array {
        $stmt=$this->db->prepare('SELECT id, nombre, descripcion, precio, categoria, duracion, disponible, imagen FROM cursos WHERE disponible = 1 AND categoria = :categoria ORDER BY nombre');
        $stmt->execute(['categoria'=>$cat]);
        return $stmt->fetchAll();
    }
    public function getCategorias(): array {
        return $this->db->query('SELECT DISTINCT categoria FROM cursos WHERE disponible = 1 ORDER BY categoria')->fetchAll(PDO::FETCH_COLUMN);
    }
}
