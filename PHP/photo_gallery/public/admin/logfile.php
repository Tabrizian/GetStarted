<?php
require_once('../../includes/initialize.php');
if(!$session->is_logged_in()) { redirect_to("login.php"); }

if(isset($_GET['clear'])) {
    if($_GET['clear'] == 'true') {
        log_clear();
        log_action('Log', 'log was cleared.');
    }
}

?>

<?php include_layout_template('admin_header.php'); ?>
    <div id="menu">
        <h2>Menu</h2>
    </div>
<?php
echo nl2br(log_read());
?>
<?php include_layout_template('admin_footer.php'); ?>
