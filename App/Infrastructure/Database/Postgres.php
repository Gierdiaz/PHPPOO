<?php

namespace App\Infrastructure\Database;

use PDO;
use PDOException;

class Postgres
{
    private PDO $connection;

    public function __construct()
    {
        $host = getenv('DB_HOST');
        $dbname = getenv('DB_NAME');
        $username = getenv('DB_USER');
        $password = getenv('DB_PASSWORD');

        $this->connect($host, $dbname, $username, $password);
    }

    // Conecta ao banco de dados
    private function connect(string $host, string $dbname, string $username, string $password): void
    {
        try {
            $dsn = "pgsql:host={$host};dbname={$dbname}";
            $this->connection = new PDO($dsn, $username, $password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    // Executa uma consulta SQL
    public function query(string $sql, array $params = []): bool
    {
        $stmt = $this->connection->prepare($sql);
        return $stmt->execute($params);
    }

    // Retorna um resultado de uma consulta SELECT
    public function fetch(string $sql, array $params = []): array
    {
        $stmt = $this->connection->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Retorna o número de linhas afetadas pela última operação
    public function rowCount(): int
    {
        return $this->connection->lastInsertId();
    }

    // Fecha a conexão com o banco
    public function close(): void
    {
        $this->connection = null;
    }
}
