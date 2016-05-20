<?php
require_once('../../includes/initialize.php');
if(!$session->is_logged_in()) { redirect_to("login.php"); }
?>

<?php include_layout_template('admin_header.php'); ?>
    <div id="menu">
        <h2>Menu</h2>
        <ul>
            <li><a href="logfile.php">View log file</a></li>
        <ul>
    </div>
<?php include_layout_template('admin_footer.php'); ?>
