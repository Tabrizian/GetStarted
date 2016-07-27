<?php
/**
 * Created by PhpStorm.
 * User: iman
 * Date: 7/27/16
 * Time: 9:42 PM
 */

function flash($message, $level = 'info') {
    Session::flash('flash_message', $message);
    Session::flash('flash_message_level', $level);
}