<?php

declare(strict_types=1);

final class Database
{
    private static ?PDO $instance = null;

    private function __construct() {}

    public static function getConnection(): PDO
    {
        if (self::$instance === null) {
            $host = getenv('DB_HOST') ?: 'db';
            $db = getenv('DB_NAME') ?: 'academia_berk';
            $user = getenv('DB_USER') ?: 'appuser';
            $pass = getenv('DB_PASS') ?: 'apppass';
            $dsn = "mysql:host={$host};dbname={$db};charset=utf8mb4";

            try {
                self::$instance = new PDO($dsn, $user, $pass, [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES => false,
                ]);
            } catch (PDOException $e) {
                http_response_code(500);
                exit('No fue posible conectar con la base de datos. Verifique Docker y la configuración.');
            }
        }
        return self::$instance;
    }
}
