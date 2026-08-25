<?php
// Conexão com o MySQL via PDO.
// Em produção estes valores viriam de variáveis de ambiente, não do código.
class Database
{
    private $host = "localhost";
    private $db_name = "autopecas_db";
    private $username = "root";
    private $password = "";
    public $conn;

    public function getConnection()
    {
        $this->conn = null;

        try {
            $this->conn = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->db_name . ";charset=utf8mb4",
                $this->username,
                $this->password
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo "Erro na conexão: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
