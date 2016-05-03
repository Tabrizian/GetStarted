<?php
require_once("config.php");

class MySQLDatabase {

    private $connection;

    function __construct() {
        $this->open_connection();
    }

    public function open_connection() {
        $this->$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
        if(!$this->$connection) {
            die("Database connection failed: " . mysqli_error($this->connection));
        }
    }

    public function query($sql) {
        $result = mysqli_error($this->connection, $sql);
        $this->confirm_query($result);
        return $result;
    }

    public function close_connection() {
        if(isset($this->connection)) {
            mysqli_close($this->connection);
            unset($this->connection);
        }
    }

    public function mysql_prep($value) {
        return mysqli_real_escape_string($this->connection ,$value);
    }

    private function confirm_query($result) {
        if(!$result) {
            die("Database query failed: " . mysqli_error($this->connection));
        }
    }
}

$database = new MySQLDatabase();
$db = &$database;
?>
