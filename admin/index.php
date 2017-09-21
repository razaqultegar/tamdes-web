<?php
@session_start();
if (@$_SESSION['admin']) {
require_once('../src/sidebar.php');
require_once('core/init.php');
$result = tampilData();
?>
    <title>Admin Page - TamuDesa</title>

    <?php require_once('view_bukutamu.php'); ?>

<?php
}else {
  header("location:/tamdes/login.php");
}
require_once('../src/footer.php');
?>
