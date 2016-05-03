<?php

require_once('database.php');

class User {
    public static function find_all() {
        global $database;
        $result_set = $database->query("SELECT * FROM users");
        return $result_set;
    }

    public static function find_by_id($id = 0) {
        global $database;
        $result_set = $database->query("SELECT * FROM users WHERE
            id={$id} LIMIT 1");
        $found = $database->fetch_array($result_set);
        return $found;
    }

    public static function find_by_sql($sql="") {
        global $database;
        $result_set = $database->query($sql);
        return $result_set;
    }

}

?>
