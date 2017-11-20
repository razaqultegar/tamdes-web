<?php
require_once('core/init.php');
if(isset($_GET['id'])){
  if(hapusData($_GET['id'])){
    header('location: index.php');
  }else {
    echo "Data Gagal Dihapus";
  }
}
?>
