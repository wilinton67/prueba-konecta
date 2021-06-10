<?php


class BaseModel
{
    protected $table;
    private $db;
    private $conection;

    public function __construct()
    {
        require_once 'conection.php';
        $this->conection = new conection();
        $this->db = $this->conection->pdo();
    }

    public function db()
    {
        return $this->db;
    }

    public function getAll()
    {
        $query = $this->db->query("SELECT * FROM $this->table ORDER BY id DESC");

        $resultSet = [];

        while ($row = $query->fetch()) {
            $resultSet[] = (object) $row;
        }

        return $resultSet;
    }

    public function getById($id)
    {
        $query = $this->db->query("SELECT * FROM $this->table WHERE id=$id");

        $resultSet = [];

        if ($row = $query->fetch()) {
            $resultSet = $row;
        }

        return (object) $resultSet;
    }

    public function getBy($column, $value)
    {
        $query = $this->db->query("SELECT * FROM $this->table WHERE $column='$value'");

        $resultSet = [];

        while ($row = $query->fetch()) {
            $resultSet[] = $row;
        }

        return $resultSet;
    }

    public function deleteById($id)
    {
        $query = $this->db->exec("DELETE FROM $this->table WHERE id=$id");
        return $query;
    }

    public function deleteBy($column, $value)
    {
        $query = $this->db->exec("DELETE FROM $this->table WHERE $column='$value'");
        return $query;
    }

    public function create($columns)
    {

        $sqlColumns = '';
        $sqlValues = '';

        foreach ($columns as $column => $value) {
            $sqlColumns .= $column . ',';
            $sqlValues .= "'$value'" . ',';
        }

        $sqlColumns = trim($sqlColumns, ',');
        $sqlValues = trim($sqlValues, ',');

        $sql = "INSERT INTO $this->table ($sqlColumns) values ($sqlValues)";
        $resultado = $this->db->exec($sql);

        if (!$resultado) {
            throw new Exception("Error al ejecutar la sentencia $sql", 1);
        }

        return true;
    }

    public function updateById($columns, $id)
    {

        $sqlColumns = '';

        foreach ($columns as $column => $value) {
            $sqlColumns .= "{$column}='{$value}',";
        }

        $sqlColumns = trim($sqlColumns, ',');

        $sql = "UPDATE $this->table SET $sqlColumns  WHERE id=$id";
        $resultado = $this->db->exec($sql);

        if ($resultado === false) {
            throw new Exception("Error al ejecutar la sentencia $sql", 1);
        }

        return true;
    }
}
