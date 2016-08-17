<?php
require_once(LIB_PATH.DS."config.php");

class MySQLDatabase {

    private $connection;
    public $last_query;

    function __construct() {
        $this->open_connection();
    }

    public function open_connection() {
        $this->connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
        if(!$this->connection) {
            die("Database connection failed: " . mysqli_error($this->connection));
        }
    }

    public function query($sql) {
        $this->last_query = $sql;
        $result = mysqli_query($this->connection, $sql);
        $this->confirm_query($result);
        return $result;
    }

    public function close_connection() {
        if(isset($this->connection)) {
            mysqli_close($this->connection);
            unset($this->connection);
        }
    }

    public function escape_value($value) {
        return mysqli_real_escape_string($this->connection ,$value);
    }

    public function fetch_array($result_set) {
        return mysqli_fetch_assoc($result_set);
    }

    public function num_rows($result_set) {
        return mysqli_num_rows($result_set);
    }

    public function inserted_id() {
        return mysqli_insert_id($this->connection);
    }

    public function affected_rows() {
        return mysqli_affected_rows($this->connection);
    }

    private function confirm_query($result) {
        if(!$result) {
            die("Database query failed: " . $this->last_query);
        }
    }
}

$database = new MySQLDatabase();
$db = &$database;
?>
