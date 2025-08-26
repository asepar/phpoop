<?php
class Database {
    private static $instance = null;
    private $connection;
    private $host = 'sql104.infinityfree.com';
    private $user = 'if0_39791130';
    private $password = 'R4h4s1a12345';
    private $database = 'if0_39791130_php_oop';

    private function __construct()
    {
        $this->connection = mysqli_connect($this->host, $this->user, $this->password, $this->database);
    if (!$this->connection) {
        die("Connection failed:".mysqli_connect_error());
    }
    }
    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }
    public function getConnection()
    {
        return $this->connection;
    }


}
