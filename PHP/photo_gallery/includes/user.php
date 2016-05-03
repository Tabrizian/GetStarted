<?php

require_once('database.php');

class User {

    public $id;
    public $username;
    public $password;
    public $first_name;
    public $last_name;

    public static function find_all() {
        return self::find_by_sql("SELECT * FROM users");
    }

    public static function find_by_id($id = 0) {
        global $database;
        $result_set = self::find_by_sql("SELECT * FROM users WHERE
            id={$id} LIMIT 1");
        $found = $database->fetch_array($result_set);
        return $found;
    }

    public static function find_by_sql($sql="") {
        global $database;
        $result_set = $database->query($sql);
        return $result_set;
    }

    public function full_name() {
        if(isset($this->first_name) && isset($this->last_name)) {
            return $this->first_name . " " . $this->last_name;
        } else {
            return "";
        }
    }

    private static function instantiate($record) {
        $object = new self;
        $user-> id = $record['id'];
        $user-> username = $record['username'];
        $user-> password = $record['password'];
        $user-> first_name = $record['first_name'];
        $user-> last_name = $record['last_name'];
        return $object;
    }

}

?>
