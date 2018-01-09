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

function tampilData_per_id($noktp){
  global $link;

  $query = "SELECT * FROM tb_buku WHERE id = $id";
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

?>
