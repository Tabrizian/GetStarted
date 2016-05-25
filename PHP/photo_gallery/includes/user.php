<?php

require_once(LIB_PATH.DS.'database.php');

class User extends DatabaseObject{

    protected static $table_name = "users";

    public $id;
    public $username;
    public $password;
    public $first_name;
    public $last_name;

    public function full_name() {
        if(isset($this->first_name) && isset($this->last_name)) {
            return $this->first_name . " " . $this->last_name;
        } else {
            return "";
        }
    }

    public static function authenticate($username = "", $password = "") {
        global $database;
        $username = $database->escape_value($username);
        $password = $database->escape_value($password);

        $sql  = "SELECT * FROM users ";
        $sql .= "WHERE username = '{$username}' ";
        $sql .= "AND password = '{$password}' ";
        $sql .= "LIMIT 1";

        $result_array = self::find_by_sql($sql);
        return !empty($result_array) ? array_shift($result_array) : false;
    }

    public function create() {
        global $database;
        $attributes = $this->sanitized_attributes();
        $sql  = "INSERT INTO ". self::$table_name . "(";
        $sql .= join(", ", array_keys($attributes));
        $sql .= ") VALUES ('";
        $sql .= join("', '", array_values($attributes));
        $sql .= "')";
        if($database->query($sql)) {
            $this->id = $database->inserted_id();
            return true;
        } else {
            return false;
        }
    }

    public function save() {
        // A new record won't have an id yet.
        return isset($this->id) ? $this->update() : $this->create();
    }

    public function update() {
        global $database;
        $attributes = $this->sanitized_attributes();
        $attributes_pairs = array();
        foreach($attributes as $key => $value) {
            $attributes_pairs[] = "{$key}='{$value}'";
        }
        $sql  = "UPDATE ". self::$table_name . " SET ";
        $sql .= join(", ", $attributes_pairs);
        $sql .= " WHERE id=". $database->escape_value($this->id);
        if($database->query($sql)) {
            return true;
        } else {
            return false;
        }
    }


    public function delete() {
        global $database;
        $sql  = "DELETE FROM " . self::$table_name ;
        $sql .= " WHERE id=". $database->escape_value($this->id);
        $sql .= " LIMIT 1";

        if($database->query($sql)) {
            return true;
        } else {
            return false;
        }
    }

}

?>
