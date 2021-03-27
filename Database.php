<?php

class Database
{
    private $host = "";
    private $username = "";
    private $password = "";
    private $database = "";

    protected $conexao = null;

    public function __construct() 
    {
        $this->conexao = new mysqli($this->host, $this->username, $this->password, $this->database);        
    }   

    protected function query(string $query)
    {
        $resultado = [];

        $result = $this->conexao->query("SELECT * FROM user;", MYSQLI_USE_RESULT);

        while($row = $result->fetch_object()){
            $resultado[] = $row;
        }

        $result->close();
        
        return $resultado;
    }
}
