<?php
//buat dulu skrip koneksi kedatabase
$link = mysqli_connect("localhost", "root", "", "db_tamdes") or die(mysqli_error($link));

//ingat, sebelumnya saya sudah memiliki data yang tersimpan di database

           if(isset($_POST['cari'])){ //Jika terpasang postingan dari "cari" maka
           $cari=$_POST['cari'];
           $data=$link->query("SELECT * FROM tb_buku WHERE noktp LIKE '%$search%' ");
           foreach($data as $result){
           echo $result['noktp']."<br />";


          }
          }else{}
?>
