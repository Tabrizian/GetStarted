<?php

function strip_zeros_from_date( $marked_string="" ) {
    //first remove the marked zeros
    $no_zeros = str_replace('*0', '', $marked_string);
    // then remove any remaining marks
    $cleaned_string = str_replace('*', '', $no_zeros);
    return $cleaned_string;
}

function redirect_to($location = NULL) {
    if($location != NULL) {
        header("Location: {$location}");
        exit;
    }
}

function output_message($message="") {
    if(!empty($message)) {
        return "<p class=\"$message\">$message</p>";
    } else {
        return "";
    }
}

function include_layout_template($template="") {
    include(SITE_ROOT.DS.'public'.DS.'layouts'.DS.$template);
}

function __autoload($class_name) {
    $class_name = strtolower($class_name);
    $path = LIB_PATH.DS."{$class_name}.php";
    if(file_exists($path)) {
        require_once($path);
    } else {
        die("The file {$class_name}.php could not be found.");
    }
}

function log_action($action, $message="") {
    $filename = SITE_ROOT.DS.'logs'.DS.'log.txt';
    if($handle = fopen($filename, 'a')) {
        $content = strftime('%Y/%m/%d %H:%M:%S')." | ".$action.' : '
            .$message ."\n";
        fwrite($handle ,$content);
        fclose($handle);
    } else {
        echo "Can't open file logs/log.txt";
    }
}

function log_read() {
    $filename = SITE_ROOT.DS.'logs'.DS.'log.txt';
    $contents = "";
    if($handle = fopen($filename, 'r')) {
        $contents .= fread($handle, filesize($filename));
        fclose($handle);
    } else {
        echo "Can't open file logs".DS."log.txt";
        return false;
    }

    return $contents;
}

function log_clear() {
    $filename = SITE_ROOT.DS.'logs'.DS.'log.txt';
    unlink($filename);
}


?>
