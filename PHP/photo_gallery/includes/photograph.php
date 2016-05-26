<?php

class Photograph extends DatabaseObject {
    protected static $table_name = "photographs";
    protected static $db_fields = array('id', 'filename', 'type', 'caption');

    public $id;
    public $firstname;
    public $lastname;
    public $type;
    public $size;
    public $caption;

    private $temp_path;
    protected $upload_dir = "images";
    public $errors = array();

    protected $upload_errors = array(
        UPLOAD_ERR_OK          => "No errors.",
        UPLOAD_ERR_INI_SIZE    => "Larger than upload_max_filesize.",
        UPLOAD_ERR_FORM_SIZE   => "Larger than MAX_FILE_SIZE.",
        UPLOAD_ERR_PARTIAL     => "Partial upload.",
        UPLOAD_ERR_NO_FILE     => "No file.",
        UPLOAD_ERR_NO_TMP_DIR  => "No temporary directory.",
        UPLOAD_ERR_CANT_WRITE  => "Can't write to disk.",
        UPLOAD_ERR_EXTENSION   => "File upload stopped by extension."
    );

    public function attach_file($file) {
        if(!$file || empty($file) || !is_array($file)) {
            $this->errors[] = "No file was uploaded.";
            return false;
        } elseif($file['error'] != 0) {
            $this->errors[] = $this->upload_errors[$file['error']];
            return false;
        } else {
            $this->temp_path = $file['tmp_name'];
            $this->filename  = basename($file['name']);
            $this->type      = $file['type'];
            $this->size      = $file['size'];

            return true;
        }
    }

    public function save() {
        parent::save();

    }

}

?>
