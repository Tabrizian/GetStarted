<?php
require_once('../../includes/initialize.php');
if(!$session->is_logged_in()) { redirect_to("login.php"); }

if(isset($_GET['clear'])) {
    if($_GET['clear'] == 'true') {
        log_clear();
        log_action('Log', 'log was cleared.');
        redirect_to('logfile.php');
    }
}

?>

<?php include_layout_template('admin_header.php'); ?>
    <div id="menu">
        <h2>Log file</h2>
        <a href="logfile.php?clear=true">Clear log file.</a>
    </div>
<?php
echo nl2br(log_read());
?>
<?php include_layout_template('admin_footer.php'); ?>
