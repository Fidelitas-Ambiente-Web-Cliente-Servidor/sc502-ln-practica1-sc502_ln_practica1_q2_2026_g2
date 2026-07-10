<?php
require_once __DIR__ . '/../config/database.php';
class ProfesorModel {
    private PDO $db;
    public function __construct(){ $this->db = Database::getConnection(); }
    public function getAll(): array {
        return $this->db->query('SELECT id, nombre, especialidad, bio, foto, correo, cursos_imparte FROM profesores WHERE activo = 1 ORDER BY nombre')->fetchAll();
    }
    public function getById(int $id): array|false {
        $stmt=$this->db->prepare('SELECT id, nombre, especialidad, bio, foto, correo, cursos_imparte FROM profesores WHERE id = :id AND activo = 1');
        $stmt->execute(['id'=>$id]);
        return $stmt->fetch();
    }
}
