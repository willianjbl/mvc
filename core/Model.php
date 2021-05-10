<?php
declare(strict_types = 1);

namespace core;

use \core\Database;
use \ClanCats\Hydrahon\Builder;
use \ClanCats\Hydrahon\Query\Sql\FetchableInterface;

class Model
{
    protected static $_h;
    
    public function __construct()
    {
        self::_checkH();
    }

    public static function _checkH(): void
    {
        if (empty(self::$_h)) {
            $connection = Database::getInstance();
            self::$_h = new Builder('mysql', function($query, $queryString, $queryParameters) use($connection) {
                $statement = $connection->prepare($queryString);
                $statement->execute($queryParameters);

                if ($query instanceof FetchableInterface) {
                    return $statement->fetchAll();
                }
            });
        }
        
        self::$_h = self::$_h->table(self::getTableName());
    }

    public static function getTableName(): string
    {
        $className = explode('\\', get_called_class());
        $className = end($className);
        return strtolower($className) . 's';
    }

    public static function select(array $fields = []): \ClanCats\Hydrahon\Query\Sql\Select
    {
        self::_checkH();
        return self::$_h->select($fields);
    }

    public static function insert(array $fields = [])
    {
        self::_checkH();
        return self::$_h->insert($fields);
    }

    public static function update(array $fields = [])
    {
        self::_checkH();
        return self::$_h->update($fields);
    }

    public static function delete()
    {
        self::_checkH();
        return self::$_h->delete();
    }
}
