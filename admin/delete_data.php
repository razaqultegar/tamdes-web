<?php
require_once('core/init.php');

if(isset($_GET['id'])){
  if(hapusData($_GET['id'])){
    header('location: view_bukutamu.php');
  }else {
    ?>
    <script type="text/javascript">alert("Data Gagal Dihapus!");</script>
    <?php
  }
}
?>
