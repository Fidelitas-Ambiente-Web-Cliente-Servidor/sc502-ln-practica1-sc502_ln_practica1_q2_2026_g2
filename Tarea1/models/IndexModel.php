<?php

declare(strict_types=1);

require_once __DIR__ . '/../config/database.php';

final class IndexModel
{
    private PDO $db;

    public function __construct()
    {
        $this->db = Database::getConnection();
    }

    /** @return array<int, array<string, mixed>> */
    public function getCursosDestacados(): array
    {
        $statement = $this->db->query(
            'SELECT id, nombre, descripcion, precio, categoria, duracion, imagen
             FROM cursos
             WHERE disponible = 1 AND destacado = 1
             ORDER BY nombre
             LIMIT 3'
        );

        return $statement->fetchAll();
    }
}
