<?php

namespace core;

class Database {
    private static \PDO $_pdo;

    public static function getInstance() {
        if (!isset(self::$_pdo)) {
            try {
                self::$_pdo = new \PDO(
                    DBConfig::DB_DRIVER . ":dbname=" . DBConfig::DB_DATABASE . ";host=" . DBConfig::DB_HOST,
                    DBConfig::DB_USER,
                    DBConfig::DB_PASS,
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
    private function __wakeup() { }
}
