<?php
require_once __DIR__ . '/../config/database.php';
class ContactoModel {
    private PDO $db;
    public function __construct(){ $this->db = Database::getConnection(); }
    public function create(array $data): bool {
        $sql='INSERT INTO contacto (nombre, correo, telefono, asunto, mensaje) VALUES (:nombre,:correo,:telefono,:asunto,:mensaje)';
        $stmt=$this->db->prepare($sql);
        return $stmt->execute($data);
    }
}
