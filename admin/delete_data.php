<?php
require_once('core/init.php');

if(isset($_GET['noktp'])){
  if(hapusData($_GET['noktp'])){
    header('location: view_bukutamu.php');
  }else {
    ?>
    <script type="text/javascript">alert("Data Gagal Dihapus!");</script>
    <?php
  }
}
?>
