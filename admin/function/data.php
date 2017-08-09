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

function tampilData_per_id($noktp){
  global $link;

  $query = "SELECT * FROM tb_buku WHERE noktp = $noktp";
  $result = mysqli_query($link, $query) or die('Data Gagal Dilihat');

  return $result;
}

function hapusData($noktp){
  $query = "DELETE FROM tb_buku WHERE noktp = $noktp";
  return run($query);
}

function editData($nama, $kelas, $jurusan, $id){
  $query = "UPDATE tb_data SET nama = '$nama', kelas = '$kelas', jurusan = '$jurusan' WHERE id = $id";
  return run($query);
}

?>
