<?php

namespace W1020;

class Db
{
    protected \mysqli $mysqli;

    public function __construct(array $config)
    {
        $this->mysqli = new \mysqli($config["servername"], $config["username"], $config["password"], $config["dbname"]);
    }

    public function query(string $sql): array
    {
        $result = $this->runSQL($sql);

        $res = [];

        while ($row = $result->fetch_assoc()) {
            $res[] = $row;
        }
        return $res;
    }

    /** Выполняет sql запрос
     * @param string $sql
     * @return object|bool
     */
    public function runSQL(string $sql): object|bool
    {
        return $this->mysqli->query($sql);
    }
}