<?php

class Dbh
{
    private $host = "localhost";
    private $user = "root";
    private $pwd = "root";
    private $dbName = "message_broad";
    private $charset = "utf8mb4";

    protected function connect()
    {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName . ';charset=' . $this->charset;
        $pdo = new PDO($dsn, $this->user, $this->pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        return $pdo;
    }

    protected function select($query, $param = null)
    {
        $stmt = $this->connect()->prepare($query);
        $stmt->execute($param);

        $result = $stmt->fetch();
        return $result;
    }

    # Query insert or delete can be use
    protected function insert($query, $param)
    {

        $stmt = $this->connect()->prepare($query);
        $result = $stmt->execute($param);

        return $result;
    }

    protected function selectAll($query, $param = null)
    {
        $stmt = $this->connect()->prepare($query);
        $stmt->execute($param);

        $result = $stmt->fetchAll();
        return $result;
    }
}
