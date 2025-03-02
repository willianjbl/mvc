<?php
declare(strict_types = 1);

namespace core;

class Database
{
    private static \PDO $_pdo;

    public static function getInstance(): \PDO
    {
        if (!isset(self::$_pdo)) {
            try {
                self::$_pdo = new \PDO(
                    DB_DRIVER . ":dbname=" . DB_NAME . ";host=" . DB_HOST,
                    DB_USER,
                    DB_PASS,
                    [
                        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ,
                    ]
                );
            } catch (\PDOException $e) {
                echo "Erro ao conectar com o BD: {$e->getMessage()}";
            }
        }
        return self::$_pdo;
    }

    private function __construct() { }
    private function __clone() { }
    public function __wakeup() { }
}
