<?php
function run($query){
  global $link;

  if(mysqli_query($link, $query)){
    return true;
  }else {
    return false;
  }
}

function kirimData($noktp, $nama, $notelp, $asal, $tinggal, $lama, $keper){
  $query = "INSERT INTO tb_buku (noktp, nama, notelp, asal, tinggal, lama, keper) VALUES ('$noktp', '$nama', '$notelp', '$asal', '$tinggal', '$lama', '$keper')";
  return run($query);
}

function tampilData(){
  global $link;

  $query = "SELECT * FROM tb_buku";
  $result = mysqli_query($link, $query);

  return $result;
}

function tampilData_per_id($id){
  global $link;

  $query = "SELECT * FROM tb_data WHERE id = $id";
  $result = mysqli_query($link, $query) or die('Data Gagal Dilihat');

  return $result;
}

function hapusData($id){
  $query = "DELETE FROM tb_buku WHERE id = $id";
  return run($query);
}

function editData($noktp, $nama, $notelp, $asal, $tinggal, $lama, $keper, $id){
  $query = "UPDATE tb_data SET noktp = '$noktp', nama = '$nama', notelp = '$notelp', asal = '$asal', tinggal = '$tinggal', lama = '$lama', keper = '$keper' WHERE id = $id";
  return run($query);
}

function search(){
  global $link;

  $input_cari = @$_POST['input_cari'];
  $cari_data = @$_POST['cari_data'];
  if ($cari_data) {
    if ($input_cari != "") {
      $query = mysqli_query($link, "SELECT * FROM tb_buku WHERE noktp LIKE '%$input_cari%'") or die(mysqli_error());
    } else {
      $query = mysqli_query($link, "SELECT * FROM tb_buku") or die(mysqli_error());
    }
  } else {
    $query = mysqli_query($link, "SELECT * FROM tb_buku") or die(mysqli_error());
  }

  $cek = mysqli_num_rows($query);
    if ($cek < 1) {
      ?>
      <script type="text/javascript">alert("Data tidak ditemukan, silahkan coba lagi!");</script>
      <?php
    }

  return $query;
}

?>
