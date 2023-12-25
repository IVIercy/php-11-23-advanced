<?php

namespace Core\Traits;

use PDO;

trait Queryable
{
    static protected string|null $tableName = null;

    static protected string $query = '';

    protected array $commands = [];

    /**
     * @param array $columns (e.g. ['name', 'surname'], ['users.name as u_name'])
     * @return static
     */
    static public function select(array $columns = ['*']): static
    {
        static::resetQuery();
        static::$query = "SELECT " . implode(', ', $columns) . "FROM " . static::$tableName . " ";

        $obj = new static;
        $obj->commands[] = 'select';

        return $obj;
    }

    static public function all(): array
    {
        return static::select()->get();
    }

    static public function find(int $id): static|false
    {
        $query = db()->prepare("SELECT * FROM " . static::$tableName . " WHERE id = :id");
        $query->bindParam('id', $id);
        $query->execute();

        return $query->fetchObject(static::class);
    }

    static public function findBy(string $column, $value): static|false
    {
        $query = db()->prepare("SELECT * FROM " . static::$tableName . " WHERE $column = :$column");
        $query->bindParam($column, $value);
        $query->execute();

        return $query->fetchObject(static::class);
    }

    /**
     * INSERT INTO table_name
     * (columns...) [placeholders]
     * VALUES
     * (values...) [placeholders]
     * @param array $fields
     * [
     * 'name' => '...',
     * 'content' => '...'
     * ]
     * @return false|int
     */
    static public function create(array $fields): false|int
    {
        $params = static::prepareQueryParams($fields);
        $query = db()->prepare("INSERT INTO " . static::$tableName . " ($params[keys]) VALUES ($params[placeholders])");

        if (!$query->execute($fields)) {
            return false;
        }

        return (int)db()->lastInsertId();
    }

    static public function destroy(int $id): bool
    {
        $query = db()->prepare("DELETE FROM " . static::$tableName . " WHERE id = :id");
        $query->bindParam('id', $id);
        return $query->execute();
    }

    static protected function prepareQueryParams(array $fields): array
    {
        $keys = array_keys($fields);
        $placeholders = preg_filter('/^/', ':', $keys);


        return [
            'keys' => implode(', ', $keys),
            'placeholders' => implode(', ', $placeholders)
        ];
    }

    static protected function resetQuery(): void
    {
        static::$query = '';
    }

    public function get(): array
    {
        return db()->query(static::$query)->fetchAll(PDO::FETCH_CLASS, static::class);
    }

    static public function update(array $data): false|int
    {
        $params = static::prepareQueryParams($data);
        $query = db()->prepare("UPDATE " . static::$tableName . " ($params[keys]) VALUES ($params[placeholders])" . " SET ");

        if (!$query->execute($data)) {
            return false;
        }
        static::$query .= $query;

        return db()->prepare(static::$query)->execute($data);
    }

    public function where(string $column, $value): static
    {
        if (empty($this->commands) || !in_array('select', $this->commands)) {
            throw new \RuntimeException();
        }

        $this->commands[] = 'where';

        $query = db()->query(static::$query .= "WHERE $column = :$column ");

        $query->bindParam($column, $value);

        return $this;
    }
}